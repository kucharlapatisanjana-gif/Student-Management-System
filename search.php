<?php
include 'db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
</head>
<body>

<h2>Search Student</h2>

<form method="GET">

    <input type="text"
           name="search"
           placeholder="Enter Name, Class or Section"
           required>

    <button type="submit">
        Search
    </button>

</form>

<br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Class</th>
    <th>Section</th>
</tr>

<?php

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $sql = "SELECT * FROM students
            WHERE name LIKE '%$search%'
            OR class LIKE '%$search%'
            OR section LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
?>

<tr>

<td><?php echo $row['student_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['section']; ?></td>

</tr>

<?php
    }
}
?>

</table>

<br>

<a href="index.php">
    <button>Back to Dashboard</button>
</a>

</body>
</html>