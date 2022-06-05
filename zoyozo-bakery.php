<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ZOYOZO : For Hostels , Foodeing , Bakeries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
		 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(document).ready(function()
	{
		$("#btnBakery").click(function(){
					
					var name=$("#OtxtName").val();
					var mobile=$("#OtxtMobile").val();
					var msg=$("#txtMsg").val();
					var orderId=$("#selected-bakery-id").val();
				
						$.ajax({
							 type:'post',
							 url: 'order-product-action.php',
							 data: {'action':'add-order','name':name,'mobile':mobile,'msg':msg,'orderId':orderId},
							 success: function(data)
							 {    
								 $("#msg").html(data);
								 $("#msg").slideDown("slow");
								 $("#msg").slideUp(3000,function(){
									form_blank();
									 });
								
							 }
							
						 });
					
				});
													function form_blank()
	{
		$("#OtxtName").val("");
		$("#OtxtMobile").val("");
		$("#txtMsg").val("");
		
			
			
	}
		$(".book-now-bakery").click(function()
		{	
            var id=$(this).attr("id");
			$("#selected-bakery-id").val(id);
			
		});
	});
</script>
</head>

<body>
    <!-- banner -->
<?php include("header.php") ?>

    <!-- register -->
   
    <!-- //register -->
    <!-- services -->
 <div>
        <div class="container ">
            <div class="title-wthree text-center">
                <h3 class="agile-title   text-black">
                    bakery service
                </h3>
                <span></span>
            </div>
            <div class="row" id="grid-hostels">
		
              
			  <center><h2>Coming Soon...</h2></center>  
			  <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <!-- //services -->
    <!-- //container -->
    <!-- //banner -->
    <!-- process -->
    
    <!-- //process -->
   
    <!-- contact -->
    
 <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Order Now</h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		 <div class="form-group" style="color:black">
						<label for="name">You Selected(Product ID):</label>
						<input type="text" class="form-control" id="selected-bakery-id" readonly="readonly">
					  </div>
							  <div class="form-group" style="color:black">
						<label for="name">Nmae:</label>
						<input type="text" class="form-control" id="OtxtName">
					  </div>
					  <div class="form-group"style="color:black">
						<label for="phone">Mobile:</label>
						<input type="text" class="form-control" id="OtxtMobile">
					  </div>
					   <div class="form-group"style="color:black">
						<label for="message">Any Special Requirement:</label>
						<textarea type="text" class="form-control" id="txtMsg"></textarea>
					  </div>
					  <div class="form-group form-check"style="color:black">
						
					  </div>
					  <div id="msg"></div>
					  <button type="submit" class="btn btn-primary" id="btnBakery">Submit</button>&nbsp
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>

        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
    <!-- //contact -->
<?php include ("footer.php") ?>
    <!-- login  -->
   
    <!-- //login -->
    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>