<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
		header("Location:report.php");


}

else{
$delete="DELETE FROM `report` WHERE id_report ='$id' ";

	if($re = mysqli_query($con,$delete))
	{
		echo '<script>alert("Report Removed") </script>' ;
		header("Location:report.php");
	}


}
