<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = [
        'facebook','instagram','twitter','linkedin','snapchat',
    ];
}
