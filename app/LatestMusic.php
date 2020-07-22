<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestMusic extends Model
{
    protected $fillable = [
        'title','video_url','musicThumb','video_des',
    ];
}