<?php
require('Fpdf/fpdf.php');

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(30,10,utf8_decode('CVéééééé'),1,0,'C');
    // Saut de ligne
    $this->Ln(10);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

?>
