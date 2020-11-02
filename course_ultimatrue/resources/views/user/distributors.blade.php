@extends("layouts.user.layout")
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

   

        
        <!--================ Home =================-->
        <div class="home bg-overlay">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('asset/img/slider2.jpg')}}" data-speed="0.8"></div>
            <div class="home_container d-flex flex-column align-items-center justify-content-center">
                <div class="home_content">
                    <div class="home_title">
                        <h1>@lang('site.distributors')</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================ /Home =================-->

        <!--================ Our Distributors En =================-->
        <section class="our-distributors">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="section_title light text-center">
                            <h2>@lang('site.our-distributors')</h2>
                        </div>
                        <div class="text-center mb-5">
                            <p>@lang('site.distributors-caption')</p>
                        </div>
                    </div>
                </div>
                <div class="row" @if (app()->getLocale()=='ar') style="display: flex ;flex-direction: row-reverse ;" @endif >
                    <div class="col-md-3 mb-3 dis-links">
                        <nav class="navbar navbar-expand-lg navbar-light" @if (app()->
                            getLocale()=='ar') style="direction: rtl;text-align:right" @endif>
                            <ul class="navbar-nav mr-auto flex-column vertical-nav products">
    
                                <li class="nav-item dis-active" data-id="all"><a class="nav-link" href="#">@if (app()->getLocale()=='en') <i class="fa fa-angle-double-right"></i> @else <i class="fa fa-angle-double-left"></i> @endif @lang('site.all-distributors')</a></li>
                                @foreach ($Products as $product)
                                <li class="nav-item " data-id="{{$product->id}}">
                                    <a class="nav-link" href="#">
                                        @if (app()->getLocale()=='en') <i class="fa fa-angle-double-right"></i> @else <i class="fa fa-angle-double-left"></i> @endif
                                        @if (app()->getLocale()=='en')
                                        {{$product->product_name}}
    
                                        @else
                                        {{$product->ar_name}}
                                        @endif
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <!-- /.col-md-3 -->
    
                    <div class="col-lg-9 dis-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-inline" @if (app()->getLocale()=='ar') style="direction: rtl" @endif  >
                                    <div class="form-group mb-2">
                                        <select class="custom-select" id="countryFilter">
                                            <option selected>@lang('site.select-country')</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2" style="margin-left:10px">
                                        <select class="custom-select" id="cityFilter">
                                            <option selected>@lang('site.select-city')</option>
                                     
                                        </select>
                                    </div>
                                    <button   type="submit" class="btn btn-info mb-2  btn-search ">@lang('site.find-distributors')</button>
                                    <button class="btn btn-outline-info mb-2" @if (app()->getLocale()=='en') style="margin-left:35px" @else style="margin-right:35px" @endif >  @lang('site.join-distributors')</button>
                                </form>
                            </div>
    
                        </div>
                        <div class="row  Distributor-data"@if (app()->getLocale()=='ar') style="display: flex ;flex-direction: row-reverse ;text-align:right" @endif>
    
                            {{--  foreach  --}}

                        </div>
                    </div>
                    <!-- /.col-md-9 -->
                </div>
            </div>
        </section>
        <!--================/Our Distributors En =================-->

        <!--================ Join Our Distributors =================-->
        <section class="best_company_area text-white" @if (app()->getLocale()=='ar') style="text-align:right" @endif >
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('asset/img/bg1.jpg')}}" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2 bg-overlay2 dis-join-area">
                        <div class="col">
                            <div class="section_title light text-center">
                                <h1>@lang('site.join-distributors')</h1>
                            </div>
                            <div class="newsletter_text text-center">
                                <p>@lang('site.caption-join')</p><br />
                            </div>
                        </div>
                        <div class="b_companu_l_text">
                            <div class="comment_form_area">
                                <!--<h3>Distributor Form</h3>-->
                                @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
                                <form class="contact_us_form row form" method="POST" id="distributor-form-request" novalidate="novalidate" @if (app()->getLocale()=='ar') style="direction:rtl" @endif>

                                    {!! csrf_field() !!}

                                    <input type="hidden" name="status_id" value="1">

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.name')</label>
                                        <input type="text" class="form-control" id="name" name="name" >
                                        <span class="text-danger d-block" id="name-error"> </span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.area')</label>

                                        <input type="text" class="form-control" id="area" name="area" >
                                        <span class="text-danger d-block" id="area-error"></span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.commercial_id')</label>
                                        <input type="text" class="form-control" id="commercial_id" name="commercial_id" >
                                        <span class="text-danger" id="commercial_id-error"> </span>

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.tax_id')</label>

                                        <span class="text-danger" id="tax_id-error"> </span>
                                        <input type="text" class="form-control" id="tax_id" name="tax_id" >

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>@lang('site.country')</label>
                                        <span class="text-danger" id="country_id-error"> </span>
                                        <select name="country_id" id="country_id" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.city')</label>
                                        <span class="text-danger" id="city_id-error"> </span>
                                        <select name="city_id" id="city_id" class="form-control">
                                </select>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>@lang('site.phone')</label>
                                        <span class="text-danger" id="phone-error"> </span>
                                        <input type="tel" class="form-control" id="phone" name="phone" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.mobile')</label>
                                        <span class="text-danger" id="mobile-error"> </span>
                                        <input type="tel" class="form-control" id="mobile" name="mobile" >
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>@lang('site.fax')</label>
                                        <span class="text-danger" id="fax-error"> </span>
                                        <input type="tel" class="form-control" id="fax" name="fax" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('site.email')</label>
                                        <span class="text-danger" id="emial-error"> </span>
                                        <input type="email" class="form-control" id="emial" name="emial" >
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>@lang('site.core_business')</label>

                                        <span class="text-danger" id="core_business-error"> </span>
                                        <select name="core_business" id="core_business" class="form-control">
                                        <option value="">@lang('site.core_business')</option>
                                        <option value="@lang('site.core-business-1')"> @lang('site.core-business-1')</option>
                                        <option value="@lang('site.core-business-2')"> @lang('site.core-business-2')</option>
                                        <option value="@lang('site.core-business-3')"> @lang('site.core-business-3')</option>
                                        <option value="@lang('site.core-business-4')"> @lang('site.core-business-4')</option>
                                       </select>
                                    </div>

                                    
                                    <div class="form-group col-md-6">
                                        <label>@lang('site.year')</label>

                                        <span class="text-danger" id="year-error"> </span>
                                        <input type="text" class="form-control" id="year" name="year" >

                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>@lang('site.sales')</label>

                                        <span class="text-danger" id="sales-error"> </span>
                                        <input type="text" class="form-control" id="sales" name="sales">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>@lang('site.territory')</label>

                                        <span class="text-danger" id="territory-error"> </span>
                                        <input type="text" class="form-control" id="territory" name="territory" >

                                    </div>

                                    
                                    <div  class="form-group col-md-12">
                                        <div class="chosen-select-single">
                                            <label>@lang('site.products')</label>
                                     <select id="products-select"   class="chosen-select" multiple="">
                                        @foreach ($Products as $product)
                                                    <option value="{{$product->id}}">@if (app()->getLocale()=='en') {{$product->product_name}} @else {{$product->ar_name}} @endif </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger" id="product_name-error"> </span>
                                    </div>
                                </div> 

                                    
                                    <div class="form-group col-md-12">
                                        <label>@lang('site.branches')</label>
                                        <span class="text-danger" id="branches-error"> </span>
                                        <textarea class="form-control" id="branches" name="branches" ></textarea>

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="address">@lang('site.address')</label>
                                        <span class="text-danger" id="address-error"> </span>
                                        <textarea class="form-control" name="address" ></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit"  id="distributor-save" value="submit" class="form-control btn btn-info mb-2 text-white">@lang('site.submit')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="b_company_image" style="clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);">
                            Al
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================/Join Our Distributors =================-->
    

  
    
@endsection

@section('scripts')
    <script>


function  getCityBycountryId(countryid )
{
    var text = "";
    $.ajax(
        {
          url: "/lookup/getCitiesByCountryId/" +countryid,
          type: "get",
          dataType: "json",
          async:false, 
          success: function(response) 
          {  
            $.each(response, function(index, item) 
            {
                text += `<option value="${item.id}">  ${item.city_name} </option>`
            });

          
          }

        });

          return text;  
}


    $(document).ready(function()
    {

        $("#countryFilter").on("change", function(e) {
            text=getCityBycountryId($(this).val())
            $("#cityFilter").html('  <option selected>@lang('site.select-city')</option>'+text);
            });

            $("#country_id").on("change", function(e) {
                $.ajax({
                    url: "/lookup/getCitiesByCountryId/" + $("#country_id").val(),
                    type: "get",
                    dataType: "json",
                    success: function(response) {
                        var text = "";
                        $.each(response, function(index, item) {
                            text += `<option value="${item.id}">  ${item.city_name} </option>`
                        });
                        $("#city_id").html(text);
                    }
                })
            });


            $("#distributor-save").click(function(e)
            {
                e.preventDefault();
                
             var mydata= $("#distributor-form-request").serializeArray() ; 
             var products = $('#products-select').val();
             mydata.push({name: "products", value:products}); 
 
        
             $("#distributor-form-request  .text-danger").text("");
           
             $.ajax(
                {
                    url: "{{ route('Distributor.store') }}",
                    type: "post",
                    dataType: "json",
                    data: mydata ,  
                    success: function(response)
                    {
                   
                        if (response.status == true)
                        {
                            alert("done"); 
                            $("#distributor-form-request input").val("");
                            
                        } 
                        else
                        {
                            $.each(response.errors, function(key, value) {
                                $("#" + key + "-error").text(value[0]); 
                                $("#" + key).addClass("is-invalid");
                            });
                        }
                    }
                });
            });

            $.ajaxSetup(
            {
                headers: 
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
       

           $(".products li").click(function(e)
           {
             e.preventDefault(); 
             var id= $(this).attr("data-id"); 
             $(".products li").removeClass("dis-active");
             $(this).addClass("dis-active"); 
             getAllDistributorByFilter(id); 
            }); 
            getAllDistributorByFilter();

  $(".btn-search").click(function(e){
      debugger
      e.preventDefault(); 
var     productId = $(".products li.dis-active").attr("data-id");
var  countryid=  $("#countryFilter").val();  
var  cityid=  $("#cityFilter").val(); 

   getAllDistributorByFilter(productId,countryid,cityid); 



  })


    });
        

     getAllDistributorByFilter();
       

    function getAllDistributorByFilter (productId="all" , countryId="all", cityId="all"  )
    {
        
            $.ajax(
                {
                    url: "/Distributor/getAllDistributorByFilter",
                    type: "get",
                    dataType: "json",
                    data:{productId: productId,country_id:countryId,  city_id:cityId},
                    success:function(res)
                    {                       
                       var  distrubutersDistinct= res.filter((v,i,a)=>{
                          return   a.findIndex(t=>(t.distributorId === v.distributorId))===i         
                           }                   
                           )
                       $(".Distributor-data").html("");
                       var text=""; 
                       $.each(distrubutersDistinct,function(index,item)
                       {
                      var products=   res.filter(x => x.distributorId == item.distributorId);
                      var myproducts= products.map(a=>a.product_name  );

                            text+=` <div class="col-md-6 col-sm-6" >
                                <div class="card dis-item">
                                  <div class="card-header bg-info text-white">${item.name}</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fa fa-home"></i> Address: <span> 112 Salah Salem Nasr City</span></h5>
                                        <h5 class="card-title"><i class="fa fa-building"></i> City: <span> Cairo, Egypt</span></h5>
                                        <h5 class="card-title"><i class="fa fa-address-book"></i> Contact: <span> Eng Ahmed Muhammad</span></h5>
                                        <h5 class="card-title"><i class="fa fa-phone"> Phone: <span> 0100 123 4567</span></i></h5>
                                        <h5 class="card-title"><i class="fa fa-phone"> Product Category: <span> ${ myproducts.join(" , ")} </span></i></h5>
                                        <h5 class="card-title"><a href="#"><i class="fa fa-map-marker"></i> Get Location</a></h5>
                                    </div>
                                 </div>
                               </div>`
                        }) ;
                        $(".Distributor-data").html(text);
                    }                   
                });
    }

</script>
@endsection
