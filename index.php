<?php
require 'form.php';
require_once 'functions.php';
require 'User.php';

$pdo = connectToDb();
$name = $_POST['name'];
if($name == ''){
    echo"Name should not be empty!".'<br>';
}
$email = $_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo 'Email should be valid!'.'<br>';
}
$gender = $_POST['gender'];
if(!isset($gender)){
    echo "Please select a gender!".'<br>';
}
$city = $_POST['city'];
$sql = "INSERT INTO data (name, email, gender, city) VALUES (?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $email, $gender, $city]);
?>
<body>
   
    <center><a class="btn btn-primary" href="frontend.php" role="button">View Entries</a></center>
</body>
