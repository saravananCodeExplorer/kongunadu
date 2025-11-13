





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL & PHP Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>User Authentication</h2>
    
    <h3>Register</h3>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    
    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
    <h2>Manage Records</h2>
    
    <h3>Add Record</h3>
    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="value" placeholder="Value" required>
        <button type="submit">Add</button>
    </form>
    
    <h3>Records</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Value</th>
            <th>Actions</th>
        </tr>
        <?php include 'read.php'; ?>
    </table>
</body>
</html>



