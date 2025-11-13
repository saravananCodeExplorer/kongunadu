<?php
$db = new mysqli("localhost", "root", "", "saroshopping");

if (!$db) {
    die("Connection failed: ".mysqli_error($db));
 } 

?>
