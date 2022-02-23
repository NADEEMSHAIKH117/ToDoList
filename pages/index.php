<?php 
	include('C:/xampp/htdocs/php programming/ToDoList_new/database/database.php');
	include('C:/xampp/htdocs/php programming/ToDoList_new/php/delete.php');
	include('C:/xampp/htdocs/php programming/ToDoList_new/php/edit.php');
	include('C:/xampp/htdocs/php programming/ToDoList_new/php/insert.php');
	include('C:/xampp/htdocs/php programming/ToDoList_new/php/update.php');
?>    
<!DOCTYPE html>
<html>
<head>
	<title>ToDo List Application PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
	</div>
	<form method="post" action="index.php" class="input_form">
    <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
    <?php } ?>
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <input type="text" name="task" id="task" value="<?php echo $task ?>" placeholder="Enter the Task">
        <?php
        if ($update == true) :
        ?>    
                <button type="submit" name="update" id="add_btn" class="add_btn">Update</button>    
            <?php else : ?>
                <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
            <?php endif; ?>    
	</form>
    <table>
	<thead>
		<tr>
			<th class="srNo">Sr No</th>
			<th class="tasks">Tasks</th>
			<th class="action" style="width: 60px;">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php 
		// select all tasks if page is visited or refreshed
		$tasks = mysqli_query($db, "SELECT * FROM task");

		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td class="task"> <?php echo $row['task']; ?> </td>
				<td class="delete"> 
					<a href="index.php?del_task=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash-can"></i></a> 
                    <a href="index.php?update_task=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>
<script src="https://kit.fontawesome.com/4914336acd.js" crossorigin="anonymous"></script>
</body>
</html>