<?php
  
  include 'db/db.php';
  include 'db/function.php';

  session_start();
  if(!isset($_SESSION['id']) AND !isset($_SESSION['name']) AND !isset($_SESSION['username'])){
		header("location:index.php");
	  }

  if(isset($_GET['logout']) AND $_GET['logout'] == 'user-logout'){
    session_destroy();
    setcookie('user_re_log','',time() - (60*60*24*365));
    header("location:index.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $_SESSION['name']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">

 
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

<div class="card mx-auto">
    <div class="card-body">
    <div class="form-group">
            <div class="image mx-auto">
                <img class="avatar card-img-top mx-auto" src="photo/profile/<?php echo $_SESSION['photo1']; ?>"/>
            </div>
        </div>
        <div class="card-name">
            <h2><?php echo $_SESSION['name']; ?></h5>
        </div>
        <div class="card-other-detail mt-5">
        <div class="card-phone">
            <h5 class="text-left">Phone</h3>
            <p><?php echo $_SESSION['phone']; ?></p>
        </div>
        <div class="card-Email">
            <h5 class="text-left">Email</h5>
            <p><?php echo $_SESSION['email']; ?></p>
        </div>
        <div class="card-name">
            <h5 class="text-left">User Name</h5>
            <p><?php echo $_SESSION['username']; ?></p>
        </div>
        </div>
    </div>
    <div class="card-footer">
        <label id="forgotpwd" class="text-right float-right"><a href="?logout=user-logout">Log Out</a></label>
    </div>
</div>




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>