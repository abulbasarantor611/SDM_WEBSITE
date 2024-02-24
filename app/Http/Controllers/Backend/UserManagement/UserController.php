<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    function index(): view
    {
        $data['users'] = User::all();
        return view('backend.user_management.user.index',$data);
    }
    function create(): view
    {
        return view('backend.user_management.user.create');
    }
}
