<?php
if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($db, "DELETE FROM task WHERE id=".$id);
	header('location:index.php');
}
?>