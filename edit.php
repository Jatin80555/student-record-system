<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'config.php';
<link rel="stylesheet" href="assets/style.css">

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit Student</h2>
<form method="POST">
    <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    <input type="text" name="roll_no" value="<?= $row['roll_no'] ?>" required><br>
    <input type="text" name="class" value="<?= $row['class'] ?>"><br>
    <input type="date" name="dob" value="<?= $row['dob'] ?>"><br>
    <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    <button type="submit" name="update">Update Student</button>
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    $sql = "UPDATE students SET 
                name='$name', 
                roll_no='$roll_no',
                class='$class',
                dob='$dob',
                email='$email'
            WHERE id=$id";

    if ($conn->query($sql)) {
        echo "✅ Updated!";
        header("Location: index.php");
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
