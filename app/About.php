<?php

namespace MyWeb;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'position', 'address','twitter','facebook','linkedin','resume','id_language','route_img','name_img'];
    protected $guarded = ['id'];
}
