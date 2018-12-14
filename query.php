<html lang = "en">
<body>
<title>Ticket Search</title>
	
<div class="Q option">
                  <h2>Enter the ID of the ticket you are looking for</h2>

                    <form name="query" action="" method="POST">
                <!-- the name is the section of the database that it is finding -->
                          Ticket ID: <input type="text" name="ticketid" /> <br> <!-- auto assigned to helpdesk -->

                      <input type="submit">
                    </form>
                </div>
<input type="button" onclick="location.href='home.php';" value="Go Back to Menu" />
</body>
</html>

<?php
	include ("connection.php");
	if (isset($_REQUEST['ticketid']))
	{	$id = $_REQUEST['ticketid'];	}
	if (isset($_REQUEST['ticketid']))
	{
		$sql = "SELECT * FROM tickets WHERE number = $id";
      $result = $db->query($sql);

      if (!$result){
        echo "Oops! " . $db->error;
      }
      else{
                $table = $result->fetch_all();
        //var_dump($table);
        echo "<table border = '1'>";
        echo "<tr><th>Title</th><th>Status</th><th>Ticket #</th><th>Date</th><th>Description</th><th>Last Name</th><th>First Name</th><th>Phone Number</th><th>Email</th><th>Username</th><th>Assignees</th></tr>";
        foreach($table as $row){
                echo "<tr>";
                foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
        }
      }
      }
?>
