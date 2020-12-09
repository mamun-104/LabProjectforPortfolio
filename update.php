<?php 
	include 'connect.php';
	
	if(isset($_POST['button_update'])){
		
		$sql="update tableforcheck set username='".$_POST['update_username']."',
		             password='".$_POST['update_password']."',
					 fullname='".$_POST['update_fullname']."',
					 age='".$_POST['update_age']."',
		
		
				address='".$_POST['update_address']."',
				email='".$_POST['update_email']."',
				mobile='".$_POST['update_mobile']."',
				nationality='".$_POST['update_nationality']."' where id='".$_POST['user_id']."'";
	
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:index.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		}
			
	$id='';
	$username='';
	$password='';
	$fullname='';
	$age='';
	
	
	$address='';
	$email='';
	$mobile='';
	$nationality='';
	
	//echo "Tushar";
	if(isset($_GET['id'])){
		//echo "Tushar";
		$sql="select id, username,password,fullname,age, address, email, mobile, nationality from tableforcheck where id=".$_GET['id'];
		$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
		
		if(mysqli_num_rows($result) > 0)
		{
			//echo "Hanif";
		$row = mysqli_fetch_assoc($result);
		$id=$row['id'];
		//echo $id;
		$username=$row['username'];
		
		$password=$row['password'];
		$fullname=$row['fullname'];
		$age=$row['age'];
		
		
		$address=$row['address'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$nationality=$row['nationality'];
			
		}
		
		}
			
			
	//$id=
	
?>

<html>
<head>

<link href="style_for_update.css" rel="stylesheet" type="text/css" />


</head>
<body background="pexels-photo-1110670.jpeg">

<h1  align="center" style="font-size:36px; color:#000066;"> Update User </h1>


<div align="center" class="ff">


<form action="" method="post">
	<table style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color:#000066" height="500" width="600">
    	<tr>
        	<td>Username</td>
            <td><input name="update_username" disabled="disabled" value="<?php echo $username; ?>"></td>
        </tr>
		
		<tr>
        	<td>Password</td>
            <td><input name="update_password" disabled="disabled" value="<?php echo $password; ?>"></td>
        </tr>
		
		<tr>
        	<td>Fullname</td>
            <td><input name="update_fullname" value="<?php echo $fullname; ?>"></td>
        </tr>
		
		<tr>
        	<td>Age</td>
            <td><input name="update_age" value="<?php echo $age; ?>"></td>
        </tr>
		
		
		
		
        <tr>
        	<td>Address</td>
            <td><input name="update_address" value="<?php echo $address; ?>"></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input name="update_email" value="<?php  echo $email; ?>"></td>
        </tr>
        <tr>
        	<td>Mobile</td>
            <td><input name="update_mobile" value="<?php echo $mobile; ?>"></td>
        </tr>
		
		<tr>
        	<td>Nationality</td>
            <td><input name="update_nationality" value="<?php echo $nationality; ?>"></td>
        </tr>
		
		
        <tr>
        	<td><input type="hidden" name="user_id" value="<?php echo $id; ?>"</td>
            <td><input type="submit" name="button_update"></td>
        </tr>
    </table>
<form>


</div>




</body>
</html>

















