<?php
   include('session.php');
if($login_session == 'Tanuj'){
    }
else{
    
    header("location: view_ngo.php");
    }

?>
<?
$ngo_id = $_GET['ngo_id'];
$query="SELECT * FROM ngo_detail where ngo_id = '".$ngo_id."'";
$data = mysqli_query($conn,$query);
$row = $data -> fetch_assoc()
?>
<html>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title><? echo $row['name'] ?> Profile</title>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>    
    </head>
    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand page-scroll" href="#page-top">Project NGO</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="view_ngo.php">NGO List</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="add_ngo.php">Register New NGO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="admin.php">Admin Portal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $login_session; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Sign Out</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="root.php">Root Portal</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
            
    </nav>
                <div id="nl_pan" class="panel panel-primary">
            <div class="panel-heading"><center><? echo $row['name'] ?> Profile</center></div>
				<?php 
                        $ngo_id = $_GET['ngo_id'];
						$query="SELECT * FROM ngo_detail where ngo_id = '".$ngo_id."'";
    
						if(!$data = mysqli_query($conn,$query))
						{
							echo " <br /><span class='error'> unable to find tables data </span> <br />";
							echo mysqli_error($conn);
						}
						else
						{
							$counter = 0;

							echo " <table class='table'>";
							echo "<thead>
							
							<th>NGO ID</th>	
							<th>Name</th>
							<th>Ph Number</th>
                            <th>Product List</th>
                            <th>Locality</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pin Code</th>
                            <th>Website</th>
                            <th>Delete NGO</th>";
							
							echo "</thead>";			
							while($row = mysqli_fetch_array($data))
							{
								$counter++;
								
								echo "<tr>
							  <td>{$row['ngo_id']}</td>			
                              <td>{$row['name']}</td>
                              <td>{$row['ph_number']}</td>
                              <td><a href='view_ngoptlist.php?ngo_id=$ngo_id'>Product List</a></td>
                              <td>{$row['locality']}</td>
                              <td>{$row['city']}</td>
                              <td>{$row['state']}</td>
                              <td>{$row['pin_code']}</td>
                              <td>{$row['website']}</td>
                              <td><a href='delete_ngo.php?ngo_id=$ngo_id' >DELETE</a></td>
                              
									</tr>";
								
							}
							
							echo "</table>";
						}
    

				?>	
                    
			</div>
        <?
$ngo_id = $_GET['ngo_id'];
$query="SELECT ngo_logo FROM ngo_detail where ngo_id = '".$ngo_id."'";
$data = mysqli_query($conn,$query);
$row = $data -> fetch_assoc()
//$userImage = 
//$defaultImage = 'img/a.jpg';
//$image = (file_exists($userImage)) ? $userImage : $defaultImage;


        ?>
        
        <div class="col-lg-4 portfolio">
                 
             <img class="img-responsive" src="<?echo $row['ngo_logo'];?>" alt="NGO Logo">
        </div>
        
        
<?php 
    
   mysqli_close($conn);   
?>

	
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
	
    </body>

</html>

