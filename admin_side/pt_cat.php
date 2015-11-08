<html>
    <head>
        <title>Register Category</title>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate"></META>
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE"></META>
        <META HTTP-EQUIV="EXPIRES" CONTENT=0></META>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
      
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery-1.11.3.min.js"></script>    
    </head>
    <body>
        <?php
include("session.php");
   
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {

   		$pid = $_POST['pid']; 
		$cat_name= $_POST['cat_name']; 

		mysqli_select_db($conn,'project_ngo');

		$query = "INSERT INTO pt_cat(pid,cat_name) VALUES ('$pid','$cat_name')"; 	


$result = mysqli_query($conn,$query);



     if ($result) 
     {?>
		<script>alert("NGO inserted successfully");</script>
<?php
		echo '<script type="text/javascript"> window.open("admin.php","_self");</script>'; 
     } 
    else 
   {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

mysqli_close($conn);

}
?>
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
                            <a class="page-scroll" href="registerNGO.php">Register New Cateogry</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="view_cat.php">View Category</a>
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
        <div id="admin_form"class="container">


        
            <form method="post" action="<?php $_PHP_SELF ?>" >
                <div class="col-lg-12">
<!--                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                    <div class="form-group">
                        <label for="InputName">Cateogry ID</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="pid" id="pid" placeholder="Enter Cateogry ID" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Category Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cat_name"  placeholder = "Category Name"  name = "cat_name" required/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-lg btn-block">
                </div>

            </form>
        </div>
    


        <center><p>Powered by Cumbre Technologies</p></center>
	

    </body>
</html>

