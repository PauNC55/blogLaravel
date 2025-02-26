<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'id',
        'titulo',
        'user_id',
        'contenido',
    ];
}
