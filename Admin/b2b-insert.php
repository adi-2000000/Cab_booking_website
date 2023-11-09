<?php


$b2b_name = $_POST['b2b-name'];
$b2b_contact = $_POST['b2b-contact'];
$b2b_mobile = $_POST['b2b-mobile'];
$b2b_city = $_POST['b2b-city'];
$b2b_email = $_POST['b2b-email'];
$b2b_bank = $_POST['b2b-bank'];
$b2b_acc_no = $_POST['b2b-acc-no'];
$b2b_ifsc = $_POST['b2b-ifsc'];
$b2b_pan = $_POST['b2b-pan'];
$b2b_other = $_POST['b2b-other'];
$msg = "";
include "config.php";
	$value2='';
    //Query to fetch last inserted invoice number
    $query = "SELECT * from `b2b_details` order by id DESC LIMIT 1";
    $stmt = $link->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['b2bid'];
            $value2 = substr($value2, 6, 7);//separating numeric part
            $value2 = $value2 + 1;//Incrementing numeric part
            $value2 = "B02B01" . sprintf('%03s', $value2);//concatenating incremented value
            $value = $value2; 
        }
    } 
    else {
        $value2 = "B02B01001";
        $value = $value2;
    }
$b2bid = $value;   

if (isset($_POST['upload'])) {

	$filename = $_FILES["b2b-img"]["name"];
	$tempname = $_FILES["b2b-img"]["tmp_name"];
    $filesize=  $_FILES["b2b-img"]['size'];

    $filename1 = $_FILES["b2b-img-certi"]["name"];
	$tempname1 = $_FILES["b2b-img-certi"]["tmp_name"];
    $filesize1=  $_FILES["b2b-img-certi"]['size'];

    $filename3 = $_FILES["b2b-img-doc"]["name"];
	$tempname3 = $_FILES["b2b-img-doc"]["tmp_name"];
    $filesize3=  $_FILES["b2b-img-doc"]['size'];
    
    $filename6 = $_FILES["b2b-img-pan"]["name"];
	$tempname6 = $_FILES["b2b-img-pan"]["tmp_name"];
    $filesize6=  $_FILES["b2b-img-pan"]['size'];
    
	

    if ($filesize > 12500000 || $filesize1 > 125000000 || $filesize3 > 125000000 || $filesize6 > 125000000) {
        echo '<script type="text/javascript">'; 
        echo 'alert("check image size <12500000 kb");'; 
        echo 'window.location.href = "all-b2b.php";';
        echo '</script>';
          }else {
              $img_ex = pathinfo($filename, PATHINFO_EXTENSION);
              $img_ex1 = pathinfo($filename1, PATHINFO_EXTENSION);
              $img_ex3 = pathinfo($filename3, PATHINFO_EXTENSION);

              $img_ex6 = pathinfo($filename6, PATHINFO_EXTENSION);

              
              $img_ex_lc = strtolower($img_ex);
              $img_ex_lc1 = strtolower($img_ex1);
              $img_ex_lc3 = strtolower($img_ex3);
          
              $img_ex_lc6 = strtolower($img_ex6);

              
             $allowed_exs = array("jpg","jpeg","png","pdf");
              
              if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc1, $allowed_exs)) {
                  
                  if(in_array($img_ex_lc6, $allowed_exs))
                  
                  $new_filename = uniqid("B2B-", true).'.'.$img_ex_lc;
                  $new_filename1 = uniqid("B2B-", true).'.'.$img_ex_lc1;
                  $new_filename3 = uniqid("B2B-", true).'.'.$img_ex_lc3;
              
                  $new_filename6 = uniqid("B2B-", true).'.'.$img_ex_lc6;
                
                  
                  $img_upload_path = '../b2b/B2B-Docs/'.$new_filename;
                  $img_upload_path1 = '../b2b/B2B-Docs/'.$new_filename1;
                  $img_upload_path3 = '../b2b/B2B-Docs/'.$new_filename3;
            
                  $img_upload_path6 = '../b2b/B2B-Docs/'.$new_filename6;
                
                  
                  move_uploaded_file($tempname, $img_upload_path);
                  move_uploaded_file($tempname1, $img_upload_path1);
                  move_uploaded_file($tempname3, $img_upload_path3);
         
                  move_uploaded_file($tempname6, $img_upload_path6);
                
                  
                  $b2bsql = "INSERT INTO b2b_details (b2b_name,b2b_contact,b2b_mobile,b2b_city,b2b_img,b2b_img_certi,b2b_doc,b2b_email,b2b_bank,b2b_acc_no,b2b_ifsc,b2b_pan,b2b_img_pan,b2b_other,b2bid) VALUES ('$b2b_name','$b2b_contact','$b2b_mobile','$b2b_city','$new_filename','$new_filename1','$new_filename3','$b2b_email','$b2b_bank','$b2b_acc_no','$b2b_ifsc','$b2b_pan','$new_filename6','$b2b_other','$b2bid')";
                  mysqli_query($link, $b2bsql); 
              //  if ($link->query($sql) === FALSE) {
             //  echo "<br>" . $link->error;
             //   } 
             
              echo '<script type="text/javascript">'; 
              echo 'alert("Form submitted successfully");'; 
              echo 'window.location.href = "all-b2b.php";';
              echo '</script>';
              //header('location:vendors.php');
            }else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Extension Error Or Path Error");'; 
          echo 'window.location.href = "all-b2b.php";';
          echo '</script>';
              }
          }
}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("uploading error");'; 
    echo 'window.location.href = "all-b2b.php";';
    echo '</script>';
}
?>