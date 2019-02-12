<?php
session_start();
session_destroy();

@$_SESSION['E_EMAIL']="";
@$SESSION['E_ROLE']="";
header('Location: index.php');
?>