<!DOCTYPE>
<html>
<head>

<title>People's bank Limited</title>


<style>
.form-style-8{
    font-family: 'Open Sans Condensed', arial, sans;
    width: 500px;
    padding: 30px;
    background: #FFFFFF;
    margin: 50px auto;
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
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
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




</head>

<body background="pexels-photo-870902.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover"  onLoad="checkCookie()">




<p> <h1 align="center" style="font-size:40px; font-family:Verdana, Arial, Helvetica, sans-serif; color: #4CAF50; background-color: #FFFFFF">Welcome to <br> ''People's Bank Limited (PBL)''</h1> </p>








<div class="form-style-8">
  <h2>Login to your Bank account</h2>
  <form action="hellobank.php" method="POST">
    <input type="text" name="username" id="user" required placeholder="Bank User ID" />
    
    <input type="text" name="password" id="pass" required placeholder="Bank password" />

    <input  type="submit" id="btn" value="LOGIN" />
	
  </form>
</div>
<br>


<div style="background-color:#FFFFFF" align="center" class="bankk">
<h3 style="color:#4CAF50"> Clich Here to Visit Online Electricity , Gas and Water Bill Payment Website</h3>
<a href="welcome.php">

<input style="font-size:20px; background-color: #FFFFFF; color: #FF6600" type="submit" value="WEBSITE" />
</a>
</div>





<br><br>

<marquee direction="down"><p> <h1 align="center" style="font-size:30px; font-family:Verdana, Arial, Helvetica, sans-serif; color: #FF9966; background-color: #FFFFFF">Trust us <br>And Secure your Future</h1> </p></marquee>



<!--

<div align="center" id="frm">
	   <form action="hellobank.php" method="POST">
	   
	   
	   <p> <h1 style="color: #FF9966">
	   <label>User Name: </label>
	   <input style="height:35px; width:250px;" type="text" id="user" name="username" />
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color:#FF9966">
	   <label>Card Password</label>
	   <input style="height:35px; width:250px;" type="text" id="pass" name="password" />
	   </h1>
	   </p>
	   
	   
	   <input style="height:50px; width:100px; font-size:25px; background-color:#45B39D; color: #FFFFFF" type="submit" id="btn" value="LOGIN" />
	   
	   
	  </form>
	  
	   </div>
	   
	   
	   
	   -->





</body>
</html>



<script>

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Hello!!\n" + user);
    } else {
       user = prompt("Hello! We use Cookies to provide you a good service.\nPlease enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}


</script>

