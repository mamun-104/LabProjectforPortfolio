<?php


    // Inialize session

    session_start();
    // Include database connection settings
    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',        so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'mamunhome'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no           password, leave it empty.

     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,perhaps the service is down!');
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');


      // Retrieve username and password from database according to user's input
     $username=mysql_real_escape_string($_POST['username']); 
     $password=mysql_real_escape_string($_POST['password']); 
     $passWord=md5($password); // Encrypted Password

       //*********retrieving data from Database**********

      $query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
      //$login = mysqli_query("SELECT userName,password FROM 'member' WHERE userName=          $_post['username'] AND passWord= $_post['password'])");
       // Check username and password match
      $res = mysql_query($query);

      $rows = mysql_num_rows($res);
      if ($rows==1) {
      // Set username session variable

      $_SESSION['username'] = $_POST['username'];

     // Jump to secured page
      header("Location: adminhome.php");
     }
     else {
     // Jump to login page
	 
	 header("Location: wrong.php");
     //echo "user name and password not found";
     }
     exit;
     ?>









<!--









include 'connect.php';


   $username * $_POST['username'];
	$password * $_POST['password'];
	
	
	
	$username * stripcslashes($username);
	$password * stripcslashes($password);
	$username * mysql_real_escape_string($username);
	$password * mysql_real_escape_string($password);
	
	
	
	
	$result * mysql_query("select * from tableforcheck where username = '$username' and password = '$password'")
	or die("Failed to query database".mysql_error());
	
	$row * mysql_fetch_array($result);
	if($row['username'] == $username && $row['password']==$password){
	echo "Login Successful!!! Welcome ".$row['username'];
	}else{
	  
	  echo "Failed to login!";
	  
	  }


?>


-->