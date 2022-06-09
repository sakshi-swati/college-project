<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <title>About Us</title>
  </head>
  <body>
  <div>
    <!-- navbar  start -->
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
            <a class="nav-link" href="chhatralay-hostel.php" style="color: white; font-size: 20px"
              >Find Hostel</a
            >
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="chhatralay-mess.php" style="color: white; font-size: 20px"
              >Book Mess</a
            >
          </li>
         
          <?php

    if(isset($_SESSION['cid']))
	{
		?>
		
		  <a class="nav-link" href="dashboard.php" style="color:#ff0; font-size: 20px"
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
    <!-- navbar ends -->




</div>
    <div class="container-fluid mt-3 p-5 bg-light">
      <div class="row">
        <div class="col-md-6 col-12">
        <!-- src="relax.svg" -->
          <img
            src="about us/about.jpg"
            style="height: 80%; width: 100%;  margin-top: 50px;" alt="hostel"
            />
        </div>
        <div class="col-md-6 col-12 mt-5">
          <h2><b>Why   <span style="color: #2f4f4f;">WE?</span></b></h2>
          <div class="mt-4">
            <p style="font-size: large">
             CHHATRALAY is a platform where we provide hostel, mess and much more facilities. </p>
             <p>It is a collaboration with various hostels. you can book your hostel rooms by just few clicks.
              you can even quickly check reviews,images and amenities of all hostels and compare hostels available 
              as per your preferences.
            </p>
			      <p style="font-size: large">
              To avoid the last minute hostel search in an unknown city with higher prices, this is the best site that offers hostels at
              reasonable prices with great discounts.
              
            </p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3 p-5">
      <div class="row">
        <div class="col-md-6 col-12">
          <img
            src="community.svg"
            style="height: 100%; width: 100%; object-fit: contain"
          />
        </div>
        <div class="col-md-6 col-12 mt-5">
          <h2><b>We build <span style="color: #2f4f4f;">communities</span></b></h2>
          <div class="mt-4">
            <p style="font-size: large">
              For a stable and effective environment, people have to learn how to build community especially in college . This is one of the critical roles of colleges is to help establish community to help benefit students later on in the future.  

            <p style="font-size: large">
              In a recent study it was concluded that we become connected for reason of commitment rather than compliance meaning that people are bonded to each other as a result shared values, traditions, ideas, and interests.
            <b>All our properties are built in such a way that you will feel connected like your home .</b> We know that our users work very hard so at the end of the day they  will need such place where they  can relaxed and feel comfortable.
              
            </p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="container-fluid  p-5 bg-light">
      <div class="row">
        <div class="col-md-6 col-12">
          <img
            src="different.svg"
            style="height: 100%; width: 100%; object-fit: contain"
          />
        </div>
        <div class="col-md-6 col-12 mt-5">
          <h2><b>What make us  <span style="color: #2f4f4f;">different?</span></b></h2>
          <div class="mt-4">
            <p style="font-size: large">
              Zoyozo is started with a thinking in mind that <b>we will provide home like stay to a user in just a different city</b>. 
              Zoyozo is that  kind technology startup that connects accommodation seekers and suppliers on one platform, exclusion of the middle-man. 

            </p>
            <p style="font-size: large">
              We tend to aim to produce a clear platform wherever users will see associate mass list of verified PGs and Hostels to settle on from. Users will see the reviews, tariffs, accessibility and different details bushed one place. You can book the hostel and mess in just one go by visiting to our website or app on google play store . All the process including payment is very smooth.
              
            </p>
          </div>
        </div>
      </div>
    </div> -->

   

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
	<div>
	<?php include("footer.php") ?>
</div>
  </body>
</html>
