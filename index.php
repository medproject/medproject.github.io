<?php 
  session_start();
  require_once("includes/conn.php");
  ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Medical Center</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
 <?php 
        require_once("includes/conn.php");
        if(isset($_POST['signin'])){
            extract($_POST);

            $q = "select * from users where  name like '$username_login' and password like '$password_login' and role like '$roles'";
            //echo $q;
            $res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
            if(mysqli_num_rows($res)>0){
                $row = mysqli_fetch_array($res);
               // print_r($row);
                $_SESSION['userId'] = $row['id'];
                $_SESSION['userName'] = $row['name'];
                $_SESSION['userRole'] = $row['role'];
                if($row['role'] == 'admin') {
                //echo $_SESSION['userId']; exit();
              // header("location:home.php"); this does not work in web server

                echo "<script type='text/javascript'>  window.location='home.php'; </script>";
            }
            else if($row['role'] == 'user'){
                
                echo "<script type='text/javascript'>  window.location='user/home2.php'; </script>";
            }
            }else{
                $_REQUEST['error']=1;
                
                //header("location:index.php");
            }
        }
       
?>
<body>
  <div class="wrapper">
  <div class="container">
    <h1>Welcome</h1>
    
    <form class="form" action="" method="post"  autocomplete="on">
      <input type="text" placeholder="Username" id="username" name="username_login" autocomplete="off" required="required" >
      <input type="password" placeholder="Password" id="password" name="password_login" class="form-control input-group-lg">

      <select name="roles">
         <option value="admin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</option>
         <option value="user">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</option>
        </select><br>
      <button type="submit"  class="btn btn-primary"  name="signin" >Login</button>
    </form>
  </div>
  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
