<html lang = "en">
<body>
<div class="A option">
<h2>Please fill out every field</h2>
  <form name="add" action="" method="POST">
  First Name:    <input type="text" name="fnameadd" /><br>
  Last Name:     <input type="text" name="lnameadd" /><br>
  Issue Title:    <input type="text" name="issue_Title" /><br>
  Description:  <input type="text" name="description" /><br>
  Telephone Number:          <input type="text" name="telephone" /><br>
  Email:        <input type="text" name="countyadd" /><br>
  <!-- Helpdesk is auto assigned. Date/status is auto generated. Issue number is also auto generated-->
  <input type="submit">
  </form>
</div>
</body>
<?php
include ("connection.php");
//double checks to see if everything is filled in
//query from 
if( (!isset($_POST['fnameadd']) || trim($_POST['fnameadd']) == "") || 
(!isset($_POST['lnameadd']) || trim($_POST['lnameadd']) == '') || 
(!isset($_POST['issue_Title']) || trim($_POST['issue_Title']) == '') ||
(!isset($_POST['telephone']) || trim($_POST['telephone']) == '') ||
(!isset($_POST['description']) || trim($_POST['description']) == ''))
{
   echo "You did not fill out the required fields.";

} else {
	$sql = "INSERT INTO //table (firstname, lastname, issue, description, time, status, assignee ) //all the table column names has to be in order of columns and such should be correct
VALUES ('$_POST[fnameadd]', '$_POST[lnameadd]','$_POST[issue_Title]', '$_POST[description]', current_timestamp(), 'open', 'Helpdesk')"; //doubleCheck this
}

//Sees if this works out correctly and actually inserted
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>
<br>
<input type="button" onclick="location.href='TicketSystemForms.html';" value="Go Back to Menu" />
</body>
</html>
