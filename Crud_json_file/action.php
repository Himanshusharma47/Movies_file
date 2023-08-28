<?php
	require_once ('class.php');
	$db = new json();
	
	if(!empty($_POST['save']))
	{
		$eid = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		
		$userdata = array(
			'name' => $name,
			'age' => $age
		);
		
		if(!empty($eid))
		{
			$updation = $db-> update($userdata,$eid);
	
		}
		else
		{
			$putinsert = $db->insert($userdata);
		}
		
	}
	
	if(!empty($_GET['did']))
	{
		$did = $_GET['did'];
		$delete = $db->del($did);
	}
	
	header ('location: index.php');
?>