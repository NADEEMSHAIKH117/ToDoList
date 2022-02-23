<?php
$update=false;
$id=0;
$task="";
    //update task
    if (isset($_GET['update_task'])) {
        $id = $_GET['update_task'];
        $update = true;
        $result=mysqli_query($db, "SELECT * FROM task WHERE id=".$id);
        if ($result){
            $row = mysqli_fetch_assoc($result);
            $task = $row['task'];
          }
        // header('location: index.php');
    }  
?>