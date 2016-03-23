<?php
$msg=" ";

if(!empty($_POST["name"]) && !empty($_POST["password"]))
{
  /*echo "data entered";
  $myusername=$_POST['name']; 
  $mypassword=$_POST['password'];
  echo $myusername;
  header('Location: index.html');*/
  session_start(); // Starting Session

  $host="172.16.100.4"; // Host name 
  $username="ignus"; // Mysql username 
  $password="ignus9876"; // Mysql password 
  $db_name="ignus"; // Database name 
  $tbl_name="mess_users"; // Table name 

// Connect to server and select databse.
   mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
   mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
   $myusername=$_POST['name']; 
   $mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
   $myusername = stripslashes($myusername);
   $mypassword = stripslashes($mypassword);
   $myusername = mysql_real_escape_string($myusername);
   $mypassword = mysql_real_escape_string($mypassword);
   $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
   $result=mysql_query($sql);

// Mysql_num_row is counting table row
   $count=mysql_num_rows($result);
   //$row_entry = mysql_fetch_assoc($result);
   

// If result matched $myusername and $mypassword, table row must be 1 row
   if($count==1 )
   {

// Register $myusername, $mypassword and redirect to file "index.php"
    session_register("myusername");
     session_register("mypassword"); 
     $_SESSION['login_user'] = $myusername;
     
       if($myusername=="admin")
       {
         $_SESSION['fromlogin'] = "admin";
         header("location:adminindex.php");
       }
       else{$_SESSION['fromlogin'] = "notadmin";
            header("location:index.php");}
       $valid=true;
   }
   else
   {
     $msg ="Wrong Username or Password";
   }

//ob_end_flush();

 
}

?>




<!DOCTYPE HTML>
<html>
<head>
<title>Mess Management System</title>
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Plans & Pricing Tables Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--web-fonts-->
</head>
<body>
<font size="200"><strong><p style="text-align:center; color:#4863A0; ">MESS MANAGEMENT SYSTEM</p></strong></font>
			<div class="main">
				<div class="login">
					<div class="login-top">
						<img src="images1/p.png">
					</div>
					<h1>Portal Login</h1>
					<div class="login-bottom">
					<form action="login.php" method="POST">
						<input type="text" name="name" id="name" placeholder="name" required=" ">					
						<input type="password" name="password" id="password" class="password" placeholder="password" required=" ">						
						<input type="submit" value="login">
					</form>
					<p style="color:red;"><?php echo $msg; ?></p>
					<p>Contact Computer Centre, IITJ for Login Credentials.</p>
					</div>
				</div>
			
		
                        </div>
<font size="50"><p style="text-align:center; color:#4863A0; ">
जीवन में असली उड़ान अभी बाकी है, 
हमारे इरादों का इम्तिहान अभी बाकी है, <br>
अभी तो नापी है सिर्फ मुट्ठी भर ज़मीन, 
अभी तो सारा आसमान बाकी है. 
</p></font>

<!--div class="footer">
			<p>&copy 2016 MMS Login Form . All rights reserved </p>
		</div-->
</body>
</html>
