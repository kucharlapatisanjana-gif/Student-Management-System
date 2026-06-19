<?php

include 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE student_id=$id";

if(mysqli_query($conn, $sql))
{
    echo "<script>
            alert('Student Deleted Successfully');
            window.location.href='index.php';
          </script>";
}

?>