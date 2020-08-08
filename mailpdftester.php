<form action="mailpdftester.php" method='post'>
    <table>
        <tr>
            <td>
                Prenume:<input name='fname' type='text'>;<br>
                Nume:<input name='lname' type='text'>;<br>
                Produsul:<input name='product' type='text'>;<br>
                Client Mail address:<input name='clientMail' type='text'>;<br>
                Client Phone No:<input name='clientPhone' type='text'>;<br>
                Client Address:<input name='clientAddress' type='text'>;<br>
                TESTER EMAIL:<input name='dest' type='text'>;<br>
                <input type='submit' value='Submit'><br>
            </td>
        </tr>
    </table>
    <a href="pdfBackground.png">imgtest</a>

</form>

<?php
require "WebitechPDFMaker.php";
require "WebitechMailer.php";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dest'])){
    $product = $_POST['product'];
    $pdfNo = file_get_contents(__DIR__.'/orderno.txt', '');
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $destEmail = $_POST['dest'];
    $clientPhone = $_POST['clientPhone'];
    $clientEmail = $_POST['clientMail'];
    $clientAddress = $_POST['clientAddress'];
    $pdfFileName = 'cerere-oferta-nr'.$pdfNo++.'-'.$firstName.'-'.$lastName;
    file_put_contents(__DIR__.'/orderno.txt', $pdfNo);

    print("Name is ".$firstName." and email is ".$destEmail."!");

    $witMailer = new WebitechMailer();
    $witMailer ->setDestAdress($destEmail);

    $witPDFMaker = new WebitechPDFMaker($pdfFileName);
    $witPDFMaker->makePDF($firstName, $lastName, $clientAddress, $clientPhone, $clientEmail, $pdfFileName, $product);

    $witMailer->sendMail($firstName, $lastName, $pdfFileName);
}
?>