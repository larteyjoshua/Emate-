<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['fullName'];
	$email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
          $registrationNumber = $_POST['registrationNumber'];
            $department = $_POST['department'];
              $password = $_POST['password'];
 
        $query = "INSERT INTO `student` (fullName, email, phoneNumber,registrationNumber,department, password) VALUES ('$fullName', '$email', '$phoneNumber', '$registrationNumber', '$department', '$password')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<html>
<head>
    
    <title> 
    
    </title>
<link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
<body>
  
    
    <div class="container">
    
    <form action="#" method="post">
       
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div<?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	<div class="main">
			<h1 class=""> REGISTRATION FORM</h1>
             <div class="container">
				<h2><span>SIGN UP NOW</span></h2>
					<form action="#" method="post">
						<input placeholder="fullName" name="fullName" type="text" required>
						<input placeholder="email" name="email" type="email" id="email" required autofocus>
						<input placeholder="phoneNumber" name="phoneNumber" type="text" required>
						<input placeholder="registrationNumber" name="registrationNumber" type="text" required="">
						<input placeholder="department" name="department" type="text"  required>
						 <div class="form-group">
                                
                               
                            
                            </div>

						<input placeholder="Password" name="Password" type="password"  id="password" required="">
						<input type="checkbox" value="remember-me"> Remember me
						<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
					</form>
                 </div>
			</div>
        </form>
        <div class="footer">
				<p> Group 2 <a href="index.html">2018</a></p>
			</div>
    </div>
    
    </body>
    
</html>