<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TaskController extends Controller
{

    public function __construct(){
        $this->middleware('guest')

        ;
    }
	             	
    public function update(Task $task)
    {

    	$task->update([

    		'complete'=>request()->has('check')

    	]);

    	return back();
    }
    public function login()
    {
    	return view('login');
    }

    public function loginpro()
    {
    	$credential = [

    		'email' => request('email'),
    		'password' => request('password')	

    	];
    	

    	if(auth()->attempt($credential)){

            return redirect('/projects');
        }
    	

    	return back();
    }
}
