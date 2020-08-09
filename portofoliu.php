<?php
include('include/header.php');

print('
<body>

<!-- Portfolio -->
<section id="page-content">
            <div class="container">
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
                    <!-- portfolio item -->
                    <div class="portfolio-item ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="images/portfolio/1.jpg" alt=""></a>
                                    <a href="#"><img src="images/portfolio/2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/3.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/4.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/5.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/6.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    </div>
                </div>
</section>
</body>
');

include('include/footer.php');