<?php include 'config.php'; ?>
<link rel="stylesheet" href="assets/style.css">


<h2>🔍 Search Students</h2>
<a href="index.php">← Back to All Students</a><br><br>

<form method="GET" action="">
    <input type="text" name="query" placeholder="Enter name or roll number" required>
    <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];

    $sql = "SELECT * FROM students 
            WHERE name LIKE '%$query%' 
               OR roll_no LIKE '%$query%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Results:</h3>";
        echo "<table border='1' cellpadding='10'>
                <tr>
                    <th>ID</th><th>Name</th><th>Roll No</th><th>Class</th><th>DOB</th><th>Email</th><th>Actions</th>
                </tr>";

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
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No student found with '$query'</p>";
    }
}
?>
