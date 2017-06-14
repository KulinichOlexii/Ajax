<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that will be ignored.
     *
     * @var array
     */
    public $timestamps = false;

    /**
     * The attributes that will not change.
     *
     * @var array
     */
    protected $guarded = array('id');


}
