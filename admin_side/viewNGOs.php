<?php 
include('session.php');
?>
	
<html>

<head>
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

	
		
		
  <h1> Welcome <?php echo $login_session;?></h1> <br> 
	<h2><?php echo "<a href='logout.php'> Logout</a> "; ?></h2><br><br>

	
			
	REGISTERED NGOs<br><br>
	
<?php
 
   
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //  mysqli_select_db($conn,'project_ngo');

    $query = "SELECT name FROM ngo_detail"; 	

    
    $retval = mysqli_query($conn,$query);
/*if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}*/
    while ($db_field = mysqli_fetch_assoc($retval))
    {

        echo $db_field['name'] . "<BR>";

    }
}
mysqli_close($conn);

?>

	

    </body>
</html>