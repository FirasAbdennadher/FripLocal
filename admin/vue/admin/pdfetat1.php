<?php
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetFont('Times','',12);
 
$pdf->Cell(50); 
$pdf->Cell(100,10,"Etat des inscrits par pays",1,0,'C'); 
$pdf->Ln(20); 

$pdf->Cell(30,7,'nom',1,0,'C');
$pdf->Cell(30,7,'prenom',1,0,'C');
$pdf->Cell(50,7,'email',1,0,'C');
$pdf->Cell(30,7,'tel',1,0,'C');
$pdf->Cell(30,7,'pays',1,0,'C');

$pdf->Ln();

foreach($results as $personne){
$pdf->Cell(30,7,$personne->nom_pers,1,0,'C');
$pdf->Cell(30,7,$personne->prenom_pers,1,0,'C');
$pdf->Cell(50,7,$personne->email_pers,1,0,'C');
$pdf->Cell(30,7,$personne->tel_pers,1,0,'C');
$pdf->Cell(30,7,$personne->status,1,0,'C');
$pdf->Ln();
}
$pdf->Output(); 

?>