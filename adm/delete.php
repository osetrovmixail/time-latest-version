//delete.php
<?php
include('dbcon.php');
if(isset($_POST["id"]))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM math WHERE id = $id"; 
    $conn->query($sql);
}   
?>