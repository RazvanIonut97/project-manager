<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


   protected $fillable = [
       'name',
       'about',
       'user_id',
       'history_status',
       
   ];
   protected static function booted()
    {
        static::created(function ($project) {
            // Create default statuses
            $project->groups()->createMany([
                [
                    'title' => 'Backlog',
                    'order' => 1
                ],
                [
                    'title' => 'Up Next',
                    'order' => 2
                ],
                [
                    'title' => 'In Progress',
                    'order' => 3
                ],
                [
                    'title' => 'Done',
                    'order' => 4
                ]
            ]);
        });
    }
public function users(){
    return $this->belongsToMany(User::class);
}
public function groups(){
    return $this->hasMany(Group::class);
}
public function tasks(){
    return $this->hasMany(Task::class);
}
public function history(){
    return $this->hasMany(History::class);
}
}
