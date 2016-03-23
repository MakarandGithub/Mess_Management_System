<?php
session_start();
if(!session_is_registered(myusername))
{
header("Location:login.php");
}
else
{
  $host="172.16.100.4"; // Host name 
  $username="ignus"; // Mysql username 
  $password="ignus9876"; // Mysql password 
  $db_name="ignus"; // Database name 
  $tbl_name="mess_users"; // Table name 

// Connect to server and select databse.
   mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
   mysql_select_db("$db_name")or die("cannot select DB");
   
   $user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
   $ses_sql="SELECT * FROM $tbl_name WHERE username='$user_check'";
   $result=mysql_query($ses_sql);

   $row = mysql_fetch_assoc($result);
   $login_session =$row['username'];
   $user_data = $row;
}
?>
