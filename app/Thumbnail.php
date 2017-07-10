<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    protected $table = 'thumbnails';
    protected $fillable = ['name', 'image'];
}
