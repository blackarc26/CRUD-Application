<?php
define ("hostname","localhost");
define ("username","root");
define ("password","");
define ("database","sql_first");

$connection = mysqli_connect(hostname,username,password,database);

if(!$connection){
    die("connection failed");
}


?>
