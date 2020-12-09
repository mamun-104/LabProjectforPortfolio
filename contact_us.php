<!DOCTYPE>
<html>
<head>



<title>Contact Us</title>


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


<!-- contact box -->


.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
 
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #FFFFFF;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #FFFFFF;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}




</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







</head>

<body background="pexels-photo-355770.jpeg"  style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">


<div class="topnav">
  <a  href="welcome.php">  Home</a>
  
  <a href="govt_info.php">Govt. Info</a>
  
  
  
  <a href="loginuser.php">User Log-In</a>
  
  <a href="add.php">Create Account</a>
  <a  href="login.php">Admin Panel</a>
   <a class="active" href="">Contact us</a>
  
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








<h3 align="center" style="background-color:#FFFFFF; color:#FF9966; font-size:15px;"> Powered By: "000webhostapp" <br> Link: https://mamuntestuap.000webhostapp.com/ </h3>






<br<br>


<div style="font-size:30px;" align="center" class="form-style-5">
<form>
<fieldset>
<legend><span class="number">1</span> Your Information</legend>
<input style="font-size:20px;" type="text" name="name" placeholder="Your Name"><br>
<input style="font-size:20px;" type="email" name="email" placeholder="Your Email">



<label for="job">Your Preference</label>
<select id="job" name="field4">
<optgroup label="Online payment">
  <option value="Fast">Fast Payment</option>
  <option value="Easy">Easy Payment Way</option>
  
</optgroup>
<optgroup label="Offline payment">
  <option value="hand">hand to Hand Payment</option>
  <option value="Cash">Cash/Cheque payment</option>
  
</optgroup>

</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span>Write your Opinions/Complains.</legend>
<textarea style="font-size:20px;" name="field3" placeholder="Feel free to write"></textarea>
</fieldset>

<input type="submit" value="Send" />

</form>
</div>








<!--


<div align="center" class="contact_from_dilam">
<form style=" color:#FF6600; font-size:20px;" action="ibrahimmamunabcd@gmail.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input style="height:200px" type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>


</div>



-->



<br>
<br>
<br>
<br>


<div align="center" class="b">


<img style="height:200px; width:300px" src="28947414_410983729313974_8980553845071823530_o.jpg"  >


<br>
<a href="page.html">




<input style="font-size:20px; background-color: #FFFFFF" type="submit" value="Click here to See Developer" />
</a>


</div>






</body>

</html>