<?php
include 'conn.php';

if (isset($_POST['mark'])){
    $status = "COMPLETED";
    $id = $_POST['id'];
    
    $update = "UPDATE tbl_todolist SET Status = '$status', date_completed = NOW() WHERE id = '$id'";
    $result = mysqli_query($conn, $update);
 if ($result){
     header('location: index.php');
 }
}
?>

