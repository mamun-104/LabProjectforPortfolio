<!DOCTYPE>
<html>
<head>

<title>Electricity Portal</title>

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


<!-- dropdown box -->



</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

</head>

<body background="6.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<div class="topnav">
  <a  href="welcome.php">  Home</a>
  
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
  
   





<div class="a1">

<img style="width:100%; height:90px;" src="2.jpg">

</div>


<br>


<p> <h1 align="center" style="font-size:20px; font-family:Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;background-color:#666666  ">
Bangladesh: Electricity sector
Data
Electricity coverage	90% (2018)
Installed capacity	16193 MW
Share of government financing (2018)	56%[1]
Share of private financing (2018)	46%
Institutions
Responsibility for policy-setting	Ministry of Power, Energy and Mineral Resources Bangladesh Power Development Board
Electricity sector law	Energy Regulatory Commission Act

Power plant in Bangladesh
The utility electricity sector in Bangladesh has one national grid with an installed capacity of 16,048 MW as of July 2018. Bangladesh's energy sector is booming. Recently Bangladesh started construction of the 2.4-gigawatt (GW) Rooppur Nuclear Power Plant expected to go into operation in 2023.[2] According to the Bangladesh Power Development Board in July 2018, 90 percent people have access to the electricity But still the per capita energy consumption in Bangladesh is considered low[3]. </h1> </p>




<br>

<p align="center">

<img style="height:600px; width:500px;" src="400px-PowerPlant.jpg" >

</p>



<br>


<div id="googleMap" style="width:100%;height:400px;"></div>


<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>




</body>
</html>


