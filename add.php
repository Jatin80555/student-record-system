<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'config.php'; ?>
<link rel="stylesheet" href="assets/style.css">


<form action="add.php" method="POST">
  <input type="text" name="name" placeholder="Name" required><br>
  <input type="text" name="roll_no" placeholder="Roll No" required><br>
  <input type="text" name="class" placeholder="Class"><br>
  <input type="date" name="dob"><br>
  <input type="email" name="email" placeholder="Email"><br>
  <button type="submit" name="submit">Add Student</button>
</form>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $roll_no = $_POST['roll_no'];
  $class = $_POST['class'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];

  $sql = "INSERT INTO students (name, roll_no, class, dob, email)
          VALUES ('$name', '$roll_no', '$class', '$dob', '$email')";

  if ($conn->query($sql)) {
    echo "Student added successfully!";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
