    <footer>
      <div class="container-fluid my-5 bg-light p-5">
        <div class="row" style="background-color: #d8d8ea;">
          <div class="col-12 text-center my-3">
		  <!-- <a href="https://www.instamojo.com/@zoyozo_sn/" class="footer_anchor_decoration">
            <button class=" btn gradient" style="color: white; font-weight: bold" >Pay to zoyozo
			
             
			  
            </button> -->
             <?php

    if(isset($_SESSION['cid']))
	{
	    $cid=$_SESSION['cid'];
		?>
		
		<a style="color:#00f" href="http://www.zoyozo.in/zoyozo-registration.php?sponser=<?php echo $cid?>" target="_blank" ><button class=" btn gradient" style="color: white; font-weight: bold" >Refer & Earn
			
             
			  
            </button></a>
		<?php
	}
	?>
			</a>
          </div>
          <div class="col-12 col-md-4 text-center">
            <h4>Quick Links</h4>
            <a href="aboutus.php" class="footer_anchor_decoration">About us </a><br />
            <a href="FAQ.php" class="footer_anchor_decoration">FAQ</a><br />
            <a href="" class="footer_anchor_decoration">Contact us</a><br />
          </div>
          <div class="col-12 col-md-4 text-center mt-5">
            <a href="https://www.instamojo.com/@zoyozo_sn/" class="footer_anchor_decoration">Pay To Apna Hostel  </a><br />
            <a href="customer-polocy.php" class="footer_anchor_decoration">Customer Policy</a
            ><br />
            <a href="privacy_policy.html" class="footer_anchor_decoration">Privacy Policy</a><br />
          </div>
          <div class="col-12 col-md-4 text-center my-5">
            <h4>Follow Us</h4>
            <a href="https://www.facebook.com/Zoyozo-1564437437019822/?modal=admin_todo_tour" class="footer_anchor_decoration"
              ><i class="fab fa-facebook-square fa-2x fa-2x"></i></a>
            <a href="https://www.instagram.com/zoyozoindia/" class="footer_anchor_decoration"
              ><i class="fab fa-instagram-square fa-2x"></i
            ></a>
            <a href="https://mail.google.com/mail/contactzoyozo@gmail.com" class="footer_anchor_decoration"
              ><i class="fa fa-envelope-square fa-2x"></i
            ></a>
            <a href="https://twitter.com/zoyozoindia?s=08" class="footer_anchor_decoration"
              ><i class="fab fa-twitter-square fa-2x"></i
            ></a>
            <a href="https://www.youtube.com/channel/UCdHpjkGCaYdvdT-bwKS3DSQ?disable_polymer=true" class="footer_anchor_decoration"
              ><i class="fab fa-youtube-square fa-2x"></i
            ></a>
          </div>
          <div class="col-12 text-center"> 
		<p>© 2022 Chhatralay. All rights reserved | Powered by <b>"Chhatralay Hospitality and Marketing"</b>
        <a href="https://www.apnahostel.in/"><b>(Chhatralay)</b></a>
        </p>
	     </div>
        </div>
        
      </div>
    </footer>
    