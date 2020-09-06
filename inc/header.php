<?php 
ob_start();

session_start();
require("config/config.php");

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
        
	<link rel="icon" type="image/png" href="assets/img/test.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Test - Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo baseurl;?>/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo baseurl;?>/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo baseurl;?>/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo baseurl;?>/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" >


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                   <h2>Website Logo</h2>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="users.php">
                      
                        <p>Users List</p>
                    </a>
                </li>
                <li>
                    <a href="contactedUsers.php">
                       
                        <p>Contacted Users</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>