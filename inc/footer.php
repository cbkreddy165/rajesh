 <footer class="footer">
            <div class="container-fluid">
               
                <p class="copyright text-center">
                   All Rights Reserved NAM TECHNOLOGY
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo baseurl;?>/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo baseurl;?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo baseurl;?>/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo baseurl;?>/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo baseurl;?>/assets/js/bootstrap-notify.js"></script>

   
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo baseurl;?>/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo baseurl;?>/assets/js/demo.js"></script>

	<script src="<?php echo baseurl;?>/js/jquery.validate.min.js"></script>
 <script type="text/javascript">
    $("#postajob").validate({

        rules: {
            jobcode: "required",
            jobtitle: "required",
            skills: "required",
            qualification: "required",
            description: "required",
            agree: "required"
        },
        messages: {
            jobcode: "Please Enter  Job Code",
            jobtitle: "Please Enter  Job Title",
            skills: "Please Enter  Job skills",
            qualification: "Please Enter  qualification",
            description: "Please Enter  Job description",
            agree: "Please accept our policy"
        },

    });
    
     $("#addanews").validate({

        rules: {
            news_title: "required",
            
        },
        messages: {
            news_title: "Please Enter  News Title",
           
        },

    });
	
	
	$("#addauser").validate({

        rules: {
            first_name: "required",
			last_name: "required",
			password: "required",
			con_password: "required",
            email: {
                required: true,
                email: true

            },
            mobile_no: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10

            },

            agree: "required"
        },
        messages: {
            first_name: "Please Enter  Name",
			last_name: "Please Enter  Name",
			password: "Please Enter  password",
			con_password: "Please Enter  confirm password",
            mobile_no: {
                required: "Please Enter Mobile Number",
                digits: "Please Enter Mobile Number digits only",
                minlength: "Min length is 10 digits",
                maxlength: "Max length is 10 digitis only"

            },
            email: {
                required: "Please Enter Email!",
                email: "This is not a valid email!"

            },

            agree: ""
        },
        
    });
    
    
</script>



</html>
