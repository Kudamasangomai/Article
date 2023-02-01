<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id','title', 'article', 'image','category_id'
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->as('tags');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Article_comments');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\article_likes');

    }

    public function userliked(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
