<html lang = "en">
<body>
<title>Ticket Removal</title>
 <link rel="stylesheet" type ="text/css" href="Homepage.css"/>

<h1> KPG WORK ORDER SYSTEM </h1>
<ul>
     <li> <a href= "home.php"> Home </a> </li>
     <li> <a href = "add.php"> Add Issues </a> </li>
     <li> <a class = "current" href = "#remove"> Remove Ticket</a> </li>
     <li> <a href = "login.html"> Worker Login </a> </li>
</ul>
<br><br>	
<div class="Q option">
                  <h3>Remove by ticket ID</h3>

                    <form name="query" action="" method="POST">
                <!-- the name is the section of the database that it is finding -->
                          Ticket ID: <input type="text" name="ticketid" /> <br> <!-- auto assigned to helpdesk -->

                      <input type="submit">
                    </form>
                </div>
<input type="button" onclick="location.href='home.php';" value="Go Back to Menu" />
</body>
</html>

<br><br><center><table class="TicketsTable">
  <tr class="TableHeader">
    <th id="headerItem"><center>Ticket ID</center></th>
    <th id="headerItem"><center>Title</center></th>
    <th id="headerItem"><center>Description</center></th>
    <th id="headerItem"><center>Last Name</center></th>
    <th id="headerItem"><center>First Name</center></th>
    <th id="headerItem"><center>Phone Number</center></th>
    <th id="headerItem"><center>Username</center></th>
    <th id="headerItem"><center>Email</center></th>
    <th id="headerItem"><center>Status</center></th>
    <th id="headerItemAssignees"><center>Assignees</center></th>
    <th id="headerItem"><center>Date Created</center></th>
  </tr>

<?php
	include ("connection.php");
	//ticketid is what user entered
	if (isset($_REQUEST['ticketid']))
	//if valid then id is set to the input
	{	$id = $_REQUEST['ticketid'];	}
	if (isset($_REQUEST['ticketid']))
	{
		//start retrieving info from database
		$sql = "SELECT number, title, description, lname, fname, phonenumber, username, email, status, assignee, date FROM tickets WHERE number = $id";
      $result = $db->query($sql);

      //if result so the query returns null	
      if (!$result){
        echo "Oops! " . $db->error;
      }
	//if it does not, then there is info and it is read to be displayed
      else{
                $table = $result->fetch_all();
        //set up and display table
        //echo "<table border = '1'>";
        //echo "<tr><th>Title</th><th>Status</th><th>Ticket #</th><th>Date</th><th>Description</th><th>Last Name</th><th>First Name</th><th>Phone Number</th><th>Email</th><th>Username</th><th>Assignees</th></tr>";
        foreach($table as $row){
        ?>
                <tr class = "TableRow">
                <?php

		//iterate through to display
		foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
        }
      }
      }
?>
