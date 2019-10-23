<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }

    public function tag()
    {
        $tag_list = Tag::pluck('tag');
    	return view('admin.tag',compact('tag_list'));
    }

    public function store(Request $request){
    	$this->validate($request,[

    		'tag'=>'required|unique:tags'

    	]);

    	Tag::create(['tag'=>request('tag')]);

    	return redirect()->back();
    }
}
