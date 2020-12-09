<!DOCTYPE>
<html>
<head>

<title>PAY BILL</title>

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
    font-size: 25px;
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

<body background="pexels-photo-876467.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">



<br>


<p> <h1 align="center" style="font-size:35px; font-family:Verdana, Arial, Helvetica, sans-serif; color: #4CAF50; background-color: #FFFFFF">Payment is More Easier, Faster and Secure</h1> </p>
<br>




<div style="font-size:30px;" class="form-style-8">
  <h2>Pay Your  Electricity , Gas and Water Bills</h2>
  <form action="hellobankupdateafterbill.php" method="POST">
    <input type="text" name="username" id="user" required placeholder="Bank User Name" />
    
    <input type="text" name="password" id="pass" required placeholder="Bank Password" />
	
	    <input type="text" name="cardnumber" id="card" required placeholder="Bank Cardnumber" />
		
		<input type="text" name="cash" id="cash" required placeholder="BDT (Taka) Ex: 500" />
		
		<input type="text" name="bill" id="bill" required placeholder="Type: 'electricity' or 'gas' or 'water'" />
		
		<input type="text" name="month" id="month" required placeholder="Month. Ex: January" />

    <input  type="submit" id="btn" value="Pay" />
	
  </form>
</div>










<!--




<div align="center" id="frm">



       <select style="background-color: #FFFFFF; font-size:30px;">
  <option value="Electricity">Electricity</option>
  <option value="Gas">Gas</option>
  <option value="Water">Water</option>
  
</select>

<br>

<br>
	   
	   
	   <p> <h1 style="color: #333333">
	   <label>Credit Card. No </label>
	   <input style="height:35px; width:250px; font-size:25px; color:#FF6600" type="text" id="user" name="username" />
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color: #333333">
	   <label>Card Password. </label>
	   <input style="height:35px; width:250px;  font-size:25px; color:#FF6600" type="text" id="pass" name="password" />
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color: #333333">
	   <label>Payment _Type </label>
	   <input style="height:35px; width:250px;  font-size:25px; color:#FF6600" placeholder="Type: 'E' or 'G' or 'W'" type="text" id="pass" name="password" />
	   <h4 style="color: #4CAF50">'E' for Electricity, 'G' for Gas, 'W' for Water Bill Type </h4>
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color: #333333">
	   <label>Total Taka BDT </label>
	   <input style="height:35px; width:250px;  font-size:25px; color:#FF6600" type="text" id="pass" name="password" />
	   </h1>
	   <h4 style="color: #4CAF50">* With VAT,SC,SD </h4>
	   </p>
	   
	   
	   
	 
	   
	   
	   </div>
	   
	   
	    <p align="center">
	   <a href="pay.php">
	   
	   
	   <button onClick="alert('Payment Successful!!')" style="font:Geneva, Arial, Helvetica, sans-serif; font-size:25px; color: #FF9966;"> PAY </button>
	   </a>
	   
	   </p>
	   
	   
	   
-->
	   
	   
	  
	   <br>
	   
	   
	   
	   <div align="center" class="b">
	   
	   <a href="indexuser.php">
  <p align="center">  <button   style=" background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;"> Go Back</button>
	
	</p>
</a>

</div>




</body>
</html>
