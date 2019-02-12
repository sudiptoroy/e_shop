<?php
$conn = oci_connect('SUDIP','123','localhost/orcl');

if (!$conn)
{
	echo "Connection error";
}
 ?>