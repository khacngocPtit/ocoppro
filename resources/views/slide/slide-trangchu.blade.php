<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators" style="display: none;">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://theme.hstatic.net/1000366433/1000468446/14/ms_banner_img1.jpg?v=55" alt="Los Angeles" >
      <div class="carousel-caption">
        <h3><b>
							Đồng hành cùng sự phát triển của doanh nghiệp
						</b></h3>
      			  
						<p class="btn btn-primary">	Xem Thêm</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://theme.hstatic.net/1000366433/1000468446/14/ms_banner_img3.jpg?v=55" alt="Chicago" width="1100" height="400">
      <div class="carousel-caption">
        <h3>
							Đồng hành cùng sự phát triển của doanh nghiệp
						</h3>
        
						<div class="btn btn-primary">	Xem Thêm</div>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://theme.hstatic.net/1000366433/1000468446/14/ms_banner_img3.jpg?v=55" alt="New York" width="1100" height="400">
      <div class="carousel-caption">
        <h3>
							Đồng hành cùng sự phát triển của doanh nghiệp
			</h3>
  
						<div class="btn btn-primary">	Xem Thêm</div>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
