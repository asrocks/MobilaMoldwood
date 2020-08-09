<?php
include('include/header.php');

print("
<body>
    <div>
        <!-- CONTENT -->
        <section>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-10'>
                        <h3 class='text-uppercase'>Contacteaza-ne</h3>
                        <div class='m-t-30'>
                            <form class='widget-contact-form' novalidate action='include/contact-form.php' method='post'><!-- role='form' --> 
                                <div class='row'>
                                   <div class='form-group col-md-6'>
                                        <label for='name'>Numele dumneavoastra</label>
                                        <input type='text' aria-required='true' name='name' required class='form-control required name' placeholder='Introduceti numele dvs.'>
                                    </div>
                                    
                                    <div class='form-group col-md-6'>
                                        <label for='phone'>Numar de telefon</label>
                                        <input type='text' aria-required='true' name='phone' required class='form-control required phone' placeholder='Introduceti un numar de telefon'>
                                    </div>
                                
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-6'>
                                        <label for='email'>Adresa de email</label>
                                        <input type='email' aria-required='true' name='email' required class='form-control required email' placeholder='Introduceti o adresa de email'>
                                    </div>
                                    
                                    <div class='form-group col-md-6'>
                                        <label for='adresa'>Adresa dvs.</label>
                                        <input type='text' aria-required='true' name='adresa' required class='form-control required email' placeholder='Introduceti o adresa de domiciliu'>
                                    </div>
                                
                                </div>
                               
                                
                                <div class='row'>
                                    <div class='form-group col-md-12'>
                                        <label for='subject'>Subiect</label>
                                        <input type='text' name='subject' required class='form-control required' placeholder='Scrieti de ce ne contactati...'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='message'>Mesaj</label>
                                    <textarea type='text' name='message' required rows='5' class='form-control required' placeholder='Scrieti-ne un mesaj'></textarea>
                                </div>
                                <!--    <div class='form-group'>
                                    <script src='https://www.google.com/recaptcha/api.js'></script>
                                    <div class='g-recaptcha' data-sitekey='6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M'></div>
                                </div> -->
                                <button class='btn' type='submit' id='form-submit'><i class='fa fa-paper-plane'></i>&nbsp;Trimite-ne mesajul!</button>
                            </form>
                            </div>
                        </div>
                    <div class='col-lg-6'>
                        <h3 class='text-uppercase'>Informatiile magazinului</h3>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <ul>
                                    <li>
                                        <address>
                                            <strong>Showroom Moldwood</strong><br>
                                            <a href='https://www.google.com/maps/place/MoldWood/@44.4162291,26.0409246,15z/data=!4m5!3m4!1s0x0:0xeb2a8164eecfe25e!8m2!3d44.4162291!4d26.0409246'>Bulevardul Ghencea 126-132, București 061699</a><br>
                                        </address>
                                    </li>
                                    <li>
                                        <address>
                                            <strong>Numar de telefon</strong>
                                            <abbr title=''>P:</h4> 0731318924
                                        </address>
                                    </li>
                                    <li>
                                        <address>
                                            <strong class='social-facebook'><i class='fab fa-facebook-f'></i></strong>
                                            <a href='https://www.facebook.com/moldwood/'>Pagina noastra de Facebook</a>
                                        </address>
                                    </li>
                                    <li>
                                        <address>
                                            <strong class='social-instagram'><i class='fab fa-instagram'></i></strong>
                                            <a href='https://www.instagram.com/moldwood.ro/?hl=ro'>Pagina noastra de Instagram</a>
                                        </address>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end: Content -->
    </div>
</body>
");

//bloc de cod pentru
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['phone'])){
    print("
    <body>
        <div class='col-lg-6'>
            <h3 class='text-uppercase'>Va multumim pentru interes! Un angajat de-al nostru va va contacta in cel mai scurt timp posibil</h3>
        </div>
     </body>
    ");

    $clientName = $_POST['name'];
    $clientPhone = $_POST['phone'];
    $clientEmail= $_POST['email'];
    $clientAddress= $_POST['adresa'];
    $clientSubj = $_POST['subject'];
    $clientMess = $_POST['message'];


    require "mail_pdf_test/WebitechPDFMaker.php";
    require "mail_pdf_test/WebitechMailer.php";


    $witMailer = new WebitechMailer();
    $witMailer ->setDestAdress('radu.lainiceanu@gmail.com');

    $witPDFMaker = new WebitechPDFMaker();
    $witPDFMaker->makePDF($clientName, $clientAddress, $clientPhone, $clientEmail, $clientSubj, $clientMess, 'contact form');

    $witMailer->sendMail($clientName, $clientSubj, $witPDFMaker->getFilename() );
}

include('include/footer.php');
