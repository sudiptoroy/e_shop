<?php 
 session_start();?>
<?php
include('config/con_db.php');
if($_POST['logbtn']=="LOGIN"){
  @$_SESSION['E_EMAIL']=$_POST['E_EMAIL'];
  $E_PASSWORD=$_POST['E_PASSWORD'];
  $result="";

  $sql="SELECT * FROM EMPLOYEE where E_PASSWORD='$E_PASSWORD' and E_EMAIL='$_SESSION[E_EMAIL]'";
  

  $result=oci_parse($conn,$sql);
	
	if ($result!="")
	{
			$rec=oci_fetch_object($result);
		    @$_SESSION['E_ID']=$rec->E_ID;
		    @$_SESSION['E_ROLE']=$rec->E_ROLE;
		    //@$_SESSION['mid']=$rec->mid;
		   // @$_SESSION['ulocation']=$rec->ulocation;
		    @$_SESSION['message']="Welcome";
		    header('Location: home.php');
		
	}else{

		@$_SESSION['message']="Failed to log in!";
		header('Location: index.php');
	}

}else{
	header('Location: index.php');
}
?>
