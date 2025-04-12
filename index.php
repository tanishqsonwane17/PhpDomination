<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="form-container">
    <h2>Register</h2>
    <form action="insert.php" method="post">
  <input type="text" name="name" placeholder="Full Name" id="name" required>
  
  <input type="number" name="age" placeholder="Age" id="age" min="1" required>
  
  <input type="text" name="rollnumber" placeholder="Roll Number" id="rollnumber" required>
  
  <input type="text" name="schoolName" placeholder="School Name" id="schoolName" required>
  
  <button type="submit" name="submit">Register</button>
</form>

  </div>

</body>
</html>
