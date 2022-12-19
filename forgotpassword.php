<?php
  include('./db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"><style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1;}

  input[type=text] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }


  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }
  .containers i {
      margin-left: -30px;
      cursor: pointer;
  }
  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 150px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
  </style>
  <title>VIC : Password Reset</title>
  <link rel="icon" href="./img/logo.png" type="image/icon type">
</head>
<body >

<h2>Forgot Password</h2>

  <form method="post">

      <div class="container ">
      	<div class="container">
        	<label for="uname"><b>Enter VIC Username</b></label>
        	<input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    	</div>
        
        
        <div class="container ">
        	<label for="psw"><b>User Type</b></label>
            <select name="type" id="type" required>
           	  <option value="" selected disabled>Choose type</option>	 	
    		  <option value="users">User</option>
    		  <option value="investors">Investor</option>
    		  <option value="mentors">Mentor</option>
    		</select>
        </div>
        <script src="js/app.js"></script>    
        <button type="submit" name="submit">Get OTP</button>
      </div>
  </form>
  <?php
    session_start();
    if(isset($_POST["submit"])){
      $uname=mysqli_real_escape_string($connection,$_POST["uname"]);
      $type=$_POST["type"];
      $otp = rand(100000,999999);
      if($type==="investors"){
        $query="select * from investors where iemail='$uname'";
        $count=mysqli_query($connection,$query) or die( mysqli_error($connection));
        $row  = mysqli_fetch_array($count);
        if(is_array($row)){
          $_SESSION["id"]=$row["iid"];
          

        }
        else{
            echo '<script>alert("Entered credentials are invalid")</script>';
        }
        if(isset($_SESSION["id"])){
          echo '<script>window.location.replace("./investors/description.php")</script>';
        }
      }else if($type==="mentors"){
        $query="select * from mentors where memail='$uname' and mpwd='$pwd'";
        $count=mysqli_query($connection,$query) or die( mysqli_error($connection));
        $row  = mysqli_fetch_array($count);
        if(is_array($row)){
	        
	        $to = $uname;
			 
	        $subject = "OTP to reset your password";
	         
	        $message = "<b>Hello ".$row["mname"]." your OTP to change password is .</b>".$otp;
         
         
	        $retval = mail ($to,$subject,$message);
	        if($retval==true){
		        	$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
					$current_id = mysqli_insert_id($conn);
					if(!empty($current_id)) {
						$success=1;
						$_SESSION["id"]=$row["mid"];
					}
	        }
        }
        else{
            echo '<script>alert("Entered user is invalid")</script>';
        }
        if(isset($_SESSION["id"])){
          echo '<script>window.location.replace("./mentors/mentor_home.php")</script>';
        }
      }else if($type==="users"){
        $query="select * from users where uemail='$uname' and upwd='$pwd'";
        $count=mysqli_query($connection,$query) or die( mysqli_error($connection));
        $row  = mysqli_fetch_array($count);
        if(is_array($row)){
          $_SESSION["id"]=$row["uid"];
          
        }
        else{
            echo '<script>alert("Entered credentials are invalid")</script>';
        }
        if(isset($_SESSION["id"])){
          echo '<script>window.location.replace("./users/myprojects.php")</script>';
        }
      }

    }
  ?>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
