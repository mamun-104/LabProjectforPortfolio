<?php
include 'connect.php';
session_start();
if (isset($_SESSION['username']))
{ $username=$_SESSION['username'];
}



?>
<html>
<link href="style_for_index.css" rel="stylesheet" type="text/css" />

<body  background="pexels-photo-876467.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<br>
<br><br><br>



<div  class="data">
<h1 style="color: #FF9966; font-size:35px; background-color:#FFFFFF"  align="center"> Hello, User.<br>This is your Information. </h1>

<table bgcolor="#FFFFFF" style="font-size:20px;" width="832" border="5" align="center" cellpadding="5">
  <tr bgcolor="#FF9966">
    <td >ID </td>
    <td >Username</td>
	<td >Password</td>
	<td >Fullname</td>
	<td >Age</td>
	
	
    <td >Address</td>
    <td >Email</td>
    <td >Mobile Number</td>
	<td >Nationality</td>
	
    <td width="154">Action</td>
  </tr>
  <?php
  	//$sql = "select user_id,username, address, created_at, modified_at from tb_users";
	$sql = "select * from tableforcheck where username='$username'";
	
	$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	//$a=mysqli_fetch_array($result);
	//echo $result["username"];
	if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))	
			{
  //echo $row["username"];
  
  
  ?>
  <tr>
 	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['username'] ?></td>
	<td><?php echo $row['password'] ?></td>
	<td><?php echo $row['fullname'] ?></td>
	<td><?php echo $row['age'] ?></td>
	
	
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['mobile'] ?></td>
	<td><?php echo $row['nationality'] ?></td>
    <td>
    	<a href="update.php ? id= <?php echo $row['id'] ?> "> Update Your Information</a>
    
    </td>
    
  </tr>
<?php

			
			}
		}

?>
</table>
</div>

<br>
<br>

<br>
<br>




<table bgcolor="#FFFFFF" style="font-size:20px;" width="832" border="5" align="center" cellpadding="5">
  <tr bgcolor="#CD5C5C">
  
    <td >user</td>
    <td >month</td>
	<td >electricity bill</td>
	<td >electricity bill status</td>
	<td >gas bill</td>
    <td >gas bill status</td>
	<td >water bill</td>
	<td >water bill status</td>
	
  </tr>
  <?php
  	//$sql = "select user_id,username, address, created_at, modified_at from tb_users";
	$sql = "select * from bill where username='$username'";
	
	$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	//$a=mysqli_fetch_array($result);
	//echo $result["username"];
	if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))	
			{
  //echo $row["username"];
  
  
  ?>
  <tr>
 	<td><?php echo $row['username'] ?></td>
    <td><?php echo $row['month'] ?></td>
	<td><?php echo $row['eletricity_bill'] ?></td>
	<td><?php echo $row['electricity_bill_status'] ?></td>
	
	<td><?php echo $row['gas_bill'] ?></td>
    <td><?php echo $row['gas_bill_status'] ?></td>
	<td><?php echo $row['water_bill'] ?></td>
	<td><?php echo $row['water_bill_status'] ?></td>
	
    
  </tr>
<?php

			
			}
		}

?>
</table>
</div>

<br>
<br>

<br>
<br>




      




    
	 <div class="link">
	<a href="pay.php">
  <p align="center">  <button   style=" background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;"> To Pay Bills<br> Click Here.</button>
	
	</p>
</a>
	 </div>



<br>
<br>


	 
	 <div class="link">
	<p align="center"> <button style="background-color: #FF9999; color:#FFFFFF"><a href="loginuser.php"> <h1>Log Out</h1> </a> </button> </p>
	 </div>


</body>
</html>

















