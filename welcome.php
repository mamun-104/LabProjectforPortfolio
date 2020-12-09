<?php

// Connects to your Database
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("mamunhome") or die(mysql_error());

//Adds one to the counter
mysql_query("UPDATE user_count SET counts = counts + 1");

//Retrieves the current count
$count = mysql_fetch_row(mysql_query("SELECT counts FROM user_count"));

//Displays the count on your site
//print "$count[0]";

?>



<!DOCTYPE>
<html>
<head>
<title>Online Bill payment</title>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #FFFFFF;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 12px 55px;
  text-decoration: none;
  font-size: 22px;
}

.topnav a:hover {
  background-color: #45B39D;
  color: #000000;
}

.topnav a.active {
  background-color:#45B39D  ;
  color: white;
}


<!-- Image show -->

* {
    box-sizing: border-box;
}



/* The grid: Four equal columns that floats next to each other */
.column {
    
    width: 280px;;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}








</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





</head>

<body background="pexels-photo-1029359.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">




<!--
for top bar
-->
<div class="topnav">
  <a class="active" href="">Home</a>
  
  <a href="govt_info.php">Govt. Info</a>
  
  
  
  <a href="loginuser.php">User Log-In</a>
  
  <a href="add.php">Create Account</a>
  <a href="login.php">Admin Panel</a>
   <a href="contact_us.php">Contact us</a>
   
   
   
  
  
</div>


<div align="left" class="dropdown">
    <button style="background-color:#45B39D; width:170px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Click For More Option
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="electricity_portal.php">Electricity Portal</a></li>
      <li><a href="gas_portal.php">Gas Portal</a></li>
      <li><a href="water_portal.php">Water Portal</a></li>
    </ul>
	
  </div>
  <div align="right" class="aaa">
  <input  size="18px" type="text" placeholder="Search.....">
   <a href="https://www.google.com/"><button> Search </button></a>
   </div>
   
   

<marquee><p> <h1 align="center" style="font-size:30px; font-family:Verdana, Arial, Helvetica, sans-serif; color: #FF9966; background-color: #FFFFFF">$ Paying Electricity Bill , Gas Bill and Water Bill is Easier Than Before.</h1> </p>
</marquee>









<br>

<div   style="text-align:center; background-color:#FFFFFF">
  <h2 style="color:  #FF9966">Proceduren Image</h2>
  <p style="color:  #FF9966">Click To View Full Image.</p>
</div>

<!-- The four columns -->
<div align="center" class="row">
  <div class="column">
    <img src="h1.jpg"  style="width:100%" onClick="myFunction(this);">
  </div>
  
  
  <div class="column">
    <img src="h2.jpg"  style="width:100%" onClick="myFunction(this);">
  </div>
  
  
  <div class="column">
    <img src="h3.jpg"  style="width:100%" onClick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onClick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>







<br><br>
<div style="background-color: #FF9966" align="center" class="bankk">
<h3> Clich Here to Visit PBL Bank</h3>
<a href="bank.php">

<input style="font-size:20px; background-color: #FFFFFF" type="submit" value="People's Bank Limited (PBL)" />
</a>
</div>









<div style=" background-color:#45B39D" align="center" class="data">
<h1 style="color: #FFFFFF; font-size:30px" align="center">Website Hit Counts </h1>

<p style="border:thin; font-size:50px;">
<?php
print "$count[0]";


?>


</p>
</div>

<div align="center" style="background-color:#FFFFFF; font-size:25px; color:#FF6600" class="new">

<p id="demo"></p>

</div>








</body>
</html>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>


<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>









<!--


<div align="center" class="a">
<p> Are You New Here?? Then Create an Account by Clickh Here!! </p>

<a href="add.php" >

<button style="background-color:#CCCCCC; font:Geneva, Arial, Helvetica, sans-serif; font-size:20px; color:#FF6600"> Create An Account </button>

</a>

<br>
<br>
<br>


<p> Already Have an Account!. Then Log-In Here!! </p>

<a href="loginuser.php" >

<button style="background-color:#CCCCCC; font:Geneva, Arial, Helvetica, sans-serif; font-size:20px; color:#FF6600"> Log In </button>

</a>



<br>
<br>
<br>


<p>Are You An Admin. Please Press The Button. </p>

<a href="login.php" >

<button style="background-color:#CCCCCC; font:Geneva, Arial, Helvetica, sans-serif; font-size:20px; color:#FF6600"> ADMIN PANEL </button>

</a>

<br>
<br>
<br><br>
<br>
<br>


<p> Have Any Queary Let us Know By Sending Email. </p>

<a href="" >

<button style="background-color:#CCCCCC; font:Geneva, Arial, Helvetica, sans-serif; font-size:20px; color:#FF6600"> Send Email </button>

</a>







</div>

<br>
<br>

-->




