<!DOCTYPE html>
<head>
<title>CHHATRALAY - Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
$("#txtId").focus();

//Admin Login Start.....
   $("#btnMemberLogin").click(function(){
	 var id=$("#txtId").val();
   var pwd=$("#txtPassword").val(); 
	    
		$.ajax({
			 type:'post',
			 url:'login-action.php',
			 data: {'id':id,'pwd':pwd},
			 success: function(data)
			 {	 
			 
				 var x=parseInt(data);
				 if(x=="1")
				 {
					
				 window.location="./dashboard.php";
				 }
				 else
				 { 
				 $("#btnLogin").html("Login");
				 $("#error_disp_login").html(data); 
				 $("#error_disp_login").slideDown("slow");
				 $("#error_disp_login").slideUp(3000); 
				 }
			 }
			
		 });
	
  });
//Admin Login End.....
});
</script>
</head>
<body style="overflow: hidden;height=100%;">
<section class="data" style="background-image: url('login_pic.jpg');padding:30px 30px; background-size:cover; height:110vh;width:100%">
      <br><br><br><br>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4" style=" width:40%; background-color: black; d-flex; box shadow:20px,20px; opacity:0.7; ">
      <br><br>
    <center>
       
         	<h2 style="color:white; weight:strong;"> <b>User Login</b></h2>
    </center>

		<div class="form-group">
		<p style="color:white; weight:strong;"> <b>Enter Mobile Number *</b></p>
							   
                               <input class="form-control" placeholder="Enter Mobile Number" name="txtId" id="txtId" type="text" />
                                </div>
                                <div class="form-group">
								<p style="color:white; weight:strong;"> <b> Enter Password *</b></p>
                                   
                             <input class="form-control" placeholder="Enter Password" name="txtPassword" id="txtPassword" type="password" />
                                </div>
                                
                                <div id="error_disp_login"></div>
								<center>
								<button type="button" id="btnMemberLogin"  class="btn btn-lg btn-primary">LOGIN NOW</button>
								</center>
		<p style="color:white; weight:strong;"> <b>Not yet registered ?<a href="chhatralay-registration.php" style="color:white; weight:strong;"> <b><br>Register</a></p>
		<br><br>
			<!-- Note - All (*) marked fileds are required. -->
</div>
  <div class="col-sm-4"></div>
</div>
	<br><br><br><br><br><br>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
