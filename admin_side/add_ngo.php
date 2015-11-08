<html>
<head>
<title>Register NGO</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
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

   		$name = $_POST['name']; 
		$locality= $_POST['locality']; 
		$city= $_POST['city']; 
		$state= $_POST['state']; 
		$pin_code= $_POST['pin_code']; 
		$ph_number=$_POST['ph_number'];
		$website = $_POST['website'];
		$ngo_logo= $_POST['ngo_logo']; 
		$ngo_id= $_POST['ngo_id']; 

		mysqli_select_db($conn,'project_ngo');

		$query = "INSERT INTO ngo_detail(name,locality,city,state,pin_code,ph_number,website,ngo_logo,ngo_id) VALUES ('$name','$locality','$city','$state','$pin_code','$ph_number','$website','$ngo_logo','$ngo_id')"; 	


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
                    <li>
                        <a class="page-scroll" href="view_ngo.php">NGO List</a>
                    </li>
                    <li class="active">
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
    <div id="admin_form"class="container">


        
        <form method="post" action="<?php $_PHP_SELF ?>" >
            <div class="col-lg-12">
<!--                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                <div class="form-group">
                    <label for="InputName">NAME</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="*Enter name of the NGO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">LOCALITY</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst"  placeholder = "*Enter locality"  name = "locality" required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">CITY</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder = "*Enter city" id="city" name = "city" required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tower"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">STATE</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder = "*Enter state" id="state" name = "state"  required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-road"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">PINCODE</label>
                    <div class="input-group">
                        <input type="text" class="form-control"placeholder = "*Enter pincode" id="pincode" name = "pin_code"  required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-pushpin"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">WEBSITE</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder = "Enter website (if any)" name = "website"required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">PHONE NUMBER</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder = "*Enter phone number" name = "ph_number" id="phone" required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">NGO LOGO</label>
                    <div class="input-group">
                        <input type="file" class="form-control" input type="file" name=ngo_logo required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">NGO ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder = "*Enter unique ngo id" name = "ngo_id" id="ngo_id" required/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                    </div>
                </div>
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-lg btn-block">
            </div>

        </form>
    </div>
    


	<center><p>Powered by Cumbre Technologies</p></center>
	

</body>
</html>

