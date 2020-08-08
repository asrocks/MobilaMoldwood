<?php
include('include/header.php');

print("
<body>
    <div>
        <!-- CONTENT -->
        <section>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-6'>
                        <h3 class='text-uppercase'>Contacteaza-ne</h3>
                        <div class='m-t-30'>
                            <form class='widget-contact-form' novalidate action='include/contact-form.php' role='form' method='post'>
                                <div class='row'>
                                    <div class='form-group col-md-6'>
                                        <label for='name'>Numele dumneavoastra</label>
                                        <input type='text' aria-required='true' name='widget-contact-form-name' required class='form-control required name' placeholder='Introduceti numele dvs.'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='email'>Adresa de email</label>
                                        <input type='email' aria-required='true' name='widget-contact-form-email' required class='form-control required email' placeholder='Introduceti o adresa de email'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-12'>
                                        <label for='subject'>Subiect</label>
                                        <input type='text' name='widget-contact-form-subject' required class='form-control required' placeholder='Scrieti de ce ne contactati...'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='message'>Mesaj</label>
                                    <textarea type='text' name='widget-contact-form-message' required rows='5' class='form-control required' placeholder='Scrieti-ne un mesaj'></textarea>
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
                                    <li><abbr title='Numar de telefon'>P:</h4> 0731318924</li>
                                    <li class='social-facebook'><a href='https://www.facebook.com/moldwood/'><i class='fab fa-facebook-f'>     Pagina noastra de Facebook</i></a></li>
                                    <li class='social-instagram'><a href='https://www.instagram.com/moldwood.ro/?hl=ro'><i class='fab fa-instagram'>     Pagina noastra de Instagram</i></a></li>
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

include('include/footer.php');