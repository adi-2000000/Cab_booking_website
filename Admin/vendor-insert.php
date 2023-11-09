<?php
$v_name = $_POST['v-name'];
$v_contact = $_POST['v-contact'];
$v_mobile = $_POST['v-mobile'];
$v_city = $_POST['v-city'];
$v_udyog = $_POST['v-udyog'];
$v_email = $_POST['v-email'];
$v_bank = $_POST['v-bank'];
$v_acc_no = $_POST['v-acc-no'];
$v_ifsc = $_POST['v-ifsc'];
$v_adhar = $_POST['v-adhar'];
$v_pan = $_POST['v-pan'];
$v_other = $_POST['v-other'];
$msg = "";
include "config.php";
	$value2='';
    //Query to fetch last inserted invoice number
    $query = "SELECT * from `vendor_details` order by id DESC LIMIT 1";
    $stmt = $link->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['vendorid'];
            $value2 = substr($value2, 6, 7);//separating numeric part
            $value2 = $value2 + 1;//Incrementing numeric part
            $value2 = "000000" . sprintf('%03s', $value2);//concatenating incremented value
            $value = $value2; 
        }
    } 
    else {
        $value2 = "000000001";
        $value = $value2;
    }
$vendorid = $value;    

if (isset($_POST['upload'])) {

	$filename = $_FILES["v-img"]["name"];
	$tempname = $_FILES["v-img"]["tmp_name"];
    $filesize=  $_FILES["v-img"]['size'];

    $filename1 = $_FILES["v-img-certi"]["name"];
	$tempname1 = $_FILES["v-img-certi"]["tmp_name"];
    $filesize1=  $_FILES["v-img-certi"]['size'];

    $filename2 = $_FILES["v-img-udyog"]["name"];
	$tempname2 = $_FILES["v-img-udyog"]["tmp_name"];
    $filesize2=  $_FILES["v-img-udyog"]['size'];

    $filename3 = $_FILES["v-img-doc"]["name"];
	$tempname3 = $_FILES["v-img-doc"]["tmp_name"];
    $filesize3=  $_FILES["v-img-doc"]['size'];
    
    
    $filename5 = $_FILES["v-img-adhar"]["name"];
	$tempname5 = $_FILES["v-img-adhar"]["tmp_name"];
    $filesize5=  $_FILES["v-img-adhar"]['size'];
    
    $filename6 = $_FILES["v-img-pan"]["name"];
	$tempname6 = $_FILES["v-img-pan"]["tmp_name"];
    $filesize6=  $_FILES["v-img-pan"]['size'];
    
	

    if ($filesize > 12500000 || $filesize1 > 125000000 || $filesize2 > 125000000 || $filesize3 > 125000000 || $filesize5 > 125000000 || $filesize6 > 125000000) {
        echo '<script type="text/javascript">'; 
        echo 'alert("check image size <12500000 kb");'; 
        echo 'window.location.href = "vendors.php";';
        echo '</script>';
          }else {
              $img_ex = pathinfo($filename, PATHINFO_EXTENSION);
              $img_ex1 = pathinfo($filename1, PATHINFO_EXTENSION);
              $img_ex2 = pathinfo($filename2, PATHINFO_EXTENSION);
              $img_ex3 = pathinfo($filename3, PATHINFO_EXTENSION);

              $img_ex5 = pathinfo($filename5, PATHINFO_EXTENSION);
              $img_ex6 = pathinfo($filename6, PATHINFO_EXTENSION);

              
              $img_ex_lc = strtolower($img_ex);
              $img_ex_lc1 = strtolower($img_ex1);
              $img_ex_lc2 = strtolower($img_ex2);
              $img_ex_lc3 = strtolower($img_ex3);
          
              $img_ex_lc5 = strtolower($img_ex5);
              $img_ex_lc6 = strtolower($img_ex6);

              
             $allowed_exs = array("jpg","jpeg","png");
              
              if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc1, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs)) {
                  
                  if(in_array($img_ex_lc5, $allowed_exs) && in_array($img_ex_lc6, $allowed_exs))
                  
                  $new_filename = uniqid("VDR-", true).'.'.$img_ex_lc;
                  $new_filename1 = uniqid("VDR-", true).'.'.$img_ex_lc1;
                  $new_filename2 = uniqid("VDR-", true).'.'.$img_ex_lc2;
                  $new_filename3 = uniqid("VDR-", true).'.'.$img_ex_lc3;
              
                  $new_filename5 = uniqid("VDR-", true).'.'.$img_ex_lc5;
                  $new_filename6 = uniqid("VDR-", true).'.'.$img_ex_lc6;
                
                  
                  $img_upload_path = '../vendor/vendor/'.$new_filename;
                  $img_upload_path1 = '../vendor/vendor/'.$new_filename1;
                  $img_upload_path2 = '../vendor/vendor/'.$new_filename2;
                  $img_upload_path3 = '../vendor/vendor/'.$new_filename3;
            
                  $img_upload_path5 = '../vendor/vendor/'.$new_filename5;
                  $img_upload_path6 = '../vendor/vendor/'.$new_filename6;
                
                  
                  move_uploaded_file($tempname, $img_upload_path);
                  move_uploaded_file($tempname1, $img_upload_path1);
                  move_uploaded_file($tempname2, $img_upload_path2);
                  move_uploaded_file($tempname3, $img_upload_path3);
         
                  move_uploaded_file($tempname5, $img_upload_path5);
                  move_uploaded_file($tempname6, $img_upload_path6);
                
                  
                  $sql = "INSERT INTO vendor_details (v_name,v_contact,v_mobile,v_city,v_img,v_img_certi,v_udyog,v_img_udyog,v_doc,v_email,v_bank,v_acc_no,v_ifsc,v_adhar,v_img_adhar,v_pan,v_img_pan,v_other,vendorid) VALUES ('$v_name','$v_contact','$v_mobile','$v_city','$new_filename','$new_filename1','$v_udyog','$new_filename2','$new_filename3','$v_email','$v_bank','$v_acc_no','$v_ifsc','$v_adhar','$new_filename5','$v_pan','$new_filename6','$v_other','$vendorid')";
                  mysqli_query($link, $sql);       
              //  if ($link->query($sql) === FALSE) {
             //  echo "<br>" . $link->error;
             //   } 
             
              echo '<script type="text/javascript">'; 
             echo 'alert("Form submitted successfully");'; 
             echo 'window.location.href = "vendors.php";';
             echo '</script>';
              //header('location:vendors.php');
            }else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Extension Error Or Path Error");'; 
          echo 'window.location.href = "vendors.php";';
          echo '</script>';
              }
          }
}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("uploading error");'; 
    echo 'window.location.href = "vendors.php";';
    echo '</script>';
}
?>