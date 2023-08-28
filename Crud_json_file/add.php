<?php 
require_once ('class.php');
$db = new json();
	
	if(!empty($_GET['eid']))
	{
		$singlerow = $db-> single($_GET['eid']);
	}
	
	// var_dump($singlerow['id']);
	$actionlabel = !empty($_GET['eid'])?'Edit':'Add'; 
?>

<h1><?php echo $actionlabel; ?> The Member</h1>

<form method="post" action="action.php">
	Enter Name : <input type="text" name="name" value="<?php echo !empty($singlerow)?$singlerow['name']:''; ?>" required><br><br>
	Enter Age : <input type="text" name="age" value="<?php echo !empty($singlerow)?$singlerow['age']:''; ?>" required><br><br>
	<input type="hidden" name="id"  value="<?php echo !empty($singlerow)?$singlerow['id']:''; ?>" required><br><br>
	<input type="submit" name="save" required><br><br>
	<a href="index.php">Back</a>
</form>