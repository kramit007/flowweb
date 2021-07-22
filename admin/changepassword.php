<?php
session_start();
if($_SESSION['islogin']){
	$email=$_SESSION['email'];
}else{
	echo "<script>location.href='login.php'</script>";
}

 define('TITLE', 'Change Password');
 define('PAGE', 'cpass');
 include('connection.php');
 include('includes/header.php');
if (isset($_REQUEST['passupdate'])) {
     $apass = $_REQUEST['apassword'];
$sql = "UPDATE adminlogin SET password = '$apass' WHERE user = '$email'";
if ($conn->query($sql) == TRUE) {
	$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Password Updated</div>';
	
} else {
	$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Failed try again</div>';
}
	}
 ?>
<!-- === second column change password== -->

<div class="col-sm-7 col-md-8 mt-5" >
	
	<form class="mt-5 mx-5 " action="" method="POST"  style="color:gray">
		<div class="form-group">
			<label for="inputemail" style="font-weight:bold; "><span style="font-size:25px;color:#15f4ee;margin-right:15px;"><i class="fas fa-envelope"></i></span>Email</label>
			<input type="email" class="form-control" id="inputemail" readonly value="<?php echo $email; ?>" style=" background-color:#0b0b0c;border:none;border-bottom:2px solid #15f4ee;padding:10px 00px; border-radius:20px; text-align:center;font-weight:bold;color:#15f4ee">
		</div>
		<div class="form-group">
			<label for="inputnewpassword"style="font-weight:bold"> <span style="font-size:25px;color:#15f4ee;margin-right:15px;"><i class="fas fa-pen-nib"></i></span>New Password</label>
			<input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="apassword" required style=" background-color:#0b0b0c;border:none;border-bottom:2px solid #15f4ee;padding:10px 20px; border-radius:20px;text-align:center;">
		</div>
		<button type="submit" class="btn btn-outline-primary mr-4 mt-4" name="passupdate">Update</button>
		<button type="reset" class="btn btn-outline-danger mt-4 px-4" name="passupdate" >Reset</button>
		<?php
           if (isset($passmsg)) {
           	echo $passmsg;	
           }
		 ?>
		
	</form>
	
	
</div>
</div>
</div>
<!-- === ind second column change pass== -->

 <?php 
     include('includes/footer.php');
    ?>