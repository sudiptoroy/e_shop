<?php
include('config/con_db.php');
include '/global/userlogin_header.php'; 
$P_ID = $_GET['P_ID'];

$sql="DELETE FROM PRODUCT WHERE P_ID ='$P_ID' ";
//AND `date` = '$date'

$result = oci_parse($conn, $sql);


if (oci_execute($result))
  {
    @$_SESSION['message']="Successfully deleted.";
    header('Location: all_products.php');
  }
  else
  {
    @$_SESSION['message']="Failed to delete!";
    header('Location: all_products.php');
    echo '<br>';
  }

?>