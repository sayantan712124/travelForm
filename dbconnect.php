<?php
$server="localhost";
$username="root";
$password="";
$database = 'd_trip';
$con = mysqli_connect( $server, $username, $password,$database);
if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
// echo("successfully connect to the the db");



?>