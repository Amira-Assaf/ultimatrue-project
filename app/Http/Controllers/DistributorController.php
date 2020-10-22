<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\distributor;
use Illuminate\Support\Facades\App;
use \App\Models\Country;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB; 

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=Country::all(); 
        $distributors =distributor::where('active', 1)->where("status_id","3")
        ->orderBy('name', 'desc')
        ->get();
        $Products=Product::all(); 
      
       return view ("user.distributors",
       ["distributors"=>$distributors
       ,"countries"=>$countries,
       "Products"=>$Products
       ]
    ); 
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
    public function store2(Request $request)
    {
//         // Setup the validator
// $rules = array(
//     'name' => 'required',
//  'core_business' => 'required'

// );
// $validator = Validator::make($request->all(), $rules);

// // Validate the input and return correct response
// if ($validator->fails())
// {
//     return response()-> json(
//         array(
//         'status' => false,
//         'errors' => $validator->getMessageBag()->toArray(),
//         "amira"=>"mrmar"

//     ), 200); 
// }

//       $obj=  distributor::create($request->all());
//       if($obj)
//       {
//           return response()->json([
//               "msg"=>"sAVED",
//               "statusCode"=>200,
//               'status' => true,
//           ]); 
//       }
//       else{
//         return response()->json([
//             "msg"=>"لم يتم الحفظ الرجاء المحاولة مجددا    ",
//             "statusCode"=>200,
//             'status' => false,
//         ]); 
//       }

     

    }
    public function store(Request $request)
    {
        // Setup the validator
// $rules = array(
//     'name' => 'required',
//  'core_business' => 'required'

// );
// $validator = Validator::make($request->all(), $rules);

$validatedData = $request->validate([
    'name' => 'required',
    'core_business' => 'required',
]);

// Validate the input and return correct response


      $obj=  distributor::create($request->all());
      
    //   return redirect('Distributor')->with('status', 'Saved'); 
    // return redirect()->action(
    //     [DistributorController::class, 'index']
    // );
    // return Redirect::back()->with('msg', 'Saved');
    return redirect()->back()->with('success', 'Saved');   
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

      public function getAllDistributorByproductId($ProductId)
    {
        # code...
        //  approved and  active 
        if($ProductId =='all')
        {
            $DistributorsProduct = DB::table('distributors')
            ->join('distributors_products', 'distributors.id', '=', 'distributors_products.distributor_id')
            ->select('distributors.*', 'distributors_products.*', 'distributors.name')

            ->get();
        }else{
            $DistributorsProduct = DB::table('distributors')
            ->join('distributors_products', 'distributors.id', '=', 'distributors_products.distributor_id')
            ->select('distributors.*', 'distributors_products.*', 'distributors.name')
            ->where("product_id",$ProductId)
            ->get();
        }
        


        return  response()->json($DistributorsProduct); 

    }
}
