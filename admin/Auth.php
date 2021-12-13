<?php
$myhost = "localhost";
$myuser = "id18075991_dead_noob1";
$mypass = "Ogd_?!NyUhf<5Mvc";
$mydb = "id18075991_dead_noob";
$key = "2147828743"; //Don't touch this !
$yoursiteurl = "http://localhost";

$con = mysqli_connect($myhost, $myuser, $mypass, $mydb);



if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
