<?php
$conn = mysqli_connect("localhost", "root", "", "student");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM studentdata WHERE id = $id";
    mysqli_query($conn, $deleteQuery);
}

header(header: "Location: show.php");

?>
