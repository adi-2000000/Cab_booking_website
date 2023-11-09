<?Php
$id = $_GET['id']; //get bl_master_id from previos page
// Checking data it is a number or not
if (!is_numeric($id)) {
    echo "Data Error";
    exit;
}
// MySQL connection string
require 'config.php'; 
//code for fetching master_table data
$id = $_GET['id'];
$query = mysqli_query($link, "SELECT * FROM oneway_trip WHERE id='$id'");
$row = mysqli_fetch_array($query);

$sql = "UPDATE `oneway_trip` SET status='1' WHERE id='$id'";
if ($link->query($sql) === TRUE) {
  header('location:on-off-trip.php');
} else {
  echo "Error updating record: " . $link->error;
}