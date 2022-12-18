<?php
$conn = new mysqli('localhost','root','','carrental');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>