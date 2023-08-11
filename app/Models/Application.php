<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    protected function user(){
        return $this->belongsTo(User::class);
    }
    protected function answer(){
        return $this->hasMany(Answer::class);
    }
}