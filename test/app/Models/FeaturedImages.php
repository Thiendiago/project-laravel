<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedImages extends Model
{
    use HasFactory;
    // protected $table = 'featuredimage';
    protected $fillable = ['file', 'post_id'];

    function post(){
        return $this->belongsTo('App\Models\post');
    }
}
