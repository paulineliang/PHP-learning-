<?php
$servername = "localhost";
$username = "your username";
$password = "your db password";
$dbname = "your db name";
$debug = true;

$val_acc = $_POST['account'];
$val_pw = ($_POST['password']);
$sql = "INSERT INTO account ($val_acc , $val_pw)";
echo $sql;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO account (account, password)
    VALUES ('$val_acc', '$val_pw')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>
