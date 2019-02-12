<?php 
session_start();
if (@$_SESSION['E_EMAIL']!="")
{
include '/global/userlogin_header.php'; 
?>
<?php 
  if(@$_SESSION['message']!=""){
echo @$_SESSION['message'];
@$_SESSION['message']="";
  }  ?>
<?php

 include('config/con_db.php');
 $sql1="SELECT * FROM PRODUCT";
 $result1=oci_parse($conn, $sql1);
 oci_execute($result1);




?>

<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>
  <link rel="stylesheet" type="text/css" href="./styles/style.css">
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<!--<div align="center">
<form action="supermarket_list_view_action.php" method="POST">
   <h4>Members: <select name="uid" required>
     <?php while($row = mysqli_fetch_array($result2)):;?>
      <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
       <?php endwhile;?>
     </select>
  </h4>
  <h4>Date:
  <input type="date" name="date" required>
  </h4>
  <h4>Expense
  <input type="text" name="expense">
  </h4>

  <button type="submit" name="marketbtn" value="MARKET">Submit</button>
</form>
</div>-->

<?php


echo "<div align='center'>";
echo "<table align='center'>";
echo "<tr> <th>Product Name</th> <th>Price (Per Piece)</th>  <th>Category</th> <th>Quantity</th> <th> Edit</th> <th> Delete</th>    ";
echo "</tr>";
while ($row=oci_fetch_array($result1))
{
  echo "<tr>";//opens row
  echo "<td>" .$row ['P_NAME']. "</td>";
  echo "<td>" .$row ['P_PRISE']. "</td>";
  echo "<td>" .$row ['P_CATEGORY']. "</td>";
  echo "<td>" .$row ['P_QUANTITY']. "</td>";
  //echo "<td><a href='#'><button>Add Member</button></a></td>";
  echo "<td><a href=\"edit_product.php?P_ID=".$row['P_ID']."\">Edit</a></td>";
  echo "<td><a href=\"delete_product.php?P_ID=".$row['P_ID']."\">Delete</a></td>";
  //."?date=".$row['date'].
  //echo "<td><a href='#'>Edit</a></td>";
  echo '<br>';
  echo "</tr>";
}
echo "</table>";

echo "</div>";



?>

<?php include '/global/userlogin_footer.php'; 
}else{
	header('Location: index.php');
}
?>

</body>
</html>