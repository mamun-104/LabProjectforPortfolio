<?php 
	include 'connect.php';
	
	if(isset($_POST['button_input'])){
		
		$sql = "insert into tableforcheck(username,password,fullname,age,address,email,mobile,nationality)
				values('".$_POST['add_username']."',
					'".$_POST['add_password']."',
					'".$_POST['add_fullname']."',
					'".$_POST['add_age']."'	,
					
					'".$_POST['add_address']."'	,	
					'".$_POST['add_email']."'	,	
					'".$_POST['add_mobile']."'	,	
					'".$_POST['add_nationality']."'
									
				)";
				
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:successful.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		
		}	
?>

<html>
<link href="style_for_add.css" rel="stylesheet" type="text/css" />
<head>

<title> Create a New Account  </title>


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


<!-- create box -->

.form-style-8{
    font-family: 'Open Sans Condensed', arial, sans;
   
    padding: 30px;
    background: #FFFFFF;
    margin: 30px ;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
    background: #4D4D4D;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
    color: #797979;
    font-size: 18px;
    font-weight: 100;
    padding: 20px;
    margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
  
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: #FFFFFF;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
 
}
.form-style-8 textarea{
    resize:none;
    overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 14px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
}







</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body background="pexels-photo-399161.jpeg"    style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<div class="topnav">
  <a  href="welcome.php">  Home</a>
  
  <a href="govt_info.php">Govt. Info</a>
 
  
  <a   href="loginuser.php">User Log-In</a>
  
  <a class="active" href="add.php">Create Account</a>
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





<br>



<div align="center" style="width:500px;" class="form-style-8" >

  <h2 style="font-size:30px;">Create a New Account</h2>
  <form action="" method="post">
  <h3 style="color:#2A88AD">Username </h3>
    <input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_username" required  /><br>
	
	<h3 style="color:#2A88AD">Password</h3>
    <input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_password"  /><br>
	
	<h3 style="color:#2A88AD">Full Name </h3>
    <input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_fullname" required  /><br>
	
	
	<h3 style="color:#2A88AD">Age </h3>
	<input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_agee" placeholder="Ex: 30" required /><br>
	
	
	<h3 style="color:#2A88AD">Address </h3>
    <input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " input name="add_address" required /><br>
	
	
	<h3 style="color:#2A88AD">Email </h3>
    <input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_email" placeholder="Ex: a@gmail.com" required /><br>
	
	
	<h3 style="color:#2A88AD">Mobile Number </h3>
	<input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_mobile" placeholder="Ex: 017 ...." required /><br>
	
	<h3 style="color:#2A88AD">Nationality </h3>
    <input style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " name="add_nationality" required/><br>
   
 <br>
    <input  type="submit" name="button_input">
	
  </form>
</div>





<!--

<h1 style="color:#FF6600" align="center"> Create Account </h1>

<div style="font-family:Verdana, Arial, Helvetica, sans-serif" align="center" class="my">

<form action="" method="post">
	<table bgcolor="#FFFFFF"  border="5"   style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color: #FF6600 " width="600" height="500">
    	<tr>
        	<td>Username</td>
            <td><input  name="add_username" required></td>
        </tr>
		
		<tr>
        	<td>Passowrd</td>
            <td><input name="add_password" required></td>
        </tr>
		
		<tr>
        	<td>Fullname</td>
            <td><input name="add_fullname" required></td>
        </tr>
		<tr>
        	<td>age</td>
            <td><input name="add_agee" placeholder="Ex: 30" required></td>
        </tr>
		
		
		
        <tr>
        	<td>Address</td>
            <td><input name="add_address" required></td>
        </tr>
		
        <tr>
        	<td>Email</td>
            <td><input name="add_email" placeholder="Ex: a@gmail.com" required></td>
        </tr>
		
        <tr>
        	<td>Mobile</td>
            <td><input name="add_mobile" placeholder="Ex: 017 ...." required></td>
        </tr>
		<tr>
        	<td>nationality</td>
            <td><input name="add_nationality" required></td>
        </tr>
		
        <tr>
        	<td></td>
            <td><input type="submit" name="button_input"></td>
        </tr>
    </table>
<form>

</div>

-->

</body>

</html>














