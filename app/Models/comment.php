<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment','user_id','article_id',
    ];
    public function article()
    {
        return $this->belongsTo('App\Models\article');
    }
}
