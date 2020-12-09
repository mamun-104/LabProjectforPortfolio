<?php
include 'connect.php';

?>
<html>
<link href="style_for_index.css" rel="stylesheet" type="text/css" />

<body background="winter-nature-season-trees-65911.jpeg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">

<br>




<div class="data">
<h1 style="color: #4CAF50; background-color:#FFFFFF; font-size:40px;"  align="center"> User list of Electricity, Gas and Water </h1>
<table bgcolor="#FFFFFF" style="font-size:18px; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif" width="832" border="5" align="center" cellpadding="3">
  <tr bgcolor="#45B39D">
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
	$sql = "select * from tableforcheck";
	
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
 	<td style="background-color:#FF9966"><?php echo $row['id'] ?></td>
    <td><?php echo $row['username'] ?></td>
	<td><?php echo $row['password'] ?></td>
	<td><?php echo $row['fullname'] ?></td>
	<td><?php echo $row['age'] ?></td>
	
	
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['mobile'] ?></td>
	<td><?php echo $row['nationality'] ?></td>
    <td >
    	<a href="update.php ? id= <?php echo $row['id'] ?> "> Update</a>
        <a href="delete.php ? id= <?php echo $row['id'] ?> "> Delete</a>
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





	 
	 <div class="link">
	<p align="center"> <button><a href="adminhome.php"> <h1>Go Back</h1> </a> </button> </p>
	 </div>


</body>
</html>

















