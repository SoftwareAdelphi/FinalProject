<html>
<head>
<title>Help Desk Queue</title>
</head>

<body>
<h1>Help Desk Tickets:</h1>
<form action="HelpdeskQueue.php" method="post">
<table>
        <tr>
                <td>Enter an order number:</td>
                <td><input type="text" size="10" name="number"/></td>
        </tr>
</table>
<p><input type="submit"></p>
</form>

<?php

//open connection
try {

        $dbh = new PDO('pgsql:dbname= kaylapollock');

} catch (PDOException $e) {
        print "Error: ".$e->getMessage()."<br/>";
        die();
}

//store value
$i=1;
echo "<PRE>";
if (array_key_exists("number", $_REQUEST)) {
	//begin parameterized query ? is placeholder
	$st = $dbh->prepare("SELECT * FROM ___ WHERE ____ =?");

	//map each ? to a variable
	$st->bindParam(1, $_REQUEST['number']);

//        $number = $_REQUEST['number'];
} else {
	$st = $dbh->prepare("SELECT * FROM _____ ");
//        $number = '';
}

//execute query
$res = $st->execute();
print "<pre>
";
?>

Ticket ID	Issue Title	Description	Contact First Name	Last Name	Telephone	Email	Status Asignees

<?php
#$res = $dbh->query($q, PDO::FETCH_ASSOC);
while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
	foreach ($row as $key=>$value) {
		print "$value\t";
	}
	print "\n";
}
$dbh = null;
?>

</body>
</html>
