<!DOCTYPE html>
<?php
    $conn = mysqli_connect('localhost', 'willy', '41401ex') or die ("無法開啟MySQL資料庫連接!<br/>");
    mysqli_select_db($conn,"pickup");
    mysqli_query($conn,"set names utf8");
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql);
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="apply_check.php">家長申請確認</a>
				<a class="navbar-brand" href="stu_list.php">學生名單</a>
				<a class="navbar-brand" href="pickup.php">接送系統</a>
				<a class="navbar-brand" href="../index.php">登出</a>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">新增學生資料
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
		<div class="container">
		<div class="col-lg-1">
		</div>
        <div class="container">
            
            <div class="col-lg-10">
			<form METHOD=POST form role="form" class="form-inline" action="add_act.php">
			
				<div class="form-group">
					<label for="stu_name">
						<h3>學生姓名：</h3>
					</label>
					<input type="text" class="form-control" id="stu_name" name="stu_name">
				</div>
				</br>
				</br>
				<div class="form-group">
					<label for="updata_stupic" >
					<h3>上傳學生照片：</h3>
					</label>
					<input type="file" id="updata_stupic" name="updata_stupic">
				</div>
				</br>
				</br>
				<div class="form-group">
					<label for="father">
						<h3>父親姓名：</h3>
					</label>
					<input type="text" class="form-control" id="father" name="father">
				</div>
				</br>
				</br>
				<div class="form-group">					 
					<label for="mother">
						<h3>母親姓名：</h3>
					</label>
					<input type="text" class="form-control" id="mother" name="mother">
				</div>
				</br>
				</br>
				<div class="form-group">
					<label for="home_phone">
						<h3>家裡電話：</h3>
					</label>
					<input type="text" class="form-control" id="home_phone" name="home_phone">
					
				</div>
				</br>
				</br>
				<div class="form-group">
					<label for="address">
						<h3>家裡地址：</h3>
					</label>
					<input type="text" class="form-control" id="address" name="address">
					
				</div>
				</br>
				</br>
				<button type="submit" >
					新增學生資料
				</button>
			</form>
            </div>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
		</br>
		<!-- Footer -->
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
