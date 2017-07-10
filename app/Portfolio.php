<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';
    protected $fillable = ['title', 'name', 'url', 'route', 'description','id_language'];
    protected $guarded = ['id'];
}
