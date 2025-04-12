<?php
$conn = mysqli_connect("localhost", "root", "", "student");

$fetchQuery = "SELECT * FROM studentdata";
$fetchResult = mysqli_query($conn, $fetchQuery);

if (mysqli_num_rows($fetchResult) > 0) {
    echo "<h2 style='text-align:center;'>Submitted Users</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0' style='width:80%; margin: 20px auto; text-align:center; border-collapse: collapse;'>
            <tr style='background:#eee;'>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>rollnumber</th>
                <th>schoolname</th>
                <th>Actions</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($fetchResult)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['rollnumber']}</td>
                <td>{$row['schoolName']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No data available yet.</p>";
}
?>
