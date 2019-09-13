<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    //
    function __construct()
    {
        parent::__construct();
        $this->usesTimestamps();
    }
}
