<a href="logout.php">🚪 Logout</a>

<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'config.php'; ?>
<link rel="stylesheet" href="assets/style.css">

<h2>All Students</h2>
<a href="add.php">➕ Add New Student</a><br><br>
<a href="search.php">🔍 Search Students</a><br><br>


<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Class</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM students");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['roll_no']}</td>
            <td>{$row['class']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?');\">Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>
