@extends("layouts.admin.layout")
@section('admin-content')
<meta name="csrf-token" content="{{ csrf_token() }}">


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
                                            <span class="bread-blod">Distributor</span>
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
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Distributors List</h4>
                        <div class="add-product">
                            <a href="add-distributors.html">Add Distributor</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Full Name</th>
                                    <th>Company Owner's Name</th>
                                    <th>Commercial ID</th>
                                    <th>Tax ID</th>
                                    <th>Contact</th>
                                    <th>Mobile Number</th>
                                    <th>Setting</th>
                                </tr>
                                
                                @foreach ($distributors as $distributor)
                                <tr>
                                    <td>{{ $distributor->id }}</td>
                                    <td>{{ $distributor->name }}</td>
                                    <td>{{ $distributor->owner_name }}</td>
                                    <td>{{ $distributor->commercial_id }}</td>
                                    <td>{{ $distributor->tax_id }}</td>
                                    <td>{{ $distributor->contact_person }}</td>
                                    <td>{{ $distributor->mobile }}</td>
                                    
                                    <td>
                                        <button id="view" data-toggle="modal" data-target="#vw" title="View" class="pd-setting-ed" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        <button href="<?= url('/Distributor'); ?>"  onclick="window.location='{{ url("/admin/edit-distributor") }}'"  title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
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
                        <p>Copyright © 2020. All rights reserved by <a href="#">Ultimatrue</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal-->
    <!--View Distributor-->
    <div id="vw" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-1">
                    <h4 class="modal-title">View Distributor Data</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="modal-body">
                    <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                    <h2>Distributor Data</h2>
                    <div class="message-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div id="dropzone1" class="pro-ad addcoursepro">
                                    <form class="contact_us_form row form" method="POST" action="{{ route('Distributor.store') }}" id="distributor-form-request" novalidate="novalidate">

                                        <!--{!! csrf_field() !!}-->

                                        <input type="hidden" name="status_id" value="1">

                                        <div class="form-group col-md-12">
                                            <div class="i-checks pull-left">
                                                <label>
                                                    <input type="checkbox" value="" checked disabled> <i></i> Is Active (New)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="i-checks pull-left">
                                                    <label>
                                                        <input type="radio" value="option1" name="a" checked=""disabled> <i></i> Approved (New)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12" style="margin-top:20px;text-align:left">
                                            <label>Distributor Products(New)</label>
                                            <ul>
                                                <li value="Bahamas">Product 1</li>
                                                <li value="Bahrain">Product 2</li>
                                                <li value="Bangladesh">Product 3</li>
                                            </ul>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Full Name</label>
                                            <p>Some Text Here</p>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Company Owner's Name</label>
                                            <p>Some Text Here</p>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Contact Person (New)</label>
                                            <p>Some Text Here</p>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Commercial ID</label>
                                            <p>Some Text Here</p>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tax ID</label>
                                            <p>Some Text Here</p>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <p>Some Text Here</p>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile Number(New)</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Location(New)</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>What is your core business?</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Do you have branches? And where?</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Have your ever dealt with ultimatrue or not?</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="address">Address</label>
                                            <p>Some Text Here</p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Notes(New)</label>
                                            <p>Some Text Here</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--<a href="#">Back</a>-->
                    <a data-dismiss="modal" href="#">Back</a>
                </div>
            </div>
        </div>
    </div>
    <!--/Add Company-->
    <!--Delete Distributor--><span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
    <div id="del" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-1">
                    <h4 class="modal-title">Delete Distributor Data</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="modal-body">
                    <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
                    <h2>Distributor Name</h2>
                    <div class="message-content">
                        Do you want to delete the distributor ?
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#">Confirm</a>
                    <a data-dismiss="modal" href="#">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!--/Delete Distributor-->
    <!--/Modal-->
</div>

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

        }


    </script>
@endsection