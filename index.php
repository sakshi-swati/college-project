<?php session_start(); ?>
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
    <link rel="stylesheet" href="card.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    
    
    <link href="loggo.png" rel="icon" type="image/x-icon" />
    <title>Chhatralay : For Hostel</title>
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-custom text-center fixed-top"
    >
      <a class="navbar-brand" href="index.php" style="color: white; font-size:35px; font-weight:650"
        >Chhatralay</a>
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
            <a class="nav-link" href="index.php" style="color: white; font-size: 20px"
              >Home</a
            >
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="aboutus.php" style="color: white; font-size: 20px"
              >About Us</a
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
    <section class="gradient my-5" style="margin-bottom:0%; background-image: url('img2.jpg'); background-size:cover; height:80vh; ">
      <div class="container">
        <div class="row text-center align-items-center" style="padding: 20%;">
        
          <div class="domain ">
            <h1 style="background: rgba(0, 0, 0, 0.5); font-size:7.5rem;font-weight:650;color:azure">Chhatralay</h1><br>
            <p style="font-size: 3rem; color:beige;font-weight:590">We find Better!!!</p>
            
          </div>
        </div>
      </div>
    </section>
   
	<div class="container-fluid">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <div class="fluid-container service" style="margin-top:0;"; >
      <div class="col-12 text-center my-5">
        <br><br><h1 class="title_border"><b>Our Services</b></h1>
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
                  class="btn btn-primary "
                  style="color: black; font-weight: bold"
                  >Get at your comfort</a
                >
              </div>
            </div>
          </div>
        </div>
</center>
        
        <div class="col-12 col-lg-6">
      
            
              
              <h2 >Get hostel in your locality without searching and wasting your time</h2>
              <h4>Our Services</h4>
               
                  <li><i class="bx bx-chevron-right "></i> <a class="foo" href="#">Hostel At your place</a></li>
                  <li><i class="bx bx-chevron-right "></i> <a class="foo" href="#">Hostel in your range</a></li>
                  <li><i class="bx bx-chevron-right "></i> <a class="foo" href="#">Search from your home</a></li>
                  <li><i class="bx bx-chevron-right "></i> <a class="foo" href="#">Contact to Hostel</a></li>
                  <li><i class="bx bx-chevron-right "></i> <a class="foo" href="#">search anywhere </a></li>
               
              </div>

              <div class="text-center">
                <a
                  href="Chhatralay-hostel.php"
                  class="btn gradient"
                  style="color: white; font-weight: bold"
                  >Search</a> <br><br><br>
              </div>
           
          
        </div> 
      </div>
    </div>
    <section class="project"><a id="project"></a>
      <div class="container-fluid bg-light">
        <div class="col-12 text-center my-5">
          <br><br><h1 class="title_border"><b>Best For You</b></h1>
        </div><br>
        <div class="card-wrapper" >
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/2.jpg" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/3.jpg" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/5.jfif" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/21.jfif" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/8.jpg" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/cont.jpg" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/9.jpg" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="card middle">
            <div class="front">
              <img src="../college-project/hostel pic/pic 1.jpg" alt="">
              <h4>Vinayak Hostel</h4>
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2>Vinayak Hostel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div><br><br><br>
      </div>
    </section>	

    

   
    <div>
	<?php
include("register.html");
?>
</div>
    <!--Testimonial-->

    <div class="slideshow-container">
      <div class="col-12 text-center">
        <h1 class="pt-5"><b>Our Happy Users</b></h1>
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
            I agree the best ebsite for hostels is definetly CHHATRALAY.
                  </q>
        <p class="author"><b>- Ravina Sehgal</b></p>
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
              Have to say Chhatralay is the best accommodation finding app in the market.
                  </q
      
         <p class="author"><b>- Advik Singhaniya</b></p>
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
           I must say to everyone who is looking to find the best hostels in different Cities.
                  </q>
        <p class="author"><b>- Sakshi Goyal</b> </p>
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
           I recommend Chhatralay to everyone who is looking to find the best hostels in different Cities.
                  </q>
        <p class="author"><b>- Aparna Supriya</b> </p>
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
        <p class="author"><b>- Piyush Goyal</b> </p>
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
  

  <div>
  <?php include ("footer.php") ?>
								</div>

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
