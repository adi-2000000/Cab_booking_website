
<?php include 'header.php';?>

<?php
include 'config.php'; // Include the database connection file

// Query to fetch data from the user_complaints table
$sql = "SELECT id, bookid, username, email, reason_of_complaint, related,status,phone FROM user_complaints";

$result = mysqli_query($link, $sql);

if (!$result) {
    die("Error: " . mysqli_error($link));
}

?>

<body>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title text-danger">User Complaints Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <!-- Add table headers here -->
                                        <th class="serial">Sr. No.</th>
                                        <!--<th class="avatar">User</th>-->
                                        <th>Booking Id</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Complaints</th>
                                        <th>Related</th> <!-- Assuming 'related' refers to 'related' column -->
                                    <th>Status</th> <!-- Assuming 'related' refers to 'related' column -->
                                      <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td class='serial'>" . $row['id'] . "</td>";
                                        // echo "<td class='avatar'>User data here</td>"; // You'll need to retrieve and display user data
                                        echo "<td>" . $row['bookid'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";

                                        echo "<td>" . $row['reason_of_complaint'] . "</td>";
                                        echo "<td>" . $row['related'] . "</td>";
                                     if ($row['status'] == 0) {
echo '<td style="color: red; font-weight: bold;">Unresolved</td>';
} else if ($row['status'] == 1) {
echo '<td style="color: green; font-weight: bold;">Resolved</td>';
} else {
    echo "<td>Unknown</td>"; // Handle other status values here
}
echo "<td>";
    echo "<a href='view_complaint.php?bookid=" . $row['bookid'] . "&id=" . $row['id'] . "&username=" . $row['username'] . "'>View</a>";
    echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content>




        

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
