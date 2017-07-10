<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    protected $fillable = ['name', 'percentage'];
    protected $guarded = ['id'];
}
