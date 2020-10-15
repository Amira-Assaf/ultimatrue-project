
@extends("layouts.user.layout");



@section('content')

<section>
    <div style="background-image:url(img/bg-6.jpg);background-position:center center;margin-top:400px;">
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="distributor-item">
                                        <div class="">
                                            <a href="#"><h4>ABC Company</h4></a>
                                            <p><i class="fa fa-home"></i> Address: <span>112 Salah Salem Nasr City</span></p>
                                            <p><i class="fa fa-building"></i> City: <span>Cairo, Egypt</span></p>
                                            <p><i class="fa fa-address-book"></i> Contact: <span>Eng Ahmed Muhammad</span></p>
                                            <p><i class="fa fa-phone"> Phone: <span>0100 123 4567</span></i></p>
                                            <p><a href="#"><i class="fa fa-map-marker"></i> Location</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12"></div>
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
<section class="best_company_area"style="background-color:#F8F8FF">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="b_companu_l_text">
                    <h4>Join our Distributors</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and<br />typesetting industry.</p>
                    <div class="comment_form_area">
                        <!--<h3>Distributor Form</h3>-->
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-6">
                                <label>Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Company Owner's Name</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Company Owner's Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Commercial ID</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Commercial ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tax ID</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Tax ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your City">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your Mobile Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label>What is your core business?</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="core business">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Do you have branches? And where?</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your Answer">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Have your ever dealt with ultimatrue or not?</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your Answer">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Address</label>
                                <textarea class="form-control" placeholder="Your Address" style="max-height:70px"></textarea>
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