<!DOCTYPE>
<html>
<head>


<title>Admin Login Page  </title>



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

<!-- login-box -->
.form-style-10{
    
    padding:30px;
    margin:30px auto;
    background:#2A88AD;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #FFFFFF;
    border-radius: 6px;
    margin-bottom: 15px;
}

.form-style-10 h1{
    background:#EC7063      ;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 30px 'Bitter', serif;
    color: #45B39D;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #EC7063    ;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}




</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body background="pexels-photo-988872.jpeg"   style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<div class="topnav">
  <a  href="welcome.php">  Home</a>
  
  <a href="govt_info.php">Govt. Info</a>
  
  
  <a   href="loginuser.php">User Log-In</a>
  
  <a  href="add.php">Create Account</a>
  <a class="active" href="login.php">Admin Panel</a>
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


<p> <h1 align="center" style="font-size:35px; font-family:Verdana, Arial, Helvetica, sans-serif; color: #FF9966; background-color: #FFFFFF">Admin Section</h1> </p>





<br>
<br>

<div align="center"  >

<div id="frm"  style="height:10px; width:450px;" class="form-style-10">
<h1>Hello Admin!<span>Log-In and See User list and Many More </span></h1>

<form action="hello.php" method="POST">

    <div class="section"><span>1</span>User Name</div>
    <div class="inner-wrap">
        <label style="font-size:15px;"> <input type="text" id="user" name="username" required placeholder="Please Give Your Username" /></label>
        
    </div>

    <div class="section"><span>2</span>Password</div>
    <div class="inner-wrap">
        <label style="font-size:15px;"> <input type="text" id="user" name="password" required placeholder="Please Give Your Password" /></label>
        
    </div>

    
    <input style="height:40px; width:100px; font-size:20px; background-color:#EC7063    ; color: #FFFFFF" type="submit" id="btn" value="LOGIN" />
	
	
</form>
</div>





</div>







<!--

       <div align="center" id="frm">
	   <form action="hello.php" method="POST">
	   
	   <p> <h1 style="color:FF9966; font-size:25px;">
	   <label>Username: </label>
	   <input style="height:35px; width:250px;" type="text" id="user" name="username" />
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color: FF9966; font-size:25px;">
	   <label>Password: </label>
	   <input style="height:35px; width:250px;" type="text" id="pass" name="password" />
	   </h1>
	   </p>
	   
	    <p>
		
	   
	   <input style="height:50px; width:100px; font-size:25px; background-color:#45B39D; color: #FFFFFF" type="submit" id="btn" value="LOGIN" />
	  
	   </p>
	   
	   
	   
	   </div>
	   
	   
	   -->
	   






</body>
</html>
