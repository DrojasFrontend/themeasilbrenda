<?php 
/* 
* Template Name: Gallery 
*/

get_header();
?>

<main class="customPageGallery">
    <section class="customSectionHero position-relative">
        <img class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" src="<?php echo THEME_IMG; ?>edit-verde-acuarela.png" alt="Home 1">
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <img class="textGallery mx-auto" src="<?php echo THEME_IMG; ?>text-gallery.svg" alt="Home 1">
                </div>
                <div class="col-12 col-lg-8 mx-auto position-relative">
                    <!-- Swiper principal -->
                    <div class="swiper mySwiper2 mb-4">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 21; $i++) { ?>
                                <div class="swiper-slide">
                                    <div class="bg-yellow-200 p-3">
                                        <img class="w-100 h-400 object-fit-cover" src="<?php echo THEME_IMG; ?>gallery/<?php echo $i; ?>.webp" alt="Gallery Image 1">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Botones de navegación -->
                    <div class="swiper-button-next d-none d-xl-block"></div>
                    <div class="swiper-button-prev d-none d-xl-block"></div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <img class="customSectionHero__img-right-bottom position-absolute end-0" src="<?php echo THEME_IMG; ?>img-right-bottom.png" alt="Home 1">
            <img class="customSectionHero__img-flower-left position-absolute start-0 z-2" src="<?php echo THEME_IMG; ?>flower-left-bottom.png" alt="Home 1">
            <div class="blockHorizontal position-relative z-1 mb-4"></div>
        </div>
        <div class="container pb-xl-0 pb-5">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Swiper de thumbnails -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 21; $i++) { ?>
                                <div class="swiper-slide cursor-pointer">
                                    <div class="bg-yellow-200 p-2">
                                    <img class="w-100 h-400 object-fit-cover" src="<?php echo THEME_IMG; ?>gallery/<?php echo $i; ?>.webp" alt="Gallery Image 1">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>