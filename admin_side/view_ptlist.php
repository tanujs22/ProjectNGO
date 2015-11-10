<?php 
include('session.php');
?>
	
<html>

    <head>
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>Product List</title>
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
                            <a class="page-scroll" href="view_ptlist.php">View Product List</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="add_product.php">Register New Product</a>
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
            <div class="panel-heading"><center>PRODUCTS</center></div>
				<?php 
					
						$query="SELECT * FROM pt_list";

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
							
							<th>Product ID</th>	
							<th>Name</th>
							<th>Product Category</th>
							<th></th>";
							
							echo "</thead>";			
							while($row = mysqli_fetch_array($data))
							{
								$counter++;
								
								echo "<tr>
                                <td><a href='profile_product.php?pt_num={$row['pt_num']}'>{$row['pt_num']}</a></td>			
				                <td>{$row['pt_name']}</td>
                                <td>{$row['category']}</td>
                                            
										
									</tr>"; //check for the product pic how should it be retreived
								
	
                            }
							
							echo "</table>";
						}
mysqli_close($conn);
				?>			
			</div>

	

    </body>
</html>

