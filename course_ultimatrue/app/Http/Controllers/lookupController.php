<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class lookupController extends Controller
{
    //

  public function getCitiesByCountryId($countryId )
    {
        $cities= City::where("country_id",$countryId)->get(); 
         return   response()->json($cities);  
    }
}
