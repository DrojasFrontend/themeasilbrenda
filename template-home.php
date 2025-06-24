<?php 
/* 
* Template Name: Home
*/

// Manejar las peticiones AJAX del RSVP
handle_rsvp_ajax();

get_header();
$placesCartagena = [
    [
        "img" => "cartagena-1.png",
        "name" => "Teatro Heredia",
        "copy" => "Magnificent eclectic-style building erected in 1902, designed by Luis Felipe Jaspe, the same architect who created the Cartagena Clock Tower.",
    ],
    [
        "img" => "cartagena-2.png",
        "name" => "Murallas de Cartagena",
        "copy" => "Forification that took more than a hundred years to complete, carried out in stages from 1586 to 1699, encompassing the perimeter of the center of the old city, San Diego and Getsemaní.",
    ],
    [
        "img" => "cartagena-3.png",
        "name" => "Torre del Reloj",
        "copy" => "Famous gateway to the walled city, characterized by its baroque stone doorway that precedes an imposing structure.",
    ],
    [
        "img" => "cartagena-4.png",
        "name" => "isla de barú",
        "copy" => "Coastal area located 45 minutes by boat, known for its paradisiacal almost virgin white sand beaches, transparent waters and coral reefs.",
    ],
    [
        "img" => "cartagena-8.png",
        "name" => "castillo san felipe",
        "copy" => "One of the most famous sites, corresponding to a castle built in the seventeenth century, considered the most outstanding work of Spanish military engineering in America.",
    ],
    [
        "img" => "cartagena-10.png",
        "name" => "cerro de la popa",
        "copy" => "Highest point in Cartagena, a strategic position that allows privileged views of both the old city and the Caribbean Sea, the island of Tierrabomba and La Boquilla.",
    ],
  ];
?>

<main class="customPageHome">

    <section class="customSectionHero">
        <div class="container-fluid gx-0 h-100">
        <div class="row gx-0 h-100">
            <div class="col-12 position-relative">
                <img class="w-100 d-none d-xl-block position-relative z-1" src="<?php echo THEME_IMG; ?>hero.webp" alt="Home 1">
                <img class="img-fluid mx-auto d-block d-xl-none position-relative z-1 pt-5 mt-3" src="<?php echo THEME_IMG; ?>hero-mobile.webp" alt="Home 1">
                <img class="position-absolute top-0 start-0 d-block d-xl-none object-fit-cover w-100 h-100" src="<?php echo THEME_IMG; ?>fondo-hero-mobile.webp" alt="Home 1">
                <img class="customSectionHero__img-flower-left-top position-absolute top-0 start-0" src="<?php echo THEME_IMG; ?>flower-left.png" alt="Home 1">
                <img class="customSectionHero__img-flower-left w-auto position-absolute start-0 d-none d-xl-block fs-6-small" src="<?php echo THEME_IMG; ?>flower-left-bottom.png" alt="Home 1">
                <div class="blockVertical"></div>
                <div class="blockHorizontal position-absolute bottom-0 start-0"></div>
                <img class="customSectionHero__img-right-bottom position-absolute end-0" src="<?php echo THEME_IMG; ?>img-right-bottom.png" alt="Home 1">
                <img class="customSectionHero__img-flower-right position-absolute end-0" src="<?php echo THEME_IMG; ?>flower-right-bottom.png" alt="Home 1">

                <!-- Texto -->
                <div class="customSectionHero__img-text position-absolute bottom-0 start-0 d-flex flex-column align-items-center justify-content-end w-100 h-100 z-1">
                    <img class="w-auto d-none d-xl-block" src="<?php echo THEME_IMG; ?>test-asil-brenda.svg" alt="Home 1">
                    <img class="w-auto d-block d-xl-none" src="<?php echo THEME_IMG; ?>test-asil-brenda-mobile.svg" alt="Home 1">
                    <p class="fs-xl-2 fs-3 text-primary mt-xl-4 mt-3 letter-spacing-xl-15 letter-spacing-1">December 13th, 2025</p>
                    <p class="fs-xl-3-medium fs-6 text-primary mt-2 letter-spacing-xl-12 letter-spacing-06">Cartagena de Indias, Colombia</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="customSectionWedding position-relative" id="wedding">
        <img class="w-100 position-absolute top-0 start-0" src="<?php echo THEME_IMG; ?>edit-verde-acuarela.png" alt="Home 1">
        <div class="container-fluid container-xl gx-0">
        <div class="row gx-0">
            <div class="col-12 col-xl-6">
            <div class="py-xl-5 mt-5 pt-5">
                <div class="position-relative text-center">
                    <img class="w-auto d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-wedding.svg" alt="Home 1">
                    <img class="w-auto d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-wedding-mobile.svg" alt="Home 1">
                    <p class="fs-xl-3-medium fs-5 text-black mt-4 letter-spacing-xl-20 letter-spacing-11">CEREMONY</p>
                    <p class="fs-xl-2 fs-4 text-black mt-3 letter-spacing-xl-3 letter-spacing-15">December 13th, 2025</p>
                    <p class="fs-xl-2 fs-4 text-black mt-3 letter-spacing-xl-3 letter-spacing-15">Baluarte San Francisco Javier</p>
                    <p class="fs-xl-2 fs-4 text-black mt-3 letter-spacing-xl-12 letter-spacing-64">5:00 P.M.</p>
                    <p class="fs-xl-3-medium fs-5 text-black mt-4 letter-spacing-xl-20 mt-5 letter-spacing-11">RECEPTION</p>
                    <p class="fs-xl-2 fs-4 text-black mt-3 letter-spacing-xl-3 letter-spacing-15">Sofitel Legend Santa Clara</p>
                    <p class="fs-xl-2 fs-4 text-black mt-3 letter-spacing-xl-3 letter-spacing-15"> Ballroom</p>
                    <div class="d-block d-xl-flex justify-content-center gap-4 mt-5">
                        <div class="px-1">
                            <p class="fs-xl-5 fs-5 text-black letter-spacing-xl-36 letter-spacing-3 mb-3">DRESS CODE</p>
                            <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#blackTie">
                                BLACK TIE
                            </button>
                        </div>
                        <div class="px-1 mt-4 mt-xl-0">
                            <p class="fs-xl-5 fs-5 text-black letter-spacing-xl-36 letter-spacing-3 mb-3">REGISTRY</p>
                            <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#honeymoon">
                                HONEYMOON
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="customSectionWedding__img position-relative float-xl-start">
                    <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>castle-2.png" alt="Home 1">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="blockHorizontal"></div>
        <img class="w-100 position-absolute top-0 start-0" src="<?php echo THEME_IMG; ?>edit-verde-acuarela-2.png" alt="Home 1">
        <div class="pt-5 mt-xl-3">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 text-center mb-xl-5 mb-4">
                        <img class="img-fluid d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-events.svg" alt="Home 1">
                        <img class="img-fluid d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-events-mobile.svg" alt="Home 1">
                    </div>
                    <div class="col-12 col-lg-6 mb-xl-0 mb-4">
                        <div class="py-5 px-3 text-center bckgCard">
                            <div class="pt-xl-5">
                                <p class="fs-xl-2 fs-3 text-primary letter-spacing-xl-75 letter-spacing-45">WELCOME <br> PARTY</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-5 pt-xl-5 letter-spacing-1">December 12th, 2025</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-3 letter-spacing-1">6:00 P.M.</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-4 letter-spacing-1">Sofitel Legend Santa Clara</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-3 letter-spacing-1">SPA TERRACE</p>
                                <div class="text-center mt-4 mb-xl-5 pb-xl-5 pb-3">
                                    <p class="fs-xl-5 fs-5 text-black letter-spacing-xl-36 letter-spacing-3 mb-3">DRESS CODE</p>
                                    <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#cocktailCasual">
                                        COCKTAIL CASUAL
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="py-5 px-3 text-center bckgCard">
                            <div class="pt-xl-5">
                                <p class="fs-xl-2 fs-3 text-primary letter-spacing-xl-75 letter-spacing-45">FAREWELL <br> BRUNCH</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-5 pt-xl-5 letter-spacing-1">December 14th, 2025</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-3 letter-spacing-1">10:00 A.M. - 2:00 P.M.</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-4 letter-spacing-1">Sofitel Legend Santa Clara</p>
                                <p class="fs-xl-2 text-black letter-spacing-xl-15 mt-3 letter-spacing-1">RESTAURANT 1621</p>
                                <div class="text-center mt-4 mb-xl-5 mb-3 pb-xl-5">
                                    <p class="fs-xl-5 fs-5 text-black letter-spacing-xl-36 letter-spacing-3 mb-3">DRESS CODE</p>
                                    <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#casualAttire">
                                        CASUAL ATTIRE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionCountdown position-relative -mt-n7">
        <div class="position-relative">
            <img class="w-100 d-none d-xl-block" src="<?php echo THEME_IMG; ?>building.webp" alt="Home 1">
            <img class="w-100 h-100 object-fit-cover d-block d-xl-none" src="<?php echo THEME_IMG; ?>building-mobile.webp" alt="Home 1">
            <img class="flowerLeftBottom d-block position-absolute start-0 z-3" src="<?php echo THEME_IMG; ?>flower-left-center.png" alt="Home 1">
        </div>
        <div class="container-fluid position-relative">
            <img class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" src="<?php echo THEME_IMG; ?>bckg-countdown.png" alt="Home 1">
            <div class="row position-relative z-2">
                <div class="col-12 col-lg-11 mx-auto gx-0">
                    <div class="bg-yellow-200 p-xl-5 py-5 px-3 mb-5 -mt-n7 text-center">
                        <img class="w-auto mb-5 d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-celebrate.svg" alt="Home 1">
                        <img class="w-auto mb-xl-5 mb-4 d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-celebrate-mobile.svg" alt="Home 1">
                        <div id="mi-countdown" data-countdown="2025-12-13 14:00:00"></div>
                    </div>
                </div>
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="col-12 col-lg-4 <?php echo ($i == 0) ? "d-block mx-auto" : "d-none d-xl-block"; ?>">
                        <div class="bg-yellow-200 p-3">
                            <img class="w-100" src="<?php echo THEME_IMG; ?>gallery-<?php echo $i + 1; ?>.png" alt="Home 1">
                        </div>
                    </div>
                <?php } ?>
                <div class="col-12 my-xl-5 my-3">
                    <a href="/gallery" class="btn btn-secondary mx-auto">
                        VIEW GALLERY
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionPlaces position-relative">
        <img class="w-100 object-fit-cover position-absolute top-0 start-0 d-none d-xl-block" src="<?php echo THEME_IMG; ?>bckg-places.webp" alt="Home 1">
        <img class="w-100 object-fit-cover position-absolute top-0 start-0 d-block d-xl-none" src="<?php echo THEME_IMG; ?>bckg-places.webp" alt="Home 1">
        <img class="flowerRightTop position-absolute end-0" src="<?php echo THEME_IMG; ?>flower-right-top.webp" alt="Home 1">
        <img class="flowerLeftBottom position-absolute d-none d-xl-block" src="<?php echo THEME_IMG; ?>flower-left-bottom-2.png" alt="Home 1">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto p-xl-5 pt-5 px-3 pb-0">
                    <div class="customSectionPlaces__radius bg-yellow-300 p-xl-5 pt-5 px-0 text-center">
                        <div class="p-xl-5 p-4 pb-0" id="cartagena">
                            <img class="textCartagena my-5 d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-cartagena.svg" alt="Home 1">
                            <img class="textCartagena my-xl-5 mt-0 mb-4 d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-cartagena-mobile.svg" alt="Home 1">
                            <p class="fs-xl-4 fs-6 text-black mb-4 px-xl-3 px-lg-5 letter-spacing-xl-1 letter-spacing-06 line-xl-height-30 line-height-20">
                            We are very excited to have our wedding in Cartagena. A city full of magic, charm, history and tradition, which is characterized by its great wall, cobblestone streets and beautiful colonial houses. Cartagena is a UNESCO World Heritage Site and is considered one of the greatest cultural treasures of Latin America.
                            </p>
                            <p class="fs-xl-4 fs-6 text-black px-xl-3 px-lg-5 letter-spacing-xl-1 letter-spacing-06 line-xl-height-30 line-height-20">
                            We would like to make some recommendations, so that you can enjoy your stay in this wonderful place to the fullest. The best way to experience Cartagena is to walk and explore its labyrinths of narrow streets and lush squares. Ideally, you should stay in the historic district, so that you can be within walking distance of places of interest and experience live music, excellent gastronomy and popular art.
                            </p>
                        </div>

                        <div class="my-5 pb-5">
                            <p class="fs-xl-2-medium fs-4 text-primary letter-spacing-xl-9 letter-spacing-36 mb-4">PLACES TO INTEREST</p>
                            <ul class="px-4">
                                <li class="d-flex justify-content-between align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable">
                                    <a class="fs-xl-3 fs-5 text-primary letter-spacing-xl-3 letter-spacing-15" href="/places/#hotels">HOTELS</a>
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icon-hotel.svg" alt="Home 1"></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable">
                                    <a class="fs-xl-3 fs-5 text-primary letter-spacing-xl-3 letter-spacing-15" href="/places/#restaurants">RESTAURANTS</a>
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icon-restaurants.svg" alt="Home 1"></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable">
                                    <a class="fs-xl-3 fs-5 text-primary letter-spacing-xl-3 letter-spacing-15" href="/places/#brunch">BRUNCH & DESSERTS</a>
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icon-brunch.svg" alt="Home 1"></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable">
                                    <a class="fs-xl-3 fs-5 text-primary letter-spacing-xl-3 letter-spacing-15" href="/places/#bars">BARS</a>
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icon-bars.svg" alt="Home 1"></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable">
                                    <a class="fs-xl-3 fs-5 text-primary letter-spacing-xl-3 letter-spacing-15" href="/places/#boutiques">BOUTIQUES</a>
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icon-boutiques.svg" alt="Home 1"></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable">
                                    <a class="fs-xl-3 fs-5 text-primary letter-spacing-xl-3 letter-spacing-15" href="/places/#beauty-salons">BEAUTY SALONS</a>
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icon-beauty-salons.svg" alt="Home 1"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionPlaces2 position-relative py-5 z-1">
        <img class="w-100 object-fit-cover position-relative d-none d-xl-block" src="<?php echo THEME_IMG; ?>bckg-places-2.webp" alt="Home 1">
        <img class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 d-block d-xl-none" src="<?php echo THEME_IMG; ?>bckg-places-2.webp" alt="Home 1">
        <img class="flowerRightTop position-absolute end-0 d-none d-xl-block" src="<?php echo THEME_IMG; ?>flower-left-top.webp" alt="Home 1">
        <div class="position-xl-absolute top-0 start-0 w-100 h-100 mt-xl-5 pt-xl-5 z-1">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto pt-xl-5 pt-3 mt-xl-3">
                        <p class="position-relative fs-xl-1-medium fs-2 text-center text-white-100 letter-spacing-xl-14 letter-spacing-64 mt-xl-0 mt-5 mb-3">PLACES <br class="d-xl-none"> TO VISIT</p>
                        <div class="pt-xl-5">
                            <div class="swiper placeSwiper">
                                <div class="swiper-wrapper">
                                    <?php if (count($placesCartagena) > 0) { ?>
                                        <?php foreach ($placesCartagena as $place) { ?>
                                            <div class="swiper-slide">
                                                <div class="bg-yellow-200 p-3 pb-5">
                                                    <img class="w-100" src="<?php echo THEME_IMG; ?>places-cartagena/<?php echo $place["img"]; ?>" alt="Home 1">
                                                    <p class="fs-xl-3-small fs-4 text-primary letter-spacing-xl-1 letter-spacing-1 mt-3 text-uppercase"><?php echo $place["name"]; ?></p>
                                                    <span class="line line--small line--left my-3"></span>
                                                    <p class="fs-xl-5-medium fs-6 text-black-100 letter-spacing-xl-1 line-xl-height-normal line-height-20"><?php echo $place["copy"]; ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionRsvp position-relative py-5 -mt-n8" id="rsvp">
        <img class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" src="<?php echo THEME_IMG; ?>bckg-countdown.png" alt="Home 1">
        <img class="flowerTopLeft position-absolute start-0" src="<?php echo THEME_IMG; ?>flower-top-left.webp" alt="Home 1">
        <div class="col-12 col-lg-8 mx-auto px-xl-0 px-3">
            <div class="bg-yellow position-relative mt-5 p-xl-5 py-5 px-4 text-center">
                <p class="fs-xl-1-large fs-1-medium text-primary letter-spacing-xl-14 letter-spacing-64 mb-5">R.S.V.P.</p>
                <div class="px-1 mt-4 mt-xl-0 position-relative">
                    <p class="fs-18 text-black letter-spacing-xl-3 letter-spacing-15 mb-3">Kindly respond by SEPTEMBER 13th, 2025</p>
                    <button class="btn btn-secondary border-0 mx-auto rsvp-open-btn" type="button">
                        R.S.V.P.
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionMap">
        <div class="position-relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.9672429721063!2d-75.5497515!3d10.424174100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef62f9f97ae42f5%3A0x7483c32dac4a7318!2sCasa%201537!5e0!3m2!1ses-419!2sco!4v1721107358773!5m2!1ses-419!2sco" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="position-xl-absolute top-0 start-0 w-100 h-100 d-flex align-items-end">
                <div class="container bg-white-100">
                    <div class="row p-xl-5 p-3">
                        <div class="col-12 col-xl-1 border-right mb-xl-0 mb-4">
                            <div class="d-flex justify-content-xl-center align-items-center h-100">
                                <img class="mx-xl-auto" width="51" height="51" src="<?php echo THEME_IMG; ?>icon-airplane.svg" alt="Home 1">
                            </div>
                        </div>
                        <div class="col-12 col-xl-3 border-right px-4">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <p class="fs-xl-5 fs-3 text-primary letter-spacing-xl-15 letter-spacing-15">RAFAEL NUÑEZ</p>
                                <p class="fs-xl-6 fs-6-small text-primary">INTERNATIONAL AIRPORT</p>
                                <p class="fs-xl-6 fs-6-small text-primary mb-xl-0 mb-4">CARTAGENA, COLOMBIA</p>
                            </div>
                        </div>
                        <div class="col-12 col-xl-8 ps-4">
                            <p class="fs-xl-6 fs-6-small text-gray-100">The airport is a 10-minute cab ride from the walled city. Authorized cab services are available 24 hours a day. Prices are fixed and stipulated by law.</p>
                            <p class="fs-xl-6 fs-6-small text-gray-100 mb-3">The fare to Getsemaní is about $14,000 cop. To the hotel zone of the historic center (Ciudad Amurallada) about $14.000 cop and to the Bocagrande area it costs $20.000 cop.</p>
                            <p class="fs-xl-6 fs-6-small text-gray-100">Normally $1 USD is equivalent to $4.200 cop.</p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section>

    <!-- Modal black tie -->
    <div class="modal fade" id="blackTie" tabindex="-1" role="dialog" aria-labelledby="blackTieLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <button type="button" class="btn-close p-0 text-white-100 fs-xl-1 fs-1-medium bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-white-100 text-center position-relative">
                    <img class="w-100 position-absolute top-0 start-0 object-fit-cover" src="<?php echo THEME_IMG; ?>edit-verde-acuarela.png" alt="Home 1">
                    <div class="position-relative">
                        <img class="" src="<?php echo THEME_IMG; ?>black-tie.png" alt="Home 1">
                        <p class="letter-spacing-15 text-primary mb-4">BLACK TIE</p>
                        <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#blackTieExamples">
                            VIEW MORE EXAMPLES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal black tie examples -->
    <div class="modal fade" id="blackTieExamples" tabindex="-1" role="dialog" aria-labelledby="blackTieExamplesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <button type="button" class="btn-close p-0 text-white-100 fs-xl-1 fs-1-medium bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-primary-100 text-center p-xl-5 p-3">
                    <p class="text-black letter-spacing-xl-15 mb-2">TROPICAL ELEGANCE</p>
                    <p class="text-black letter-spacing-xl-15 mb-4">Men: Black tie | Women: Long dress tropical chic                    </p>
                    <img class="w-100" src="<?php echo THEME_IMG; ?>black-tie-example.png" alt="Home 1">
                    <p class="fs-xl-6-small fs-5 text-black letter-spacing-xl-15 mt-4 px-xl-5 px-3" style="font-style: italic;">
                        Step into a world of refined sophistication with a touch of tropical charm. Gentlemen are invited to don classic black or blue tuxedos, while ladies can dazzle in long, flowing vibrant dresses – floral patterns welcomed! This dress code marries the formality of black tie with the vibrant spirit of Colombia, making for a truly enchanting evening. Let the colors of the evening shine as you mingle and toast to love.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Honeymoon -->
    <div class="modal fade" id="honeymoon" tabindex="-1" role="dialog" aria-labelledby="honeymoonLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <button type="button" class="btn-close p-0 text-white-100 fs-xl-1 fs-1-medium bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-white-100 p-xl-5 p-3 position-relative">
                    <img class="w-100 position-absolute top-0 start-0 object-fit-cover" src="<?php echo THEME_IMG; ?>edit-verde-acuarela.png" alt="Home 1">
                    <div class="position-relative">
                        <img class="w-100 mb-xl-5 mb-3" src="<?php echo THEME_IMG; ?>modal-honeymoon.png" alt="Home 1">
                        <p class="fs-xl-3-medium text-black letter-spacing-xl-25 mb-4">HONEYMOON</p>
                        <p class="fs-xl-6-small fs-5 text-black mb-3" style="font-style: italic">Dear Friends and Family,</p>
                        <p class="fs-xl-6-small fs-5 text-black mb-3" style="font-style: italic">Celebrating our special day with you is our greatest joy. Your love and support mean the world to us and your company at our wedding weekend is the best gift we could ask for! </p>
                        <p class="fs-xl-6-small fs-5 text-black mb-3" style="font-style: italic">If you are considering a gift, we would be honored if you would contribute to our honeymoon fund for our African Safari trip. You can find the link to our online fund below. We kindly ask that no cash gifts be given at the event itself. If you'd prefer to send something by mail, our address is included below. </p>
                        <p class="fs-xl-6-small fs-5 text-black mb-3" style="font-style: italic">With love and appreciation,</p>
                        <p class="fs-xl-6-small text-black mb-5" style="font-style: italic">Brenda & Asil</p>

                        <p class="fs-xl-6-small fs-5 text-black mb-1">The Kalkavans</p>
                        <p class="fs-xl-6-small fs-5 text-black mb-1">5894 Michaux St</p>
                        <p class="fs-xl-6-small fs-5 text-black mb-xl-5 mb-3">Boca Raton, FL 33433</p>

                        <a href="#" class="btn btn-secondary">
                            ZOLA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cocktail casual -->
    <div class="modal fade" id="cocktailCasual" tabindex="-1" role="dialog" aria-labelledby="cocktailCasualLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <button type="button" class="btn-close p-0 text-white-100 fs-xl-1 fs-1-medium bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-white-100 text-center position-relative">
                    <img class="w-100 position-absolute top-0 start-0 object-fit-cover" src="<?php echo THEME_IMG; ?>edit-verde-acuarela.png" alt="Home 1">
                    <div class="position-relative">
                        <img class="" src="<?php echo THEME_IMG; ?>cocktail-casual.png" alt="Home 1">
                        <p class="letter-spacing-15 text-primary mb-4">COCKTAIL CASUAL</p>
                        <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#cocktailCasualExamples">
                            VIEW MORE EXAMPLES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cocktail casual examples -->
    <div class="modal fade" id="cocktailCasualExamples" tabindex="-1" role="dialog" aria-labelledby="cocktailCasualExamplesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <button type="button" class="btn-close p-0 text-white-100 fs-xl-1 fs-1-medium bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-primary-100 text-center p-xl-5 p-3">
                    <p class="text-black letter-spacing-xl-15 mb-2">SUNKISSED SOIRÉE</p>
                    <p class="text-black letter-spacing-xl-15 mb-1">Men: Dressy pants and Button up shirt</p>
                    <p class="text-black letter-spacing-xl-15 mb-4">Women: Flowy dress - vibrant colors - </p>
                    <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>cocktail-casual-example-1.png" alt="Home 1">
                    <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>cocktail-casual-example-2.png" alt="Home 1">
                    <p class="fs-xl-6-small fs-5 text-black letter-spacing-xl-15 mt-4 px-xl-5 px-3" style="font-style: italic;">
                        Embrace the warm glow of Cartagena with casual cocktail attire with light fabrics like linen. Think vibrant dresses and smart casual looks that capture the essence of a joyful gathering under the twilight.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
    <div class="modal fade" id="casualAttire" tabindex="-1" role="dialog" aria-labelledby="casualAttireLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <button type="button" class="btn-close p-0 text-white-100 fs-xl-1 fs-1-medium bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-white-100 text-center position-relative">
                    <img class="w-100 position-absolute top-0 start-0 object-fit-cover" src="<?php echo THEME_IMG; ?>edit-verde-acuarela.png" alt="Home 1">
                    <div class="position-relative">
                        <img class="" src="<?php echo THEME_IMG; ?>casual-attire.png" alt="Home 1">
                        <p class="letter-spacing-15 text-primary mt-4">CASUAL ATTIRE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RSVP Form Modal -->
    <div id="rsvp-form-container" class="rsvp-form-container">
        <div class="rsvp-form-modal bg-primary-100 p-xl-5 p-3 bg-white-100 position-relative">
            <button type="button" class="rsvp-form-close btn-close p-0 text-black fs-xl-1 fs-1-medium bg-transparent border-0 position-absolute top-0 end-0 me-3">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="rsvp-form-content">
                <form id="rsvp-form">
                    
                    <!-- Paso 1: Búsqueda -->
                    <div id="step-1" class="rsvp-form-step active">
                        <h2 class="fs-2 text-primary mb-3">ASIL & BRENDA'S <br> WEDDING</h2>
                        <p class="font-secondary fs-4 text-black">
                            If you're responding for you and a guest (or your family), you'll be able to RSVP for your entire group.
                        </p>
                        <p class="font-secondary fs-4 text-black mb-4">
                            Please enter below your First Name and your Last Name.
                        </p>
                        <input type="text" id="guest-search" class="w-100 border-1 bg-white-100 p-3 mb-3 font-secondary" placeholder="Full name" autocomplete="off">
                        <div id="search-results" class="rsvp-search-item fs-4 font-secondary py-3 cursor-pointer"></div>
                        <button type="button" class="btn btn-secondary w-100 border-0 fs-xl-5-medium fs-6" onclick="openRSVPForm()">FIND YOUR INVITATION</button>
                    </div>

                    <!-- Paso 2: CEREMONY -->
                    <div id="step-2" class="rsvp-form-step">
                        <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">CEREMONY</h2>
                        <div class="rsvp-form-event-details">
                            <p class="fs-4 text-black font-secondary mb-1">December 13th, 2025</p>
                            <p class="fs-4 text-black font-secondary mb-1">Baluarte San Francisco Javier</p>
                            <p class="fs-4 text-black font-secondary mb-4">5:00 P.M.</p>
                        </div>
                        <div id="guest-list-ceremony" class="rsvp-guest-list mt-3">
                            <!-- Se llena dinámicamente con JavaScript -->
                        </div>
                        <div class="rsvp-form-buttons">
                            <div class="row d-flex flex-xl-row flex-column-reverse">
                                <div class="col-12 col-xl-6 mb-xl-0">
                                    <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                                </div>
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 3: RECEPTION -->
                    <div id="step-3" class="rsvp-form-step">
                        <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">RECEPTION</h2>
                        <div class="rsvp-form-event-details">
                            <p class="fs-4 text-black font-secondary mb-1">December 13th, 2025</p>
                            <p class="fs-4 text-black font-secondary mb-1">Sofitel Legend Santa Clara</p>
                            <p class="fs-4 text-black font-secondary mb-1">BALLROOM</p>
                            <p class="fs-4 text-black font-secondary">Following the ceremony</p>
                        </div>
                        <div id="guest-list-reception" class="rsvp-guest-list mt-3">
                            <!-- Se llena dinámicamente con JavaScript -->
                        </div>
                        <div class="rsvp-form-buttons">
                            <div class="row d-flex flex-xl-row flex-column-reverse">
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                                </div>
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 4: WELCOME PARTY -->
                    <div id="step-4" class="rsvp-form-step">
                        <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">WELCOME PARTY</h2>
                        <div class="rsvp-form-event-details">
                            <p class="fs-4 text-black font-secondary mb-1">December 12th, 2025</p>
                            <p class="fs-4 text-black font-secondary mb-1">Sofitel Legend Santa Clara</p>
                            <p class="fs-4 text-black font-secondary mb-1">SPA TERRACE</p>
                            <p class="fs-4 text-black font-secondary">6:00 P.M.</p>
                        </div>
                        <div id="guest-list-welcome" class="rsvp-guest-list mt-3">
                            <!-- Se llena dinámicamente con JavaScript -->
                        </div>
                        <div class="rsvp-form-buttons">
                            <div class="row d-flex flex-xl-row flex-column-reverse">
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                                </div>
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 5: FAREWELL BRUNCH -->
                    <div id="step-5" class="rsvp-form-step">
                        <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">FAREWELL BRUNCH</h2>
                        <div class="rsvp-form-event-details">
                            <p class="fs-4 text-black font-secondary mb-1">December 14th, 2025</p>
                            <p class="fs-4 text-black font-secondary mb-1">Sofitel Legend Santa Clara</p>
                            <p class="fs-4 text-black font-secondary mb-1">RESTAURANT 1621</p>
                            <p class="fs-4 text-black font-secondary">10:00 A.M. - 2:00 P.M.</p>
                        </div>
                        <div id="guest-list-brunch" class="rsvp-guest-list mt-3">
                            <!-- Se llena dinámicamente con JavaScript -->
                        </div>
                        <div class="rsvp-form-buttons">
                            <div class="row d-flex flex-xl-row flex-column-reverse">
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                                </div>
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 6: Información Adicional -->
                    <div id="step-6" class="rsvp-form-step">
                        <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">ADDITIONAL INFO</h2>
                        <p class="fs-4 text-black font-secondary mb-1">Tell us if you have any food <br> allergies or restrictions</p>
                        <textarea id="allergies" class="p-3 font-secondary w-100 mb-3" placeholder="Food allergies or restrictions..."></textarea>
                        <input type="email" id="guest-email" class="w-100 font-secondary p-3 mb-3" placeholder="Email address" required>
                        <div class="rsvp-form-buttons">
                            <div class="row d-flex flex-xl-row flex-column-reverse">
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                                </div>
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">R.S.V.P.</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 7: Agradecimiento -->
                    <div id="step-7" class="rsvp-form-step">
                        <div class="rsvp-thank-you">
                            <h3 class="fs-xl-3-medium fs-3 text-primary mb-2">THANKS</h3>
                            <p class="fs-4 text-black font-secondary mb-1 col-xl-8 pe-xl-3">Thank you for confirming your attendance to our wedding. We are very happy to share this special day with you. We will send a copy of your RSVP to your email.</p>
                            <button type="button" class="rsvp-btn rsvp-btn-primary rsvp-home-btn btn btn-primary w-100">BACK TO HOME</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php 
get_footer();
?>