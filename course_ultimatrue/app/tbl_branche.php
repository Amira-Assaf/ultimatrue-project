<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_branche extends Model
{
    //
    //protected $table = 'tbl_branches';
    public $timestamps = false;
    protected $fillable = [
        "name"
    ];
}
