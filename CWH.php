<?php
$server="localhostd";
$username="root";
$password="";
$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
echo "success connection to  the db";
?>