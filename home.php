<?php
session_start();
if (@$_SESSION['E_EMAIL']!="")
{

include '/global/userlogin_header.php'; ?>
<?php

   /*if(!isset($_SESSION['uemail'])){

      header('Location: index.php');
   }*/
  
?>
<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<?php include('config/css.php'); ?>
<?php include('scripts/js.php'); ?>

<!-- Latest compiled and minified JavaScript -->

<html>
<head>
  <title>Home</title>
</head>
<!-- 23292E -->
<body>
  <div class="container">
  <?php 
  if(@$_SESSION['message']!=""){
echo @$_SESSION['message'];
@$_SESSION['message']="";
  }  ?>
  <div>
    </div>
  </div>

?>
</body>
</html>
<?php include '/global/userlogin_footer.php'; 

}else
{
  header('Location: index.php');
}
?>