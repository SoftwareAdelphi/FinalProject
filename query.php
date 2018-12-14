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
	//ticketid is what user entered
	if (isset($_REQUEST['ticketid']))
	//if valid then id is set to the input
	{	$id = $_REQUEST['ticketid'];	}
	if (isset($_REQUEST['ticketid']))
	{
		//start retrieving info from database
		$sql = "SELECT * FROM tickets WHERE number = $id";
      $result = $db->query($sql);

      //if result so the query returns null	
      if (!$result){
        echo "Oops! " . $db->error;
      }
	//if it does not, then there is info and it is read to be displayed
      else{
                $table = $result->fetch_all();
        //set up and display table
        echo "<table border = '1'>";
        echo "<tr><th>Title</th><th>Status</th><th>Ticket #</th><th>Date</th><th>Description</th><th>Last Name</th><th>First Name</th><th>Phone Number</th><th>Email</th><th>Username</th><th>Assignees</th></tr>";
        foreach($table as $row){
                echo "<tr>";
		//iterate through to display
		foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
        }
      }
      }
?>
