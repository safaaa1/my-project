<?php

/*if(!empty($_POST['submit']))
{
	$id=$_POST['id'];
	$nom_prod=$_POST['nom_prod'];
	$qte_prod=$_POST['qte_prod'];
	$prix_total=$_POST['prix_total'];
*/

require("../fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);

$pdf->Cell(50,10,"FACTURE",0,1);


$pdf->Cell(50,10,"quantite :",0,0);
$pdf->Cell(50,10,$_GET['qte_prod'],0,1);
$pdf->Cell(50,10,"prix :",0,0);
$pdf->Cell(50,10,$_GET['prix_total'],0,1);
$pdf->Cell(50,10,"date :",0,0);
$pdf->Cell(50,10,$_GET['date'],0,1);

$pdf->output();



?>
