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
    $sql = "SELECT checked.stu_pic,checked.stu_name,parents.name,parents.phone,parents.filepic
			FROM checked
			INNER JOIN parents
			ON checked.phone=parents.phone;";
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
                <h1 class="page-header">儲存
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="container">
            
            <div class="col-lg-10">
                <table action="named_check.php" method="post" class="table table-bordered" > 
                <tr>
                    <td><center>家長姓名</center></td>
					<td><center>家長照片</center></td>
					<td><center>學生姓名</center></td>
					<td><center>學生照片</center></td>
                    <td><center>申請電話</center></td>
                    <td><center>最後選擇</center></td>
				</tr>
 <?php 
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
		  ?>
			<tr>
			<td><center><?php echo $row["name"] ."<br>";?></center></td>
			<td><center><?php echo $row["filepic"] ."<br>";?></center></td>
            <td><center><?php echo $row["stu_name"] ."<br>";?></center></td>
			<td><center><?php echo $row["stu_pic"] ."<br>";?></center></td>
			<td><center><?php echo $row["phone"] ."<br>";?></center></td>
			<td><center>
			<?php
				$id=$row['phone'];
				//echo $id;
				$in=array('1'=>'確認', '2'=>'未確認');
				$name=$row["stu_name"];
				if(array_key_exists($row['phone'],$_POST)){
					$on = $in[$_POST[$row['phone']]];
					echo $in[$_POST[$row['phone']]];
					$sql = "UPDATE student SET cellphone='$id' WHERE stu_name='$name'";
					//要拿到stu_name
					$results = mysqli_query($conn,$sql);
					mysqli_query($conn,"DELETE FROM checked where stu_name='$name'");
					//echo $sql;
					//$sql ="UPDATE  test SET name=’$_POST[name]’,age=’$_POST[age]’  WHERE id=’$_POST[id]'";  //更新資料
					
				}
				else{
					echo 未紀錄;
				}
				
			?>
			</center></td>
			</tr>
<?php
		}
	}
?>
                </table>
                <form action="apply_check.php" align=center>
					<input type="submit" style=" width: 100px " value="確認">
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
