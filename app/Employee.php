<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = []; //We have nothing to blacklist
    protected $primaryKey = 'emp_id';
    public $incrementing = false;
}
