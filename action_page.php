<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$email = $_POST['email'];
$age = $_POST['age'];
$ranking = $_POST['ranking'];
$backhand = $_POST['backhand'];
$forehand = $_POST['forehand'];
$service = $_POST['service'];
$volley = $_POST['volley'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (firstname, lastname, gender, country, email, age, ranking, backhand, forehand, service, volley)
VALUES ('$firstname', '$lastname', '$gender', '$country', '$email', '$age', '$ranking', '$backhand', '$forehand', '$service', '$volley')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: Profile.php?firstname=$firstname&lastname=$lastname&gender=$gender&country=$country&email=$email&age=$age&ranking=$ranking&backhand=$backhand&forehand=$forehand&service=$service&volley=$volley");


// header("Location: dashboard.php?name_=$FullName&subject_=$Subject&phone_=$Phone&email_=$Email&message_=$Message"); 



?>

