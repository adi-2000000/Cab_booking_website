<?php
session_start();

require_once "dompdf/autoload.inc.php";

  $car = $_SESSION['car'];
  $phone =$_SESSION['phone'] ; 
  $pickup = $_SESSION['pickup'] ; 
  $drop= $_SESSION['drop'] ; 
  $date= $_SESSION['date'] ; 
  $date1 = new DateTime($date);
  $_REQUEST['date'] = $date1->format('d-m-Y');
  $time= $_SESSION['time'] ; 
  $trip = $_SESSION['trip'];
  $name = $_SESSION['name'];
  $email= $_SESSION['email'];
  $service=$_SESSION['service'];
  $parking = $_SESSION['parking'];
  $dis = $_SESSION['distance'];
  $amount=$_SESSION['amount'];
  $dateend= $_SESSION['dateend']; 
  $dateend1 = new DateTime($dateend);
  $_REQUEST['dateend'] = $dateend1->format('d-m-Y');
  $timeend= $_SESSION['timeend']; 
  $new_amount=$_SESSION['new_amount'];
  $bookid = $_SESSION['bookid'];
  $driver = $_SESSION['driver'];
  $distance = $_SESSION['distance'];
  $toll = $_SESSION['toll'];
  $int = (int)$distance;
  $days = $_SESSION['days'];
  
  $totalpaidAmt = $_SESSION['totalpaid_amt'];
  $remainAmt = $_SESSION['remain_amt'];

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$pdf = new Dompdf();
$img = 'data:image;base64,' . base64_encode(@file_get_contents('images/lobo.png'));
$pdf->set_base_path("css/");


$html = '<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    '.file_get_contents("css/bootstrap.min.css").'
 table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 1px solid #000;
        text-align: left;
        padding: 5px;
        background-color: gold;
        color: black;
    }

    th {
        border: 1px solid #000;
        text-align: center;
        padding: 5px;
        background-color: gold;
        color: white;
    }


    
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <img src="' . $img . '" height="70px" width="120px" alt="logo">
            </div>
            <div class="col-xs-4">
            <p>&emsp;</p>
                <p>&emsp;</p>
                <h1 style="text-align:left;">Invoice</h1>
            </div>
            <div class="col-xs-4">
                <p>&emsp;</p>
                <p>&emsp;</p>
                <p>&emsp;</p>
                <p>&emsp;</p>
                <p style="text-align:center;"><strong>Date: '.$_REQUEST['date'].'</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr style="height: 10px; background-color:gold; margin-top: 0px;">
            </div>
        </div>
        <div class="row" style="padding-top:20px;">
            <div class="col-xs-4">
                <p><strong>'.$name.'</strong><br>
                    '.$email.'<br>
                    '.$phone.'<br>
                    Booking No: #'.$bookid.'</p>
            </div>
            <div class="col-xs-3"></div>
            <div class="col-xs-5">
                <p><strong>AimCab Pvt. Ltd.</strong><br>
                    Mobile: 9130030054<br>
                    Email : aimcab@aimcabbooking.com<br>
                    Website: aimcabbooking.com<br>
                    GST No.:27AATCA5944R1ZL</p>
            </div>
        </div>
        <div class="row" style="padding-top:20px;">
         <div class="col-xs-1"></div>
            <div class="col-md-10">
                <h5 style="background-color: #000; color:white; padding:8px;"><strong>TRIP DETAILS</strong></h5>
                <table class="table">
                    <tr>
                        <td style="width:30%; padding-left:20px";><strong>Pickup Location:</strong></td>
                        <td style="width:70%;">'.$pickup.'</td>
                    </tr>
                    
                    <tr>
                        <td style="padding-left:20px;"><strong>Drop Location:</strong></td>
                        <td>'.$drop.'</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Journey Type:</strong></td>';
                        if($trip=='One Way NoGST'){
                            $html .= '<td>One Way</td>';
                        }
                        if($trip=='Round NoGST'){
                            $html .= '<td>'.$days.' Days Round Trip</td>';
                        }
                        $html .= '</tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Distance (Km):</strong></td>';
                        if($trip=='One Way NoGST'){
                            $html .= ' <td>'.$int.'</td>';
                        }
                        if($trip=='Round NoGST'){
                            $html .= ' <td>'.$dis.'</td>';
                        }
                       
                        $html .= '</tr>';
                        if($trip=='One Way NoGST'){
                            $html .= '<tr>
                        <td  style=" padding-left:20px;"><strong>Pickup Date:</strong></td>
                        <td>'.$_REQUEST['date'].'</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Pickup Time:</strong></td>
                        <td>'.$time.'</td>
                    </tr>';
                }

                        if($trip=='Round NoGST'){
                            $html .= '<tr>
                        <td  style=" padding-left:20px;"><strong>Start Date &amp;&emsp;&emsp;&emsp; Time:</strong></td>
                        <td>'.$_REQUEST['date'].'&emsp;&emsp;&emsp; '.$time.'</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>End Date &amp;&emsp;&emsp;&emsp; Time:</strong></td>
                        <td>'.$_REQUEST['dateend'].'&emsp;&emsp;&emsp; '.$timeend.'</td>
                    </tr>';
                }
                $html .= '</table>
            </div>
           <div class="col-xs-1"></div>
        </div>

        <div class="row" style="padding-top:1px;">
         <div class="col-xs-4"></div>
            <div class="col-xs-7">
                <table class="table2">
                    <tr>
                        <th colspan="2" style="text-align:center; background-color: black;"><strong>BOOKING DETAILS</strong></th>
                    </tr>
                    <tr>
                        <td style="width:50%; background-color: white;"><strong>Vehicle Type:</strong></td>
                        <td style="width:50%; background-color: white;">'.$car.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Base Fare:</strong></td>
                        <td style="background-color: white;">Rs.'.$amount.'</td>
                    </tr>';
                   if($trip=='Round NoGST'){
                     $html .= ' <tr>
                        <td style="background-color: white;"><strong>Driver Allowance:</strong></td>
                        <td style="background-color: white;">Rs.'.$driver.'</td>
                    </tr>';
                   }
                   if($toll!= 0){
                       $html .= '<tr>
                        <td style="background-color: white;"><strong>Toll:</strong></td>
                        <td style="background-color: white;">Rs.'.$toll.'</td>
                    </tr>';
                   }
                      if($parking!= 0){
                            $html .= '<tr>
                        <td style="background-color: white;"><strong>Parking:</strong></td>
                        <td style="background-color: white;">Rs.'.$parking.'</td>
                    </tr>';
                    }
                      $html .= '<tr>
                        <td style="background-color: white;"><strong>Service Charge (10%):</strong></td>
                        <td style="background-color: white;">Rs.'.$service.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Subtotal:</strong></td>
                        <td style="background-color: white;">Rs.'.$new_amount.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Paid Amount:</strong></td>
                        <td style="background-color: white;">Rs.'.$totalpaidAmt.'</td>
                    </tr>';
                     if($new_amount!=$totalpaidAmt){
                     $html .= ' <tr>
                        <td style="background-color: white;"><strong>Remaining Amount:</strong></td>
                        <td style="background-color: white;">Rs.'.$remainAmt.'</td>
                    </tr>';
                     }
                    $html .= ' 
                </table>
            </div>
              <div class="col-xs-1"></div>
        </div>

        <div class="row" style="padding-top:50px;">
            <div class="col-xs-12">';
             if($toll== 0 && $parking== 0){
                $html .= '<p><strong>Note: </strong>This is the computer generated invoice. Toll, Parking and Extra KM as per the receipt.</p>';
             }
            $html .= '</div>
        </div>

    </div>
</body>

</html>';

$pdf->loadhtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$pdf->render();

$canvas = $pdf->get_canvas();
$canvas->page_text(530, 820, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0, 0, 0));

// Output the generated PDF to Browser
$pdf->stream(''.$bookid.'.pdf', array('Attachment' => 0));
