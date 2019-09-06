@extends('master-layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-4 m-auto dangki">
				<h1 class="text-center">Tạo tài khoản</h1>
				<div class="form">
					<input class="input-full" type="text" placeholder="Tên">
					<input class="input-full" type="text" placeholder="Họ">
					<input class="input-full" type="text" placeholder="Email">
					<input class="input-full" type="text" placeholder="Mật khẩu">
					<p>
						<input type="submit" value="Đăng ký" class="btn btn-full">
					</p>
					<a class="text-link" href="http://ocoppro.vn/">Trở về</a>
				</div>
			</div>
		</div>
	</div>
@endsection