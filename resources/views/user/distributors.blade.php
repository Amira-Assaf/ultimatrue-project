
@extends("layouts.user.layout");
@section('content')
<section>
    <div style="background-image:url({{ asset('asset/img/bg-6.jpg') }});background-position:center center;margin-top:400px;">
        <div class="container">
            <div class="main_c_b_title"style="margin-top:-100px">
                <h2>Our <br class="title_br" />Distributors</h2>
                <br />
                <h6>Find Our Distributors</h6>
                <br />
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--<h3 class="tab-content-title">Find Our Distributors</h3>-->
                    <!--<hr />-->
                    <div class="col-md-2">
                        <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left sideways">
                            <li class="active"><a href="#all" data-toggle="tab"><i class="fa fa-circle"></i> All Distributors</a></li>
                            <li><a href="#gearless" data-toggle="tab"><i class="fa fa-circle"></i> Elevator Gearless Controller Boards</a></li>
                            <li><a href="#simplex" data-toggle="tab"><i class="fa fa-circle"></i> Simplex Elevator Controller Boards</a></li>
                            <li><a href="#selective" data-toggle="tab"><i class="fa fa-circle"></i> Selective-Collective Elevator Controller Boards</a></li>
                            <li><a href="#duplex" data-toggle="tab"><i class="fa fa-circle"></i> Duplex Elevator Control Boards</a></li>
                            <li><a href="#emergency" data-toggle="tab"><i class="fa fa-circle"></i> Emergency Rescue Devices</a></li>
                            <li><a href="#elevator" data-toggle="tab"><i class="fa fa-circle"></i> Elevator Control Panels</a></li>
                            <li><a href="#roomless" data-toggle="tab"><i class="fa fa-circle"></i> Room Less Gearless Elevator Control Solution</a></li>
                            <li><a href="#addons" data-toggle="tab"><i class="fa fa-circle"></i> Add Ons</a></li>
                            <li><a href="#displays" data-toggle="tab"><i class="fa fa-circle"></i> Elevator Displays</a></li>
                            <li><a href="#rfid" data-toggle="tab"><i class="fa fa-circle"></i> RFID Access Control</a></li>
                        </ul>
                    </div>

                    <div class="col-md-10 content">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="all">
                                <h4 class="tab-content-title"> All Distributors </h4>
                                <div class="comment_form_area">
                                    <div class="" style="padding:10px">
                                        <form class="contact_us_form row">
                                                <div class="form-group col-md-8"></div>
                                                <div class="form-group col-md-4"style="margin-top:-30px">
                                                    <a href="#" class="btn submit_btn form-control">Join Our Distributors</a>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label> Select Country</label>
                                                    <select class="form-control">
                                                        <option> select one</option>
                                                        <option> select one</option>
                                                        <option> select one</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label> Select City</label>
                                                    <select class="form-control">
                                                        <option> select one</option>
                                                        <option> select one</option>
                                                        <option> select one</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <button type="submit" value="submit" class="btn submit_btn form-control mb-60">Find Distributor</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                                @foreach ($distributors as $distributor)
                                <div class="col-md-4 col-sm-6">
                                    <div class="distributor-item">
                                        <div class="">
                                            <a href="#"><h4>{{$distributor->name}}</h4></a>
                                            <p><i class="fa fa-home"></i> Address: <span>112 Salah Salem Nasr City</span></p>
                                            <p><i class="fa fa-building"></i> City: <span>Cairo, Egypt</span></p>
                                            <p><i class="fa fa-address-book"></i> Contact: <span>Eng Ahmed Muhammad</span></p>
                                            <p><i class="fa fa-phone"> Phone: <span>0100 123 4567</span></i></p>
                                            <p><a href="#"><i class="fa fa-map-marker"></i> Location</a></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-12 col-sm-12"></div>
                                <div class="col-md-4 col-sm-12">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    2
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane" id="gearless">
                                <h4 class="tab-content-title"> Elevator Gearless Controller Boards Distributors</h4>
                            </div>
                            <div class="tab-pane" id="simplex">
                                <h4 class="tab-content-title"> Simplex Elevator Controller Boards Distributors</h4>
                            </div>
                            <div class="tab-pane" id="selective">
                                <h4 class="tab-content-title"> Selective-Collective Elevator Controller Boards Distributors</h4>
                            </div>
                            <div class="tab-pane" id="duplex">
                                <h4 class="tab-content-title"> Duplex Elevator Control Boards Distributors</h4>
                            </div>
                            <div class="tab-pane" id="emergency">
                                <h4 class="tab-content-title"> Emergency Rescue Devices Distributors</h4>
                            </div>
                            <div class="tab-pane" id="elevator">
                                <h4 class="tab-content-title"> Elevator Control Panels Distributors</h4>
                            </div>
                            <div class="tab-pane" id="roomless">
                                <h4 class="tab-content-title"> Room Less Gearless Elevator Control Solution Distributors</h4>
                            </div>
                            <div class="tab-pane" id="addons">
                                <h4 class="tab-content-title"> Add Ons Distributors</h4>
                            </div>
                            <div class="tab-pane" id="displays">
                                <h4 class="tab-content-title"> Elevator Displays Distributors</h4>
                            </div>
                            <div class="tab-pane" id="rfid">
                                <h4 class="tab-content-title"> RFID Access Control Distributors</h4>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Best Company Area =================-->
<section class="best_company_area" style="background-color:#F8F8FF">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto " style="background-color:#fff;padding: 30px">
                <div class="b_companu_l_text ">
                    <h4>Join our Distributors</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and<br />typesetting industry.</p>
                    <div class="comment_form_area">

                   
                        <!--<h3>Distributor Form</h3>-->
                        <form class="contact_us_form row"  method="POST"  action="{{ route('Distributor.store') }}"  id="distributor-form-request" novalidate="novalidate">
                            @csrf
                            <input  type="hidden" name="status_id"  value="1" >
                            <div class="form-group col-md-6">
                                <label>Full Name</label>      
                                <span class="text-danger d-block" id="name-error"> </span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                            </div>
                     
                            <div class="form-group col-md-6">
                                <label>Company Owner's Name</label>
                                <span class="text-danger d-block" id="owner_name-error"></span>
                                <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Company Owner's Name">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Commercial ID</label>
                                
                                <span class="text-danger" id="commercial_id-error"> </span>

                                <input type="text" class="form-control" id="commercial_id" name="commercial_id" placeholder="Commercial ID">

                            </div>
                            <div class="form-group col-md-6">
                                <label>Tax ID</label>
                                                                
                                <span class="text-danger" id="tax_id-error"> </span>
                                <input type="text" class="form-control" id="tax_id" name="tax_id" placeholder="Tax ID">

                            </div>

                            <div class="form-group col-md-6">
                                <label>City</label>
                                                                   
                                <span class="text-danger" id="City-error"> </span>
                                <input type="text" class="form-control" id="City" name="City" placeholder="Your City">

                            </div>

                            <div class="form-group col-md-6">
                                <label>Mobile Number</label>
                                                                   
                                <span class="text-danger" id="phone-error"> </span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile Number">

                            </div>
                            <div class="form-group col-md-12">
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
                                <textarea class="form-control"  name="address" placeholder="Your Address" style="max-height:70px"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="b_company_image"style="clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);">
                    {{-- <img src="img/dis-form.jpg" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Best Company Area =================-->
@endsection

@section('scripts')

<script>
 $(".submit_btn").click(function (e) { 
     e.preventDefault(); 
  var data= $("#distributor-form-request").serialize(); 
  $("#distributor-form-request .text-danger").text(""); 
 $.ajax({
        url: "{{ route('Distributor.store') }}",
        type: "post",
        data: data ,
        success: function (response) {        
            //grab the dialog instance using its parameter-less constructor then set multiple settings at once.
                alertify.alert()
                .setting({
                    'label':'Saved',
                    'title':"success",
                    'message': response.msg ,
                    'onok': function(){ alertify.success('successfuly');}
                }).show();
                $("#distributor-form-request input").val(""); 
        },
        error: function(jqXHR, textStatus, errorThrown) {
            debugger
            var  response= JSON.parse(jqXHR.responseText);
             var errors=response.errors; 
           $.each(errors, function (key, value) { 
               $("#"+key +"-error").text(value[0])   
             });

        }
    });

         
     
 });
 
</script>
    
@endsection