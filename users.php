<?php 
require 'inc/header.php';
?>  
<style>
    
    .topheading{
        margin-bottom: 19px;
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
    .adminjobform table {
        border-collapse: collapse;
        width: 100%;
        background: #fff;
    }
    .adminjobform table tr th {
        background: #215b7d;
        color: #fff;
        border: 1px solid #ccc;
        padding: 6px;
    }
    .adminjobform table tr td {
        border: 1px solid #ccc;
        padding: 11px 6px;
    }
</style>

<script type="text/javascript">
    function deleteuser(delId)
    {
        if(delId !=""){
             var r = confirm("Are you sure you want to delete User");
             if(r ==true){
                 $.ajax({
                    url: "delete.php",
                    type: "post",
                    data: {delId : delId,'action':'deleteuser'},
                    success: function (response) {
                       if(response == 1){
                           alert("deleted Successfully");
                           
                           window.location.reload();
                       }else{
                            alert("deleted Failed");
                            return false;
                       }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });
                 //window.location.href = 'delete.php?id='+delId;
             }else{
                 
             }
         }
    }
    
</script>
<div class="main-panel">
<?php include 'inc/topmenu.php'; ?>


        <div class="content jobslist adminjobform">
            <div class="container-fluid">
                <div class="row topheading">
                    <div class="col-md-9">
                        <h3>Users List</h3>
                    </div>
                    <div class="col-md-3">
                        <a href="adduser.php" class="postajob">Add User</a>
                    </div>
                </div>
                <div class="row">
                    <table>
                        <tr>
                            <th>S No</th>
                            <th>User Name</th>
							<th>E-mail</th>
							<th>Mobile No</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php 
                             $query1 = "select * from users where status=1 order by id desc ";
                             $res=mysqli_query($conn,$query1);
                             if(mysqli_num_rows($res)>0){
                                 $i=1;
                                 while ($result = mysqli_fetch_array($res)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['first_name']." ".$result['last_name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
							<td><?php echo $result['mobile_no']; ?></td>
                            <!-- <td><a href="edituser.php?action=edit&id=<?php echo $result['id']; ?>">Edit</a></td> -->
							<td><a href="#">Edit</a></td>
                            <td><a href="javascript:void(0);" onclick="deleteuser(<?php echo $result['id']; ?>);">Delete</a></td>
                        </tr>
                             <?php $i++; } }else{ ?>
                        <tr>
                            <td colspan="6" style="text-align: center;">No Users Found</td>
                        </tr>
                             <?php } ?>
                    </table>
                </div>
                
                
                
            </div>
        </div>

<?php
require 'inc/footer.php';
?>