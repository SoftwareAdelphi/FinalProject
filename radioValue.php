<?php
	if (isset($_POST['save'])) {
		if (isset($_POST['a']))
	{ 
		$assign = $_POST['a'];
		$sql = "UPDATE Tickets SET assignee = '$assign' ORDER BY `number` ASC LIMIT 1;";
		$result = mysqli_query($db, $sql);
		if ($result)
		{ echo "<span> Ticket was assigned to : <b> ".$assign." </b></span>";}
	}
	
else{ echo "<span>Please choose an assignee to assign ticket to.</span>";}

}
?>
