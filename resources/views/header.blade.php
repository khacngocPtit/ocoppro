<header>
		<div id="header1">
			<div class="container text-right ">
				<a class="list-icon" href=""><i class="fab fa-facebook-f ic"></i></a>
				<a class="list-icon" href=""><i class="fab fa-twitter ic"></i></a>
				<a class="list-icon" href=""><i class="fab fa-linkedin-in ic"></i></a>			
				<a class="list-icon" href=""><i class="fab fa-google-plus-g ic"></i></a>				
				<a class="list-icon" href=""><i class="fab fa-youtube-square ic"></i></a>		
				<a class="list-icon" href=""><i class="fab fa-instagram ic"></i></a>
			</div>
		</div>
		<div id="header2">
			<div class="container top-center">
				<div class="row text-visit">
					<div class="visit">
						<img class="img-header" src="images/hdc_icon1.png" alt="">
						<div class="text-header">
							<h5 class="title-top">Số điện thoại:</h5>
							<a class="text-top1" href="">(+84) 934 323 882</a>
						</div>
					</div>
					<div class="visit">
						<img class="img-header" src="images/hdc_icon1.png" alt="">
						<div class="text-header">
							<h5 class="title-top">Địa chỉ Email:</h5>
							<a class="text-top1" href="">support@suplo.vn</a>
						</div>
					</div>
					<div class="visit">
						<img class="img-header" src="images/hdc_icon1.png" alt="">
						<div class="text-header">
							<h5 class="title-top">Địa chỉ công ty:</h5>
							<a class="text-top1" href="">Số 1 Lương Yên, Q.Hai Bà Trưng, Hà Nội</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="header3">
			<div class="menu container">
				<img class="logo" src="images/logo.png" alt="">


				<div class="menu-content container text-right">
					<a class="menu-content1" href="">Trang chủ</a>
					<a class="menu-content1" href="{{ route('dich-vu') }}">Dịch vụ</a>
					<a class="menu-content1" href="{{ route('blog') }}">Blog</a>
					<a class="menu-content1" href="">Giới thiệu</a>
					<a class="menu-content1 new" href="">Tài Khoản <i class="fas fa-caret-down"></i>
						<ul class="menu-con">
							<li class="login">Đăng nhập</li>
							<li class="login">Đăng ký</li>
						</ul>
					</a>
					<a class="menu-content1" href="">Giỏ hàng</a>
					
					<input type="text" placeholder="  Tìm kiếm..." class="ip-tim">
					<i class="fas fa-search search"></i>
					
				</div>			
				<span class="menu-rsp container text-right" style="font-size:30px;cursor:pointer;" onclick="openNav()">MENU &#9776;
				</span>
			</div>

		</div>
	</header>
	<div id="mySidenav" class="sidenav">
		
		<div class="menu-rsp-full">
			<input type="text" placeholder="  Tìm kiếm..." class="ip-tim">
		<i class="fas fa-search search ic1"></i>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a class="list-menu-rsp" href="#">Trang Chủ</a>
			<a class="list-menu-rsp" href="#">Dịch vụ</a>
			<a class="list-menu-rsp" href="#">Blog</a>
			<a class="list-menu-rsp" href="#">Giới Thiệu</a>			
			<a class="list-menu-rsp" href="">Giỏ Hàng</a>
			<a class="list-menu-rsp" href="">Đăng Nhập</a>
			<a class="list-menu-rsp" href="">Đăng Ký</a>
		</div>
	</div>
