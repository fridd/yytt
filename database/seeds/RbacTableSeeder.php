<?php

use Illuminate\Database\Seeder;

class RbacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  		DB::table('roles')->insert([
            [
                'name'         => 'admin',
                'display_name' => '系统管理员',
                'description'  => '拥有本系统所有功能，无需授权',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name'         => 'Gll',
                'display_name' => '集团网站管理员',
                'description'  => '拥有对集团网站管理的权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
			[
                'name'         => 'Filiale',
                'display_name' => '分公司网站管理员',
                'description'  => '拥有对分公司网站管理的权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],            
			[
                'name'         => 'Wechat',
                'display_name' => '微信运营管理员',
                'description'  => '拥有对微信运营管理的权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
			[
                'name'         => 'Owner',
                'display_name' => '项目管理员',
                'description'  => '拥有对本项目管理的权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],                    
        ]);


        DB::table('permissions')->insert([ 
        	[	
        		'name' => 'gll',
  				'display_name' => '集团网站',
                'description'  => '集团网站管理权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()        		
        	],
			[	
        		'name' => 'filiale',
  				'display_name' => '分公司网站',
                'description'  => '分公司网站网站管理权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()        		
        	],
			[	
        		'name' => 'wechat',
  				'display_name' => '微信运营',
                'description'  => '微信运营管理权限',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()        		
        	],        	       	
        ]);

  		DB::table('role_user')->insert([
            [
                'user_id'      => '1',
                'role_id'      => '1',
            ]
			[
                'user_id'      => '2',
                'role_id'      => '1',
            ]            
        ]);

		DB::table('permission_role')->insert([
            [
                'role_id'      => '2',
                'permission_id'=> '1',
            ], 
            [
                'role_id'      => '3',
                'permission_id'=> '2'
            ],
            [
                'role_id'      => '4',
                'permission_id'=> '3'
            ],
            [
                'role_id'      => '5',
                'permission_id'=> '1'
            ],
            [
                'role_id'      => '5',
                'permission_id'=> '2'
            ],
            [
                'role_id'      => '5',
                'permission_id'=> '3'
            ],
        ]);        
    }
}
