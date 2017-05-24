<?php
/**
 * Created by PhpStorm.
 * User: santos
 * Date: 5/19/17
 * Time: 11:26 PM
 */

//file paths for the links
$home = "index.php";
$checkin = "checkin.php";
$search = "search.php";
$settings = "settings.php";


?>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Spartan Delivery/Inventory</a>
        </div>
        <ul class="nav navbar-nav">
            <li <?php if($activePage == "home"){echo "class='active'";}?>><a href="index.php">Home</a></li>

            <li <?php if($activePage == "checkin"){echo "class='active'";}?>><a href="checkin.php">Check In Order</a></li>
            <li <?php if($activePage == "search"){echo "class='active'";}?>><a href="search.php">Search</a></li>
            <li <?php if($activePage == "order"){echo "class='active'";}?>><a href="order.php">Order</a></li>
            <li <?php if($activePage == "settings"){echo "class='active'";}?>><a href="settings.php">Settings</a></li>

        </ul>
    </div>
</nav>