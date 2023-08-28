<?php 
require_once ('class.php');
$db = new json();

$members = $db->display();
	
?>
<h1>Table Of Members</h1>
<a href="add.php">New Member<a><br><br>
	
<table border="2" width="20%">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		if(!empty($members))
		{
			$n=0;
			foreach($members as $value)
			{
				$n++;
	?>
	<tr>
		<td><?php echo $n; ?></td>
		<td><?php echo $value['name']; ?></td>
		<td><?php echo $value['age']; ?></td>
		<td><a href="add.php?eid=<?php echo $value['id']; ?>">edit</a></td>
		<td><a href="action.php?did=<?php echo $value['id']; ?>">delete</a></td>
	</tr>
	<?php 
		}}else{
	?>
	<tr>
		<td colspan="5" style="color:red;">No data Found! Please Some data members</td>
	</tr>
	<?php } ?>
</table>