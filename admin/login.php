<?php
session_start(); 
include('connection.php');
if (!isset($_SESSION['islogin'])) {
if(isset($_REQUEST['email']))
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="SELECT user, password FROM adminlogin WHERE user='".$email."' AND password='".$password."' limit 1";
$result=$conn->query($sql);
if($result->num_rows==1){
	$_SESSION['islogin']=true;
	$_SESSION['email']=$email;
	 echo "<script>location.href='dashboard.php';</script>";
	exit;
}
else{
	$reqmsg="<div style=' color:red;margin-top:20px; padding-left:30px;'>-----Incorrect Id & Passowrd-----</div>";
}
}
}
else {
	echo "<script>location.href='dashboard.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <script src="https://kit.fontawesome.com/aada673291.js" crossorigin="anonymous"></script>
    
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #444;
    font-family: calibari , sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    background-color:#14171b;
    
}
.login{
    text-align: center;
    position: relative;
    width: 280px;
    margin-bottom: 100px;
}
input,button{
    width: 100%;
    border: 0;
    border-radius: 20px;
    
}
input{
    border-bottom: 2px solid #15f4ee;
    padding: 12px 40px 12px 20px; 
    margin-bottom: 10px; 
    background-color:#0b0b0c;  
}
input, button, .group i, p, a{
    font-size: 14px;
    font-weight: 600;
} 
.group{
    margin-bottom: 10px;
    position:relative;
    
}
.group i{
    position: absolute;
    top:15px;
    right: 20px;
}
button{
    padding: 12px;
    background-image: linear-gradient(to right, #d9083c, #121417);
    cursor: pointer;
    
}
button:hover{
    background-image: linear-gradient(to right, #d9083c, #15f4ee);
    
}
button, button i{
    color:#fff;
}
button i{
    margin-right: 5px;
}

i.fas.fa-theater-masks{
font-size: 60px;
margin-bottom: 20px;
color:#d9083c;
}

h2{
    margin-bottom: 22px;
    color:#d9083c;
    font-size:20px;
    font-family: tahoma;
    
}

input:focus, input:focus::placeholder, input:focus+i{
    color: #ff1464;
}

input:focus, button:focus{
    outline: 0;
}
body:before, body::after{
content: "";
position: absolute;
height: 300px;
width: 500px;
}
body:before{
    background-image: linear-gradient(to right, #d9083c, #121417 );
    bottom: 0;
    left: 0;
    clip-path: polygon(0 0, 0 100%, 100% 100%);
}

body:after{
    background-image: linear-gradient(to right, #121417, #d9083c);
    top: 0;
    right: 0;
    clip-path: polygon(100% 0, 0 0, 100% 100%);
}

@media screen and (max-width: 767px) {
    body:before, body::after{
        height:150px;
        width: 300px;
    }
}

    </style>
</head>
<body>
   <form action="" method="post" class="shadow-lg p-4">
    <div class="login">
    <i class="fas fa-theater-masks"></i>
        <h2>Sign In</h2>
        <div class="group" >
            <input autocomplete="off" type="text" name="email" required="" placeholder="Enter Id">
            <i class="fa fa-user" > </i>
        </div>
        <div class="group" >
            <input autocomplete="off" type="Password" name="password" required="" placeholder="Enter Password">
            <i class="fa fa-lock"> </i>
        </div>
        <button type="submit"> <i class="fa fa-send"></i> Login</button>
    </div>
    <?php 
                  if (isset($reqmsg)) {
                  	echo $reqmsg;
                  }

 				?>

    </form>
</body>
</html>