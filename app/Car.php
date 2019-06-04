<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['make','model','year','type'];
    public static $types = ['Hatchback','Sedan','Coupe'];
}
