<?php
include 'config.php';

$table = $_GET['table']; // Get the table name from the request URL parameter




if ($table === 'cab') {
    // Fetch all cab details
    $result = mysqli_query($link, "SELECT * FROM `cabs_details`");

    // Create an array to store all cab data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} elseif ($table === 'driver') {
    // Fetch all driver details
    $result = mysqli_query($link, "SELECT * FROM `driver_details`");

    // Create an array to store all driver data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}elseif ($table === 'cabinfo') {
    // Fetch all driver details
    $result = mysqli_query($link, "SELECT * FROM `Cab_info`");

    // Create an array to store all driver data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} elseif ($table === 'cities') {
    // Fetch all city details
    $result = mysqli_query($link, "SELECT * FROM `cities`");

    // Create an array to store all city data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} elseif ($table === 'cars') {
    // Fetch all city details
    $result = mysqli_query($link, "SELECT * FROM `cars`");

    // Create an array to store all city data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}  elseif ($table === 'vendor') {
    // Fetch all vendor details
    $result = mysqli_query($link, "SELECT * FROM `vendor_details`");

    // Create an array to store all vendor data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = array('error' => 'Invalid table name');
}

// Close the database connection
mysqli_close($link);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
