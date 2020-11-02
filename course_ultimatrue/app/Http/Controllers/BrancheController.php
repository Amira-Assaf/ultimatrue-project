<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BrancheController extends Controller
{
    //
    function allbranches()
{
   //echo "Hello All Branches";
   
  $branchs = \App\tbl_branche::all();
   return view ("branches")->with ("x",$branchs);
   //return view ("branches");
}
function form()
{
   return view ("addform");
}
function add( Request $request)
{
    $obj = new \App\tbl_branche();
    $obj->name = $request->name;
    $obj->save();

    //return view ("addform")->with ("message","saved");
   return redirect ('/allbranches');
}
function delete($id)
{
    $obj = \App\tbl_branche::find($id);
    $obj->delete();
    return back();
}


}
