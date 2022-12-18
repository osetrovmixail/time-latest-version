<?php
include('dbcon.php');
if(isset($_POST["id"]))
{
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id = $_POST['id'];
    $sql = "UPDATE math SET name='$title', open_at='$start', close_at='$end' WHERE id = $id"; 
    $conn->query($sql); 
}
?>


