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
  <title>VIC : Login</title>
  <link rel="icon" href="./img/logo.png" type="image/icon type">
</head>
<body >

<h2>Login Form</h2>

  <form method="post">

      <div class="container ">
      	<div class="container">
        	<label for="uname"><b>Username</b></label>
        	<input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    	</div>
        
        <div class="container ">
        	<label for="psw"><b>Password</b></label>
            <input type="password" name="password" id="password" placeholder="Enter the password" required>
            <span><i class="far fa-eye" id="togglePassword"></i></span>
        </div>
        <div class="container ">
        	<label for="psw"><b>Login as</b></label>
            <select name="type" id="type" required>
           	  <option value="" selected disabled>Choose type</option>	 	
    		  <option value="admin">Administrator</option>
    		  <option value="users">User</option>
    		  <option value="investors">Investor</option>
    		  <option value="mentors">Mentor</option>
    		</select>
        </div>
        <script src="js/app.js"></script>    
        <button type="submit" name="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="reset" class="cancelbtn">Reset</button>
        <span class="psw"><a href="./register/addUser.php">New User?</a></span>
      </div>
  </form>
  <?php
    session_start();
    if(isset($_POST["submit"])){
      $uname=mysqli_real_escape_string($connection,$_POST["uname"]);
      $pwd=mysqli_real_escape_string($connection,$_REQUEST["password"]);
      $type=$_POST["type"];
      //echo $uname." ".$pwd." ".$type;
      if($type==="investors"){
        $query="select * from investors where iemail='$uname' and ipwd='$pwd'";
        $count=mysqli_query($connection,$query) or die( mysqli_error($connection));
        $row  = mysqli_fetch_array($count);
        if(is_array($row)){
          $_SESSION["id"]=$row["iid"];
          $_SESSION["name"]=$row["iname"];
          echo "set session";
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
          $_SESSION["id"]=$row["mid"];
          $_SESSION["name"]=$row["mname"];
          echo "set session";
        }
        else{
            echo '<script>alert("Entered credentials are invalid")</script>';
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
          $_SESSION["name"]=$row["uname"];
          //echo "set session";
        }
        else{
            echo '<script>alert("Entered credentials are invalid")</script>';
        }
        if(isset($_SESSION["id"])){
          echo '<script>window.location.replace("./users/myprojects.php")</script>';
        }
      }else if($type==="admin"){
        $query="select * from adminusers where aemail='$uname' and apwd='$pwd'";
        $count=mysqli_query($connection,$query) or die( mysqli_error($connection));
        $row  = mysqli_fetch_array($count);
        if(is_array($row)){
          $_SESSION["id"]=$row["aid"];
          $_SESSION["name"]=$row["aname"];
          //echo "set session";
        }
        else{
            echo '<script>alert("Entered credentials are invalid")</script>';
        }
        if(isset($_SESSION["id"])){
          echo '<script>window.location.replace("./dash/index.php")</script>';
        }
      }

    }
  ?>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
