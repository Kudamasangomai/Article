<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment','user_id','article_id',
    ];
    public function article()
    {
        return $this->belongsTo('App\Models\article');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
