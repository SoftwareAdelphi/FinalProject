<?php

        include("connection.php");      // connects to database
        session_start();

        if (isset($_REQUEST['user']))
        {       $user = $_REQUEST['user'];      }
        if (isset($_REQUEST['pass']))
        {       $pass = $_REQUEST['pass'];      }

        $sqlLogin = mysqli_query($db,"SELECT * FROM Login WHERE username = '$user' AND password = '$pass'");

        if (mysqli_num_rows($sqlLogin) == 1)
        {
                $_SESSION['login_user'] = $user;
                //echo "<script> location.href='Homepage.php'; </script>";
                $role = mysqli_query($db, "SELECT assignee FROM Login WHERE username = '$user' AND password = '$pass';");

		$row = mysqli_fetch_row($role);
		if ($row[0] == 'Helpdesk') 
		{
//			header("location:HelpdeskQueue.php");
			echo "<script> location.href='HelpdeskQueue.php'; </script>";
		}
		else if ($row[0] == 'Sysadmin')
		{
//			header("location:SysAdminQueue.php");
			echo "<script> location.href='SysAdminQueue.php'; </script>";
		}
		else if ($row[0] == 'Endpoint');
		{
//			header("location:EndpointQueue.php");
			echo "<script> location.href='EndpointQueue.php'; </script>";
		}
//		else
//		{ echo "This should never display!"; }
		exit;
        }
        else
        {
                echo "<script> location.href = 'invalidLogin.html'; </script>";
	exit;
       }

?>
