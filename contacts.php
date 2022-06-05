<?phpsession_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    
    
    <link href="loggo.png" rel="icon" type="image/x-icon" />
    <title>Apna Hostel : For Hostel,Meal& Hotel</title>
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-custom text-center fixed-top"
    >
      <a class="navbar-brand" href="index.php" style="color: white"
        ><img class="logo p-2 m-1" style="width: 150px" src="logo.jpeg"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ul-class">
          <li class="nav-item mx-2">
            
          <li class="nav-item mx-2">
            <a class="nav-link" href="apnaHostel-hostel.php" style="color: white; font-size: 20px"
              >Find Hostel</a
            >
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="apnaHostel-mess.php" style="color: white; font-size: 20px"
              >Book Mess</a
            >
          </li>
          
          <li>
		  <a class="nav-link" href="contacts.php" style="color: white; font-size: 20px"
              >Contact Us
            </a>
          </li>
          <?php
    if(isset($_SESSION['cid']))
	{
		?>
		
	
		 <li>
		  <a class="nav-link" href="dashboard.php" style="color:#f00; font-size: 20px"
              ><span class="glyphicon glyphicon-user"></span>My Account
            </a>
          </li>
          <li>
		  <a class="nav-link" href="logout.php" style="color:#ff0; font-size: 20px"
              >logout
            </a>
          </li>
		<?php
	}
	else
	{
          ?>
          <li>
		  <a class="nav-link" href="apnaHostel-registration.php" style="color: white; font-size: 20px"
              >Register
            </a>
          </li>
          <li>
		  <a class="nav-link" href="apnaHostel-login.php" style="color:#ff0; font-size: 20px"
              >Login
            </a>
          </li>
         <?php
	}
	?>
        </ul>
      </div>
    </nav>
    <section class="gradient my-5">
      <div class="container">
        <div class="row text-center align-items-center">
          <div class="col-12 col-md-6">
            <img
              class="w-100"
              src="https://cdn2.iconfinder.com/data/icons/buildings-66/92/44-512.png"
              alt="md sohail ahmad"
            />
          </div>
          <div class="col-12 col-md-6">
            <div
              class="font-weight-dark desktop mobile_screen_banner_text"
              style="color: white"
            >
              Welcome to <b><span style="color: rgb(0, 0, 0)">APNA HOSTEL</span></b>
            </div>
            <h2
              class="font-weight-dark mobile_screen_banner"
              style="color: white"
            >
              NO HOMESICKNESS!
            </h2>
          </div>
        </div>
      </div>
    </section>
   


    <!--Contact-->

    <div class="container my-5">
      <div class="col-12 text-center">
        <h1><b>Contact</b></h1>
      </div>
      <form action="">
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Your name.."
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name.."
        />

        <label for="email">Email</label>
        <input
          type="text"
          id="email"
          name="email"
          placeholder="Your email id"
        />

        <label for="subject">Your Message</label>
        <textarea
          id="subject"
          name="subject"
          placeholder="Write something.."
          style="height: 200px"
        ></textarea>

        <input type="submit" value="Submit" class="gradient" />
      </form>
    </div> 
	<div>

</div>
    

    <footer>
      <div class="container-fluid my-5 bg-light p-5">
        <div class="row">
          <div class="col-12 text-center my-3">
		  <!-- <a href="https://www.instamojo.com/@Apna Hostel_sn/" target="_blank"  class="footer_anchor_decoration">
            <button class=" btn gradient" style="color: white; font-weight: bold" >Pay to Apna Hostel
			 
            </button>
			</a> -->
          </div>
          <div class="col-12 col-md-4 text-center">
            <h4>Quick Links</h4>
            <a href="aboutus.php" class="footer_anchor_decoration">About us </a><br />
            <a href="FAQ.php" class="footer_anchor_decoration">FAQ</a><br />
            
            <a href="#contactus" class="footer_anchor_decoration">Contact us</a><br />
          </div>
          <div class="col-12 col-md-4 text-center mt-5">
            <a href="https://www.instamojo.com/@Apna Hostel_sn/" target="_blank"  class="footer_anchor_decoration">Pay To Apna Hostel</a><br />
            <a href="customer-polocy.php" class="footer_anchor_decoration">Customer Policy</a
            ><br />
            <a href="privacy_policy.html" class="footer_anchor_decoration">Privacy Policy</a><br />
          </div>
          <div class="col-12 col-md-4 text-center my-5">
            <h4>Follow Us</h4>
            <a href="https://www.facebook.com/Apna Hostel-1564437437019822/?modal=admin_todo_tour" target="_blank" class="footer_anchor_decoration"
              ><i class="fab fa-facebook-square fa-2x fa-2x"></i></a>
            <a href="https://www.instagram.com/Apna Hostelindia/" target="_blank"  class="footer_anchor_decoration"
              ><i class="fab fa-instagram-square fa-2x"></i
            ></a>
            <a href="https://mail.google.com/mail/contactApna Hostel@gmail.com" target="_blank"  class="footer_anchor_decoration"
              ><i class="fa fa-envelope-square fa-2x"></i
            ></a>
            <a href="https://twitter.com/Apna Hostelindia?s=08" target="_blank"  class="footer_anchor_decoration"
              ><i class="fab fa-twitter-square fa-2x"></i
            ></a>
            <a href="https://www.youtube.com/channel/UCdHpjkGCaYdvdT-bwKS3DSQ?disable_polymer=true" target="_blank" class="footer_anchor_decoration"
              ><i class="fab fa-youtube-square fa-2x"></i
            ></a>
          </div>
        </div>
        <div class="col-12 text-center"> 
		<p>© 2019 Apna Hostel. All rights reserved | Powered by <b>"Apna Hostel Hospitality and Marketing"</b>
        <a href="https://www.Apna Hostel.in/"><b>(Apna Hostel)</b></a>
        </p>
	     </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

   
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fb76377920fc91564c8d789/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>