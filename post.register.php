<?php
session_start();
//$usr = $_GET["username"];
//$email = $_GET["email"];
$usr = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$cfpwd = $_POST["cfm_pwd"];
//echo "username: $usr email: $email";
//kiem tra nhap thong tin co dung hay khong (so sanh 2 pwd)
if ($pwd != $cfpwd){
    $msg = "Mat khau khong khop nhau. Vui long kiem tra lai!";
    $_SESSION["error"] = $msg;
    //quay tro ve trang register
    header("Location: register.php");
    die();//lam cho luong web chet tai day ma khong di tiep
}
//xu ly data nhan duoc

header("Location: index.php");