<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <form action="authenticate.php" method="POST">

        <label>Username</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>