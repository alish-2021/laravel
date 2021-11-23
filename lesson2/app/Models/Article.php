<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function comments(){
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
