<?php
include 'connect.php';

?>
<html>

<head>

<title> Govt.  Cash Statemnt </title>

</head>


<body background="pexels-photo-305821.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<br>




<div class="data">
<h1 style="color:#4CAF50; font-size:45px;"  align="center"> Total Taka Recieved </h1>

<table bgcolor="#FFFFFF" style="font-size:40px;" width="832" border="5" align="center" cellpadding="5">
  <tr bgcolor="#FF6600">
    
	<td >Month</td>
    <td >Electricity</td>
	<td >Gas</td>
	<td >Water</td>

	
	
    
	
    
  </tr>
  <?php
  	//$sql = "select user_id,username, address, created_at, modified_at from tb_users";
	$sql = "select * from taka";
	
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
 	
	<td><?php echo $row['month'] ?></td>
    <td><?php echo $row['electricity'] ?></td>
	<td><?php echo $row['gas'] ?></td>
	<td><?php echo $row['water'] ?></td>
	
	
	
    
    
    
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
	<p align="center"> <button style="background-color: #FF9999; color:#FFFFFF"><a href="adminhome.php"> <h1>Go Back</h1> </a> </button> </p>
	 </div>


</body>
</html>

















