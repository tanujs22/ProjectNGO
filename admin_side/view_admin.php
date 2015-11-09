<?php
   include('session.php');
if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }

?>
?>
<html>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.11.3.min.js"></script>    
        <title>Manage Admin</title>
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
                    <li class="active">
                        <a class="page-scroll" href="view_admin.php">View Admin</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="add_admin.php">Create New Admin</a>
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
            <div class="panel-heading"><center>Admin List</center></div>
				<?php 
						$query="SELECT admin_fname,admin_lname,ph_num,admin_id,email FROM admin_ngo";

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
							
							<th>Admin ID</th>	
							<th>First Name</th>
							<th>Last Name</th>
							<th>Ph Number</th>
                            <th>Email</th>";
							
							echo "</thead>";			
							while($row = mysqli_fetch_array($data))
							{
								$counter++;
								
								echo "<tr>
							  <td><a href='profile_admin.php?admin_id={$row['admin_id']}'>{$row['admin_id']}</a></td>			
                              <td>{$row['admin_fname']}</td>
                              <td>{$row['admin_lname']}</td>
                              <td>{$row['ph_num']}</td>
                              <td>{$row['email']}</td>
										
									</tr>";
								
							}
							
							echo "</table>";
						}
mysqli_close($conn);
				?>			
			</div>


	
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
	
    </body>

</html>

