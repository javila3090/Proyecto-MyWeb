<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['sender','email','subject','message'];
    protected $guarded = ['id'];
}
