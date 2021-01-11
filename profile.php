<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: Placement.html"); // Redirecting To Home Page
}
?>
