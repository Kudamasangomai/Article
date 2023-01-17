<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryname'
    ];
    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
}
