<!DOCTYPE html>
<?php session_start(); ?>
<?php
  include('config/con_db.php');

  if($_POST['updatebtn']=="UPDATE"){
  $P_ID= $_POST['P_ID'];
  $P_NAME= $_POST['P_NAME'];
  $P_PRISE= $_POST['P_PRISE'];
  $P_CATEGORY= $_POST['P_CATEGORY'];
  $P_QUANTITY= $_POST['P_QUANTITY'];

  $sql="UPDATE PRODUCT SET P_NAME = '$P_NAME', P_PRISE = '$P_PRISE', P_CATEGORY = '$P_CATEGORY' , P_QUANTITY = '$P_QUANTITY' WHERE P_ID = '$P_ID'";

  $result = oci_parse($conn, $sql);
  if (oci_execute($result))
  {
    @$_SESSION['message']="Product Details updated.";
    header('Location: all_products.php');
  }
  else
  {
    @$_SESSION['message']="Failed to update";
    header('Location: all_products.php');
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

