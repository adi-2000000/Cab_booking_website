<?php
  require('fpdf17/fpdf.php');
  $car=$_POST['car'];
  $phone =$_POST['phone'] ; 
  $pickup = $_POST['pickup'] ; 
  $drop= $_POST['drop'] ; 
  $date= $_POST['date'] ; 
  $time= $_POST['time'] ; 
  $trip = $_POST['trip'];
  $name = $_POST['name'];
  $email= $_POST['email'];
  $service=$_POST['service'];
  $parking = $_POST['parking'];
  $gst=$_POST['gst'];
  $dis = $_POST['distance'];
  $amount=$_POST['amount'];
  $dateend= $_POST['dateend']; 
  $timeend= $_POST['timeend']; 
  $new_amount=$_POST['new_amount'];
  $userid = $_POST['userid'];
  $driver = $_POST['driver'];
  $distance = $_POST['distance'];
  $toll = $_POST['toll'];
  $int = (int)$distance;
  $days = $_POST['days'];
  
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
/*output the result*/

		$pdf->image('images/aim.png');
		$pdf->SetFont('Times','B',11);
		$pdf->Cell(0,10,'aimcabbooking.com',0,0,'L');
		$pdf->Cell(0,10,'Date:'.$date,0,0,'R');
		$pdf->Ln(15);
		$pdf->SetFillColor(255, 192, 0);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->SetFont('Times','B',15);
		$pdf-> Cell(0,10,'INVOICE',0,1,'C',1);
		$pdf->SetFont('Times','B',12);
		$pdf->SetTextColor(0,0,0);
		$pdf-> Cell(0,8,'',0,10,'L');
	
$pdf->SetFont('Arial','B',20);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,6,$name,0,0);
$pdf->Cell(59 ,6,'',0,0);
$pdf->Cell(59 ,6,'Need help?',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,6,$email,0,0);
$pdf->Cell(18 ,6,'Mobile:',0,0);
$pdf->Cell(34 ,6,'9130030054',0,1);

$pdf->Cell(130 ,6,$phone,0,0);
$pdf->Cell(18 ,6,'Email Id:',0,0);
$pdf->Cell(34 ,6,'aimcabhelp@gmail.com',0,1);
 
$pdf->Cell(130 ,6,'Booking No.: #'.$userid,0,0);
$pdf->Cell(18 ,6,'GST No.:',0,0);
$pdf->Cell(34 ,6,'27AATCA5944R1ZL',0,1);
$pdf->Cell(20 ,10,'',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Trip Details:',0,0);

$pdf->Cell(20 ,10,'',0,1);

		$x = $pdf->GetX();
		$y = $pdf->GetY();
		$pdf->SetFont('Arial','B',12);
        
        //1
		$pdf->MultiCell(40, 10, 'Pickup Location:', 1, 1);
		$pdf->SetXY($x, $y+10);

		//2
        if ($ser =='rental') {
		$pdf->MultiCell(40, 10, 'Rental Package:', 1);
		$pdf->SetXY($x, $y+10);
		}else{
		$pdf->MultiCell(40, 10, 'Drop Location:', 1);
		$pdf->SetXY($x, $y+10);
	    }
        
        //3
        $pdf->SetXY($x, $y+20);
		$pdf->MultiCell(40, 10, 'Journey Type:', 1);
        //4
		$pdf->SetXY($x, $y+30);
		$pdf->MultiCell(40, 10, 'Distance (Km):', 1);
		//5
		 if($trip=='One Way'){
		$pdf->SetXY($x, $y+40);
		$pdf->MultiCell(40, 10, 'Pickup Date:', 1);
		$pdf->SetXY($x, $y+50);
		$pdf->MultiCell(40, 10, 'Pickup Time:', 1);
		 }
        //6
        if($trip=='Round'){
        $pdf->SetXY($x, $y+40);
		$pdf->MultiCell(40, 10, 'Start Date:', 1);
		$pdf->SetXY($x, $y+50);
		$pdf->MultiCell(40, 10, 'Start Time:', 1);
		$pdf->SetXY($x, $y+60);
		$pdf->MultiCell(40, 10, 'End Date:', 1);
		$pdf->SetXY($x, $y+70);
		$pdf->MultiCell(40, 10, 'End Time:', 1);
	    }

		$pdf->SetFont('Arial','',12);
		$pdf->SetXY($x+40, $y);
		$pdf->MultiCell(130, 10, $pickup, 1);

		//2
		$pdf->SetXY($x+40, $y+10);
		$pdf->MultiCell(130, 10, $drop, 1,1);
	     
        if($trip=='One Way'){
	    $pdf->SetXY($x+40, $y+20);
		$pdf->MultiCell(130, 10, $trip, 1);
        }
        if($trip=='Round'){
        $pdf->SetXY($x+40, $y+20);
		$pdf->MultiCell(130, 10, $days, 1);
		$pdf->SetXY($x+44, $y+20);
		$pdf->MultiCell(20, 10, 'Days', 0);
		$pdf->SetXY($x+55, $y+20);
		$pdf->MultiCell(20, 10, $trip, 0);
		$pdf->SetXY($x+70, $y+20);
		$pdf->MultiCell(20, 10,'Trip', 0);
        	}
        
        if($trip=='One Way'){
		$pdf->SetXY($x+40, $y+30);
		$pdf->MultiCell(130, 10, $int, 1);
        }
		if($trip=='Round'){
		$pdf->SetXY($x+40, $y+30);
		$pdf->MultiCell(130, 10, $dis, 1);
		}
	
		//5
		 if($trip=='One Way'){
		$pdf->SetXY($x+40, $y+40);
		$pdf->MultiCell(130, 10, $date, 1);
		//6
		$pdf->SetXY($x+40, $y+50);
		$pdf->MultiCell(130, 10, $time, 1);
		 }
		 
		 if($trip=='Round'){
		$pdf->SetXY($x+40, $y+40);
		$pdf->MultiCell(130, 10, $date, 1);
		
		$pdf->SetXY($x+40, $y+50);
		$pdf->MultiCell(130, 10, $time, 1);
		$pdf->SetXY($x+40, $y+60);
		$pdf->MultiCell(130, 10, $dateend, 1);
		
		$pdf->SetXY($x+40, $y+70);
		$pdf->MultiCell(130, 10, $timeend, 1);
		 }

$pdf->Cell(30 ,10,'',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Booking Details:',0,0);

$pdf->Cell(20 ,10,'',0,1);
/*Heading Of the table*/
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60 ,7,'Vehicle Type',1,0,'C');


$pdf->SetFont('Arial','',12);
$pdf->Cell(110 ,7,$car,1,1,'C');
$pdf->Cell(10 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Billing Details:',0,0);

$pdf->Cell(10 ,10,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'Base Fare',1,0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$amount,1,1,'C');

if($trip=='Round'){
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'Driver Allowance ',1,0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$driver,1,1,'C');
}

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'Toll',1,0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$toll,1,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'Parking',1,0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$parking,1,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'Service Charge (10%)',1,0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$service,1,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'GST Tax (5%)',1,0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$gst,1,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,7,'',0,0,'C');
$pdf->Cell(70 ,7,'Subtotal',1,0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(70 ,7,'Rs.'.$new_amount,1,1,'C');


		$pdf->SetFont('Times','B',11);
		$pdf-> Cell(0,10,'TERMS & CONDITIONS :',0,10,'L');
		$pdf->SetFont('Times','',11);
		$pdf->MultiCell( 180, 4, '1. We recommend that you install the Aarogya Setu app before your trip.', 0);
		$pdf->Ln(4);
		$pdf->MultiCell( 180, 4, '2. As per expert guidelines, we do not recommend running the AC continuously during the trip. If you were to use the AC, please ensure that it is run in the recirculated mode and the windows are lowered at frequent intervals.', 0);
$filename=$userid.".pdf";
$file = "invoice/".$filename;
//header('Content-type: application/pdf');
//header('Content-Disposition: attachment; filename="' . basename($file) . '"');
//header('Content-Transfer-Encoding: binary');
//readfile($file);
$pdf->Output();
$pdf->Output($file,'F');

?>
   