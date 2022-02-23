<?php
if (isset($_POST['update'])){
    
    $id = $_POST['id'];
    $task = $_POST['task'];

    $result=mysqli_query($db, "UPDATE task SET task='$task' WHERE id=$id");
    if($result){
        header('location:../pages/index.php');
    }
    
    
}   
?>