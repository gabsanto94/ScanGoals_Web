<?php
/**
 * Created by PhpStorm.
 * User: santos
 * Date: 5/19/17
 * Time: 6:56 PM
 */

//Database Credentials
$host = "localhost";
$user = "camelbac_root";
$pwd = "roots";
$db = "camelbac_orders";

//opening the connection
$conn = mysqli_connect($host, $user, $pwd, $db);

//check to see if we can connect to database
if(!$conn){
    die("Error Connecting to the Database");
}

//echo "Successfully Connection.";