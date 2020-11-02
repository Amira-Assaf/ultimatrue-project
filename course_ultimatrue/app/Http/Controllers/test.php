<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
function index()
{
    //echo "Hello Laravel 7";
   // $x = 55;
    //return view ("branches") ->with ("x",$x) ;
    return view ("01-branches");
}

function test()
{
    echo "Hello Test";
    
}
}
