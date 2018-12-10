<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>DBMS</title>

    <meta name="author" content="GB">


    <script src="javascript.js"></script>
    <script language="javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.1.min.js"></script>
</head>
<body>

<?php
//open connection
        $host = "localhost";
        $user = "proggadeb";
        $pw = "";
        $database = "proggadeb";
        $dbh = new mysqli($host, $user, $pw, $database);
        if ($dbh->connect_errno) {
                echo "Connect failed: ". $dbh->connect_error;
                exit();
	}


		//double checks to see if everything is filled in
	//query from 
		if( (!isset($_POST['fnameadd']) || trim($_POST['fnameadd']) == "") || 
			(!isset($_POST['lnameadd']) || trim($_POST['lnameadd']) == '') || 
			(!isset($_POST['issue_Title']) || trim($_POST['issue_Title']) == '') ||
			(!isset($_POST['telephone']) || trim($_POST['telephone']) == '') ||
			(!isset($_POST['description']) || trim($_POST['description']) == ''){

		   echo "You did not fill out the required fields.";
		
		} else {
			$time = int time ( void ) //grabs timestamp
			$sql = "INSERT INTO //table (firstname, lastname, issue, description, time, status, assignee ) //all the table column names has to be in order of columns and such should be correct
			VALUES ('$_POST[fnameadd]', '$_POST[lnameadd]','$_POST[issue_Title]', '$_POST[description]', '$time', 'open', 'Helpdesk')"; //doubleCheck this
		}
		
	//Sees if this works out correctly and actually inserted	
if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbh->error;
}

$dbh->close();

<br>
	<input type="button" onclick="location.href='TicketSystemForms.html';" value="Go Back to Menu" />

</body>

</html>
?>
