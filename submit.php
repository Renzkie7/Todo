<?php
include "conn.php";
if (isset($_POST['submit'])){
    $task = $_POST['task'];
    

    $submit = "INSERT INTO tbl_todolist (item) VALUES ('$task')";
    $result = mysqli_query($conn, $submit);
    
    if ($result){
        header('location: index.php');
    }
}