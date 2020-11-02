
@extends("layout")
@section('content')

<?php
if(DB::connection()->getDatabaseName())
   {
     echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
   }
?>

<div class="courses-area">
			<div class="container-fluid">
				<div class="row mg-b-15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع مصر الجديدة</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع مدينة نصر</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع المعادي</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>الفرع الرئيسي</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="row mg-b-15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع مدينتي</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع الاسكندرية</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع الرحاب</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="courses-inner res-mg-b-30">
							<div class="courses-title">
								<h2>فرع الجيزة</h2>
							</div>
							<div class="course-des">
								<p><span><i class="fa fa-clock"></i></span> <b>كــــود الفرع :</b> 150-175-123</p>
								<p><span><i class="fa fa-clock"></i></span> <b>تليفون الفرع :</b> 02 20212365</p>
								<p><span><i class="fa fa-clock"></i></span> <b>كـــود العميل :</b> 23025-20563</p>
								<p><span><i class="fa fa-clock"></i></span> <b>البريد الإلكتروني :</b>admin@Senior</p>
							</div>
							<div class="product-buttons">
								<button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>
								<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button data-toggle="modal" data-target="#del" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-pagination mg-b-15">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">التالي</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">السابق</a></li>
						</ul>
					</nav>
				</div>
			</div>
</div>

@endsection



