<?php

require_once "TCPDF-main/tcpdf_import.php";

class WebitechPDFMaker extends TCPDF {
    private $objFilename  = '';
    function getFilename(){
        return $this->objFilename;
    }

    public function Header(){
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        $this->Image(__DIR__.'/pdfBackground.png', 0, 0, $this->w, $this->h, '', '', '', true, 300, '', false, false, 0, false, false, true);
        // Title
        $this->Cell(0, 13, 'Moldwood', 0, false, 'R', 0, '', 0, false, 'M', 'M');
    }
    public function Footer(){
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Pagina '.$this->getAliasNumPage().' din '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
    public function makePDF($clientName, $clientAddress, $clientPhone, $clientEmail, $subject, $message, $source){
        $pdf = new WebitechPDFMaker(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Webitech Team');

        //stabilire nume fisier
        $pdfNo = file_get_contents(__DIR__.'/orderno.txt', '');
        $filename = $source.'-nr'.$pdfNo++.'-'.$clientName;
        file_put_contents(__DIR__.'/orderno.txt', $pdfNo);

        //setare nume fisier. Se da ca argument mailer-ului
        $this->objFilename = $filename;

        $pdf->SetTitle($filename);
        $pdf->SetSubject($subject);
        $pdf->SetKeywords($subject);

        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            //$pdf->setLanguageArray($l);
        }

        $pdf->SetFont('times', 'BI', 12);

        $pdf->AddPage();

        $txt = <<<EOD

            $filename
            
            Domnul/doamna $clientName, 
                    
            eMail                   $clientEmail
            Adresa                  $clientAddress
            Numar de telefon        $clientPhone
                                 
            $subject
            
            $message
EOD;
        //$pdf->WriteHTML(0, $txt, '', 0, 'L', true);
        $pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
        ob_clean();

        $pdf->Output(__DIR__.'/'.$filename.'.pdf', 'F');
        ob_flush();
    }
}