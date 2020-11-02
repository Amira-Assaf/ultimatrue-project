<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branchs = \App\tbl_branche::all();
        return view ("BranchRes")->with ("x",$branchs);
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
        //
        //$obj = new \App\tbl_branche();
        //$obj->name = $request->name;
        //$obj->save();
        //return view ("addform")->with ("message","saved");

        $validatedData = $request->validate([
            'name' => ['required', 'max:10']
        ]);

        \App\tbl_branche::create($request->all());
         return redirect ('/branch');
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
        $branch = \App\tbl_branche::find($id);
        return view("editbranch")->with("branch",$branch);
        //return view("editbranch");
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
       // echo "updated";
        //
       $branch = \App\tbl_branche::find($id);
       $branch->update($request->all());
        return redirect ('/branch');
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
        \App\tbl_branche::destroy($id);
        return redirect ('/branch');
    }
}
