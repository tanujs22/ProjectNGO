<?php 
include('session.php');
?>
	
<html>

    <head>
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

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
                            <a class="page-scroll" href="#about"><?php echo $login_session; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="admin.php">Admin Portal</a>
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
            <div class="panel-heading"><center>NGO List</center></div>
				<?php 
						$query="SELECT name,ngo_id,ph_number,ngo_type FROM ngo_detail";

						if(!$data = mysqli_query($conn,$query))
						{
							echo " <br /><span class='error'> unable to find tables data </span> <br />";
							echo mysqli_error($conn);
						}
						else
						{
							$counter = 0;

							echo " <table class='table'>";
							while($row = mysqli_fetch_array($data))
							{
								$counter++;
								echo "<tr>
										<td> 
                                            <a href=''>{$row['name']}</a>
                                            {$row['ngo_id']}
                                            {$row['ph_number']}
                                            {$row['ngo_type']}	
                                            
										</td>
									</tr>";
								
							}
							echo "</table>";
						}
mysqli_close($conn);
				?>			
			</div>

	

    </body>
</html>