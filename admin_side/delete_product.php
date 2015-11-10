<?php
include('session.php');
    if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }




?>

<?
$pt_id = $_GET['pt_num'];
$query="DELETE FROM pt_list where pt_num = '".$pt_id."'";
mysqli_query($conn,$query);
header("location: view_ptlist.php");
?>