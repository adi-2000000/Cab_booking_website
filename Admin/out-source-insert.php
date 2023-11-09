
<?php

$o_name=$_POST['o-name'];
$o_rc=$_POST['o-rc'];
$o_plate=$_POST['o-plate'];
$o_other=$_POST['o-other'];
include "config.php";
$msg = "";


if (isset($_POST['upload'])) {

	$filename = $_FILES["o-img-rc"]["name"];
	$tempname = $_FILES["o-img-rc"]["tmp_name"];
    $filesize=  $_FILES["o-img-rc"]['size'];

    $filename1 = $_FILES["o-insurance"]["name"];
	$tempname1 = $_FILES["o-insurance"]["tmp_name"];
    $filesize1=  $_FILES["o-insurance"]['size'];

    $filename2 = $_FILES["o-permit"]["name"];
	$tempname2 = $_FILES["o-permit"]["tmp_name"];
    $filesize2=  $_FILES["o-permit"]['size'];

    $filename3 = $_FILES["o-auth"]["name"];
	$tempname3 = $_FILES["o-auth"]["tmp_name"];
    $filesize3=  $_FILES["o-auth"]['size'];

    $filename4 = $_FILES["o-img"]["name"];
	$tempname4 = $_FILES["o-img"]["tmp_name"];
    $filesize4=  $_FILES["o-img"]['size'];
    
    $filename5 = $_FILES["o-img-f"]["name"];
	$tempname5 = $_FILES["o-img-f"]["tmp_name"];
    $filesize5=  $_FILES["o-img-f"]['size'];

    $filename6 = $_FILES["o-img-b"]["name"];
	$tempname6 = $_FILES["o-img-b"]["tmp_name"];
    $filesize6=  $_FILES["o-img-b"]['size'];
    
    $filename7 = $_FILES["o-img-s"]["name"];
	$tempname7 = $_FILES["o-img-s"]["tmp_name"];
    $filesize7=  $_FILES["o-img-s"]['size'];
	

    if ($filesize > 12500000 || $filesize1 > 125000000 || $filesize2 > 125000000 || $filesize3 > 125000000 || $filesize4 > 125000000 || $filesize5 > 125000000 || $filesize6 > 125000000 || $filesize7 > 125000000) {
        echo '<script type="text/javascript">'; 
        echo 'alert("check image size <12500000 kb");'; 
        echo 'window.location.href = "out-source.php";';
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
              
             $allowed_exs = array("jpg","jpeg","png");
             
             if(in_array($img_ex_lc4, $allowed_exs) && in_array($img_ex_lc5, $allowed_exs) && in_array($img_ex_lc6, $allowed_exs) && in_array($img_ex_lc7, $allowed_exs)){
              
              if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc1, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs)) 
                  
                  
                  
                  $new_filename = uniqid("OUT-", true).'.'.$img_ex_lc;
                  $new_filename1 = uniqid("OUT-", true).'.'.$img_ex_lc1;
                  $new_filename2 = uniqid("OUT-", true).'.'.$img_ex_lc2;
                  $new_filename3 = uniqid("OUT-", true).'.'.$img_ex_lc3;
                  $new_filename4 = uniqid("OUT-", true).'.'.$img_ex_lc4;
                  $new_filename5 = uniqid("OUT-", true).'.'.$img_ex_lc5;
                  $new_filename6 = uniqid("OUT-", true).'.'.$img_ex_lc6;
                  $new_filename7 = uniqid("OUT-", true).'.'.$img_ex_lc7;
                  
                  $img_upload_path = 'out/'.$new_filename;
                  $img_upload_path1 = 'out/'.$new_filename1;
                  $img_upload_path2 = 'out/'.$new_filename2;
                  $img_upload_path3 = 'out/'.$new_filename3;
                  $img_upload_path4 = 'out/'.$new_filename4;
                  $img_upload_path5 = 'out/'.$new_filename5;
                  $img_upload_path6 = 'out/'.$new_filename6;
                  $img_upload_path7 = 'out/'.$new_filename7;
                  
                  move_uploaded_file($tempname, $img_upload_path);
                  move_uploaded_file($tempname1, $img_upload_path1);
                  move_uploaded_file($tempname2, $img_upload_path2);
                  move_uploaded_file($tempname3, $img_upload_path3);
                  move_uploaded_file($tempname4, $img_upload_path4);
                  move_uploaded_file($tempname5, $img_upload_path5);
                  move_uploaded_file($tempname6, $img_upload_path6);
                  move_uploaded_file($tempname7, $img_upload_path7);
                  
                  $sql = "INSERT INTO out_source_details (o_name,o_rc,o_img_rc,o_insurance,o_permit,o_auth,o_plate,o_img,o_img_f,o_img_b,o_img_s,o_other) VALUES ('$o_name','$o_rc','$new_filename','$new_filename1','$new_filename2','$new_filename3','$o_plate','$new_filename4','$new_filename5','$new_filename6','$new_filename7','$o_other')";
                  mysqli_query($link, $sql);       
               // if ($link->query($sql) === FALSE) {
               // echo "<br>" . $link->error;
               //  } 
              header('location:out-source.php');
       
                  
            }else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Extension Error Or Path Error");'; 
          echo 'window.location.href = "out-source.php";';
          echo '</script>';
              }
          }
}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("uploading error");'; 
    echo 'window.location.href = "out-source.php";';
    echo '</script>';
}
?>