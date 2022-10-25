
<?php
include_once 'database.php';
if (isset($_POST['save']))
{	 
	$names = $_POST['names'];
    $email = $_POST['email'];
    $project =  $_POST['project'];
    $budget = $_POST['budget'];

	 $sql = "INSERT INTO contacttable (names, email, project, budget)
	 VALUES ('$names','$email','$project','$budget')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
    " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>