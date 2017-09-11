<?php

//echo "up";
$conn = mysqli_connect("localhost", "root", "123456", "ssn");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "bet";
$username = $_POST["usr"];
$password = $_POST["pwd"];
echo "here";
echo $username;
echo $password;
$sql = "INSERT INTO login (name, passwd)
VALUES ('$username', '$password')";
echo $sql;
mysqli_query($conn,$sql);

//if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
//}
$conn->close();
?>




