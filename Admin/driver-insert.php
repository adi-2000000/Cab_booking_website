
<?php

$d_name = $_POST['d-name'];
$d_contact = $_POST['d-contact'];
$d_mobile = $_POST['d-mobile'];
$d_address = $_POST['d-address'];
$d_adhaar = $_POST['d-adhaar'];
$d_dl = $_POST['d-dl'];
$d_pvc = $_POST['d-pvc'];
$d_email = $_POST['d-email'];
$d_other = $_POST['d-other'];
include "config.php";
	$value2='';
    //Query to fetch last inserted invoice number
    $query = "SELECT * from `driver_details` order by id DESC LIMIT 1";
    $stmt = $link->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['driverid'];
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
$driverid = $value;    

$msg = "";


if (isset($_POST['upload'])) {

	$filename = $_FILES["d-img"]["name"];
	$tempname = $_FILES["d-img"]["tmp_name"];
    $filesize=  $_FILES["d-img"]['size'];

    $filename1 = $_FILES["d-img-1"]["name"];
	$tempname1 = $_FILES["d-img-1"]["tmp_name"];
    $filesize1=  $_FILES["d-img-1"]['size'];

    $filename2 = $_FILES["d-img-dl"]["name"];
	$tempname2 = $_FILES["d-img-dl"]["tmp_name"];
    $filesize2=  $_FILES["d-img-dl"]['size'];

    $filename3 = $_FILES["d-img-pvc"]["name"];
	$tempname3 = $_FILES["d-img-pvc"]["tmp_name"];
    $filesize3=  $_FILES["d-img-pvc"]['size'];
    
    $filename4 = $_FILES["d-img-adhaar"]["name"];
	$tempname4 = $_FILES["d-img-adhaar"]["tmp_name"];
    $filesize4=  $_FILES["d-img-adhaar"]['size'];
    
	

    if ($filesize > 12500000 || $filesize1 > 125000000 || $filesize2 > 125000000 || $filesize3 > 125000000 || $filesize4 > 125000000) {
        echo '<script type="text/javascript">'; 
        echo 'alert("check image size <12500000 kb");'; 
        echo 'window.location.href = "drivers.php";';
        echo '</script>';
          }else {
              $img_ex = pathinfo($filename, PATHINFO_EXTENSION);
              $img_ex1 = pathinfo($filename1, PATHINFO_EXTENSION);
              $img_ex2 = pathinfo($filename2, PATHINFO_EXTENSION);
              $img_ex3 = pathinfo($filename3, PATHINFO_EXTENSION);
              $img_ex4 = pathinfo($filename4, PATHINFO_EXTENSION);
              $img_ex5 = pathinfo($filename5, PATHINFO_EXTENSION);
              $img_ex6 = pathinfo($filename6, PATHINFO_EXTENSION);
              
              $img_ex_lc = strtolower($img_ex);
              $img_ex_lc1 = strtolower($img_ex1);
              $img_ex_lc2 = strtolower($img_ex2);
              $img_ex_lc3 = strtolower($img_ex3);
              $img_ex_lc4 = strtolower($img_ex4);

              
             $allowed_exs = array("jpg","jpeg","png","pdf");
              
            
                  if(in_array($img_ex_lc4, $allowed_exs)){
                  if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc1, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs)) 
                  
                  
                  
                  $new_filename = uniqid("DRV-", true).'.'.$img_ex_lc;
                  $new_filename1 = uniqid("DRV-", true).'.'.$img_ex_lc1;
                  $new_filename2 = uniqid("DRV-", true).'.'.$img_ex_lc2;
                  $new_filename3 = uniqid("DRV-", true).'.'.$img_ex_lc3;
                  $new_filename4 = uniqid("DRV-", true).'.'.$img_ex_lc4;
                  

                  
                  $img_upload_path = '../admin/driver/'.$new_filename;
                  $img_upload_path1 = '../admin/driver/'.$new_filename1;
                  $img_upload_path2 = '../admin/driver/'.$new_filename2;
                  $img_upload_path3 = '../admin/driver/'.$new_filename3;
                  $img_upload_path4 = '../admin/driver/'.$new_filename4;
                 
                  
                  move_uploaded_file($tempname, $img_upload_path);
                  move_uploaded_file($tempname1, $img_upload_path1);
                  move_uploaded_file($tempname2, $img_upload_path2);
                  move_uploaded_file($tempname3, $img_upload_path3);
                  move_uploaded_file($tempname4, $img_upload_path4);
                  
                
                  
                  $sql = "INSERT INTO driver_details (d_name,d_contact,d_mobile,d_address,d_img,d_img1,d_adhaar,d_dl,d_img_dl,d_pvc,d_img_pvc,d_img_adhaar,d_email,d_other, vendorid, driverid) 
                  VALUES ('$d_name','$d_contact','$d_mobile','$d_address','$new_filename','$new_filename1','$d_adhaar','$d_dl','$new_filename2','$d_pvc','$new_filename3','$new_filename4','$d_email','$d_other','admin', '$driverid')";
                  mysqli_query($link, $sql);       
               // if ($link->query($sql) === FALSE) {
               //   echo "<br>" . $link->error;
                // } 
                echo '<script type="text/javascript">'; 
          echo 'alert("Details Submited Successfully");'; 
          echo 'window.location.href = "drivers.php";';
          echo '</script>';
                 //header('location:drivers.php');
            }else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Extension Error Or Path Error");'; 
          echo 'window.location.href = "drivers.php";';
          echo '</script>';
              }
          }
}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("uploading error");'; 
    echo 'window.location.href = "drivers.php";';
    echo '</script>';
}
?>