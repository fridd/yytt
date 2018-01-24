<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Role;
use App\Permission;

use App\Http\Requests\RoleRules;

class RoleController extends Controller
{
	private $role;
    private $permission;

	public function __construct(Role $role, Permission $permission)
	{
		$this->role = $role;
        $this->perm = $permission;
	}

    public function index(Request $request)
    {
        $title = '角色权限管理';
       	$roles = $this->role->paginate(10);
    	return view('admin.right.roleIndex', compact('roles', 'title'));  //  角色暂时
    }

    public function create()
    {
    	$title = '新增角色信息';
        $permissions = $this->perm->get(); // 获取权限
    	return view('admin.right.roleForm', compact('title', 'permissions'));
    }

    public function store(RoleRules $request)  // Request验证
    {
		$all = $request->all();
        $perm_param = $request->get('permissions');
        if ($perm_param == null || $perm_param == '') { // 判断有没有选
            return response()->json(['info'=>'请至少选择一个权限。']);
        }

        if (strpos($perm_param, ',') !== false) {
            $perms = explode(',', $perm_param);
        } else {
            $perms = $perm_param;
            if (is_numeric(!$perms)) {
                return  response()->json(['info'=>'非法请求，您选择的权限不正确。']);
            }
        }
		if($role = $this->role->create($all)){
            if (is_array($perms)) {  // 判断得到的是不是一个数组
                $role->attachPermissions($perms);
            }else{
                $role->attachPermission($perms);
            }

			return response()->json(['info'=>'添加角色信息成功']);
		}
		return response()->json(['info'=>'添加角色信息失败']);
    }

    public function edit($id)
    {
    	$title = '修改角色信息';
    	$model = $this->role->find($id);
        $permissions = $this->perm->get(); // 获取权限
    	return view('admin.right.roleForm', compact('model', 'title', 'permissions'));
    }

    public function update(RoleRules $request, $id)
    {
    	$all = $request->all();

        $perm_param = $request->get('permissions');  // 获取权限数据
        if ($perm_param == null || $perm_param == '') { // 判断有没有选
            return response()->json(['info'=>'请至少选择一个权限。']);
        }
        if (strpos($perm_param, ',') !== false) {
            $perms = explode(',', $perm_param);
        } else {
            $perms = $perm_param;
            if (is_numeric(!$perms)) {
                return  response()->json(['info'=>'非法请求，您选择的权限不正确。']);
            }
        }

        $model = $this->role->find($id);
        if (count($model->perms()) > 0) {
            $model->detachPermissions();  //移除当前用户的所有权限
        }

    	if ($model->update($all)) {
            if (is_array($perms)) {  // 判断得到的是不是一个数组
                $model->attachPermissions($perms);
            }else{
                $model->attachPermission($perms);
            }            
    		return response()->json(['info'=>'修改角色信息成功']);
    	}
    	return response()->json(['info'=>'修改角色信息失败']);
    }


    public function destroy($id){
        $this->role->find($id)->delete();
        return back();        
    }
}
