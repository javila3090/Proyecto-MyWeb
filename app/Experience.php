<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = ['company', 'role', 'since', 'until', 'description','id_language'];
    protected $guarded = ['id'];
    
}

