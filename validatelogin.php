<?php
session_start();
$username = $_POST["studentid"];
$pass = $_POST["password"];
include "ACGOne/dbconnect.php";
$sql=mysqli_query($conn,"SELECT UserID FROM UserCatalogue WHERE UserPassword='$pass'");
$sql2=mysqli_query($conn,"SELECT ProfileType FROM UserCatalogue WHERE UserPassword='$pass'");
$sql3=mysqli_query($conn,"SELECT UserName FROM UserCatalogue WHERE UserPassword='$pass'");
$sql4=mysqli_query($conn,"SELECT UserCredits FROM UserCatalogue WHERE UserPassword='$pass'");
$sql5=mysqli_query($conn,"SELECT UserComCour FROM UserCatalogue WHERE UserPassword='$pass'");
if(mysqli_num_rows($sql)>0){
    $result3=mysqli_fetch_row($sql3);
    $_SESSION["UserName"]=$result3;
    $result2=mysqli_fetch_row($sql2);
    $_SESSION["ProfileType"]=$result2;
    $result=mysqli_fetch_row($sql);
    $_SESSION["UserID"]=$result;
    $result4=mysqli_fetch_row($sql4);
    $_SESSION["UserCredits"]=$result4;
    $result5=mysqli_fetch_row($sql5);
    $_SESSION["UserComCour"]=$result5;

    header("Location: /dashboard.php");
}
else {
    echo "No user found. Please check your credentials and try again.";
}

?>