<?php 
ob_start();
//$baseurl="https://localhost/adminweb";

require("config/config.php");

session_start();
//echo "test";print_r($_REQUEST['username']);exit;
if (!empty($_REQUEST['username'])) {
   
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
   
    if($username !='' && $password != ''){
        
       $mysqlstring = "select * from users where email='" . $username . "' AND password= '".md5($password)."' AND status=1 ";
       $check = mysqli_query($conn,$mysqlstring);
       $cnt= mysqli_num_rows($check);
        $check1 =mysqli_fetch_array(mysqli_query($conn,$mysqlstring));
        if($cnt == 1){
            
            $_SESSION['useradmin'] = $check1['first_name']." ".$check1['last_name'];
            $_SESSION['userid'] = $check1['id'];
            //echo "tete";exit;
            header("location: dashboard.php");
            exit;
        }else{
            $msg="Your Not Super Admin";
             header("location: index.php?msg=".$msg);
        }
        
    }else{
        $msg="Please Enter User Name and Password";
       header("location: index.php?msg=".$msg);
    }
    
    
}else{ 


?>
<html>
<head>	
<title>Login - Test </title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/nam.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="<?php echo baseurl;?>/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo baseurl;?>/css/admin.css" rel="stylesheet">
    <!-- font awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo baseurl;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo baseurl;?>/js/jquery.validate.min.js"></script>
    
</head>
<body>

    <section id="login-form">
       <div class="container">
            <div class="row">
                <div class="form_bg" >
                    <?php 
                    if(isset($_REQUEST['msg'])){
                        echo $_REQUEST['msg'];
                    }
                    ?>
                    <form method="POST" id="loginform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                         <h2 class="text-center">Login Form</h2>
                        <br/>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="userid" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="pwd" placeholder="Password">

                            </div>
                            <br/>
                           <div class="align-center">
                               <input type="submit" class="btn btn-default" id="login" value="Login">
                            </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
<?php } ?>  
    <script type="text/javascript">
    $("#loginform").validate({

        rules: {
            username: "required",
            password: "required",
            
            agree: "required"
        },
        messages: {
            username: "Please Enter  User Name",
            password: "Please Enter  password",
            
            agree: "Please accept our policy"
        },

    });
</script>
    
</body>
</html>