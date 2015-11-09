<?php
include('session.php');
    if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }




?>

<?
$admin_id = $_GET['ngo_id'];
$query="DELETE FROM ngo_detail where ngo_id = '".$admin_id."'";
mysqli_query($conn,$query);
header("location: view_ngo.php");
?>