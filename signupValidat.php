<?php




if(!empty($_POST['signup']))
{ 
  
  $Name=addslashes($_POST['name']);

  $password=md5(addslashes($_POST['pas']));
  
  $mobile=$_POST['mobile'];
  $mail=$_POST['mail'];
 

     $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");
}

$txt="SELECT * FROM `signup` WHERE `Email`='{$mail}'";
$result=$db->query($txt);
if($result->num_rows===0)
{
  $sql= "INSERT INTO signup values('$Name','$password','$mobile','$mail')";
  $db->query($sql);
  if($db->error)
  {
    echo $db->error;
    
  }
  
    echo"<script>alert('signup successfully')</script>";
    header("location:index.php");
    
  
}
else
  echo"<script>alert('User Alredy exist')</script>";
  header("location:index.php");
}




?>