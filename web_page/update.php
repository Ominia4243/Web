<!DOCTYPE html>
<?php
    $conn = mysqli_connect('localhost', 'willy', '41401ex') or die ("無法開啟MySQL資料庫連接!<br/>");
    mysqli_select_db($conn,"pickup");
    mysqli_query($conn,"set names utf8");
	$name=$_POST['action'];
    
	echo $name;
?>