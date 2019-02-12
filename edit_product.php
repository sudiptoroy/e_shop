<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
<?php
session_start();
if (@$_SESSION['E_EMAIL']!="")
{
//$mcurrent_users=0;
include '/global/userlogin_header.php'; ?>

<?php 
include('config/con_db.php');
$P_ID = $_GET['P_ID'];

$sql="SELECT * from PRODUCT WHERE P_ID='$P_ID' ";

 /*$sql1="SELECT * FROM userinfo WHERE uemail='$_SESSION[uemail]'";
 $result1=mysqli_query($con,$sql1);

 while ($row=mysqli_fetch_array($result1))
{
  $mid=$row ['mid'];
}*/

//$sql2="SELECT * from userinfo WHERE mid='$mid'";
//$result2=mysqli_query($con,$sql2);

$result = oci_parse($conn, $sql);
oci_execute($result);
while ($row=oci_fetch_array($result))
{
	$P_ID=$row ['P_ID'];
	$P_NAME=$row ['P_NAME'];
	$P_PRISE=$row ['P_PRISE'];
	$P_CATEGORY=$row ['P_CATEGORY'];
	$P_QUANTITY=$row ['P_QUANTITY'];
	
}
?>
<div align="center">
<fieldset>
<legend>Edit Product Details</legend>
<form action="edit_product_action.php" method="POST">
    <!-- <input type="hidden" name="mid" value="<?php echo $mid; ?>"> -->
    <input type="hidden" name="P_ID" value="<?php echo $P_ID; ?>">

    Product Name:&nbsp&nbsp<input type="text" name="P_NAME"  value="<?php echo $P_NAME; ?>"> <br><br>
    Prise&nbsp(Per Piece):&nbsp&nbsp<input type="text" name="P_PRISE"  value="<?php echo $P_PRISE; ?>"> <br><br>
    Category:&nbsp&nbsp<input type="text" name="P_CATEGORY"  value="<?php echo $P_CATEGORY; ?>"> <br><br>
    Quantity:&nbsp&nbsp<input type="text" name="P_QUANTITY"  value="<?php echo $P_QUANTITY; ?>"> <br><br>

	<button type="submit" name="updatebtn" value="UPDATE"> Update </button>

</form>

</fieldset>
</div>

<?php include '/global/userlogin_footer.php'; 

}else
{
  header('Location: index.php');
}
?>
</body>
</html>