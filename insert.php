<?php
$_SERVER = "localhost";
$_username = "root";
$_Password = '';
$_Database = "student";

$conn = mysqli_connect($_SERVER, $_username, $_Password, $_Database);

if (!$conn){
    echo "Connection Failed!";
}

// Form Submit Check
if (isset($_POST['submit'])) {
    $name        = trim($_POST['name']);
    $age         = trim($_POST['age']);
    $rollnumber  = trim($_POST['rollnumber']);
    $schoolName  = trim($_POST['schoolName']);

    $query = "INSERT INTO studentdata (name, age, rollnumber, schoolName)
              VALUES ('$name', '$age', '$rollnumber', '$schoolName')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Successfully inserted');</script>";
    } else {
        echo "<script>alert('Failed to insert');</script>";
    }
}
?>