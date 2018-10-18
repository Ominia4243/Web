<!DOCTYPE html>
<?php
    $conn = mysqli_connect('localhost', 'willy', '41401ex') or die ("無法開啟MySQL資料庫連接!<br/>");
    mysqli_select_db($conn,"pickup");
    mysqli_query($conn,"set names utf8");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


$stu_name = $_POST['stu_name'];
$updata_stupic = $_POST['updata_stupic'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$home_phone = $_POST['home_phone'];
$address = $_POST['address'];

$sql = "SELECT * FROM student";


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($stu_name != null && $father != null && $mother != null &&  $home_phone != null && $address != null)
{
        //新增資料進資料庫語法
        $sql = "INSERT INTO `student`(`stu_name`, `father`, `mother`, `home_phone`, `address`)
		VALUES ('$stu_name', '$father', '$mother', '$home_phone', '$address')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=50;url=added.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=added.php>';
        }
}
?>