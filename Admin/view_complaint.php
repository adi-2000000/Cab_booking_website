
<?php include 'header.php'; ?>


<?php
include 'config.php'; // Include the database connection file





// Get the 'id' query parameter from the URL
$book = $_GET['bookid'];
$complaintid = $_GET['id'];
//var_dump($complaintid);
$username = $_GET['username'];
$complaint_id = $book;
//var_dump($complaint_id);
//$complaint_id = 'AIM00A1615';

// Create a prepared statement to fetch the complaint data based on the 'id'
$sql = "SELECT * FROM user_booking WHERE bookid = ?";
//echo $sql;
$stmt = mysqli_prepare($link, $sql);

if ($stmt) {
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $complaint_id);
//echo $stmt;
    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        $complaint_data = mysqli_fetch_assoc($result);
        //    var_dump($complaint_data); // Output the data for debugging
            //   var_dump($stmt); // Output the data for debugging

    } else {
        die("Error: " . mysqli_error($link));
    }
    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    die("Error: " . mysqli_error($link));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_penalty']) && isset($_POST['id'])) {
        $newPenalty = $_POST['new_penalty'];
        $id = $_POST['id']; // Get the 'id' from the form

        // Update the 'penalty' field in the 'user_booking' table for a specific 'bookid' and 'id'
        $updateSql = "UPDATE user_booking SET penalty = ? WHERE bookid = ? AND id = ?";
        $updateStmt = mysqli_prepare($link, $updateSql);

        if ($updateStmt) {
            mysqli_stmt_bind_param($updateStmt, "sss", $newPenalty, $complaint_id, $id); // Bind 'new_penalty', 'bookid', and 'id'
            if (mysqli_stmt_execute($updateStmt)) {
                echo "Penalty updated successfully.";
                   header("Location:user-complaint.php");
                // exit; // Terminate the script after the redirect
            } else {
                echo "Error updating penalty: " . mysqli_error($link);
            }

            // Close the prepared statement
            mysqli_stmt_close($updateStmt);
                               header("Location: user-complaint.php");

        }
    }
}

if (isset($_POST['mark_resolved'])) {
    // Update the 'status' in the 'user_complaint' table to 1 where 'id' matches and 'username' matches
    $updateSql = "UPDATE user_complaints SET status = 1 WHERE id = ? AND username = ?";
    $updateStmt = mysqli_prepare($link, $updateSql);

    if ($updateStmt) {
        mysqli_stmt_bind_param($updateStmt, "ss", $complaintid, $username); // Bind 'id' and 'username'
        if (mysqli_stmt_execute($updateStmt)) {
            echo "Complaint marked as resolved.";
            // Redirect to a success page or another page
            // header("Location: success.php");
            // exit; // Terminate the script after the redirect
        } else {
            echo "Error updating status: " . mysqli_error($link);
        }

        // Close the prepared statement
        mysqli_stmt_close($updateStmt);
    }
}


?>



<style>
    
    
    .container {
    display: flex;
}

.column {
    flex: 1;
    padding: 10px;
    box-sizing: border-box;
}
    caption{
        border: 1px solid;
        padding:8px;
        font-size:21px;
      }

</style>


<body>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title text-danger">View Complaint Details</strong>
                              </div>
                        <div class="container">
    <div class="column">
        <caption style="border:1px;padding:8px;font-size:21px;">User Details</caption>
        <table class="table table-bordered">
            
        <tbody>
              
    <!-- Left column content -->
    <!-- Include the first half of your information here -->
  
    <tr>
        <th>Booking Id:</th>
        <td><?php echo $complaint_data['bookid']; ?></td>
        
        <th>User Name:</th>
        <td><?php echo $complaint_data['name']; ?></td>
    </tr>
    <tr>
        <th>User Id:</th>
        <td>
            
            
            
           <?php echo $complaint_data['userid']; ?> 
            
            
            
        </td>
        
        <th>User No:</th>
        <td><?php echo $complaint_data['phone']; ?></td>
    </tr>
    <tr>
        <th>User Email:</th>
        <td><?php echo $complaint_data['email']; ?></td>
        
        <th>Date/Time:</th>
        <td>
       
    <?php
    $date = $complaint_data['date'];
    $time = $complaint_data['time'];
    $datetime = $date . ' ' . $time; // Concatenate date and time
    echo $datetime;
    ?>
</td>
    
    </td>
        
    </tr>
    
    <tr>
        <th> Pickup:</th>
        <td><?php echo $complaint_data['user_pickup']; ?></td>
   
    
        <th> Drop:</th>
        <td><?php echo $complaint_data['user_drop']; ?></td>
    </tr>
    
    
    <tr>
        <th> Trip Type:</th>
        <td><?php echo $complaint_data['user_trip_type']; ?></td>
   
    
        <th> Cab Type:</th>
        <td><?php echo $complaint_data['car']; ?></td>
    </tr>
</tbody>

        </table>
    </div>
    <div class="column" style="width: 50%; height: 0%;">
        <caption>Vendor Details</caption>
        <table class="table table-bordered">
            <tbody>
                <!-- Right column content -->
                <!-- Include the second half of your information here -->
                  <tr>
        <th>Vendor Id</th>
        <td><?php echo $complaint_data['vendorid']; ?></td>
     <th>Status</th>
<td>
    <?php
    $status = $complaint_data['status'];
    //var_dump($status);
    if ($status == 0) {
        echo "Pending";
    } elseif ($status == 1) {
        echo "Ongoing";
    } elseif ($status == 2) {
        echo "Completed";
    } else {
        echo "Unknown"; // Handle other values if necessary
    }
    ?>
</td>
    
        
    </tr>
    <tr>
        <th>Driver Id</th>
        <td><?php echo $complaint_data['driverid']; ?></td>
    
    
        <th>Cab Id</th>
        <td><?php echo $complaint_data['cabid']; ?></td>
    </tr>
     <tr>
        <th>Distance</th>
        <td><?php echo $complaint_data['distance']; ?></td>
    
    

    </tr>
    
    

            </tbody>
        </table>
    </div>
</div>

                        <div class="card-body">
                                                            <caption>All Charges</caption>

                            <table class="table table-bordered">
                               <tbody>
    <tr>
        <th>odometer Start</th>
        <td><?php echo $complaint_data['odometer_start']; ?></td>
   
        <th>Odometer End</th>
        <td><?php echo $complaint_data['odometer_end']; ?></td>
    </tr>
    <tr>
        <th>Driver Bhata</th>
        <td><?php echo $complaint_data['driver_bhata']; ?></td>
    
        <th>Night Charges</th>
        <td><?php echo $complaint_data['nightCharges']; ?></td>
    </tr>
    <tr>
        <th>GST</th>
        <td><?php echo $complaint_data['gst']; ?></td>
   
        <th>Service Charges</th>
        <td><?php echo $complaint_data['service_charge']; ?></td>
    </tr>
    <tr>
        <th>Partial</th>
        <td><?php echo $complaint_data['partial']; ?></td>
  
        <th>Remaining</th>
        <td><?php echo $complaint_data['remaining']; ?></td>
    </tr>
    <tr>
        <th>Paid</th>
        <td><?php echo $complaint_data['paid']; ?></td>
   
        <th>Payment</th>
        <td><?php echo $complaint_data['payment']; ?></td>
    </tr>
    <tr>
        <th>Base Amount</th>
        <td><?php echo $complaint_data['baseAmount']; ?></td>
    
        <th>Amount</th>
        <td><?php echo $complaint_data['amount']; ?></td>
    </tr>
    
   
     <tr>
        <th>Penalty</th>
        <td><?php echo $complaint_data['penalty']; ?></td>
       
    </tr>
    <tr>
      <th>Add Penalty:</th>
                                        <td>
                                            <form method="post">
                                                <input type="number" name="new_penalty" value="<?php echo $complaint_data['penalty']; ?>">
                                                <input type="hidden" name="id" value="<?php echo $complaint_data['id']; ?>">

                                                <button type="submit">Update Penalty</button>
                                            </form>
                                        </td>
                                    </tr>
                                  
</tbody>

                            </table>
                                 <div style="display: flex; ">
                                <a href="user-complaint.php" class="btn btn-secondary" style="margin-right:10px;" >Go Back</a>
                                <form method="post">
                                    <button type="submit" name="mark_resolved" class="btn btn-success">Mark as Resolved</button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
