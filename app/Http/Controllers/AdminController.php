<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin')->except(['home','logout']);
		$this->middleware('auth:admin')->only(['home','logout']);
	}
    public function login()
    {
    	return view('admin.login');
    }

    public function register()
    {
    	return view('admin.register');
    }

    public function store(Request $request)
    {
    	Admin::create([

    		'first_name'=>$request->firstName,
    		'last_name'=>$request->lastName,
    		'email'=>$request->email,
    		'password'=>bcrypt($request->password),

    	]);

    	return redirect('admin/login');
    }

    public function loginProcess(Request $request)
    {
    	if(auth()->guard('admin')->attempt(['email'=>$request->email,
    		'password'=>$request->password])){
    		return redirect('admin/home');
    	}

    	return redirect()->back();
    }
    public function home()
    {
    	return view('admin.index'); 
    }

    public function logout(){
    	auth()->guard('admin')->logout();
    	return redirect('admin/login');
    }
}
