<?php
include "conn.php";

if (isset($_GET)) {
    $id = $_GET['id'];


    $select = "SELECT * FROM tbl_todolist WHERE id = '$id'";
    $row = mysqli_query($conn, $select);
    $result = mysqli_fetch_assoc($row);
}



if (isset($_POST['edit'])) {
    $task = $_POST['task'];

    $update = "UPDATE tbl_todolist SET item = '$task' WHERE id = '$id'";
    $result = mysqli_query($conn, $update);

    if ($result) {
        header('location:index.php');
    }
}

?>

<center>
    <h1>Edit Task</h1><br>
    <form action="#" method="post">
        <input type="text" name="task" value="<?php echo $result['item']; ?>"><br>
        <button name="edit">Submit</button>
    </form>
</center>