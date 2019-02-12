<?php 
session_start();
if (@$_SESSION['E_EMAIL']!="")
{
include '/global/userlogin_header.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add new product</title>
</head>
<link rel="stylesheet" type="text/css" href="./styles/style.css">
<body>
<?php
 
 
?>
<div align="center">
<fieldset>
<legend>Add new product</legend>
<form action="add_prod_action.php" method="POST">
    <input type="hidden" name="mid" value="<?php echo $mid; ?>">
    Product Name:&nbsp&nbsp<input type="text" name="P_NAME" placeholder="Enter Product name" required> <br><br>
	Product Prise:&nbsp&nbsp<input type="text" name="P_PRISE" placeholder="Enter Product Prise" required> <br><br>
	Product Category:&nbsp&nbsp<input type="text" name="P_CATEGORY" placeholder="Enter Product Category"  required> <br><br>
	Product Quantity:&nbsp&nbsp<input type="text" name="P_QUANTITY" placeholder="Enter Product Quantity" required> <br><br>
	
	<button type="submit" name="submitbtn" value="submit"> Submit </button>

</form>

</fieldset>
</div>

<?php include '/global/userlogin_footer.php'; 
}else{
	header('Location: index.php');
}
?>

</body>
</html>