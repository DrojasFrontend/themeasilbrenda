<?php 
/* 
* Template Name: Places
*/

get_header(); 
$places = [
    "hotels" => [
      "id" => "hoteles",
      "title" => "Hotels",
      "title_es" => "Hoteles",
      "img" => THEME_IMG . 'icon-hotels.svg',
      "places" => [
        [
            "name" => "Sofitel Legend Santa Clara",
            "address" => "Calle Del Torno # 39 - 29",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-1.webp',
        ],
        [
            "name" => "Movich Hotel",
            "address" => "Calle de Vélez Danies # 4 – 39",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (601) 4824466",
            "link" => "https://www.movichhotels.com/es/hotel-movichcartagena-en-cartagena/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-4.webp',
        ],
        [
            "name" => "Bastion Luxury Hotel",
            "address" => "Calle del Sargento # 6 - 87",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6424100",
            "link" => "https://www.bastionluxuryhotel.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-5.webp',
        ],
        [
            "name" => "Hotel Charleston Santa Teresa",
            "address" => "Cra. 3 # 31 - 23",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6649494",
            "link" => "https://www.hotelcharlestonsantateresa.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-6.webp',
        ],
        [
            "name" => "Hotel San Agustín",
            "address" => "Calle de la Universidad # 36 - 44",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6810000",
            "link" => "https://www.hotelcasasanagustin.com/es/home.html",
            "image" => THEME_IMG . 'places-cartagena/hoteles-7.webp',
        ],
        [
            "name" => "Casa Pestagua",
            "address" => "Cra. 3 # 33 - 63",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6649510",
            "link" => "https://casapestagua.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-8.webp',
        ],
        [
            "name" => "Casa La Merced",
            "address" => "Calle de Don Sancho # 36 - 165",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6686622",
            "link" => "https://mustique.co/bienvenidos/casas/la-merced/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-9.webp',
        ],
        [
            "name" => "Bovedas de Santa Clara",
            "address" => "Cra. 8 # 39 - 114",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6504465",
            "link" => "https://www.bovedasdesantaclara.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-10.webp',
        ],
        [
            "name" => "Nacar By Hilton",
            "address" => "Calle Del Curato # 38 - 99",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6517050",
            "link" => "https://www.hilton.com/es/hotels/ctgmaqq-nacar-hotel-cartagena/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-11.webp',
        ],
        [
            "name" => "Hotel Casa Don Luis",
            "address" => "Calle del Cuartel # 36 – 16",
            "city" => "Cartagena, Colombia",
            "phone" => "57 314 6669101",
            "link" => "https://www.farandahotels.com/hotel/hotel-casa-don-luis-cartagena-by-faranda-boutique",
            "image" => THEME_IMG . 'places-cartagena/hoteles-12.webp',
        ],
        [
            "name" => "Voila By Huespedia",
            "address" => "Calle de las Carretas # 34 - 85",
            "city" => "Cartagena, Colombia",
            "phone" => "57 300 9121453",
            "link" => "https://www.bevoila.com/home-es",
            "image" => THEME_IMG . 'places-cartagena/hoteles-13.webp',
        ],
        [
            "name" => "Hyatt Regency",
            "address" => "Cra. 1 # 12 - 118",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6941234",
            "link" => "https://go.hyatt.com/link/v2/eae__GKM5JBXpUGUPAuOwJCzfpC-lL3kAXMEy",
            "image" => THEME_IMG . 'places-cartagena/hoteles-14.webp',
        ],
        [
            "name" => "Hotel Estelar",
            "address" => "Cra. 1 # 11 - 116",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6517303",
            "link" => "https://www.hotelesestelar.com/es/destinos/colombia/cartagena-de-indias",
            "image" => THEME_IMG . 'places-cartagena/hoteles-15.webp',
        ],
        [
            "name" => "Hotel Las Américas",
            "address" => "Anillo Vial, Sector, Cielo mar",
            "city" => "Cartagena, Colombia",
            "phone" => "57 (605) 6723344",
            "link" => "https://www.hotellasamericas.com.co",
            "image" => THEME_IMG . 'places-cartagena/hoteles-0.webp',
        ],
      ],
    ],
    "restaurants" => [
      "id" => "restaurantes",
      "title" => "Restaurants",
      "title_es" => "Restaurantes",
      "img" => THEME_IMG . 'icon-restaurants.svg',
      "places" => [
          [
              "name" => "Candé",
              "address" => "Calle de la Serrezuela # 39 - 10",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6685291",
              "link" => "https://restaurantecande.com",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-4.webp',
          ],
          [
              "name" => "Mistura",
              "address" => "Plaza Fernández Madrid",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6767605",
              "link" => "https://www.instagram.com/mistura/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-2.webp',
          ],
          [
              "name" => "Alma",
              "address" => "Calle San Agustín # 36",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6810050",
              "link" => "https://www.almacolombia.com",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-5.webp',
          ],
          [
              "name" => "La Casa de Socorro",
              "address" => "Frente al C.C. Getsemaní",
              "city" => "Getsemaní, Cartagena",
              "phone" => "57 315 7186666",
              "link" => "https://www.instagram.com/restaurantelacasadesocorro/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-6.webp',
          ],
          [
              "name" => "Carmen",
              "address" => "Calle 38 # 8 - 19",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 310 3949344",
              "link" => "https://www.instagram.com/carmenrestaurante/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-7.webp',
          ],
          [
              "name" => "La Cevicheria",
              "address" => "Calle 39 # 7 - 14",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6798743",
              "link" => "https://www.instagram.com/lacevicheria/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-1.webp',
          ],
          [
              "name" => "Harry's Sasson",
              "address" => "Cra. 3 # 31 - 19",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6501015",
              "link" => "https://www.hotelcharlestonsantateresa.com/es/Restaurantes-Bar/harry-s-cartagena",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-8.webp',
          ],
          [
              "name" => "La Cocina de Pepina",
              "address" => "Calle 25 # 9A - 06 L. 2",
              "city" => "Getsemaní, Cartagena",
              "phone" => "57 300 8565189",
              "link" => "https://www.instagram.com/lacocinadepepina/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-9.webp',
          ],
          [
              "name" => "Agua de León",
              "address" => "Calle de Ayos # 4 - 46",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 315 2780517",
              "link" => "https://www.instagram.com/aguadeleonrestaurante/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-10.webp',
          ],
          [
              "name" => "Mar y Zielo",
              "address" => "Cra. 5 # 34 - 63",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 317 6911393",
              "link" => "https://www.maryzielo.com",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-11.webp',
          ],
          [
              "name" => "Celele",
              "address" => "Cra. 10C # 29 - 200",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 301 7420389",
              "link" => "https://celelerestaurante.com",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-12.webp',
          ],
          [
              "name" => "Cuzco",
              "address" => "Calle Santo Domingo # 33 - 48",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6560764",
              "link" => "https://www.instagram.com/cuzcocartagena/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-3.webp',
          ],
          [
              "name" => "La Vitrola",
              "address" => "Cra. 2 # 33 - 66",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6648243",
              "link" => "https://www.instagram.com/lavitrolacartagena/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-13.webp',
          ],
          [
              "name" => "Mardeleva",
              "address" => "Nuestra Sra. del Carmen # 33 - 41",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 317 6680456",
              "link" => "https://hotelelmarques.co/restaurante/",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-14.webp',
          ],
          [
              "name" => "Apogeo Cocina",
              "address" => "Cl. del Porvenir #35 - 69",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 300 3833594",
              "link" => "https://www.instagram.com/apogeorestaurante/?hl=es",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-15.webp',
          ],
          [
              "name" => "Da Pietro Restaurante",
              "address" => "Cra. 8 # 38 - 71",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 305 2361199",
              "link" => "https://www.instagram.com/dapietrorestaurante/?hl=es",
              "image" => THEME_IMG . 'places-cartagena/restaurantes-16.webp',
          ],
      ]
    ],
    "brunch_desserts" => [
      "id" => "postres",
      "title" => "Brunch & Desserts",
      "title_es" => "BRUNCH Y POSTRES",
      "img" => THEME_IMG . 'icon-brunch.svg',
      "places" => [
          [
              "name" => "Época Espresso",
              "address" => "Cra. 5 # 34 - 52",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 315 8008072",
              "link" => "https://www.instagram.com/weare.epoca/",
              "image" => THEME_IMG . 'places-cartagena/postres-3.webp',
          ],
          [
              "name" => "Juan Valdéz Café",
              "address" => "Cra. 2 # 7 - 17",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6651156",
              "link" => "https://juanvaldez.com",
              "image" => THEME_IMG . 'places-cartagena/postres-4.webp',
          ],
          [
              "name" => "Mila Pastelería",
              "address" => "Calle de la Iglesia # 35 - 76",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 317 2573024",
              "link" => "https://www.instagram.com/milapasteleria/",
              "image" => THEME_IMG . 'places-cartagena/postres-2.webp',
          ],
          [
              "name" => "La Paletteria",
              "address" => "Calle 35 # 03 - 86 local 2",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 56661579",
              "link" => "https://www.instagram.com/lapaletteria/",
              "image" => THEME_IMG . 'places-cartagena/postres-5.webp',
          ],
          [
              "name" => "Café Quindío",
              "address" => "C.C. La Serrezuela",
              "city" => "C.C. La Serrezuela - Cartagena",
              "phone" => "57 320 6936900",
              "link" => "https://www.instagram.com/cafequindio.co/",
              "image" => THEME_IMG . 'places-cartagena/postres-6.webp',
          ],
          [
              "name" => "Café del Mar",
              "address" => "Baluarte de Santo Domingo",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6642945",
              "link" => "https://www.instagram.com/cafedelmarcartagena/",
              "image" => THEME_IMG . 'places-cartagena/postres-1.webp',
          ],
          [
              "name" => "Café San Alberto",
              "address" => "Cra. 3 # 35 - 18",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 318 7964457",
              "link" => "https://cafesanalberto.com.co/",
              "image" => THEME_IMG . 'places-cartagena/postres-7.webp',
          ],
          [
              "name" => "El Café Ábaco",
              "address" => "Calle 36 # 3 - 86",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6786143",
              "link" => "https://www.abacolibros.com",
              "image" => THEME_IMG . 'places-cartagena/postres-8.webp',
          ],
      ]
    ],
    "bars_pubs" => [
      "id" => "bares",
      "title" => "Bars & Pubs",
      "title_es" => "BARES Y PUBS",
      "img" => THEME_IMG . 'icon-bars.svg',
      "places" => [
          [
              "name" => "Alquímico",
              "address" => "Calle Colegio # 34 - 24",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 316 5331932",
              "link" => "https://alquimico.com",
              "image" => THEME_IMG . 'places-cartagena/bares-3.webp',
          ],
          [
              "name" => "La Jugada",
              "address" => "Cra. 6 # 34 - 25",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 316 3194481",
              "link" => "https://la-jugada.cluvi.co",
              "image" => THEME_IMG . 'places-cartagena/bares-4.webp',
          ],
          [
              "name" => "Buena Vida",
              "address" => "Calle del Porvenir, Esquina",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 322 3061025",
              "link" => "https://www.instagram.com/buenavidamarisqueria_/",
              "image" => THEME_IMG . 'places-cartagena/bares-5.webp',
          ],
          [
              "name" => "Bazurto",
              "address" => "Cra. 9 # 30 - 42",
              "city" => "Getsemaní, Cartagena",
              "phone" => "57 317 6481183",
              "link" => "https://www.instagram.com/bazurtobar/",
              "image" => THEME_IMG . 'places-cartagena/bares-2.webp',
          ],
          [
              "name" => "El Coro",
              "address" => "Cra. 8 # 39 - 36",
              "city" => "Hotel Santa Clara",
              "phone" => "57 (605) 6504700",
              "link" => "https://www.sofitellegendsantaclara.com/",
              "image" => THEME_IMG . 'places-cartagena/bares-6.webp',
          ],
          [
              "name" => "El Barón",
              "address" => "Cra. 4 # 31 - 7",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 315 6463018",
              "link" => "https://www.instagram.com/elbaroncafe/",
              "image" => THEME_IMG . 'places-cartagena/bares-1.webp',
          ],
      ]
    ],
    "boutiques" => [
      "id" => "boutiques",
      "title" => "Boutiques",
      "title_es" => "BOUTIQUES",
      "img" => THEME_IMG . 'icon-boutiques.svg',
      "places" => [
          [
              "name" => "C.C. La Serrezuela",
              "address" => "Cra. 11 # 39 - 21",
              "city" => "Cartagena, Colombia",
              "phone" => "57 (605) 6421795",
              "link" => "https://www.instagram.com/laserrezuela/?hl=es",
              "image" => THEME_IMG . 'places-cartagena/boutiques-1.webp',
          ],
          [
              "name" => "Malva",
              "address" => "Cra. 11 # 39 - 21",
              "city" => "Cartagena, Colombia",
              "phone" => "57 300 3278066",
              "link" => "https://www.instagram.com/malva.col/",
              "image" => THEME_IMG . 'places-cartagena/boutiques-2.webp',
          ],
          [
              "name" => "St. Dom",
              "address" => "Cra. 3 # 33 - 70",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6354380",
              "link" => "https://www.instagram.com/stdomofficial/",
              "image" => THEME_IMG . 'places-cartagena/boutiques-3.webp',
          ],
          [
              "name" => "Silvia Tcherassi",
              "address" => "Calle 31 # 31 - 11",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6790051",
              "link" => "https://co.silviatcherassi.com",
              "image" => THEME_IMG . 'places-cartagena/boutiques-4.webp',
          ],
          [
              "name" => "Francesca Miranda",
              "address" => "Calle 31 # 3 - 25",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6648821",
              "link" => "https://francescamiranda.com",
              "image" => THEME_IMG . 'places-cartagena/boutiques-5.webp',
          ],
          [
              "name" => "Beatriz Camacho",
              "address" => "Calle 33 # 3 - 04",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 320 5651113",
              "link" => "https://beatrizcamacho.com",
              "image" => THEME_IMG . 'places-cartagena/boutiques-6.webp',
          ],
          [
              "name" => "Ketty Tinoco",
              "address" => "Calle Balocco # 33 - 01",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 301 6287824",
              "link" => "https://kettytinoco.com",
              "image" => THEME_IMG . 'places-cartagena/boutiques-8.webp',
          ],
          [
              "name" => "Azulu",
              "address" => "Cra. 3 # 31 - 11",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6642724",
              "link" => "https://azulu.co",
              "image" => THEME_IMG . 'places-cartagena/boutiques-9.webp',
          ],
          [
              "name" => "Boutique Gabriel",
              "address" => "Cra. 2 # 9 – 148 L. 5",
              "city" => "Bocagrande, Cartagena",
              "phone" => "57 (605) 6658020",
              "link" => "http://www.boutiquegabriel.com",
              "image" => THEME_IMG . 'places-cartagena/boutiques-10.webp',
          ],
          [
              "name" => "D'Clase",
              "address" => "Av. San Martin 5 – 84T L.201",
              "city" => "Bocagrande, Cartagena",
              "phone" => "57 300 7889362",
              "link" => "https://www.instagram.com/dclase.co/",
              "image" => THEME_IMG . 'places-cartagena/boutiques-11.webp',
          ],
      ]
    ],
    "salones_de_belleza" => [
      "id" => "salones",
      "title" => "BEAUTY SALONS",
      "title_es" => "PELUQUERÍAS",
      "img" => THEME_IMG . 'icon-beauty.svg',
      "places" => [
          [
              "name" => "Franklin Ramos",
              "address" => "Cra. 11 # 39 - 21 L. S23",
              "city" => "C.C. La Serrezuela - Cartagena",
              "phone" => "57 316 5294386",
              "link" => "https://www.instagram.com/franklinramossalon.ctg/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-2.webp',
          ],
          [
              "name" => "Portada Peluqueria",
              "address" => "Cra. 3 # 4 - 21",
              "city" => "Boca Grande, Cartagena",
              "phone" => "57 (605) 6524223",
              "link" => "https://www.instagram.com/portadapeluqueria/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-3.webp',
          ],
          [
              "name" => "Carlos Torres",
              "address" => "Av. San Martín # 5 - 84 L. 201",
              "city" => "Boca Grande, Cartagena",
              "phone" => "57 316 6091227",
              "link" => "https://www.instagram.com/carlostorres.studio10/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-4.webp',
          ],
          [
              "name" => "Diego Moya",
              "address" => "Calle de la Serrezuela # 39 - 02",
              "city" => "Cartagena, Colombia",
              "phone" => "57 (605) 6685291",
              "link" => "https://www.instagram.com/diegomoyasalon/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-5.webp',
          ],
          [
              "name" => "Gloss Peluqueria",
              "address" => "Cra. 3 # 31 - 19",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 (605) 6501015",
              "link" => "https://www.instagram.com/gloss_peluqueria/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-6.webp',
          ],
          [
              "name" => "Andrea Rodríguez",
              "address" => "Calle 10A # 2 - 38",
              "city" => "Boca Grande, Cartagena",
              "phone" => "57 301 7929773",
              "link" => "https://www.instagram.com/andrearodriguezbeauty/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-7.webp',
          ],
          [
              "name" => "Karla B. López",
              "address" => "Calle de Ayos # 4 - 46",
              "city" => "Centro Histórico, Cartagena",
              "phone" => "57 315 2780517",
              "link" => "https://www.instagram.com/karlabrigittemakeup/",
              "image" => THEME_IMG . 'places-cartagena/peluquerias-8.webp',
          ],
      ]
    ]
  ]
?>

<main class="customPagePlaces">
    <section class="customSectionPlaces__bckg position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto p-xl-5 py-5 px-3 pb-0">
                    <div class="customSectionPlaces__radius bg-yellow-300 pt-xl-5 text-center">
                        <div class="my-5">
                            <img class="textPlaces mb-xl-5 mb-3" src="<?php echo THEME_IMG; ?>text-places.svg" alt="Home 1">

                            <div class="px-xl-5 px-3 pb-5">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="travel">
                                    <a class="fs-xl-3 text-primary" href="#">TRAVEL INFO</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-travel.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-4">
                                    <p class="fs-xl-5-medium fs-5 fs-5 text-primary text-start px-xl-4 mb-1">PASSPORTS</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4 mb-3">
                                        Don't forget your passports! Please double check the expiration date.
                                    </p>
                                    <p class="fs-xl-5-medium fs-5 fs-5 text-primary text-start px-xl-4 mb-1">CHECKMIC</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4 mb-3">Please complete the immigration registration form 48 hours before your trip, as the airline requires proof of completion to check-in. Complete the same step to return to the US. <a href="https://www.checkmigrant.com/es/colombia" target="_blank" style="text-decoration: underline">Click Here</a></p>
                                    
                                    <p class="fs-xl-5-medium fs-5 fs-5 text-primary text-start px-xl-4 mb-1">RAFAEL NUÑEZ - INTERNATIONAL AIRPORT</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4 mb-3">Flight to Cartagena on the Caribbean coast. Latam, Delta, American Airlines, United, Copa Airlines and Avianca operate direct flights to the Rafael Nuñez Airport. The airport is a short 10-minutes taxi journey to the old town. There are authorized taxi services 24 hours. The rate to Getsemaní costs about $14.000 cop. To the hotel zone of the Historic Center (Ciudad Amurallada) about $18.000 cop and to the Bocagrande zone it costs $30.000 cop. Normally $1 USD is equivalent to $4.000 cop.</p>
                                    
                                    <p class="fs-xl-5-medium fs-5 fs-5 text-primary text-start px-xl-4 mb-1">SECURITY IN CARTAGENA</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4 mb-3">Cartagena is a beautiful and safe destination for our celebration. The city is known for its welcoming atmosphere, and we want you to feel at ease as you join us for this special occasion. With a strong focus on tourism and hospitality, Cartagena offers a secure environment for all visitors. From the historic streets to the scenic beaches, we’re excited to share this incredible city with you, and we’re confident you'll feel right at home!</p>
                                    
                                    <p class="fs-xl-5-medium fs-5 fs-5 text-primary text-start px-xl-4 mb-1">CARTAGENANNY</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4">For guests who may require it, here’s a trusted local nanny service to help with childcare. Please feel free to reach out to arrange childcare during the celebration. Special rates are available using the code MARYCUETER.</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4">Special rates are available using the code MARYCUETER.</p>
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4 mb-5">Lili Rueda: <a href="tel:+573186294974" target="_blank" style="text-decoration: underline">+57 318 6294974</a></p>
                                </div>
                            </div>

                            <!-- Block -->
                            <div class="customBckgBlock mb-5"></div>
                            <!-- End Block -->

                            <div class="px-xl-5 px-3">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="hotels">
                                    <a class="fs-xl-3 text-primary" href="#">HOTELS</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-hotel.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-4">
                                    <p class="fs-xl-6-medium fs-5 fs-5 text-black text-start px-xl-4 mb-5">
                                        The Bride and Groom are staying at <strong>Sofitel Legend Santa Clara</strong> and highly encourage their guests to stay there as well. They have arranged a room block, which you can book by sending an email to Adaluz at <a style="text-decoration: underline;" href="mailto:adaluz.ramirez@sofitel.com">adaluz.ramirez@sofitel.com</a>. Please specify to Adaluz that you would like to book a room for Brenda & Asil’s Wedding.
                                    </p>
                                    <div class="row">
                                        <?php foreach ($places['hotels']['places'] as $place) { ?>
                                            <div class="col-12 col-lg-4 mb-4 pb-4 clickable">
                                                <div class="d-flex justify-content-center align-items-end mb-2">
                                                    <p class="fs-xl-5 text-primary text-uppercase"><?php echo $place['name']; ?></p>
                                                </div>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0 mb-1"><?php echo $place['city']; ?></p>
                                                <p class="text-gray-200 letter-spacing-xl-1 mb-2"><?php echo $place['phone']; ?></p>
                                                <a class="btn btn-primary-small fs-xl-6 mb-4" href="<?php echo $place['link']; ?>" target="_blank">
                                                    VIEW
                                                </a>
                                                <div class="px-4">
                                                    <span class="line line-big"></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Block -->
                            <div class="customBckgBlock mb-5"></div>
                            <!-- End Block -->

                            <div class="px-xl-5 px-3">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="restaurants">
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-25" href="#">RESTAURANTS</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-restaurants.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-5">
                                    <div class="row">
                                        <?php foreach ($places['restaurants']['places'] as $place) { ?>
                                            <div class="col-12 col-lg-4 mb-4 pb-4 clickable">
                                                <div class="d-flex justify-content-center align-items-end mb-2">
                                                    <p class="fs-xl-5 text-primary text-uppercase"><?php echo $place['name']; ?></p>
                                                </div>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0 mb-1"><?php echo $place['city']; ?></p>
                                                <p class="text-gray-200 letter-spacing-xl-1 mb-2"><?php echo $place['phone']; ?></p>
                                                <a class="btn btn-primary-small fs-xl-6 mb-4" href="<?php echo $place['link']; ?>" target="_blank">
                                                    VIEW
                                                </a>
                                                <div class="px-4">
                                                    <span class="line line-big"></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Block -->
                            <div class="customBckgBlock mb-5"></div>
                            <!-- End Block -->

                            <div class="px-xl-5 px-3">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="brunch">
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-25" href="#">BRUNCH & DESSERTS</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-brunch.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-5">
                                    <div class="row">
                                        <?php foreach ($places['brunch_desserts']['places'] as $place) { ?>
                                            <div class="col-12 col-lg-4 mb-4 pb-4 clickable">
                                                <div class="d-flex justify-content-center align-items-end mb-2">
                                                    <p class="fs-xl-5 text-primary text-uppercase"><?php echo $place['name']; ?></p>
                                                </div>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0 mb-1"><?php echo $place['city']; ?></p>
                                                <p class="text-gray-200 letter-spacing-xl-1 mb-2"><?php echo $place['phone']; ?></p>
                                                <a class="btn btn-primary-small fs-xl-6 mb-4" href="<?php echo $place['link']; ?>" target="_blank">
                                                    VIEW
                                                </a>
                                                <div class="px-4">
                                                    <span class="line line-big"></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Block -->
                            <div class="customBckgBlock mb-5"></div>
                            <!-- End Block -->

                            <div class="px-xl-5 px-3">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="bars">
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-25" href="#">BARS</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-bars.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-5">
                                    <div class="row">
                                        <?php foreach ($places['bars_pubs']['places'] as $place) { ?>
                                            <div class="col-12 col-lg-4 mb-4 pb-4 clickable">
                                                <div class="d-flex justify-content-center align-items-end mb-2">
                                                    <p class="fs-xl-5 text-primary text-uppercase"><?php echo $place['name']; ?></p>
                                                </div>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0 mb-1"><?php echo $place['city']; ?></p>
                                                <p class="text-gray-200 letter-spacing-xl-1 mb-2"><?php echo $place['phone']; ?></p>
                                                <a class="btn btn-primary-small fs-xl-6 mb-4" href="<?php echo $place['link']; ?>" target="_blank">
                                                    VIEW
                                                </a>
                                                <div class="px-4">
                                                    <span class="line line-big"></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Block -->
                            <div class="customBckgBlock mb-5"></div>
                            <!-- End Block -->

                            <div class="px-xl-5 px-3">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="boutiques">
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-25" href="#">BOUTIQUES</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-boutiques.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-5">
                                    <div class="row">
                                        <?php foreach ($places['boutiques']['places'] as $place) { ?>
                                            <div class="col-12 col-lg-4 mb-4 pb-4 clickable">
                                                <div class="d-flex justify-content-center align-items-end mb-2">
                                                    <p class="fs-xl-5 text-primary text-uppercase"><?php echo $place['name']; ?></p>
                                                </div>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0 mb-1"><?php echo $place['city']; ?></p>
                                                <p class="text-gray-200 letter-spacing-xl-1 mb-2"><?php echo $place['phone']; ?></p>
                                                <a class="btn btn-primary-small fs-xl-6 mb-4" href="<?php echo $place['link']; ?>" target="_blank">
                                                    VIEW
                                                </a>
                                                <div class="px-4">
                                                    <span class="line line-big"></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Block -->
                            <div class="customBckgBlock mb-5"></div>
                            <!-- End Block -->

                            <div class="px-xl-5 px-3">
                                <li class="d-flex justify-content-between align-items-center py-3 px-xl-5 px-2" id="beauty-salons">
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-25" href="#">BEAUTY SALONS</a>
                                    <span><img class="icono d-block" src="<?php echo THEME_IMG; ?>icon-beauty-salons.svg" alt="Home 1"></span>
                                </li>
                                <div class="pt-5">
                                    <div class="row">
                                        <?php foreach ($places['salones_de_belleza']['places'] as $place) { ?>
                                            <div class="col-12 col-lg-4 mb-4 pb-4 clickable">
                                                <div class="d-flex justify-content-center align-items-end mb-2">
                                                    <p class="fs-xl-5 text-primary text-uppercase"><?php echo $place['name']; ?></p>
                                                </div>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6-medium fs-5 text-gray-200 letter-spacing-xl-0 mb-1"><?php echo $place['city']; ?></p>
                                                <p class="text-gray-200 letter-spacing-xl-1 mb-2"><?php echo $place['phone']; ?></p>
                                                <a class="btn btn-primary-small fs-xl-6 mb-4" href="<?php echo $place['link']; ?>" target="_blank">
                                                    VIEW
                                                </a>
                                                <div class="px-4">
                                                    <span class="line line-big"></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>