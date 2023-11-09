<?php
  
 $state = $_POST['state'];
 $city = $_POST['city'];
 echo  $state;
 echo  $city;

 $dstate = $_POST['dstate'];
 $dcity = $_POST['dcity'];
 echo  $dstate;
 echo  $dcity;

  $servername = "localhost";
  $username = "aimcabbo";
  $password = "Aimcab@Pass101";
  $databasename = "aimcabbo_admin";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM `states` WHERE id=$state;";
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
 $row = $result->fetch_assoc();
 
 $statename = $row['name'];
 echo  $statename;

   // SQL QUERY
   $query1 = "SELECT * FROM `cities` WHERE id=$city;";
   // FETCHING DATA FROM DATABASE
   $result1 = $conn->query($query1);
  $row1 = $result1->fetch_assoc();
  
  $cityname = $row1['name'];
  echo  $cityname;

  /* Destination */
    // SQL QUERY
    $query2 = "SELECT * FROM `states` WHERE id=$dstate;";
    // FETCHING DATA FROM DATABASE
    $result2 = $conn->query($query2);
   $row2 = $result2->fetch_assoc();
   
   $destinationstate = $row2['name'];
   echo  $destinationstate;
  
     // SQL QUERY
     $query3 = "SELECT * FROM `cities` WHERE id=$dcity;";
     // FETCHING DATA FROM DATABASE
     $result3 = $conn->query($query3);
    $row3 = $result3->fetch_assoc();
    
    $destinationcity = $row3['name'];
    echo  $destinationcity;

  

  
?>