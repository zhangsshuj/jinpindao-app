<?php
header("Content-Type:application/json;charset=utf-8");

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
$conn=mysqli_connect('127.0.0.1','root','','guoku',3306);
//$conn=mysqli_connect('172.163.8.182','root','','guoku',3306);
mysqli_query($conn,'set names utf8');
function sql_execute($sql,$arr_type){
    global $conn;
    $result=mysqli_query($conn,$sql);
      return mysqli_fetch_all($result,$arr_type);
}
?>