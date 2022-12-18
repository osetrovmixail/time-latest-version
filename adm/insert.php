//insert.php
<?php
include('dbcon.php');
if(isset($_POST["title"]))
{
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "INSERT INTO math(name, open_at, close_at) VALUES ('$title','$start','$end')"; 
    $conn->query($sql); 
}
?>