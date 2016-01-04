<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>PROJECT-NGO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="file:///C|/xampp/htdocs/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="file:///C|/xampp/htdocs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="file:///C|/xampp/htdocs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="file:///C|/xampp/htdocs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="file:///C|/xampp/htdocs/assets/ico/apple-touch-icon-57-precomposed.png">

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>


    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="file:///C|/xampp/htdocs/home.php"><img src="file:///C|/xampp/htdocs/assets/img/logo30.png" alt=""> PROJECTNGO</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="file:///C|/xampp/htdocs/home.php><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="#"><i class="icon-folder-open icon-white"></i> File Manager</a></li>
              <li><a href="#"><i class="icon-calendar icon-white"></i> Calendar</a></li>
              <li><a href="#"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="#"><i class="icon-lock icon-white"></i> Login</a></li>
              <li><a href="file:///C|/xampp/htdocs/reg.php"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
      <!-- DONUT CHART BLOCK -->
      <!-- DONUT CHART BLOCK -->
      </div>
      <!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <!-- /span3 -->

	    <!-- GRAPH CHART - lineandbars.js file -->
	    <!-- LAST MONTH REVENUE -->
	    <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->
      </div>
      <!-- /row -->
     
 
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
        <!-- LATEST NEWS BLOCK -->
      </div>
      <!-- /row -->
      
	  <!-- FOURTH ROW OF BLOCKS -->     
	<div class="row">
	
	  <!-- TWITTER WIDGET BLOCK -->
	  <!-- NOTIFICATIONS BLOCK -->
	  <!-- SWITCHES BLOCK -->
	  <!-- GAUGE CHART BLOCK -->
	</div>
	<!--/row -->     
      
 	  <!-- FOURTH ROW OF BLOCKS -->     
		<div class="row">

 	  <!-- ACCORDION BLOCK -->
 	  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Modal title</h4>
			        </div>
			        <div class="modal-body">
			          ...
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
 	  		<!-- FAST CONTACT BLOCK -->
  		  <!-- INFORMATION BLOCK -->     
<div class="col-sm-3 col-lg-3"></div>

	  </div><!--/row -->
     
      
      
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row"></div>
   		  <!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/lineandbars.js"></script>
    
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/dash-charts.js"></script>
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/noty/students/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the student-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="file:///C|/xampp/htdocs/assets/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="file:///C|/xampp/htdocs/assets/js/admin.js"></script>
  
</body></html>
