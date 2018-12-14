<?php

        include("connection.php");      // connects to database
        session_start();

        if (isset($_REQUEST['user']))   // sets username input as $user
        {       $user = mysqli_real_escape_string($db, $_REQUEST['user']);      }
        if (isset($_REQUEST['pass']))   // sets password input as $pass
        {       $pass = mysqli_real_escape_string($db, $_REQUEST['pass']);      }

        // query to get all results matching user and pass inputs
        $sqlLogin = mysqli_query($db,"SELECT * FROM Login WHERE username = '$user' AND password = '$pass'");

        // checks number of rows (should only show 1 for success) and determines login credentials
        if (mysqli_num_rows($sqlLogin) == 1)
        {
                $_SESSION['login_user'] = $user;
        
                $role = mysqli_query($db, "SELECT assignee FROM Login WHERE username = '$user' AND password = '$pass';");

		// determines department user works for and redirects them to the correct queue
		$row = mysqli_fetch_row($role);
		if ($row[0] == 'Helpdesk')
		{
			echo "<script> location.href='HelpdeskQueue.php'; </script>";
		}
		else if ($row[0] == 'Sysadmin')
		{
			echo "<script> location.href='SysAdminQueue.php'; </script>";
		}
		else if ($row[0] == 'Endpoint');
		{
			echo "<script> location.href='EndpointQueue.php'; </script>";
		}
		exit;
        }
        else
        {
		// if invalid login, user is redirected to invalid login page
                echo "<script> location.href = 'InvalidLogin.html'; </script>";
	exit;
       }

?>
