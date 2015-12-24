<?php
   include('session.php');
if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }

    

	 if($_SERVER["REQUEST_METHOD"] == "POST")
   	{
         $target = "img/pan_pic/";
         $target = $target . basename( $_FILES['Filename']['pan_name']);

//This gets all the other information from the form
         $Filename=basename( $_FILES['Filename']['pan_name']);
         move_uploaded_file($_FILES['Filename']['tmp_name'], $target);
        $blog_id = $_POST['blog_id']; 
		$pan_name = $_POST['pan_name']; 
		$pan_desc = $_POST['pan_desc']; 
		$pan_email = $_POST['pan_email']; 
		
//		$target = $_POST['Filename'];
		$blog_title = $_POST['blog_title']; 
		$blog_post = $_POST['blog_post']; 
       
		mysqli_select_db($conn,'project_ngo');
        


		$query = "INSERT INTO blog_detail(blog_id,pan_name,pan_desc,pan_email,pan_pic,blog_title,blog_post) VALUES ('$blog_id','$pan_name','$pan_desc','$pan_email','$pan_pic','$blog_title','$blog_post')"; 	

         
$result = mysqli_query($conn,$query);
 if ($result) 
     {?>
		<script>alert(" Blog added successfully");</script>
<?php
		echo '<script type="text/javascript"> window.open("add_blog.php","_self");</script>'; 
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
        <title>Manage Blog</title>
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
                    <li>
                        <a class="page-scroll" href="view_blog.php">View Blogs</a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="add_blog.php">Create New Blog</a>
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
<!--        -->
        <div id="admin_form"class="container">
         <form enctype="multipart/form-data" method="post" action="<?php $_PHP_SELF ?>">
            <div class="col-lg-12">
<!--                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                <div class="form-group">
		   <label><u>PANELIST INFORMATION</u></label><br>
                    <label for="InputName">Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="pan_name" id="name" placeholder="Enter panelist name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">E-mail</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="pan_email" placeholder="Enter panelist description" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Description</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="pan_desc" placeholder="Enter panelist description" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Picture</label>
                     <div class="input-group">
                        <input type="file" class="form-control" id="InputEmailSecond" name="Filename" placeholder="Add panelist picture" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                    </div>
                </div>
		  <label><u>BLOG INFORMATION</u></label><br>
		  <div class="form-group">
                    <label for="InputEmail">Blog ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="blog_id" placeholder="Enter blog ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Title</label>
                    <div class="input-group">
                        <input type="text"  class="form-control" id="InputEmailFirst" name="blog_title" placeholder="Enter blog title" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-header"></span></span>
                    </div>
                </div>
               <div class="form-group">
                    <label for="InputEmail">Post</label>
                    <div class="input-group">
                        <textarea name="blog_post" id="About"  placeholder="Post the blog here...." rows="15" class="col-lg-12 form-control" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    </div>
                </div>
              
              
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-lg btn-block">
            </div>
        </form>
        </div>


	<center><p>Powered by Cumbre Technologies</p></center>
	
       
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
	
    </body>

</html>

