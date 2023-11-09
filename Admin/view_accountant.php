
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
    <title>Accountants List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Accountants List</h2>

        <?php
        // Include your database connection configuration
        include 'config.php';

        // Retrieve accountants from the database
        $query = "SELECT * FROM accountant";
        $result = $link->query($query);

        if ($result->num_rows > 0) {
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        } else {
            echo "No accountants found in the database.";
        }

        // Close the database connection
        $link->close();
        ?>
    </div>

    <!-- Include Bootstrap JavaScript (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

