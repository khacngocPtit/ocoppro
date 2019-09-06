<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ocoppro</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('library/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="{{asset('css/giohang.css')}}">

<body>
	<div class="container">
		<div class="pannel pannel-primary">
			<div class="pannel-body">
				Giỏ hàng của bạn
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-borderd table-hover">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Tên sản phẩm</th>
								<th>Hình ảnh</th>
								<th>Số lượng</th>
								<th>Giá tiền</th>
								<th>Quản lí</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Điện thoại</td>
								<td> <img class="img-giohang1" src="{{asset('images/giohang-1.jpg')}}" alt=""></td>
								<td><div class="col-md-5"> 
									<div class="input-group"> <span class="input-group-btn"> 
										<button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]"> 
											<span class="glyphicon glyphicon-minus"></span> </button></span> <input name="quant[2]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]"> <span class="glyphicon glyphicon-plus"></span> </button></span> 
										</div> 
									</div>
								</td>
								<td>5.000.000</td>
								<td><a href=""><i class="fas fa-trash-alt"></i></a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Điện thoại</td>
								<td> <img class="img-giohang1" src="{{asset('images/giohang-1.jpg')}}" alt=""></td>
								<td><div class="col-md-5"> 
									<div class="input-group"> <span class="input-group-btn"> 
										<button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]"> 
											<span class="glyphicon glyphicon-minus"></span> </button></span> <input name="quant[2]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]"> <span class="glyphicon glyphicon-plus"></span> </button></span> 
										</div> 
									</div>
								</td>
								<td>5.000.000</td>
								<td><a href=""><i class="fas fa-trash-alt"></i></a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Điện thoại</td>
								<td> <img class="img-giohang1" src="{{asset('images/giohang-1.jpg')}}" alt=""></td>
								<td><div class="col-md-5"> 
									<div class="input-group"> <span class="input-group-btn"> 
										<button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]"> 
											<span class="glyphicon glyphicon-minus"></span> </button></span> <input name="quant[2]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]"> <span class="glyphicon glyphicon-plus"></span> </button></span> 
										</div> 
									</div> 	
								</td>
								<td>5.000.000</td>
								<td><a href=""><i class="fas fa-trash-alt"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>