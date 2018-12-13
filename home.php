<?php
        include ("connection.php");
?>

<html lang ="en">
<head>
<title> KPG Home </title>
<link rel = "stylesheet" type ="text/css" href="Homepage.css"/>
</head>

<body>
        <h1> KPG WORK ORDER SYSTEM </h1>
<ul>
     <li> <a class= "current" href= "#homepage"> Home </a> </li>
     <li> <a href = "add.php"> Add Issues </a> </li>
     <li> <a href = "query.php"> Query Issues </a> </li>
     <li> <a href = "login.html"> Worker Login </a> </li>
</ul>

        <br>

<center> <h2>Welcome</h2>
<center>Please select what you want to do.<br>
<br><br><center>If you need any assistance, please contact the Help Desk 
<center>helpme@software.adelphi | 516.555.9999

<!--Format to move it to bottom right corner-->
<p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: right;">

<!--used website Time.is for assistance with clock and date-->
<a href="https://time.is/Garden_City,_New_York_State" id="time_is_link" rel="nofollow" style="font-size:26px"></a>
<span id="Garden_City__New_York_State_z161" style="font-size:26px"></span>
<script src="//widget.time.is/en.js"></script>
<script>
time_is_widget.init({Garden_City__New_York_State_z161:{template:"TIME<br>DATE", time_format:"12hours:minutesAMPM", date_format:"dayname daynum/monthnum/yy"}});
</script>
</p>
        
</body>
</html>
