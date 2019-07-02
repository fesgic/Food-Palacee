<?php
$server="localhost";
$user="root";
$password="";
$database="hotel";
$conn=mysqli_connect($server,$user,$password,$database);
$username=$_POST['username'];
$password=$_POST['password'];
mysqli_select_db($conn,'hotel');
$RESULT4="select * from admin where username='$username' && password='$password'";
$RESULT=mysqli_query($conn,$RESULT4);
$ROW=mysqli_fetch_array($RESULT);
if ($ROW['username'] == $username && $ROW['password'] == $password)
{
  header ("location:admin.html");
  echo '<script language= "javascript">';
  echo 'alert("Login Successful")';
  echo '</script>';
}
else
{
  echo '<script language= "javascript">';
  echo 'alert("Incorrect login credentials")';
  echo '</script>';
}
?>
