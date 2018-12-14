<html lang = "en">
<body>
<div class="A option">
 <link rel="stylesheet" type ="text/css" href="Homepage.css"/>
<h2>Update Issue Form</h2>
  <form name="add" action="" method="POST">
  Ticket ID    <input type="text" name="ticket" /><br>
  Description:  <input type="text" name="description" /><br>

  <input type="submit">
  </form>
</div>
</body>

<?php

include ("connection.php");
$sql = NULL;
if (isset ($_POST['ticket']))
{$ticketID = $_POST['ticket'];}
if (isset($_POST['ticket']))
{$message =$_POST['description'];}

if (isset ($_POST['ticket'])) {
$query = "SELECT * FROM Tickets WHERE number = '$ticketID'";
$sqlsearch = mysqli_query($db, $query);
$resultcount = mysqli_num_rows($sqlsearch);

if ($resultcount == 1) {
$result = mysqli_query($db, "UPDATE Tickets SET
                             description = '$message'       
                             WHERE number = '$ticketID'")
     or die(mysql_error());
   
}
 else {

   // mysql_query("INSERT INTO Tickets (description)
     //                          VALUES ('$message') ")
     die(mysql_error()); 

}
if ($result === TRUE)
{ echo "Ticket $ticketID was successfully updated";
}
}


//Sees if this works out correctly and actually inserted
//if ($sql == NULL){}

?><br><br>
<input type="button" onclick="location.href='home.php';" value="Go Back to Menu" />
</body>

</html>
