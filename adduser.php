<?php 
require 'inc/header.php';
if(isset($_POST['submit']) && !empty($_POST['email']) ){ 
    
    $query ="INSERT INTO `users` (first_name,last_name,email,mobile_no,password,created_at,updated_at) 
             VALUES('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['mobile_no']."','".md5($_POST['password'])."','".date('Y-m-d h:i:s')."','".date('Y-m-d h:i:s')."' ) ";
   
    if(mysqli_query($conn,$query)){
       $msg="success";
       header("location: adduser.php?msg=".$msg);
   }else{
       $msg="failed";
       header("location: adduser.php?msg=".$msg);
   }
    
}

?>  
<style>
    .main-panel > .content {
        padding: 17px 15px;
        min-height: calc(100% - 123px);
    }
    .topheading{
        margin-bottom: 19px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 15px;
    }
    .jobslist h3{
        margin: 0px;
        font-weight: normal;
        text-transform: uppercase;
    }
    .postajob{
        color: #fff;
        background: #215b7d;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
    }
    .error{
        color:red;
        font-size: 12px;
    }
    .successmsg{
        text-align: center;
        color:green;
    }
    .failedmsg{
        text-align: center;
        color:red;
    }
</style>


<div class="main-panel">
<?php include 'inc/topmenu.php'; ?>


        <div class="content jobslist adminjobform">
            <div class="container-fluid">
                <div class="row ">
                    <div class="topheading clearfix">
                    <div class="col-md-9">
                        <h3>Add New User </h3>
                    </div>
                    <div class="col-md-3">
                        <!-- <a href="adduser.php" class="postajob">Add User</a> -->
                        <a href="users.php" class="postajob" style="margin-leftt:10px;float:right">Back</a>
                    </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" >
                        <div class="form-area clearfix" style="background: #fff;padding: 20px;"> 
                            <?php 
                                 if(isset($_REQUEST['msg'])){ 
                                     
                                    if($_REQUEST['msg'] == "success"){
                                        echo "<p class='successmsg'>User Inserted Successfully.</p>";
                                    }else{
                                        echo "<p class='failedmsg'>User Inserted Failed.</p>";
                                    }
                                   
                                }
                            ?>
                            <form id="addauser" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
                           
                                <div class="form-group">
                                    <label for="Job Code">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" />
                                </div>
								<div class="form-group">
                                    <label for="Job Code">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" />
                                </div>
								<div class="form-group">
                                    <label for="Job Code">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" />
                                </div>
								<div class="form-group">
                                    <label for="Job Code">Mobile No</label>
                                        <input type="number" class="form-control" id="mobile_no" name="mobile_no" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                        <input type="text" class="form-control" id="password" name="password" />
                                </div>
                                 <div class="form-group">
                                    <label>Confirm Password</label>
                                        <input type="text" class="form-control" id="con_password" name="con_password" />
                                </div>
                                
                                <div class="form-group">
                                <input type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value="Save" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                
                
                
            </div>
        </div>

<?php
require 'inc/footer.php';
?>

