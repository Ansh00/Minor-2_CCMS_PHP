<?php
include('config.php');
$sql="CALL nol()";
$q="select * from lawyers";
$result=$db->query($q);
 echo mysqli_num_rows($result);
 	echo "<SCRIPT>
 alert('Total number of lawyers enrolled=5$count');
 window.location='guest.php';
 </SCRIPT>"

?>