<?php
session_start();
if($_SESSION['islogin']){
	$email=$_SESSION['email'];
}else{
	echo "<script>location.href='login.php'</script>";
}
 define('TITLE', 'Our Clients');
 define('PAGE', 'clients');
 include('includes/header.php');
 include('connection.php'); 
 
 ?>
 

 <!-- ===start second column=== -->
 <div class="col-sm-9 col-md-10">
     <h4 style="text-align:center;margin:20px 0;color:#15f4ee"><span style="font-size:25px;color:#d9083c;padding-right:15px;"><i class="fas fa-server"></i></span>Clients Detail</h4>
  <?php 
     $sql = "SELECT * FROM clients";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
      echo '<table class="table table-dark  table-hover  mt-4 text-center" style="color:gray;" style="border:none;" >';
      echo '<thead >';
      echo '<tr style="background-color: #0b0b0c; color:#15f4ee;">';
      
      echo '<th scope="col">Name</th>';
      echo '<th scope="col">Mobile</th>';
      echo '<th scope="col">Email</th>';
      echo '<th scope="col">Type</th>';
      echo '<th scope="col">Address</th>';
      echo '<th scope="col">Action</th>';

      
      echo '</tr>';
      while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['phon'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['type'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        
        echo '<td>';
        echo '<form action="#" method="POST" class="d-inline mr-2">';
        echo '<input type="hidden" name="id" value='.$row['sno'].'><button class="btn btn-outline-primary" name="view" value="View"  type="submit"><i class="fas fa-pen-nib"></i></button>';
        echo '</form>';
        echo '<form action="" method="POST" class="d-inline">';
        echo '<input type="hidden" name="id" value='.$row['sno'].'><button class="btn btn-outline-danger" name="delete" value="Delete" type="submit"><i class="far fa-trash-alt"></i></button>';
        echo '</form>';
        echo '</td>';
        echo '<tr>';
      }
      echo '</thead>';
      echo '</table>';
     } else {
      echo '0 Result';
     }
     if(isset($_REQUEST['delete'])){
      $sql = "DELETE FROM clients WHERE sno = {$_REQUEST['id']}";
      if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content = "0;URL=?deleted"/>';
      } else {
        echo "Unable to delete Data";
      }
     }

  ?>
</div>
</div>
 </div> <!-- ===end second column=== -->




 
 <?php 
     include('includes/footer.php');
    ?>