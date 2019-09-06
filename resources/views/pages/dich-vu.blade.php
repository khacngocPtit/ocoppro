@extends('master-layout')
@section('title')
	Dịch vụ
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dichvu-blog.css') }}">
@endsection


@section('content')
	<section class="dichvu-wrap mt-5 mb-3">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3 class="news-category text-uppercase mb-4 wow bounceInDown">danh mục tin tức</h3>
						<div class="menu-category">												
							<div class="dropdown show wow fadeInLeft">
							  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Tin tức
							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="#"> Xã hội</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#"> Kinh tế</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#"> Thời trang</a>
							  </div>
							</div>
							<div class="dropdown show wow lightSpeedIn" data-wow-delay="1s">
							  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Các dự án nổi bật
							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="#">Dự án 1</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Dự án 2</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Dự án 3</a>
							  </div>
							</div>
							<div class="dropdown show wow bounceInDown" data-wow-delay="0.5s">
							  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Các dịch vụ
							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="#">Dịch vụ 1</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Dịch vụ 2</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Dịch vụ 3</a>
							  </div>
							</div>
							<div class="dropdown show wow rotateIn" data-wow-delay="1s">
							  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							   Thông tin tuyển dụng
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="#">Vị trí tuyển dụng</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Tuyển dụng nhân sự</a>
							     <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Xem chi tiết >></a>
							  </div>
							</div>
						</div>
						<div class="card mt-5">
							<a class="img-category" href="#">
								<img src="{{ asset('images/category-1.png') }}" alt="" class="card-img-top">
							</a>
						</div>

						<h3 class="news-category text-uppercase mb-4 mt-5 wow bounceInDown">từ khóa</h3>
						<div class="card mt-5">
							<a class="img-category" href="#">
								<img src="{{ asset('images/category-2.png') }}" alt="" class="card-img-top">
							</a>
						</div>

						<h3 class="news-category text-uppercase mb-4 mt-5 wow bounceInDown">tìm kiếm</h3>
						<div class="card mt-5">
							<a class="img-category" href="#">
								<img src="{{ asset('images/category-1.png') }}" alt="" class="card-img-top">
							</a>
						</div>

						<h3 class="news-category text-uppercase mb-4 mt-5 wow bounceInDown">liên kết</h3>
						<div class="card mt-5">
							<a class="img-category" href="#">
								<img src="{{ asset('images/category-2.png') }}" alt="" class="card-img-top">
							</a>
						</div>
						
				</div>
				<div class="col-md-9">				
					<h3 class="title-service text-uppercase mb-4 wow bounceInDown">dịch vụ</h3>
					<div class="row">
						<div class="col-md-6 mb-4 bl-sv wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-1.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>

							     <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-2.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">đầu tư dự án</a>
							    <p class="card-text content-sv">Bao gồm các dự án về:- Thực phẩm, gồm: Nông sản tươi sống và nông sản chế biến- Thảo dược, gồm: Các sản phẩm có thành phần từ cây dược liệu.- Vải và may mặc</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>20 comments</span></p>

							     <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInUp" data-wow-duration="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-3.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">tư vấn, cung ứng dịch vụ</a>
							    <p class="card-text content-sv">NỘI DUNG- Đào tạo nâng cao kiến thức cho các địa phương nhằm phát triển hình thức tổ chức sản xuất, kinh doanh các sản phẩm truyền thống, có lợi thế ở khu vực nông thôn</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>15 comments</span></p>


							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInUp" data-wow-duration="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-1.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>


							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow zoomInDown">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-2.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>

							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow zoomInDown">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-3.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>

							     <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-1.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>

							     <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-2.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">đầu tư dự án</a>
							    <p class="card-text content-sv">Bao gồm các dự án về:- Thực phẩm, gồm: Nông sản tươi sống và nông sản chế biến- Thảo dược, gồm: Các sản phẩm có thành phần từ cây dược liệu.- Vải và may mặc</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>20 comments</span></p>

							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInUp" data-wow-duration="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-3.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">tư vấn, cung ứng dịch vụ</a>
							    <p class="card-text content-sv">NỘI DUNG- Đào tạo nâng cao kiến thức cho các địa phương nhằm phát triển hình thức tổ chức sản xuất, kinh doanh các sản phẩm truyền thống, có lợi thế ở khu vực nông thôn</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>15 comments</span></p>


							     <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow bounceInUp" data-wow-duration="1s">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-1.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>


							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow zoomInDown">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-2.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>

							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						<div class="col-md-6 mb-4 bl-sv wow zoomInDown">
							<div class="card">
							  <a class="img-sv" href="#">												
							 	 <img class="card-img-top" src="{{ asset('images/dichvu-3.jpg') }}" alt="">
							  </a>
							  <div class="card-body">
							  	<a href="" class="d-block card-title text-uppercase title-sv line-ef">phát triển sản phẩm, dịch vụ</a>
							    <p class="card-text content-sv">Bao gồm : Quảng bá và giới thiệu sản phẩm, dịch vụ - Phân phối, kinh doanh các sản phẩm khởi nghiệp</p>
							    <p class="date-sv"><i class="fas fa-calendar-alt"></i> <span>09/09/2019</span></p>
							    <p class="user-sv"><i class="fas fa-user"></i> <span>Công ty CP Tư vấn Đầu tư và Phát triển OCOP</span></p>
							    <p class="num-cm"><i class="fas fa-comments"></i> <span>10 comments</span></p>

							    <a href="#" class="btn btn-1 color-green wow zoomIn" data-wow-duration="1s">
						          <svg>
						            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
						          </svg>
						          Xem chi tiết >>
      						    </a>
							  </div>
							</div>
						</div> <!-- end col -->
						
												
					</div> <!-- end row -->

				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->
@endsection

@section('js')
	
	<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
@endsection