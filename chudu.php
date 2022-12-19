<?php
    include("../db.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://www.sih.gov.in/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://www.sih.gov.in/css/style_new.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>

    <body>
    	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-dark" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                        
                    </ul>  
                    <a href="./login.php" ><span class="fa fa-sign-out fa-lg"></span> Logout</a>
                </div> 
            </div>
        </nav>
        <section class="prob-statement-panel">
            <?php    
                $limit = 10;  // Number of entries to show in a page.
                // Look for a GET variable page if not found default is 1.     
                if (isset($_GET["page"])) { 
                  $pn  = $_GET["page"]; 
                } 
                else { 
                  $pn=1; 
                };  
              
                $start_from = ($pn-1) * $limit;
            ?>
            <div class="container wrapper">
       
<table id="dataTablePS" class="table table-striped table-bordered table-hover" style="width:100%">
                    <?php
                        $table="projects";
                        $sql="SELECT * FROM ".$table;
                        $result = mysqli_query($connection,"SELECT * FROM ".$table." ") or die( mysqli_error($connection)); 
                        $page="description"           
                    ?>
                    <thead>
                        <tr class="row-md-24">
                            <!-- <th>Logo</th> -->
                            <th class="col-md-2">Title</th>
                            <th class="col-md-4">Description</th>
                            <th class="col-md-2">Tech Stack</th>
                            <th class="col-md-2">Project Lead</th>
                            <th class="col-md-2">Mentor Request</th>
                            <th class="col-md-2">Duration</th>		
                            <th class="col-md-2">City</th>
                            <th class="col-md-2">State</th>
                            <th class="col-md-2">Phone no</th>
                            <th class="col-md-2">Status</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $all_property=array('title','description','tech_stack','project_lead','mentor_req','duration','city','state','phno');
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                $i=0;
                                
                                
                                foreach ($all_property as $item) {
                                    if($item === "description"){
                                        echo '<td class="colomn_border"><a style ="font-size:15px ;margin-bottom: 4px !important; cursor: pointer"  data-toggle="modal" data-target="#ViewProblemStatement'.$i.'">';
                                        echo substr($row[$item],0,10);
                                        echo '</a><div id="ViewProblemStatement'.$i.'" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                         Modal content
                                        <div class="modal-content">
                                            <button type="button" class="close" style="text-align:justify ;" data-dismiss="modal">&times;</button>                                            
                                            <h6 class="modal-title" style="text-align: center; font-size: 18px; font-weight: bold;">Description</h6>                                            
                                            <div class="modal-body">                                    
                                                <table id="settings" class="table table-bordered table-hover">
                                                    <thead>';

                                                    echo '<tr>
                                                            <td>
                                                                Project By:
                                                            </td>
                                                            <td>';
                                                                echo $row[0];
                                                    echo '        </td>';
                                                    if($row["developing"]==0){
                                                        echo '<tr><td>Duration:</td><td>';
                                                        echo $row["duration"].'</td></tr>';

                                                    }
                                                    echo '<tr>
                                                            <td>
                                                                Details:
                                                            </td>
                                                            <td>';
                                                                echo $row[$item];
                                                            echo '</td>
                                                        </tr>';
                                                    echo '<tr>
                                                            <td>
                                                                Contact:
                                                            </td>
                                                            <td>';
                                                                echo $row[2];
                                                            echo '</td>
                                                            </tr>';    
                                        echo ' </thead>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div></td>';
                                    }
                                    else if($item==="developing"){
                                        if($row[$item]==0){
                                            echo '<td style="color:red;" class="colomn_border">' . 'Developing' . '</td>';
                                        }
                                        else{
                                            echo '<td style="color:green;" class="colomn_border">' . 'Developed' . '</td>';   
                                        }
                                    }
                                    else{
                                        echo '<td class="colomn_border">' . $row[$item] . '</td> '; //get items using property value
                                       
                                    }
                                    $i++;
                                }
                        
                                 
 									
 									/*echo ' <th><div class="dropdown"><button  type="button" id="dropdownMenuButton" data-toggle="dropdown" ><i class="fas fa-user-plus"></i></button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Accept</a>
                                 <a class="dropdown-item" href="#">Reject</a>
                                 <a class="dropdown-item" href="#">Waitlist</a>
                                 </div></div></th>';*/
                                 echo '<td><div class="dropdown"><button  type="button" id="dropdownMenuButton" data-toggle="dropdown" >Choose</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Accept</a>
                                 <a class="dropdown-item" href="#">Reject</a>
                                 <a class="dropdown-item" href="#">Waitlist</a>
                                 </div><div></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tr>                
                    </tbody>
                    <!--<tfoot>
                        <tr>
                            <th class="sortingBottom">Logo</th> 
                            <th class="sortingBottom">Organization</th>
                            <th class="sortingBottom">Problem Statement Title</th>
                            <th class="sortingBottom">Category</th>
                            <th class="sortingBottom">PS Number</th>
                            <th class="sortingBottom">Submitted Idea(s) Count</th>
                            <th class="sortingBottom">Domain Bucket</th>
                        </tr>
                    </tfoot> -->
                </table>
                <ul class="pagination">
                <?php  
                $sql = "SELECT COUNT(*) FROM $table";  
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
        </section>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://www.sih.gov.in/js/bootstrap.js"></script>

     </body>  

     </html>
