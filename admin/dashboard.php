 <?php
session_start();
if($_SESSION['islogin']){
	$email=$_SESSION['email'];
}else{
	echo "<script>location.href='login.php'</script>";
}
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
 include('includes/header.php'); 
 include('connection.php');
 
 
 $sql = "SELECT max(sno) FROM clients";
 $result = $conn->query($sql);
 $row = $result->fetch_row();
 $request = $row['0'];

 $sql="SELECT name FROM adminlogin WHERE user='".$email."' limit 1";
 $result = $conn->query($sql);
   $result->num_rows >0;
   $row = $result->fetch_assoc(); 
 ?>
 
 
 <!-- ===start dashboard second column=== -->
          
            <div class="col-sm-9 col-md-10 shadow">
                <div class="container" style="padding:25px 150px;">
                <div style="display:flex; justify-content:space-between; color:#15f4ee">
                    <h2>Dashboard</h2>
                    <p style="color:gray"> <span style="font-size:25px;color:#d9083c;padding-right:30px;" ><i class="fas fa-bell"></i></span>Welcomt <span style="font-weight:bold; color:#15f4ee; padding-left:3px;"><?php echo $row["name"]; ?></span></p>
                </div>
                </div>
                <div class="row text-center mx-5 " style="display:flex;justify-content:space-between;">
                    <div class="col-sm-6 mt-4 " style=" background-color: #121417;box-shadow:-4px -4px 10px rgba(255,255,255,0.2),
              4px 4px 10px rgba(255,255,255,0.3); border-radius:5px;"  >
                        <div class="card text-white mb-3" style="background-color: #121417;border:none;">
                            <div class="card-header" style="color:gray;">Total Clients</div>
                            <div class="card-body">
                            <h2 class="card-title" style="color:#15f4ee;"><?php echo $request ?>    </h2>
                            <a href="clients.php" class="btn ">view</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-5 mt-4" style=" background-color: #121417;box-shadow:-4px -4px 10px rgba(255,255,255,0.2),
                         4px 4px 10px rgba(255,255,255,0.3); border-radius:5px;">
                        <div class="card text-white  mb-3" style="background-color: #121417;">
                            <div class="card-header" style="color:gray;">Total Admin</div>
                            <div class="card-body">
                            <h2 class="card-title" style="color:#15f4ee; ">3</h2>
                            <a href="" class="btn">view</a>
                            </div>
                        </div>
                    </div>                  
                  </div>
                  <div class="col-sm-12"  style="display:flex; justify-content:center;">
                      <div style="height:130px;width:70%; background-color: #121417;box-shadow:-4px -4px 10px rgba(255,255,255,0.2),
                       4px 4px 10px rgba(255,255,255,0.3);border-radius:10px;  margin-top:60px;display:flex; justify-content:center;align-items:center;">
                          <h5 style="color:#15f4ee;">Progress</h5>
                          <h2 style="color:#15f4ee; padding-left:20px;">60%</h2>
                      </div>    
                  </div>

                  





                
                </div>
                
            </div>
        </div><!-- === end dashboard second column=== -->

    <?php 
     include('includes/footer.php');
    ?>