<!DOCTYPE html>
<?php
include('config/con_db.php');
$result = oci_parse($conn, "select * from EMPLOYEE where E_EMAIL='$_SESSION[E_EMAIL]'");

oci_execute($result);


while($row = oci_fetch_array($result) )
{
  $temp = $row['E_ROLE'];
}

echo '<div id="banner" align ="center">
<a href="home.php"><img src="images/logo.png" title="electronic_shop.com" alt="electronic_shop"></a>
</div><!--div banner end-->';
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-default" role="navigation"><!-- Navigarion bar in home page -->
    <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="#">Search</a></li>
      <li><a href="#">Profile</a></li>
      <!--<input type="text" name="" value="<?php echo @$_SESSION[role]; ?>">-->
      <?php if ($temp == "2"){ ?>
      <li><a href="#">All Products</a></li>
      <?php } ?>

   </nav>
      <?php if ($temp == "1"){ ?>
      <!--<li><a href="manage_mess.php">Manage Mess Profiles</a></li>-->
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menu
          <span class="caret"></span></button>
           <ul class="dropdown-menu">
             <li><a href="add_products.php">Add Products</a></li>
             <li><a href="#">Add Employee</a></li>
             <li><a href="all_products.php">All Products</a></li>
          </ul>
        </div>
      <?php } ?>
      </ul>
    </div>
     
      
    
      



   
    </body>
</html>
