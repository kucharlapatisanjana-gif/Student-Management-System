<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    $photo = $_FILES['photo']['name'];
    $temp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($temp_name, "upload/".$photo);

    $sql = "INSERT INTO students(name,email,phone,class,section,photo)
            VALUES('$name','$email','$phone','$class','$section','$photo')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
                alert('Student Added Successfully');
                window.location.href='index.php';
              </script>";
    }
    else
    {
        echo "Error: ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Student</h2>

<form action="" method="POST" enctype="multipart/form-data">

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Class:</label><br>
    <input type="text" name="class" required><br><br>

    <label>Section:</label><br>
    <input type="text" name="section" required><br><br>

    <label>Photo:</label><br>
    <input type="file" name="photo" required><br><br>

    <button type="submit" name="submit">Add Student</button>

</form>

<br>

<a href="index.php">
    <button>Back to Dashboard</button>
</a>

</body>
</html>