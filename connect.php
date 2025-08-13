<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'test1');
if ($conn->connect_error) {
    die("connection Failed : " . $conn->connect_error);
    echo "try again..";
} else {
    $stmt = $conn->prepare("insert into registration(name,email,subject,message)values(?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    echo "Submited...";
    $stmt->close();
    $conn->close();
}
