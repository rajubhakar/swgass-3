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
<script src="track.js"></script>
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























<div id="tracking" style="position:relative; left:400px;">
	<div class="row"><label>City : <div id="optionwala">
    
    <select style="width:300px; border-radius:5px; height:50px;" name="city">
    <option disabled selected value="1">Select your City</option>
    <option id="didwana" value="0" style="padding-bottom:20px;">Didwana</option>
    <option value="1" id="modiyawat" style="padding-bottom:20px; padding-top:20px;">Modiyawat</option>
    <option id="kharagpur" value="2">Kharagpur</option>
    <option id="jaipur" value="3">Jaipur</option>
    <option id="delhi" value="4">Delhi</option>
    <option id="kolkata" value="5">Kolkata</option>
    <option id="kanpur" value="6">Kanpur</option>
     
    
    </select></label></div>
    
    </div>

	<div id="header" class="header">
    
    
    <h2>Track ATM/BRANCH</h2>    
    <label><input type="checkbox" id="atmwala"> : ATM</label>
    <label><input id="bankwala" type="checkbox"> : Bank Branch</label>
    
    </div>


<div id="track0" class="block">
		<div id="bank0" class="block">	
			<p>Didwana Bank Branch(Market)</p>
			<p>Didwana Bank Branch(Station Road)</p>
		</div>
		<div id="atm0" class="block">	
			<p>Didwana ATM 1</p>
			<p>Didwana ATM 2</p>
		</div>	
     	</div>
</div>


<div id="track1" class="block">
		<div id="bank1" class="block">	
			<p>Modiyawat Bank Branch(Market)</p>
			<p>Modiyawat Bank Branch(Station Road)</p>
		</div>
		<div id="atm1" class="block">	
			<p>Modiyawat ATM 1</p>
			<p>Modiyawat ATM 2</p>
		</div>	
     	</div>
</div>


<div id="track2" class="block">
		<div id="bank2" class="block">	
			<p>kharagpur Bank Branch(Market)</p>
			<p>Kharagpur Bank Branch(Station Road)</p>
		</div>
		<div id="atm2" class="block">	
			<p>kharagpur ATM 1</p>
			<p>Kharagpur ATM 2</p>
		</div>	
     	</div>
</div>



<div id="track3" class="block">
		<div id="bank3" class="block">	
			<p>Jaipur Bank Branch(Market)</p>
			<p>jaipur Bank Branch(Station Road)</p>
		</div>
		<div id="atm3" class="block">	
			<p>Jaipur ATM 1</p>
			<p>jaipur ATM 2</p>
		</div>	
     	</div>
</div>


<div id="track4" class="block">
		<div id="bank4" class="block">	
			<p>Delhi Bank Branch(Market)</p>
			<p>Delhi Bank Branch(Station Road)</p>
		</div>
		<div id="atm4" class="block">	
			<p>Delhi ATM 1</p>
			<p>Delhi ATM 2</p>
		</div>	
     	</div>
</div>



<div id="track5" class="block">
		<div id="bank5" class="block">	
			<p>Kolkata Bank Branch(Market)</p>
			<p>Kolkata Bank Branch(Station Road)</p>
		</div>
		<div id="atm5" class="block">	
			<p>Kolkata ATM 1</p>
			<p>Kolkata ATM 2</p>
		</div>	
     	</div>
</div>



<div id="track6" class="block">
		<div id="bank6" class="block">	
			<p>Kanpur Bank Branch(Market)</p>
			<p>Kanpur Bank Branch(Station Road)</p>
		</div>
		<div id="atm6" class="block">	
			<p>Kanpur ATM 1</p>
			<p>Kanpur ATM 2</p>
		</div>	
     	</div>
</div>







</div>























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


      
      
      
      <div class="col-md-4" style="text-align:center;">
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



