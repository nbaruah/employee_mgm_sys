<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $primaryKey = 'state_code';
    public $incrementing = false;
}
