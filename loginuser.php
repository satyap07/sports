<?php
session_start();
extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from user where email='$email'");
if($rs){
    $obj = mysqli_fetch_object($rs);
    if($obj->pass == $pass){
        $_SESSION['email'] = $email;
	    header("Location: /OSP%20Project/sports/usermenu.php");
    }
    else{
        unset($_SESSION['email']);
	    $_SESSION['message'] = "Wrong Password";
	    header("Location: /OSP%20Project/sports/login.php");
    }
    mysqli_free_result($rs);
}else{
    unset($_SESSION['email']);
	$_SESSION['message'] = "Unable to Register: ".mysqli_error($conn);
	header("Location: /OSP%20Project/sports/login.php");
}
?>