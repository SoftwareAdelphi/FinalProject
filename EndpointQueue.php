<html>
<head>
<title>Endpoint Queue</title>
<center><h1>ENDPOINT QUEUE</h1><br>

<?php
//open connection
include ("connection.php");
	//prepare info to display
	$sql = "SELECT number, title, description, email, status, assignee, date FROM Tickets WHERE assignee = 'Endpoint' ORDER BY date";
	$result = mysqli_query($db, $sql);

	//nothing prepared --> error
	if (!$result){
        echo "Oops! " . $db->error;
      }
	//information to display --> display
      else{
                $table = $result->fetch_all();
        //var_dump($table);
	//create table layout for info
        echo "<table border = '1'>";
        echo "<tr><th>Ticket #</th><th>Title</th><th>Description</th><th>Contact</th><th>Status</th><th>Assignees</th><th>Date Created</th></tr>";
        //iterate through and display info in table
	foreach($table as $row){
                echo "<tr>";
                foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
        }
	}
?>

<!-- button to log out and return to home -->
<input type="button" onclick="location.href='home.php';" value="Log Out" />
<!-- button to log out and return to home -->
<input type="button" onclick="location.href='update.html';" value="Update Description" /><br>

</body>

</html>
