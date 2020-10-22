@extends("layouts.user.layout")
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    

        <!--================ Menu Mobile =================-->
        <div class="menu">
            <div class="menu_content d-flex flex-column align-items-end justify-content-start">
                <ul class="menu_nav_list text-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Distributors</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
                    <div class="menu_submit"><a href="#">Join Our Distributors</a></div>
                    <div class="social">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--================ /Menu Mobile =================-->

        <!--================ Home =================-->
        <div class="home bg-overlay">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('asset/img/slider2.jpg')}}" data-speed="0.8"></div>
            <div class="home_container d-flex flex-column align-items-center justify-content-center">
                <div class="home_content">
                    <div class="home_title">
                        <h1>Distributors</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================ /Home =================-->

        <!--================ Our Distributors =================-->
        <section class="our-distributors">
            <div class="container">
                <h2> Our Distributors</h2>
                <hr>
                <div class="row">
                    <div class="col-md-3 mb-3 dis-links">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <ul class="navbar-nav mr-auto flex-column vertical-nav products">
                              
                                <li class="nav-item dis-active"  data-id="all" ><a class="nav-link" href="#"><i class="fa fa-angle-double-right"></i> All Distributors</a></li>
                                @foreach ($Products as $product)
                                <li class="nav-item "    data-id="{{$product->id}}"  ><a class="nav-link" href="#"><i class="fa fa-angle-double-right"></i> {{$product->product_name}}</a></li>   
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-lg-9 dis-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-inline">
                                    <div class="form-group mb-2">
                                        <select class="custom-select" id="country">
											<option selected>Open this select country</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2" style="margin-left:10px">
                                        <select class="custom-select" id="city">
											<option selected>Open this select city</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
                                    </div>
                                    <button type="submit" class="btn btn-info mb-2">Find Distributors</button>
                                    <button class="btn btn-outline-info mb-2" style="margin-left:35px">Join Our Distributors</button>
                                </form>
                            </div>

                        </div>
                        <div class="row  Distributor-data">

                              {{--  foreach  --}}
                              
                
                        </div>
                    </div>
                </div>
                <!-- /.col-md-8 -->
            </div>
        </section>
        <!--================/Our Distributors =================-->

        <!--================ Join Our Distributors =================-->
        <section class="best_company_area">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('asset/img/bg1.jpg')}}" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2 bg-overlay2 dis-join-area">
                        <div class="col">
                            <div class="section_title light text-center">
                                <h1>Join our Distributors</h1>
                            </div>
                            <div class="newsletter_text text-center">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><br />
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
                                <form class="contact_us_form row form" method="POST" action="{{ route('Distributor.store') }}" id="distributor-form-request" novalidate="novalidate">

                                    {!! csrf_field() !!}

                                    <input type="hidden" name="status_id" value="1">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                        <span class="text-danger d-block" id="name-error"> </span>
                                        
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Company Owner's Name</label>

                                        <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Company Owner's Name">
                                        <span class="text-danger d-block" id="owner_name-error"></span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Commercial ID</label>
                                        <input type="text" class="form-control" id="commercial_id" name="commercial_id" placeholder="Commercial ID">
                                        <span class="text-danger" id="commercial_id-error"> </span>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tax ID</label>

                                        <span class="text-danger" id="tax_id-error"> </span>
                                        <input type="text" class="form-control" id="tax_id" name="tax_id" placeholder="Tax ID">

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <span class="text-danger" id="country_id-error"> </span>
                                        <select name="country_id" id="country_id" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <span class="text-danger" id="city_id-error"> </span>
                                        <select name="city_id" id="city_id" class="form-control">
                                </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Phone Number</label>
                                        <span class="text-danger" id="phone-error"> </span>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile Number">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>What is your core business?</label>

                                        <span class="text-danger" id="core_business-error"> </span>
                                        <input type="text" class="form-control" id="core_business" name="core_business" placeholder="core business">

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Do you have branches? And where?</label>
                                        <span class="text-danger" id="branches-error"> </span>
                                        <input type="text" class="form-control" id="branches" name="branches" placeholder="Your Answer">

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Have your ever dealt with ultimatrue or not?</label>

                                        <span class="text-danger" id="dealt-error"> </span>
                                        <input type="text" class="form-control" id="dealt" name="dealt" placeholder="Your Answer">

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="address">Address</label>
                                        <span class="text-danger" id="address-error"> </span>
                                        <textarea class="form-control" name="address" placeholder="Your Address" style="max-height:70px"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="form-control btn btn-info mb-2 text-white">Submit</button>
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
        $(document).ready(function() {

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


            $(".submit_btn2").click(function(e) {
                e.preventDefault();
                var mydata = $('#distributor-form-request').serialize(); 
               $("#distributor-form-request  .text-danger").text("");
               debugger;
                $.ajax({
                    url: "{{ route('Distributor.store') }}",
                    type: "post",
                    dataType: "json",
                    // contentType: "application/json",
                    data: mydata,
                    success: function(response) {
                        debugger; 
                        alert (response);
                        // if (response.status == true) {
                            
                        //     alert("done"); 


                        //     $("#distributor-form-request input").val("");
                        // } 
                        // else {
                        //     $.each(response.errors, function(key, value) {
                        //         $("#" + key + "-error").text(value[0]); 
                        //         //$("#" + key).addClass("is-invalid");
                        //     });
                        // }
                    }
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
       

       $(".products li").click(function(e){
          e.preventDefault(); 
           var id= $(this).attr("data-id"); 
           $(".products li").removeClass("dis-active");
            $(this).addClass("dis-active"); 
            getAllDistributorByproductId(id); 
       }); 
       

       getAllDistributorByproductId('all');

       
        });
        


        function getAllDistributorByproductId (id){
            $.ajax({
                    url: "Distributor/getAllDistributorByproductId/"+id,
                    type: "get",
                    dataType: "json",
                    success:function(res){
                 $(".Distributor-data").html("");

                        debugger;
                        var text=""; 
                        $.each(res,function(index,item){
                     text+=` <div class="col-md-6 col-sm-6">
                                <div class="card dis-item">
                                    <div class="card-header bg-info text-white">${item.name}</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fa fa-home"></i> Address: <span> 112 Salah Salem Nasr City</span></h5>
                                        <h5 class="card-title"><i class="fa fa-building"></i> City: <span> Cairo, Egypt</span></h5>
                                        <h5 class="card-title"><i class="fa fa-address-book"></i> Contact: <span> Eng Ahmed Muhammad</span></h5>
                                        <h5 class="card-title"><i class="fa fa-phone"> Phone: <span> 0100 123 4567</span></i></h5>
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
