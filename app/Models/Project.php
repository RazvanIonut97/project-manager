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
       
   ];
public function users(){
    return $this->belongsToMany(User::class);
}
public function groups(){
    return $this->hasMany(Group::class);
}
}
