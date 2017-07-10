<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = ['nombre', 'porcentaje'];
    protected $guarded = ['id'];
}
