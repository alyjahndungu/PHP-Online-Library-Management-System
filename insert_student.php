<?php
require_once "dbconnect.php";
if (isset($_POST['submit'])) {
$student_id = mysqli_real_escape_string($conn, $_POST['studentid']);
$firstname= mysqli_real_escape_string($conn, $_POST['firstname']);

$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$sirname = mysqli_real_escape_string($conn, $_POST['sirname']);

$email  = mysqli_real_escape_string($conn, $_POST['email']);
$course = mysqli_real_escape_string($conn, $_POST['course_name']);

$year  = mysqli_real_escape_string($conn, $_POST['year']);
$phone = mysqli_real_escape_string($conn, $_POST['phone_no']);

$address  = mysqli_real_escape_string($conn, $_POST['address']);
$department= mysqli_real_escape_string($conn, $_POST['department']);

$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state_name']);
$gender  = mysqli_real_escape_string($conn, $_POST['gender']);

if (empty($student_id)|| empty( $firstname) || empty( $lastname)|| empty($sirname)|| empty( $email)|| empty($course) ||
      empty($year)|| empty($phone)|| empty($address) || empty($department)|| empty($city) || empty($state)|| empty($gender)){
   echo "fill all the spaces";
  }else{
      
      $query = "INSERT INTO `students`(`student_id`, `firstname`, `lastname`, `sirname`, `email`, `course_name`, `course_year`, `phone_no`, `address`, `department`, `city`, `state_name`, `gender`) 
      VALUES('$student_id','$firstname','$lastname', '$sirname', '$email', '$course','$year','$phone','$address','$department','$city','$state','$gender')";
mysqli_query($conn, $query);
$_SESSION['firstname'] = $fname;
$_SESSION['success'] = "Succesifully Added" .mysqli_error($conn);
header('location: dashboard.php');
}
}