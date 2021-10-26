<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobsportal';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
// echo"";

// if(isnet($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $number=$_POST['phone_no'];
//     $password=$_POST['password'];

//     $sql = "INSERT INTO `data`(`Name`, `email`, `phone_no`, `password`) VALUES ($name,$email,$number,$password)";
//     if ($conn->query($sql) === TRUE) {
//         echo "record inserted successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

if (isset($_POST['submit'])) {
    $name =  $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $password =  $_REQUEST['password'];
      
    // Performing insert query execution
    // here our table name is college

    $sql = "INSERT INTO data  VALUES ('','$name', 
        '$email','$number','$password')";
      
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 

        echo nl2br("\n$name\n $email\n "
            . "$number\n");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
}

session_start();
if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    // $query="SELECT * FROM data where `email`=`$email` AND `password`=`$password`";
    // $result=mysqli_query($conn, $query);
    // $row=mysqli_fetch_array($result);
    $sql=mysqli_query($conn,"SELECT * FROM data where email='$email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row)){
        header("location:index.php");
    }
    else{
        echo "Invalid Email ID/Password";
    }
}


if (isset($_POST['submit1'])) {
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $jobdesc=$_POST['jobdesc'];
    $ctc=$_POST['ctc'];
   
    $sql = "INSERT INTO jobs  VALUES ('','$cname', 
        '$position','$jobdesc','$ctc')";
      
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 

    } else{
        echo "ERROR: Hush! Failed to post job! $sql. " 
            . mysqli_error($conn);
    }

}

if (isset($_POST['appli'])) {
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];
   
    $sql = "INSERT INTO apply_data  VALUES ('','$name', 
        '$apply','$qual','$year')";
      
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 

    } else{
        echo "ERROR: Hush! Failed to post job! $sql. " 
            . mysqli_error($conn);
    }

}
 
mysqli_close($conn);
?>