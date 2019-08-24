
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo.jpg" rel="shortcut icon">
    <title>UCC-BWAISE</title>
    
    <!-- core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="Admin_css/bootstrap.css" rel="stylesheet">
    <link href="Admin_css/bootstrap.min.css" rel="stylesheet">
    <link href="Admin_css/font-awesome.min.css" rel="stylesheet">
    <link href="Admin_css/font-awesome.min.css" rel="stylesheet">
    <link href="Admin_css/animate.min.css" rel="stylesheet">
    <link href="Admin_css/prettyPhoto.css" rel="stylesheet">  
    <link href="Admin_css/main.css" rel="stylesheet">
    <link href="Admin_css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/header_style.css">

</head><!--/head-->
<body >
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
    
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" style="display: inline-block;">
                                                  
                              <li><a class=" wow fadeInDown" class="glyphicon glyphicon-envelope" href="addcnp.php"> Add Sermon </a></li>
                              <li><a  class=" wow fadeInDown" class="glyphicon glyphicon-th"href="update_cnp.php"> Update Sermon</a></li>
                           
                        <li id="admin" class="wow fadeInDown"><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span> Admin Account</a></li>
                        <li id="logout" class="wow fadeInDown"><a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span> Logout</a></li>                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

                     <a href="index.php"><img src="img/logo.jpg"  width="35% " /><i class="wow fadeInDown" style="margin-top:-2%; color:#FFF; float:right;"></i></a>

           <script src="Admin_js/jquery.js"></script>
    <script src="Admin_js/bootstrap.min.js"></script>
    <script src="Admin_js/jquery.prettyPhoto.js"></script>
    <script src="Admin_js/jquery.isotope.min.js"></script>
    <script src="Admin_js/main.js"></script>
    <script src="Admin_js/wow.min.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>