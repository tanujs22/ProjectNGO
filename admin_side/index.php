<?php
   include("connect.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form 
      
      $username=mysqli_real_escape_string($conn,$_POST['username']);
      $password=mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql="SELECT admin_id FROM admin_ngo WHERE username='$username' and password='$password'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active=$row['active'];
      
      $count=mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

       if($count == 2){
           $_SESSION['login_user']=$username;
           
           header("location: root.php");
       
       }
       elseif($count==1)
       {
           $_SESSION['login_user']=$username;
         
           header("location: admin.php");
       }
       else 
       {
           echo"<script>alert('Your Login Name or Password is invalid')</script>";
       }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <style>
          body{
              background-color: #979797;
          }
          .panel-body{
              background-color: #eeeeee;
          }
       </style>
   </head>
   
   <body bgcolor="#979797">

       <div id="log_panel" class="container">
           <div class="panel panel-primary">
               <div class="panel-heading"><center>Login</center></div>
               <div class="panel-body">
                   <form method="post" action="">
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
                   <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
                   </form>
               </div>
           </div>
       </div>

   </body>
</html>