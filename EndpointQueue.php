<html>
<head>
<title>Endpoint Queue</title>
</head>

<body>
<h1>Endpoint Tickets:</h1>
<form action="EndpointQueue.php" method="post">
<table>
        <tr>
                <td>Enter a ticket number:</td>
                <td><input type="text" size="10" name="number"/></td>
        </tr>
</table>
<p><input type="submit"></p>
</form>

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
//store value
$i=1;
echo "<PRE>";
if (array_key_exists("number", $_REQUEST)) {
	//begin parameterized query ? is placeholder
	$st = $dbh->prepare("SELECT * FROM Tickets WHERE number =?");
	//map each ? to a variable
//	$st->bindParam(1, $_REQUEST['number']);
//        $number = $_REQUEST['number'];
} else {
	$st = $dbh->prepare("SELECT * FROM Tickets");
//        $number = '';
}
//execute query
//$res = $st->execute();
print "<pre>
";
?>


<?php
$sql = "SELECT * FROM `Tickets` WHERE assignee = 'Endpoint';";
        $result = $dbh->query($sql);
        if(!$result){
//                echo "Bummer! " . $dbh->error;
        }
        else{
//                echo "<br>The result has " . $result->num_rows. " rows.";
        //two methods
        $table = $result->fetch_all();
        //var_dump($table);
echo "<table border = '1'>";
echo "<tr><th>Issue</th><th>Status</th><th>Ticket #</th><th>Date Created</th><th>Description</th><th>Last Name</th><th>First Name</th><th>Phone</th><th>Email</th><th>Username</th><th>Assignee</th></tr>";
        foreach($table as $row){
                echo "<tr>";
                foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
		}
	}
?>

</body>
</html>

