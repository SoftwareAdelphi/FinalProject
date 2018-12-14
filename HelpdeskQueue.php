<?php
 include ('session.php');       // login session
 include ("connection.php");     //connects to db
?>
<html>
<head>
<title>Help Desk Home</title>
 <link rel="stylesheet" type ="text/css" href="Homepage.css"/>
<body>
<?php
        //Displays the name of the user currently logged in
    //     $name = mysqli_query($db, "SELECT fName FROM Login WHERE username = '$login_session';");
  //       $who = mysqli_fetch_row($name);
//         echo $who[0];?>
<!-- Bar to navigate through system -->
<h1> KPG WORK ORDER SYSTEM </h1>
<ul>
     <li> <a class= "current" href= "#homepage"> Help Desk </a> </li>
     <li> <a href = "add.php"> Add Issues </a> </li>
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
	$sql = "SELECT number, title, description, email, status, assignee, date FROM Tickets WHERE assignee = 'Helpdesk' AND status = 'open' ORDER BY date DESC";
	$result = mysqli_query($db, $sql);

	if (!$result){
        echo "Oops! " . $db->error;
      }
      else{
                $table = $result->fetch_all();
        //var_dump($table);
       // echo "<table border = '1'>";
       // echo "<tr><th>Ticket #</th><th>Title</th><th>Description</th><th>Status</th><th>Assignees</th><th>Date Created</th></tr>";
	{
                foreach($table as $row) {
                ?>
                <tr class = "TableRow">
                <?php

                foreach($row as $value){
		 
		if ($value == 'Helpdesk') { ?>
		<td>
		<form action = "" method = "post">
                <input type = "radio" name = "a" value = "SysAdmin"> Sys Admin
                <input type = "radio" name = "a" value = "Endpoint"> Endpoint
		<input type = "submit" name = "save" value = "Save">
		</form>
		</td>
		<?php }
		else {echo "<td>$value</td>";}
		}
		//include 'radioValue.php';		
                echo "</tr>";
        }
	//include 'radioValue.php';
	}
	include 'radioValue.php';
}
?>
</table>
<input type="button" onclick="location.href='home.php';" value="Go Back to Menu" />

</body>
</html>
