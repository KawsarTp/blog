<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class AdminWorkController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }

    public function viewUser(){
    	$user_list = User::latest()->get();
    	return view('admin.userList',compact('user_list'));
    }

    public function viewPost(){
    	$post_list = Project::latest()->get();
    	return view('admin.postlist',compact('post_list'));
    }
}
