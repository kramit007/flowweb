<!DOCTYPE html>
<html lang="en">
  <head>  
    <!-- ========== mtea tags ========== -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo TITLE ?></title>
      <!-- ========== bootstrap cdn ========== -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- ========== Fontawesome cdn ========== -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
      <!-- ========== google fonts ========== -->
      <!-- ========== aos animation ========== -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- ========== style.css ========== -->
      <link href="../css/style.css" rel="stylesheet">
      
      <style>
        *{
          box-sizing:border-box;
    margin:0;
    padding:0;
        }
        
body{
    background-color: #14171b;
    
}
        

        .neoicon{
          height:100px;
          width:100px;
          box-shadow:-4px -4px 10px rgba(255,255,255,0.2),
          4px 4px 8px rgba(0,0,0,0.1);
          display:flex;
          justify-content:center;
          align-items:center;
          font-size:50px;
          color:#d9083c;
          border-radius:50%;
          margin-left:45px;
          border:1px solid #14171b;
              
        
        }

        .neoicon:hover{
         
          box-shadow:-4px -4px 10px rgba(255,255,255,0.2),
          8px 8px 12px rgba(0,0,58,0.2),
          inset -4px -4px 10px rgba(255,255,255,0.2),
           inset 8px 8px 12px rgba(0,0,58,0.2);
          
          font-size:45px;
          border-radius:50%;
          margin-left:45px;
          border:1px solid #14171b;
          background:radial-gradient(circle at 30% 107%, #15f4ee 90%, #15f4ee 10%);
          -webkit-Background-clip:text;
          -webkit-text-fill-color:transparent;

          
        }
        
        .customlink{
          color:gray;
        }

        .customlink:hover{
          
          font-weight:bold;
          color:#15f4ee;

        }
         .table{
           border:none;
         }
         .cactive{
           
          font-weight:bold;
          color:#15f4ee;

         }
      </style>
  </head>
  <body>
    
      <!-- ===start container== -->
      <div class="container-fluid " >
        <div class="row" >  <!-- ===start row=== -->
        <nav class="col-sm-2 py-4 shadow d-print-none"  style="background-color: #0b0b0c; height:100vh; " ><!-- === sidebar === -->

        <div  class="custom-header mt-3">
          <div class="text-center neoicon "><i class="fas fa-user-secret " id="icon"></i> </div>
          <p class="text-center  " style="color:#15f4ee; border-bottom:5px solid #15f4ee; padding-bottom:7px; font-size:10px; margin-top:12px;"  >RanchiWebCooking</p>
          <ul class="nav  flex-column nav-pills " style="position: relative;">
            
            <li class="nav-item pt-4 "><a class="nav-link customlink <?php if(PAGE == 'dashboard'){echo 'cactive';}?>" href="dashboard.php" ><span style="font-size:25px; color:"><i class="fas fa-tachometer-alt mr-3 "></i></span>Dashboard</a></li>
            
            
            <li class="nav-item pt-2 " ><a href="clients.php" class="nav-link customlink <?php if(PAGE == 'clients'){echo 'cactive';}?>"><span style="font-size:25px;"> <i class="fas fa-align-center mr-3"></i></span>Clients</a></li>          
                                   
            <li class="nav-item pt-2 "><a href="changepassword.php" class="nav-link customlink <?php if(PAGE == 'cpass'){echo 'cactive';}?>" style="color:"><span style="font-size:25px;"><i class="fas fa-key mr-3 "></i></span>Password</a></li>

            <li class="nav-item pt-2 "><a href="logout.php" class="nav-link customlink" style="color:"><span style="font-size:25px;"><i class="fas fa-sign-out-alt mr-3"></i></span>Logout</a></li>
            
          </ul>
        </div>
        </nav>  <!-- === sidebar end === -->
      