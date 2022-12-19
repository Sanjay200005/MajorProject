<?php
	include('db.php');
?>
<html>
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    
    <title>Virtual Incubation Center</title>
    <link rel="icon" href="./img/logo.png" type="image/icon type">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41" alt="logo"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./Main_home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item active"><a class="nav-link" href=""><span class="fa fa-list fa-lg"></span> Our Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a></li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="./login.php" target="_blank">
                        <span class="fa fa-sign-in"></span> Login
                    </a>
                </span>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
    	<?php    
	        $limit = 20;  // Number of entries to show in a page.
	        // Look for a GET variable page if not found default is 1.     
	        if (isset($_GET["page"])) { 
	          $pn  = $_GET["page"]; 
	        } 
	        else { 
	          $pn=1; 
	        };  
	      
	        $start_from = ($pn-1) * $limit;
	    ?>
    	<p><i>**<a href="./register/addUser.php">Signup as</a> investor to view more projects....</i></p>
		<?php

			//create connection
			$connection = mysqli_connect($host, $user, $pass, $db_name);

			//test if connection failed
			if(mysqli_connect_errno()){
				die("connection failed: ". mysqli_connect_error(). " (" . mysqli_connect_errno(). ")");
			}

			//get results from database
			//$sql="SELECT * FROM projects";
			$result = mysqli_query($connection,"SELECT * FROM projects where intended_audience='EveryOne' order by pdate desc LIMIT $start_from,$limit") or die( mysqli_error($connection));
			$all_property = array("pid","title","description","project_lead","pdf");  //declare an array for saving property

			//showing property
			echo '<table width="100%" class="table table-bordered" ><tr class="data-heading">';  //initialize table tag
			foreach ($all_property as $property) {
				echo '<td><b>' . ucfirst(str_replace("_"," ",$property)) . '</b></td>';  //get field name for header
				//array_push($all_property, $property->name);  //save those to array
			}
			echo '</tr>'; //end tr tag

			//showing all data
			while ($row = mysqli_fetch_array($result)) {

				echo "<tr>";
				foreach ($all_property as $item) {
                    if($item==="pdf"){
                        if(empty($row[$item])){
                            echo '<td>N/A</td>';
                        }
                        else{
                            echo '<td><form action="../pdf.php?pid='.$row["pid"].'" method="post" enctype="multipart/form-data"><input type="submit" name="'.$row["pid"].'" value="Download"></form></td>';
                        }
                        continue;
                    }
					echo '<td>' . $row[$item] . '</td>'; //get items using property value
				}
				echo '</tr>';
			}
			echo "</table>";

		?>
		<ul class="pagination">
                <?php  
                $table="projects";
                $page="public_projects";
                $sql = "SELECT COUNT(*) FROM $table where intended_audience='EveryOne'";  
                $rs_result = mysqli_query($connection,$sql);  
                $row = mysqli_fetch_row($rs_result);  
                $total_records = $row[0];  
                  
                // Number of pages required.
                $total_pages = ceil($total_records / $limit);  
                $pagLink = "";                        
                for ($i=1; $i<=$total_pages; $i++) {
                  if ($i==$pn) {
                      $pagLink .= "<li class='active'><a href='$page.php?page="
                                                        .$i."'>".$i."</a></li>";
                  }            
                  else  {
                      $pagLink .= "<li><a href='$page.php?page=".$i."'>
                                                        ".$i."</a></li>";  
                  }
                };  
                echo $pagLink;  
              ?>
              </ul>
	</div>
</body>
</html>