
<?php

$c_name=$_POST['c-name'];
$c_rc=$_POST['c-rc'];
$c_plate=$_POST['c-plate'];
$c_other=$_POST['c-other'];

$msg = "";
include "config.php";
	$value2='';
    //Query to fetch last inserted invoice number
    $query = "SELECT * from `cabs_details` order by id DESC LIMIT 1";
    $stmt = $link->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['cabid'];
            $value2 = substr($value2, 6, 7);//separating numeric part
            $value2 = $value2 + 1;//Incrementing numeric part
            $value2 = "000000" . sprintf('%03s', $value2);//concatenating incremented value
            $value = $value2; 
        }
    } 
    else {
        $value2 = "0000001";
        $value = $value2;
    }
$cabid = $value;  

if (isset($_POST['upload'])) {

	$filename = $_FILES["c-img-rc"]["name"];
	$tempname = $_FILES["c-img-rc"]["tmp_name"];
    $filesize=  $_FILES["c-img-rc"]['size'];

    $filename1 = $_FILES["c-insurance"]["name"];
	$tempname1 = $_FILES["c-insurance"]["tmp_name"];
    $filesize1=  $_FILES["c-insurance"]['size'];

    $filename2 = $_FILES["c-permit"]["name"];
	$tempname2 = $_FILES["c-permit"]["tmp_name"];
    $filesize2=  $_FILES["c-permit"]['size'];

    $filename3 = $_FILES["c-fitness"]["name"];
	$tempname3 = $_FILES["c-fitness"]["tmp_name"];
    $filesize3=  $_FILES["c-fitness"]['size'];
    
    $filename4 = $_FILES["c-img"]["name"];
	$tempname4 = $_FILES["c-img"]["tmp_name"];
    $filesize4=  $_FILES["c-img"]['size'];
    
    $filename5 = $_FILES["c-img-f"]["name"];
	$tempname5 = $_FILES["c-img-f"]["tmp_name"];
    $filesize5=  $_FILES["c-img-f"]['size'];
    
    $filename6 = $_FILES["c-img-b"]["name"];
	$tempname6 = $_FILES["c-img-b"]["tmp_name"];
    $filesize6=  $_FILES["c-img-b"]['size'];
    
    $filename7 = $_FILES["c-img-s"]["name"];
	$tempname7 = $_FILES["c-img-s"]["tmp_name"];
    $filesize7=  $_FILES["c-img-s"]['size'];
	

    if ($filesize > 12500000 || $filesize1 > 125000000 || $filesize2 > 125000000 || $filesize3 > 125000000 || $filesize4 > 125000000 || $filesize5 > 125000000 || $filesize6 > 125000000 || $filesize7 > 125000000) {
        echo '<script type="text/javascript">'; 
        echo 'alert("check image size <12500000 kb");'; 
        echo 'window.location.href = "cabs.php";';
        echo '</script>';
          }else {
              $img_ex = pathinfo($filename, PATHINFO_EXTENSION);
              $img_ex1 = pathinfo($filename1, PATHINFO_EXTENSION);
              $img_ex2 = pathinfo($filename2, PATHINFO_EXTENSION);
              $img_ex3 = pathinfo($filename3, PATHINFO_EXTENSION);
              $img_ex4 = pathinfo($filename4, PATHINFO_EXTENSION);
              $img_ex5 = pathinfo($filename5, PATHINFO_EXTENSION);
              $img_ex6 = pathinfo($filename6, PATHINFO_EXTENSION);
              $img_ex7 = pathinfo($filename7, PATHINFO_EXTENSION);
              
              $img_ex_lc = strtolower($img_ex);
              $img_ex_lc1 = strtolower($img_ex1);
              $img_ex_lc2 = strtolower($img_ex2);
              $img_ex_lc3 = strtolower($img_ex3);
              $img_ex_lc4 = strtolower($img_ex4);
              $img_ex_lc5 = strtolower($img_ex5);
              $img_ex_lc6 = strtolower($img_ex6);
              $img_ex_lc7 = strtolower($img_ex7);
              
             $allowed_exs = array("jpg","jpeg","png","pdf");
              
              if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc1, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs)) {
                  
                  if(in_array($img_ex_lc4, $allowed_exs) && in_array($img_ex_lc5, $allowed_exs) && in_array($img_ex_lc6, $allowed_exs) && in_array($img_ex_lc7, $allowed_exs))
                  
                  $new_filename = uniqid("CAB-", true).'.'.$img_ex_lc;
                  $new_filename1 = uniqid("CAB-", true).'.'.$img_ex_lc1;
                  $new_filename2 = uniqid("CAB-", true).'.'.$img_ex_lc2;
                  $new_filename3 = uniqid("CAB-", true).'.'.$img_ex_lc3;
                  $new_filename4 = uniqid("CAB-", true).'.'.$img_ex_lc4;
                  $new_filename5 = uniqid("CAB-", true).'.'.$img_ex_lc5;
                  $new_filename6 = uniqid("CAB-", true).'.'.$img_ex_lc6;
                  $new_filename7 = uniqid("CAB-", true).'.'.$img_ex_lc7;
                  
                  $img_upload_path = 'cab/'.$new_filename;
                  $img_upload_path1 = 'cab/'.$new_filename1;
                  $img_upload_path2 = 'cab/'.$new_filename2;
                  $img_upload_path3 = 'cab/'.$new_filename3;
                  $img_upload_path4 = 'cab/'.$new_filename4;
                  $img_upload_path5 = 'cab/'.$new_filename5;
                  $img_upload_path6 = 'cab/'.$new_filename6;
                  $img_upload_path7 = 'cab/'.$new_filename7;
                  
                  move_uploaded_file($tempname, $img_upload_path);
                  move_uploaded_file($tempname1, $img_upload_path1);
                  move_uploaded_file($tempname2, $img_upload_path2);
                  move_uploaded_file($tempname3, $img_upload_path3);
                  move_uploaded_file($tempname4, $img_upload_path4);
                  move_uploaded_file($tempname5, $img_upload_path5);
                  move_uploaded_file($tempname6, $img_upload_path6);
                  move_uploaded_file($tempname7, $img_upload_path7);
                  
                  $sql = "INSERT INTO cabs_details (c_name,c_rc,c_img_rc,c_insurance,c_permit,c_fitness,c_img,c_img_f,c_img_b,c_img_s,c_other,cabid,vendorid)
                  VALUES ('$c_name','$c_rc','$new_filename','$new_filename1','$new_filename2','$new_filename3','$new_filename4','$new_filename5','$new_filename6','$new_filename7','$c_other','$cabid','admin')";
                  mysqli_query($link, $sql);       
               //  if ($link->query($sql) === FALSE) {
             //    echo "<br>" . $link->error;
                //  } 
                //header('location:cabs.php');
                //  alert("Cab Details Uploaded");
                  
          echo '<script type="text/javascript">'; 
          echo 'alert("Cab Details Uploaded");'; 
          echo 'window.location.href = "cabs.php";';
          echo '</script>';
                  
            }else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Extension Error Or Path Error");'; 
          echo 'window.location.href = "cabs.php";';
          echo '</script>';
              }
          }
}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("uploading error");'; 
    echo 'window.location.href = "cabs.php";';
    echo '</script>';
}
?>