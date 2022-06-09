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
    <title>chhatralay : For Hostel,Meal& Hotel</title>
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-custom text-center fixed-top"
    >
      <a class="navbar-brand" href="index.php" style="color: white">
      <img class="logo p-2 m-1" style="width: 150px" src="logo.jpeg"/>
      </a>
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
            <a class="nav-link" href="chhatralay-hostel.php" style="color: white; font-size: 20px"
              >Find Hostel</a
            >
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="chhatralay-mess.php" style="color: white; font-size: 20px"
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
		  <a class="nav-link" href="chhatralay-registration.php" style="color: white; font-size: 20px"
              >Register
            </a>
          </li>
          <li>
		  <a class="nav-link" href="chhatralay-login.php" style="color:#ff0; font-size: 20px"
              >Login
            </a>
          </li>
         <?php
	}
	?>
        </ul>
      </div>
    </nav>
    <section class="gradient my-5" style="background-image: linear-gradient(135deg, #09203f 10%, #537895 100%);">
      <div class="container">
        <div class="row text-center align-items-center">
          <div class="col-12 col-md-6">
            <img
              class="w-100"
              src="https://cdn2.iconfinder.com/data/icons/buildings-66/92/33-512.png" style="margin-top: 25px;"
              alt="md sohail ahmad"
            />
          </div>
          <div class="col-12 col-md-6">
            <div
              class="font-weight-dark desktop mobile_screen_banner_text"
              style="color: white"
            >
              Welcome to <b><span style="color: rgb(0, 0, 0)">CHHATRALAy</span></b>
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
   
	<div class="container-fluid bg-light">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <div class="fluid-container service" >
      <div class="col-12 text-center my-5">
        <h1 class="title_border"><b>Our Services</b></h1>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6">
        <center>  <div class="card card_center shadow" style="width: 18rem">
            <img
              src="https://media.istockphoto.com/vectors/accommodation-in-hostel-vector-flat-illustration-vector-id1052361836?k=6&m=1052361836&s=170667a&w=0&h=zFy0t5q8c4tAJ9jeOnXp8r4-CsUASm0h1ZvBrdz1C9w="
              class="card-img-top"
              alt="..."
              style="height: 210px"
            />
            <div class="card-body">
              <h2 class="card-title text-center">Hostel</h2>

              <div class="text-center">
                <a
                  href="chhatralay-hostel.php"
                  class="btn gradient"
                  style="color: white; font-weight: bold"
                  >Book Hostel</a
                >
              </div>
            </div>
          </div>
        </div>
</center>
        
        <div class="col-12 col-lg-6">
        <center>  <div class="card card_center shadow" style="width: 18rem; height: 44.5vh;">
            <img src="R.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h2 class="card-title text-center">Mess</h2>

              <div class="text-center">
                <a
                  href="Apna Hostel-mess.php"
                  class="btn gradient"
                  style="color: white; font-weight: bold"
                  >Book Mess</a
                >
              </div>
            </div>
          </div>
        </div> </center>
      </div>
    </div>
	

    <div class="container">
      <div class="row">
        <div class="col-12 text-center my-5">
          <h1><b>Our Facilities</b></h1>
        </div>

        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-lightbulb fa-5x my-2 my-2"></i>
          <div><b>Electricity</b></div>
        </div>
        <div class="col-6 col-md-3 text-center text-center">
          <i class="fas fa-shield-alt fa-5x my-2"></i>
          <div><b>Security</b></div>
        </div>
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-bread-slice fa-5x my-2"></i>
          <div><b>Breakfast</b></div>
        </div>

        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-bed fa-5x my-2"></i>
          <div><b>Spotless Linen</b></div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-plug fa-5x my-2"></i>
          <div><b>Power Supply</b></div>
        </div>
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-pump-soap fa-5x my-2"></i>
          <div><b>Regular Cleaning</b></div>
        </div>
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-parking fa-5x my-2"></i>
          <div><b>2 Wheeler Parking</b></div>
        </div>

        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-wifi fa-5x my-2"></i>
          <div><b>Wifi</b></div>
        </div>
      </div>
    </div>

   
    <div>
	<?php
include("register.html");
?>
</div>
    <!--Testimonial-->

    <div class="slideshow-container">
      <div class="col-12 text-center">
        <h1 class="pt-5"><b>What people have to say?</b></h1>
      </div>

      <div class="mySlides">
        <img
          src="testimonial.png"
          style="
            height: 150px;
            width: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <q>
        I was able to find very spacious and well-maintained service Hostel at a very affordable price using your service.
                  </q>
        <p class="author"><b>- Shubham Agrawal</b></p>
      </div>

      <div class="mySlides">
        <img
          src="testimonial.png"
          style="
            height: 150px;
            width: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <q
          >
              Have to admit Apna Hostel is the best accommodation finding app in the market.
                  </q
        >
        <p class="author"><b>- Muskan Kumari</b></p>
      </div>

      <div class="mySlides">
        <img
          src="testimonial.png"
          style="
            height: 150px;
            width: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <q>
           I recommend Apna Hostel to everyone who is looking to find the best hostels in different Cities.
                  </q>
        <p class="author"><b>- Sakshi Goyal</b> </p>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
  

    <footer>
      <div class="container-fluid my-5 bg-light p-5">
        <div class="row" style=" background-color: #d8d8ea;">
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
          <div class="col-12 text-center"> 
		<p>© 2019 Apna Hostel. All rights reserved | Powered by <b>"Apna Hostel Hospitality and Marketing"</b>
        <a href="https://www.Apna Hostel.in/"><b>(Apna Hostel)</b></a>
        </p>
	     </div>
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
