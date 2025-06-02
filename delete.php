<?php
include 'conn.php';

if (isset($_POST['delete']))
 $id = $_POST['id'];
 
 $delete = "DELETE FROM tbl_todolist WHERE id = '$id'";
 $result = mysqli_query($conn, $delete);
 
 if ($result){
     header('location: index.php');
 }
?>