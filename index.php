<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<h1>Student Management System</h1>

<a href="add_student.php">
    <button>Add Student</button>
</a>

<a href="search.php">
    <button>Search Student</button>
</a>

<a href="logout.php">
    <button>Logout</button>
</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Class</th>
        <th>Section</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

    <tr>
        <td><?php echo $row['student_id']; ?></td>

        <td>
            <img src="upload/<?php echo $row['photo']; ?>"
                 width="80" height="80">
        </td>

        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['class']; ?></td>
        <td><?php echo $row['section']; ?></td>

        <td>
            <a href="edit_student.php?id=<?php echo $row['student_id']; ?>">
                <button>Edit</button>
            </a>

            <a href="delete_student.php?id=<?php echo $row['student_id']; ?>"
               onclick="return confirmDelete()">
                <button>Delete</button>
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>