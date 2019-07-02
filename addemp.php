<?php
$server="localhost";
$user="root";
$password="";
$database="hotel";
$conn=mysqli_connect($server,$user,$password,$database);
  try {
    if ($conn) {

        }
    else {
      echo "connection failed";
    }
  } catch (exception $e) {
   $e->getMessage();
  }
mysqli_select_db($conn,"hotel");
$conn1="insert into waiters (first, second, surname, idno, dob, username, password, doe) values ('$_POST[first]','$_POST[second]','$_POST[surname]','$_POST[idno]','$_POST[dob]','$_POST[username]','$_POST[password]','$_POST[doe]')";
$conn2=mysqli_query($conn,$conn1);
  if($conn2)
  {
    header("location:admin.html");
    echo '<script language="javascript">';
    echo 'alert("Registration successful")';
    echo '</script>';
  }
  else
  {
    echo '<script language="javascript">';
    echo 'alert("Registration unsuccessful. Please confirm details")';
    echo '</script>';
  }
?>
