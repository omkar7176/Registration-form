<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "EmpDeatils";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
    echo "not connected";
}
else{
    echo "connect";
}

//start

$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$mobile_No = $_POST['mobile'];
$password = $_POST['password'];

$sql = "INSERT INTO `StudTable`(`First_name`, `Last_name`, `Mobile_No`, `Password`) VALUES
('$first_name', '$last_name', '$mobile_No', '$password')";

$result = mysqli_query($con, $sql);

if($result)
{
    echo "Data Submitted Successfully";
}
else
{
    echo "Error...! Query submission failed !";
}

?>