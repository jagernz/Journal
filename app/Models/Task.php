<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $guarded = [''];
    public $timestamps = false;


    // relations begin

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_tasks', 'task_id', 'user_id');
    }

}