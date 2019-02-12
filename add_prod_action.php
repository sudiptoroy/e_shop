<!DOCTYPE html>
<?php session_start(); ?>
<?php
  include('config/con_db.php');

  if($_POST['submitbtn']=="submit"){
  $P_NAME= $_POST['P_NAME'];
  $P_PRISE= $_POST['P_PRISE'];
  $P_CATEGORY= $_POST['P_CATEGORY'];
  $P_QUANTITY= $_POST['P_QUANTITY'];
  
  /*echo $pass_id ; 
  echo '<br>';
  echo $pass_name ;
  echo '<br>';
  echo $pass_pin ;
  echo '<br>';
  echo "password" ;
  echo '<br>';
  echo $phone_no ;
  echo '<br>';
  echo $pass_email ;
  echo '<br>';
  echo $gender ;
  echo '<br>';*/
  $P_ID=uniqid();
  $sql="INSERT INTO PRODUCT values('$P_ID','$P_NAME','$P_PRISE','$P_CATEGORY',
  '$P_QUANTITY')";
$temp = oci_parse($conn,$sql);

  if (oci_execute($temp))
  {
    @$_SESSION['message']="Successfully product added.";
    header('Location: home.php');
  }
  else
  {
    @$_SESSION['message']="Failed to add!";
    header('Location: home.php');
    echo '<br>';
  }
}else{
  header('Location: index.php');
}
  
?>
<html>
<body>
<br>
<!--<a href="index.php">Back to Home</a>-->
</body>
</html>

