<?php
include 'connect.php';

?>
<html>
<head>
<title> BANK STATEMENT </title>

</head>

<link href="style_for_index.css" rel="stylesheet" type="text/css" />

<body background="pexels-photo-904177.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<br>
<br><br><br>



<div class="data">
<h1 style="color: #FF9966; font-size:35px; background-color:#FFFFFF"  align="center"> User Information. </h1>

<table bgcolor="#FFFFFF" style="font-size:40px;" width="832" border="5" align="center" cellpadding="5">
  <tr bgcolor=" #4CAF50">
    
    <td >Username</td>
	<td >password</td>
	<td >cardnumber</td>
	<td >cash</td>
	
	
    
	
    
  </tr>
  <?php
  	//$sql = "select user_id,username, address, created_at, modified_at from tb_users";
	$sql = "select * from bank where username='mamun'";
	
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
	<td><?php echo $row['password'] ?></td>
	<td><?php echo $row['cardnumber'] ?></td>
	<td><?php echo $row['cash'] ?></td>
	
	
    
    
    
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

      




    
	 


<br>
<br>


	 
	 <div class="link">
	<p align="center"> <button style="background-color: #FFFFFF color:#FFFFFF"><a href="bank.php"> <h1>Log Out</h1> </a> </button> </p>
	 </div>


</body>
</html>

















