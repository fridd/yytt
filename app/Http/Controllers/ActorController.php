<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as User;

class ActorController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return response()->json($this->$user->all());
    }
}
