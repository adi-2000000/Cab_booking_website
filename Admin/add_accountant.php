
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
    <title>Accountant Registration Form</title>
</head>
<body>

<?php
// Include your database connection configuration
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the accountant into the database
    $stmt = $link->prepare("INSERT INTO accountant (name, email, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful. You can now <a href='login.php'>log in</a>.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

  <div class="container">
        <h2 class="mt-5">Accountant Registration Form</h2>
        <form class="mt-3" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Include Bootstrap JavaScript (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
