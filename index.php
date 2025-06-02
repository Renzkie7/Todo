<center>
    <h1>Todolist</h1><br>
    <form action="submit.php" method="post">
        <input type="text" name="task" placeholder="Insert Task"><br>
        <button name="submit">Submit</button>
    </form>
</center>

<center>
    <h1>Pending Task</h1><br>
    <table>
        <tr>
            <th>Task</th>
            <th>Date_added</th>
            <th>Action</th>
        </tr>

        <?php
        include "conn.php";
        $select = "SELECT * FROM tbl_todolist WHERE Status = 'PENDING'";
        $result = mysqli_query($conn, $select);
        foreach ($result as $data) {
            ?>

            <tr>
                <td><?php echo $data['item']; ?></td>
                <td><?php echo $data['date_added']; ?></td>
                <td>
                    <form action="complete.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <button name="mark">Mark as Completed</button>
                        </form>
                        
                        <form action="edit.php" method="get" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <button type="submit" name="edit">Edit</button>
                        </form>

                
                        <form action="delete.php" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            } ?>
        </table>
    </center>

    <center>
        <h1>Completed Task</h1><br>
        <table>
            <tr>
                <th>Task</th>
                <th>Date_completed</th>
                <th>Action</th>
            </tr>

            <?php
            include "conn.php";
            $select = "SELECT * FROM tbl_todolist WHERE Status = 'COMPLETED'";
            $result = mysqli_query($conn, $select);
            foreach ($result as $data) {
                ?>
                <form action="delete.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <tr>
                        <td><?php echo $data['item']; ?></td>
                        <td><?php echo $data['date_completed']; ?></td>
                        <td><button name="delete">Delete</button></td>
                    </tr>
                </form>
                <?php
            } ?>

        </table>
    </center>