<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reptile extends Model
{
    protected $table = 'reptile_temp';

    public $fillable = ['web_id','website'];
}
