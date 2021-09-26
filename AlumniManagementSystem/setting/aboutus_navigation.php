<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us Navigation Bar</title>
</head>

<link rel="stylesheet" href="css/header_navigationbar.css" />
<link rel="stylesheet" href="css/style.css">

<body>
<div class="txt">
        <img src="images/sambalpur.jpg">
        <div class="write">
            <h1>SUIIT ALUMNI</h1>
            <p1>Sambalpur university institute of information technology</p1>
        </div>
    </div>
</div>
<table class="table">
<tr>
<td>
<ul class="ul1">
	<div class="dropdown">
	<li class="li_image"><img src="images/WE2.jpg" width="55px" height="55px" style="padding-left:15px;padding-right:15px" /></li>
    </div>
    <div class="dropdown">
    <li class="li1"><a href="index.php"><span class="span1">Home</span></a></li>
		<div class="dropdown-content">
    		<a href="index.php#welcome">Main</a>
    		<a href="index.php#howto">Becoming member</a>
        </div>
    </div>
    <div class="dropdown">
    <li class="li1 active"><a href="about_us.php" name="about" onclick="change()"><span class="span1">About Us</span></a></li>
    	<div class="dropdown-content">
    		<a href="about_us.php#history">The History</a>
    		<a href="about_us.php#inaguration">Inaguration</a>
        </div>
    </div>
    <div class="dropdown">
    <li class="li1"><a href="gallery.php" name="gallery" onclick="change()"><span class="span1">Gallery</span></a></li>
    	<div class="dropdown-content">
    		
        </div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="news.php"><span class="span1">News</span></a></li>
    	<div class="dropdown-content">
    		<a href="news.php#announcements">Announcement Board</a>
    		<a href="news.php#events">Events</a>
   		</div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="eforum.php"><span class="span1">E-Forum</span></a></li>
    </div>
    <div class="dropdown">
    <li class="li1"><a href="contact_us.php"><span class="span1">Contact Us</span></a></li>
    	<div class="dropdown-content">
    		<a href="contact_us.php#contact">Contact</a>
    		<a href="contact_us.php#faq">FAQ</a>
        </div>
        <div class="dropdown">
  	<li class="li1"><a href="chatbox.php"><span class="span1">Chat_box</span></a></li>
    </div>
    </div>
    <li class="li2"><a href="register.html"><span class="span1">Register</span></a></li>
    <li class="li2"><a href="login.html"><span class="span1">Login</span></a></li>
</ul>
</td>
</tr>
</table>

<button id="about_totop" onclick="topFunction()"><img src="images/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/about_totop.js"></script>

</body>
</html>