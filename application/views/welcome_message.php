<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	
<?php if(count($tasks)){ ?>
	<?php  foreach($tasks as $task) { ?>
		<table class="table">
			<thead class="thead-light">
			<tr>
				<th>Task: </th>
				<th><?= $task->tasks_name ?></th>
				<th><?= $task->task_details ?></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Sub Task</td>
				<td>-</td>
				<td>sub task 1 (static)</td>
			</tr>
			<tr>
				<td>Sub Task</td>
				<td>-</td>
				<td>sub task 2 (static)</td>
			</tr>
			<tr>
		    	<td>Sub Task</td>
				<td>-</td>
				<td>sub task 3 (static)</td>
			</tr>
			</tbody>
        </table>
	
	<?php }
	}
?>


</div>

</body>
</html>