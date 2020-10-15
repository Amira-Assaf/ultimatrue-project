<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\distributor;
use Illuminate\Support\Facades\App;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$countries=["a","b"]; 
        //$products=["p1","p2"]; 
        $distributors =distributor::where('active', 1)->where("status_id","3")
        ->orderBy('name', 'desc')
        ->get();
       // return   view("user.distributors", ["distributors"=>$distributors,"countries"=>$countries ,"products"=>$products] ); 
       return view ("user.distributors")->with ("distributors",$distributors);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $request->validate([
            'name' => 'required',
            'core_business'=>'required'
        ], [
            'name.required' => 'Name is required',
        ]);
      
      $obj=  distributor::create($request->all());
      if($obj)
      {
          return response()->json([
              "statusCode"=>200,
              "status"=>true,
              "msg"=>"تم الحفظ بنجاح ",

          ]); 
      }

     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
