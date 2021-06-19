<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'action',
        'project_id',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(Project::class);
    }
}
