<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id','heading','description'];

    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function likes(){
    	return $this->hasMany(Like::class);
    }
}
