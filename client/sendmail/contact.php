
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-SHOP HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- HEADER -->
<div container-fluid>
     <h4 style="text-align:center; padding:40px; color:red;">Thắc mắc Các Sản phẩm cần liên quan gửi Mail được hỗ trợ</h4>
</div>
<!-- /HEADER -->

<!-- NAVIGATION -->
<!-- /NAVIGATION -->

<form action="./sendmail.php" method="post">

<!-- section -->
<div class="section">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
  <form action="./sendmail.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
    <label for="exampleFormControlInput1">Tên Khách Hàng</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="fullname" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tiêu đề</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Name">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Hình ảnh sản phẩm</label>
        <input type="file" class="form-control" name="images" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Nội Dung Cần tư Vấn</label>
    <textarea class="form-control"  rows="7" name="content"></textarea>
  </div>

  <div class="form-group">
        <button type="submit" class="btn btn-primary" style="float:right; height:40px; width:85px; ">Sumbit</button>
  </div>
  

</form>
            </div>
            <div class="col-md-3">
            
                </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- /container -->
</div>
<!-- /section -->
</form>

<!-- FOOTER -->
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
