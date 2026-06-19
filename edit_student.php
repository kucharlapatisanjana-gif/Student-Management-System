<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE student_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    $sql = "UPDATE students
            SET name='$name',
                email='$email',
                phone='$phone',
                class='$class',
                section='$section'
            WHERE student_id=$id";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Student Updated Successfully');
                window.location.href='index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">

    Name:<br>
    <input type="text" name="name"
    value="<?php echo $row['name']; ?>" required><br><br>

    Email:<br>
    <input type="email" name="email"
    value="<?php echo $row['email']; ?>" required><br><br>

    Phone:<br>
    <input type="text" name="phone"
    value="<?php echo $row['phone']; ?>" required><br><br>

    Class:<br>
    <input type="text" name="class"
    value="<?php echo $row['class']; ?>" required><br><br>

    Section:<br>
    <input type="text" name="section"
    value="<?php echo $row['section']; ?>" required><br><br>

    <button type="submit" name="update">
        Update Student
    </button>

</form>

</body>
</html>