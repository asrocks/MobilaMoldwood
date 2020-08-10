<?php
include('include/header.php');

print('
<body>
<!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- Portfolio Filter -->
                <nav class="grid-filter gf-outline" data-layout="#portfolio">
                    <ul>
                        <li class="active"><a href="#" data-category="*">Show All</a></li>
                        <li><a href="#" data-category=".ct-branding">Branding</a></li>
                        <li><a href="#" data-category=".ct-photography">Photography</a></li>
                        <li><a href="#" data-category=".ct-marketing">Marketing</a></li>
                        <li><a href="#" data-category=".ct-media">Media</a></li>
                        <li><a href="#" data-category=".ct-webdesign">Web design</a></li>
                    </ul>
                    <div class="grid-active-title">Show All</div>
                </nav>
                <!-- end: Portfolio Filter -->
                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
                    <!-- portfolio item -->
                    <div class="portfolio-item ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="images/portfolio/64.jpg" alt=""></a>
                                    <a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/61.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/65.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/66.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/67.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="images/portfolio/68.jpg" alt=""></a>
                                    <a href="#"><img src="images/portfolio/71.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/69.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/71.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/72.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/73.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/83l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>
                <!-- end: Portfolio -->
            </div>
        </section> <!-- end: Content -->
</body>
');

include('include/footer.php');