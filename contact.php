
<?php
// include_once 'database.php';
// if (isset($_POST['save']))
// {	 
// 	$names = $_POST['names'];
//     $email = $_POST['email'];
//     $project =  $_POST['project'];
//     $budget = $_POST['budget'];

// 	 $sql = "INSERT INTO contacttable (names, email, project, budget)
// 	 VALUES ('$names','$email','$project','$budget')";
// 	 if (mysqli_query($conn, $sql)) {
// 		echo "New record created successfully !";
// 	 } else {
// 		echo "Error: " . $sql . "
//     " . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);
// }

    $servername ="localhost";
    $username ="root";
    $password="";
    $database_name="personalportfolio";
    

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    if(!$conn){
        die('Connection Failed: '.mysqli_connect_error());
    }

    if (isset($_POST['save'])){


            $names = $_POST['names'];
            $email = $_POST['email'];
            $projects = $_POST['projects'];
            $budget = $_POST['budget'];

        $sql_query = "INSERT INTO contacttable (names, email, projects, budget) VALUES ('$names',  '$email', '$projects')";

        if(mysqli_query($conn, $sql_query)){

           //echo "Success"
           echo "<script>alert('The given information is submitted in the database succesfully');
           window.location.href='contact.html'; </script>";
        } else {
            echo "<script>alert('There is an error in the database!');
           window.location.href='contact.html'; </script>";

        }
  
    }
    
?>