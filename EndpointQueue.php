<?php
 include ('session.php');       // login session
 include ("connection.php");     //connects to db
?>
<html>
<head>
<title>Endpoint Home</title>
 <link rel="stylesheet" type ="text/css" href="Homepage.css"/>
<h1> KPG WORK ORDER SYSTEM </h1>
<ul>
     <li> <a class= "current" href= "#homepage"> Endpoint Integration </a> </li>
     <li> <a href = "add.php"> Add Issues </a> </li>
     <li> <a href = "update.php"> Update Ticket </a> </li>
     <li> <a href = "query.php"> Query Issues </a> </li>
     <li> <a href = "Logout.php"> Logout </a> </li>
</ul>

<br><br><center><table class="TicketsTable">
  <tr class="TableHeader">
    <th id="headerItem"><center>Ticket ID</center></th>
    <th id="headerItem"><center>Title</center></th>
    <th id="headerItem"><center>Description</center></th>
    <th id="headerItem"><center>Email</center></th>
    <th id="headerItem"><center>Status</center></th>
    <th id="headerItemAssignees"><center>Assignees</center></th>
    <th id="headerItem"><center>Date Created</center></th>
  </tr>
<?php
//open connection
//include ("connection.php");
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
        //iterate through and display info in table
	foreach($table as $row){
                ?>
                <tr class = "TableRow">
                <?php
                foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
        }
	}
?>

</body>

</html>
