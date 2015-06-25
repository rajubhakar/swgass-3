
<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Katora Bank</title>

<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="js.js"></script>

<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body bgcolor="red">




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>






<div id="container">
<div id="navbar">
<ul>
<a href="index.php" id="nav1">Home</a>
<a href="#" data-toggle="modal" data-target="#myModal2" id="nav2">Login</a>
<a href="#" data-toggle="modal" data-target="#myModal" id="nav3">Register</a>
<a href="track.php" id="nav4">Track</a>
</ul>
</div>


 <div id="slideshow">
        <img src="slide1.jpg" id="slide"/>
             </div>


<div id="banking" style="text-align:center;position:relative; top:120px;">

<div class="row">

<div class="col-lg-3"><img src="Atm.png"><br /><h3>Find ATM/BRANCH</h3><br>
Bank 24/7 through a widespread network of over 4,050 branches and 12720 ATMs.</div>
<div class="col-lg-3"><img src="Facebook.png"><br>
<h3>Pockets by ICICI Bank</h3><br>
VISA powered universal payment wallet.Download today.
</div>
<div class="col-lg-3"><img src="InternetBanking.png"><h3>Internet Banking</h3><br>
Explore the power of simpler and <br>
smarter banking.Bank online
<br>
with over 250 services.</div>
<div class="col-lg-3"><img src="MobileBanking.png"><h3>Mobile Banking</h3><br>
Bank on the go with our Mobile Banking services.Download our app or use sms.
</div>
</div>


</div></div>

</div>


<script type="text/javascript">slideit()</script>



  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header"><h1>Register</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form style="width:400px;position:relative; border:2px;text-align:center;" name="registration" method="post" action="registration.php">
          		<div class="row">
                <input type="text" name="name" placeholder="name" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;"></div>
 <div class="row">           <input type="text" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" name="username" placeholder="User Name">
           </div><div class="row">    <input type="password" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" name="password" placeholder="Password">
            </div><div class="row">    <input id="password" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" name="cpass" type="password" placeholder="Password">
            </div><div class="row">    <input name="email" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" type="email" placeholder="Email">
            </div><div class="row">    <input name="resident" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" type="text" placeholder="Address">
            </div><div class="row">    <input name="city" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" type="text" placeholder="City">
          </div><div class="row">	<button class="btn register" style="text-align:center;margin-bottom:20px; height:30px; width:200px; vertical-align:central;" type="submit" name="submit" value="Register">Register</button>
          </div>
          </form>
        </div>
 
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>








<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header"><h1>Login</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        
 				<form id="login" action="login.php" method="post" accept-charset='UTF-8'>
                
        			User Name:<input placeholder="user Name" type="text" name="myusername">
                    Passowrd:<input placeholder="Your Password" type="password" name="mypassword">       
                	<button class="btn login" type="submit" name="btn-login" value="Login" />
                
                
                </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>










<footer>
	<div style="position:relative; top:250px;height:550px; background-color:#666" class="footer">

<div class="row">



<div class="col-md-4">

<div id="Addressing" style="text-align:center; color:white;">
<br>
<span >Address</span>
<br />
Yo Gali, Nk road,<br />
Jktlie, DIdwana,<br />
Rajasthan
</div>
</div>


<div class="col-md-4">
<br>
<div class="fb-page" data-href="https://www.facebook.com/pages/Sahara-teri-yado-ka/549560091821105?fref=ts" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Sahara-teri-yado-ka/549560091821105?fref=ts"><a href="https://www.facebook.com/pages/Sahara-teri-yado-ka/549560091821105?fref=ts">Sahara teri yado ka</a></blockquote></div></div>
</div>


      
      
      
      <div style="text-align:center; text-decoration:none;" class="col-md-4">
      <br>

<a href="#">Rates and Charges</a><br>
<a href="#">Income Tax Facility</a> <br>
<a href="#">Service Charges</a><br>
<a href="#">Open New Account</a><br>
<a href="#">Mobile Recharge</a><br>
<a href="#">Gallery</a><br>
<a href="#">About Us</a><br>
     
      </div>
      
      
    </div>





</footer>
<div class="footer" style="text-align:center; top:250px; position:relative; background-color:black;">
Copyright © 2015 X-Bank,India
</div>

</body>
</html>          



