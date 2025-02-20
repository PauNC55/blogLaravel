<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    use HasFactory, Notifiable;
    protected $table = 'users';
    public function post(){
        return $this->hasMany(Post::class);
    }
    protected $fillable = [
        'name',
        'password',
    ];
    protected $hidden = [
        'password',
    ];

}
