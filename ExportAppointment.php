
<?php
require('fpdf.php');

session_start();
	
  

class PDF extends FPDF
{
    function Header()
{
    // Logo
    require_once("includes/conn.php");

 $quer = mysqli_query($conn,"select * from header");
$header = mysqli_fetch_array($quer);
    $this->Image( $header['logo'] ,10,8,25);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(32);
    // Title
    $this->Cell(100,15,$header['title'],1,0,'C');

    $this->SetFont('Arial','B',10);
     $this->Cell(10);

    $this->Cell(11,5,'Mobile No: ',0,0,'C');
    $this->Cell(28,5,$header['phone'],0,1,'C');
    $this->Cell(135);
    $this->Cell(20,5,'Ptcl No: ',0,0,'C');
    $this->Cell(25,5,$header['ptcl'],0,1,'C');
     $this->Cell(141);
    $this->Cell(6,5,'Email: ',0,0,'C');

    $this->Cell(34,5,$header['email'],0,1,'C');
    // Line break
    $this->Ln(10);

    $this->Cell(195,1,'',1,1,'C');
     $this->Ln(10);
      $this->SetFont('Arial','',10);
    // Move to the right
    $this->Cell(2);
    // Title
    $query = mysqli_query($conn,"select * from appointments where id = '".$_GET['App_id']."'");
$appointments = mysqli_fetch_array($query);

      $this->Cell(20,15,'Name:',0,0,'C');
    $this->Cell(10,15,$appointments['name'],0,0,'C');

 $this->Cell(80);
      $this->Cell(30,15,'Email:',0,0,'C');
    $this->Cell(10,15,$appointments['email'],0,1,'C');
    $this->Cell(2);
    // Title

      $this->Cell(20,15,'Age:',0,0,'C');
    $this->Cell(10,15,$appointments['age'],0,0,'C');

    $this->Cell(80);
      $this->Cell(30,15,'Blood Group:',0,0,'C');
    $this->Cell(10,15,$appointments['bld_grp'],0,1,'C');
    $this->Cell(2);
    // Title

      $this->Cell(20,15,'Gender:',0,0,'C');
    $this->Cell(10,15,$appointments['sex'],0,0,'C');
     $this->Cell(80);
      $this->Cell(30,15,'Ref by Doc:',0,0,'C');
    $this->Cell(10,15,$appointments['ref_by_doc'],0,1,'C');
    $this->Cell(2);
    // Title

      $this->Cell(20,15,'Phone No:',0,0,'C');
    $this->Cell(10,15,$appointments['Phone_no'],0,0,'C');
     $this->Cell(80);
      $this->Cell(30,15,'Payment Status:',0,0,'C');
    $this->Cell(10,15,$appointments['pay_stat'],0,1,'C');




}


// Load data

   
function Footer()
{

 $conn =  mysqli_connect("localhost","root","","medical_center");
   $que = mysqli_query($conn,"select * from footer");
$footer = mysqli_fetch_array($que);
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->Cell(5);
    $this->Cell(180,15,$footer['address'],1,0,'C');


    // Page number
    
}


}

$pdf = new PDF();
// Column headings
// Data loading
$pdf->SetFont('Arial','',14);
$pdf->Output();
?>
