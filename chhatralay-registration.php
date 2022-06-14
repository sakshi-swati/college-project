<?php
$sponser="";
if(isset($_GET['sponser']))
{
    $sponser=$_GET['sponser'];
}
?>
<!DOCTYPE html>
<head>
<title>chhatralay- Register </title>
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

//$("#txtCid").focus();
setTimeout(function() {
$("#txtCid").trigger('click');
},10);

//Get Sponser
$('#txtCid').on('input', function() {
		var Cid=$("#txtCid").val();
		
		$.ajax({
			 type:'post',
			 url:'get-sponser.php',
			 data: {'Cid':Cid},
			 success: function(data)
			 {	 
			 
				 $("#txtSponserName").html(data);
				 
			 }
			
		 });
	
} );
$('#txtCid').on('click', function() {
		var Cid=$("#txtCid").val();
		
		$.ajax({
			 type:'post',
			 url:'get-sponser.php',
			 data: {'Cid':Cid},
			 success: function(data)
			 {	 
			 		 
				 $("#txtSponserName").html(data);
				 
			 }
			
		 });
	
} );

//Admin Login Start.....
   $("#btnRegister").click(function(){
     
	 var cid=$("#txtCid").val();
     var name=$("#txtName").val(); 
     var mobile=$("#txtMobile").val(); 
     var aadhar=$("#txtAadhar").val(); 
     
		$.ajax({
			 type:'post',
			 url:'registration-action.php',
			 data: {'action':'registration','cid':cid,'name':name,'mobile':mobile,'aadhar':aadhar},
			 success: function(data)
			 {	 
			 
				 alert(data);
				 $("#btnRegister").html("Register");
				 $("#error_disp_register").html(data); 
				 $("#error_disp_register").slideDown("slow");
				 $("#error_disp_register").slideUp(8000); 
				 $("#txtCid").val("");
                 $("#txtName").val(""); 
                 $("#txtMobile").val(""); 
                 $("#txtAadhar").val(""); 
                 $("#txtCid").focus();
				 
			 }
			
		 });
	
  });
//Admin Login End.....
});
</script>
</head>
<body style="overflow: hidden;height=100%;">
	
<section class="data" style="background-image: url('login_pic.jpg');padding:30px 30px; background-size:cover; height:110vh;width:100%">
<br>
<div class="row">
  <div class="col-sm-4">&nbsp;</div>
  <div class="col-sm-4" style=" width:40%; background-color:black; d-flex box shadow:20px,20px; opacity:0.7; ">
      <br><br>
    <center>
        
         	<h2 style="color:white; weight:strong;"> <b>Register</b></h2>
    </center>
		                  <div class="form-group">
						  <p style="color:white; weight:strong;"> <b> Enter Sponser/Reference Mobile Number(If any)</b></p>
                               <input class="form-control" placeholder="Enter Reference Mobile" name="txtCid" id="txtCid" type="text" value="<?php echo $sponser; ?>" />
                               
                         </div>
                         <div id="txtSponserName" style="color:#000"></div>
                         <br>
                         <div class="form-group">
							  <p style="color:white; weight:strong;"> <b> Enter Name *</b></p>
                               <input class="form-control" placeholder="Enter Name" name="txtName" id="txtName" type="text" />
                         </div>
                         <div class="form-group">
						 <p style="color:white; weight:strong;"> <b>  Enter Mobile Number * </b></p>
							  
                               <input class="form-control" placeholder="Enter Mobile" name="txtMobile" id="txtMobile" type="text" />
                         </div>
                         <div class="form-group">
						 <p style="color:white; weight:strong;"> <b>password *</b></p>
							
                               <input class="form-control" placeholder="Enter Password" name="txtAadhar" id="txtAadhar" type="password" />
                         </div>
                                
                                <div id="error_disp_register"></div>
								<center>
								<button type="button" id="btnRegister"  class="btn btn-lg btn-primary">Register</button>
								</center><br>
		<p style="color:white; weight:strong;">Allready registered ?<a href="chhatralay-login.php" style="color:white; weight:strong;">Login</a>
		</p>
			<!-- Note - All (*) marked fileds are required. -->
</div>
  <div class="col-sm-4">&nbsp;</div>
</div>
	
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
