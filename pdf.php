<?php 
include('db.php');
 
#connection string
$pid=$_GET["pid"];
if (isset($_POST[$pid]))
 {
 $query = "SELECT pdf FROM projects WHERE pid = $pid";
$result = mysqli_query($connection,$query) 
       or die('Error, query failed');
list($file) = mysqli_fetch_array($result);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$file");
echo $content;
 }
?>