<?php
   include('session.php');?>
<html>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
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
                        <a class="page-scroll" href="view_cat.php">View Category</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="add_category.php">Register New Category</a>
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
                <div id="nl_pan" class="panel panel-info">
            <div class="panel-heading"><center>Product Category List</center></div>
				<?php 
						$query="SELECT pid,cat_name FROM pt_cat";

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
							
							<th>Category ID</th>	
							<th>Category Name</th>";
							
							echo "</thead>";			
							while($row = mysqli_fetch_array($data))
							{
								$counter++;
								
								echo "<tr>
							  <td>{$row['pid']}</td>			
				                           <td>{$row['cat_name']}</td>
				                            
                                            
										
									</tr>";
								
							}
							
							echo "</table>";
						}
mysqli_close($conn);
				?>			
			</div>
<center>
<a href="add_category.php">ADD NEW CATEGORY &nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
</center>

	
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
	
    </body>

</html>

