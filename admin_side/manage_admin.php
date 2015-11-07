<?php
   include('session.php');
	 if($_SERVER["REQUEST_METHOD"] == "POST")
   	{
   		$admin_id = $_POST['admin_id']; 
		$username= $_POST['username']; 
		$password= $_POST['password']; 
		$ph_num= $_POST['ph_num']; 
		$email= $_POST['email']; 
		$admin_pic = $_POST['admin_pic'];
		$admin_fname= $_POST['admin_fname']; 
		$admin_lname= $_POST['admin_lname']; 

		mysqli_select_db($conn,'project_ngo');

		$query = "INSERT INTO admin_ngo(admin_id,username,password,ph_num,email,admin_pic,admin_fname,admin_lname) VALUES ('$admin_id','$username','$password','$ph_num','$email','$admin_pic','$admin_fname','$admin_lname')"; 	


$result = mysqli_query($conn,$query);
 if ($result) 
     {?>
		<script>alert(" Admin created successfully");</script>
<?php
		echo '<script type="text/javascript"> window.open("manage_admin.php","_self");</script>'; 
     } 
    else 
   {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

mysqli_close($conn);
}
?>
<html>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>Manage Admin</title>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery-1.11.3.min.js"></script>    
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
                        <a class="page-scroll" href="manage_admin.php">Create New Admin</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="view_admin.php">View Admin</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="root.php">Root Portal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $login_session; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
            
    </nav>
        <div id="admin_form"class="container">
         <form method="post" action="<?php $_PHP_SELF ?>">
            <div class="col-lg-12">
<!--                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                <div class="form-group">
                    <label for="InputName">Fisrt Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="admin_fname" id="name" placeholder="First Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="admin_lname" placeholder="Last Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="username" placeholder="User Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailFirst" name="password" placeholder="Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Phone Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="ph_num" placeholder="Phone Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="email" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Admin Pic</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="InputEmailSecond" name="admin_pic" placeholder="Pictures" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Admin Special ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="admin_id" placeholder="Admin Special ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-lg btn-block">
            </div>
        </form>
        </div>


	
       
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
	
    </body>

</html>

