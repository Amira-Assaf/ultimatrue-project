
@extends("layouts.admin.layout")
@section('admin-content')


<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('dashboard/img/logo/logo.png') }}" alt="" /></a>
            <strong><a href="index.html"><img src="{{ asset('dashboard/img/logo/logosn.png') }}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    
                    <li class="active">
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Distributors</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Distributors List" href="distributors.html"><span class="mini-sub-pro">Distributors List</span></a></li>
                            <li><a title="Add Distributors" href="add-distributors.html"><span class="mini-sub-pro">Add Distributors</span></a></li>
                            <li><a title="Edit Distributors" href="edit-distributors.html"><span class="mini-sub-pro">Edit Distributors</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a href="distributors.html">Distributors List</a></li>
                                    <li><a href="add-distributors.html">Add Distributors</a></li>
                                    <li><a href="edit-distributors.html">Edit Distributors</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li>
                                            <a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li>
                                            <span class="bread-blod">Add Distributor</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area">
                            <h3>Add Distributor</h3>
                            <br />
                            <form class="contact_us_form row form" method="POST" action="{{ route('Distributor.store') }}" id="distributor-form-request" novalidate="novalidate">

                                <!--{!! csrf_field() !!}-->

                                <input type="hidden" name="status_id" value="1">

                                <div class="form-group col-md-12">
                                    <div class="i-checks pull-left">
                                        <label>
                                            <input type="checkbox" value="" checked> <i></i> Is Active (New)
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="option1" name="a" checked=""> <i></i> Approved (New)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="option2" name="a"> <i></i> Pending
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="option2" name="a"> <i></i> Submit
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12"style="margin-top:20px">
                                    <label>Distributor Products(New)</label>
                                    <span class="text-danger" id="city_id-error"> </span>
                                    <select data-placeholder="Choose a Products..." class="chosen-select" multiple="">
                                        <option value="">Select</option>
                                        <option value="Bahamas">Product 1</option>
                                        <option value="Bahrain">Product 2</option>
                                        <option value="Bangladesh">Product 3</option>
                                        <option value="Barbados">Product 4</option>
                                        <option value="Colombia">Product 5</option>
                                        <option value="Comoros">Product 6</option>
                                        <option value="Congo">Product 7</option>
                                        <option value="Eritrea">Product 8</option>
                                        <option value="Haiti">Product 9</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Company Owner's Name</label>

                                    <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Company Owner's Name">
                                    <span class="text-danger d-block" id="owner_name-error"></span>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Contact Person (New)</label>

                                    <input type="text" class="form-control" id="" name="" placeholder="Company Owner's Name">
                                    <span class="text-danger d-block" id=""></span>
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
                                        
                                        <option>Country</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <span class="text-danger" id="city_id-error"> </span>
                                    <select name="city_id" id="city_id" class="form-control"></select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mobile Number(New)</label>
                                    <span class="text-danger" id="phone-error"> </span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <span class="text-danger" id="phone-error"> </span>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile Number">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Location(New)</label>
                                    <span class="text-danger" id="phone-error"> </span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>What is your core business?</label>

                                    <span class="text-danger" id="core_business-error"> </span>
                                    <input type="text" class="form-control" id="core_business" name="core_business" placeholder="core business">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Do you have branches? And where?</label>
                                    <span class="text-danger" id="branches-error"> </span>
                                    <input type="text" class="form-control" id="branches" name="branches" placeholder="Your Answer">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Have your ever dealt with ultimatrue or not?</label>

                                    <span class="text-danger" id="dealt-error"> </span>
                                    <input type="text" class="form-control" id="dealt" name="dealt" placeholder="Your Answer">

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <span class="text-danger" id="address-error"> </span>
                                    <textarea class="form-control" name="address" placeholder="Your Address" style="max-height:70px"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Notes(New)</label>
                                    <span class="text-danger" id="phone-error"> </span>
                                    <textarea class="form-control" name="address" placeholder="Your Address" style="max-height:70px"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="form-control btn btn-info mb-2 text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018. All rights reserved by <a href="#">Ultimatrue</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>