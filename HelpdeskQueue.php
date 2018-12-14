<html>
<head>
<title>Help Desk Queue</title>
<center><h1> HELP DESK QUEUE</h1><br>
<?php
//open connection
include ("connection.php");

	$sql = "SELECT number, title, description, status, assignee, date FROM Tickets WHERE assignee = 'Helpdesk' ORDER BY date";
	$result = mysqli_query($db, $sql);

	if (!$result){
        echo "Oops! " . $db->error;
      }
      else{
                $table = $result->fetch_all();
        //var_dump($table);
        echo "<table border = '1'>";
        echo "<tr><th>Ticket #</th><th>Title</th><th>Description</th><th>Status</th><th>Assignees</th><th>Date Created</th></tr>";
        foreach($table as $row){
                echo "<tr>";
                foreach($row as $value){
                        echo "<td>$value</td>";
                }
		?>
		<form action = "" method = "post">
		<input type = "radio" name = assignee" value "SysAdmin"> Sys Admin
		<input type = "radio" name = assignee" value "SysAdmin"> Endpoint
		</form>
		<?php
                echo "</tr>";
        }
	}

?>

<input type="button" onclick="location.href='home.php';" value="Go Back to Menu" />

</body>
</html>
