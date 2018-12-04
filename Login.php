<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>DBMS</title>

        <meta name="author" content="GB">

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

            $u = trim($_POST['username']);
            $p = MD5(trim($_POST['password']));

            $result = pg_query("SELECT * FROM login WHERE username='$u' and password='$p'");

            if(pg_num_rows($result)!=1) {
                echo "Incorrect username or password.";
            
            } else {
                $_SESSION['login_user']=$u;
                $rolequery = pg_query("SELECT assignee FROM login WHERE username='$u' and password='$p'");

                $row=pg_fetch_row($rolequery);
                if($row[0]=='Helpdesk') {

                    header("location:helpdesk.html");

                } 
                else if($row[0]=='Sysadmin') {

                    header("location:adminMenu.html");
                    
                } else if($row[0]=='Endpoint') {

                    header("location:endpoint.html");

                    
                } else {
                    echo"This should never display";
                }
                    
          
            }

        ?>
        <br>
        <input type="button" onclick="location.href='login.html';" value="Go Back to Login Page" />
    </body>
</html>
