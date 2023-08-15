<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'message',
        'file_url'
    ];

    protected function user(){
        return $this->belongsTo(User::class);
    }
    protected function answer(){
        return $this->hasMany(Answer::class);
    }
}