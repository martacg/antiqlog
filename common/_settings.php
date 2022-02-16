<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$_default_image = "images/bg-home.jpg";


/*------ Menus ------
(url => label) */

/* Site menu */
$site_menu = array(
    "/productos" => "Productos",
    "/marcas" => "Marcas",
    "/sobre-nosotros" => "Sobre nosotros",
    "/contactar" => "Contactar",
);

/* Footer menus */
$footer_1_menu = array(
    "/1" => "Categoría productos 1",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
    "/5" => "Subcategoría 4",
    "/6" => "Subcategoría 5",
);
$footer_2_menu = array(
    "/1" => "Categoría productos 2",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
);
$footer_3_menu = array(
    "/1" => "Categoría productos 3",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
    "/5" => "Subcategoría 4",
);
$footer_4_menu = array(
    "/1" => "Categoría productos 4",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
);
$footer_5_menu = array(
    "/1" => "Categoría productos 5",
);
$footer_6_menu = array(
    "/1" => "Categoría productos 6",
    "/2" => "Subcategoría 1",
);
$footer_7_menu = array(
    "/1" => "Categoría productos 7",
);

/* Footer nav menu */
$footer_nav_menu = array(
    "/empresa" => "Sobre nosotros",
    "/productos" => "Productos",
    "/terminos" => "Términos y condiciones",
    "/devoluciones" => "Política de devoluciones",
    "/contactar" => "Contactar",
);

/* Footer disclaimers menu */
$footer_disclaimer_menu = array(
    "/aviso-legal" => "Aviso legal",
    "/privacidad" => "Política de privacidad",
    "/cookies" => "Política de cookies",
);


/*------ Top image ------*/
$top_image_section = (object) array(
    "title" => "El mejor mobiliario para tu hogar",
    "content" => "En nuestras tiendas de muebles de diseño encontrarás una gran selección de muebles de interior y de muebles de exterior de gran calidad para tu hogar, disponemos de todo el mobiliario de hogar que necesitas para tus proyectos de decoración.",
    "image" => $_default_image,
);


/*------ 1st section blocks ------
(url => page_data array) */
$first_section_pages = array(
    "/1" => array(
        "title" => "Categoría 1",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in egestas nunc, vitae interdum odio. In lobortis, elit vehicula venenatis vestibulum",
        "image" => "images/1-products/product-1.jpg",
    ),
    "/2" => array(
        "title" => "Categoría 2",
        "description" => "Sem mi consequat dolor, sed pellentesque magna leo ac neque. Sed in neque volutpat nisi maximus elementum. In viverra convallis odio. Sed aliquam diam nec metus luctus",
        "image" => "images/1-products/product-2.jpg",
    ),
    "/3" => array(
        "title" => "Categoría 3",
        "description" => "Morbi mollis sodales pharetra",
        "image" => "images/1-products/product-3.jpg",
    ),
    "/4" => array(
        "title" => "Categoría 4",
        "description" => "Etiam id mi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean et odio hendrerit, feugiat mauris sed, consectetur neque. Proin ut nibh ac risus faucibus consequat. Nulla ante elit, dictum et vestibulum et, lacinia sed nulla. Suspendisse accumsan auctor dolor, sit amet vestibulum augue rhoncus aliquet. In vel ex varius, lacinia purus ut, mattis ex.",
        "image" => "images/1-products/product-4.jpg",
    ),
    "/5" => array(
        "title" => "Categoría 5",
        "description" => "Vehicula venenatis vestibulum",
        "image" => "images/1-products/product-5.jpg",
    ),
    "/6" => array(
        "title" => "Categoría 6",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "image" => "images/1-products/product-6.jpg",
    ),
    "/7" => array(
        "title" => "Categoría 7",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in egestas nunc, vitae interdum odio. In lobortis, elit vehicula venenatis vestibulum",
        "image" => "images/1-products/product-7.jpg",
    ),
);


/*------ 2nd section ------*/
$second_section = (object) array(
    "title" => "Las mejores marcas de muebles de diseño del mundo",
    "content" => "Somos distribuidores oficiales de las marcas de muebles más prestigiosas del mercado internacional.",
    "image" => $_default_image,
    "logos" => glob("images/2-logos/*.png"),
);


/*------ 3rd section blocks ------
(url => page_data array) */
$third_section_pages = array(
        "/1" => array(
            "title" => "Producto 1",
            "description" => "Morbi mollis sodales pharetra",
            "image" => "images/3-products/product-1.jpg",
        ),
        "/2" => array(
            "title" => "Producto 2",
            "description" => "Sem mi consequat dolor, sed pellentesque magna leo ac neque. Sed in neque volutpat nisi maximus elementum. In viverra convallis odio. Sed aliquam diam nec metus luctus",
            "image" => "images/3-products/product-2.jpg",
        ),
        "/3" => array(
            "title" => "Producto 3",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in egestas nunc, vitae interdum odio. In lobortis, elit vehicula venenatis vestibulum",
            "image" => "images/3-products/product-3.jpg",
        ),
    
);


/*------ 4th section blocks ------
(url => page_data array) */
$fourth_section_pages = array(
    "/1" => array(
        "title" => "Categoría destacada 1",
        "image" => "images/4-featured-categories/featured-category-1.jpg",
    ),
    "/2" => array(
        "title" => "Categoría destacada 2",
        "image" => "images/4-featured-categories/featured-category-2.jpg",
    ),
    "/3" => array(
        "title" => "Categoría destacada 3",
        "image" => "images/4-featured-categories/featured-category-3.jpg",
    ),
    "/4" => array(
        "title" => "Categoría destacada 4",
        "image" => "images/4-featured-categories/featured-category-4.jpg",
    ),
    "/5" => array(
        "title" => "Categoría destacada 5",
        "image" => "images/4-featured-categories/featured-category-5.jpg",
    ),
);


/*------ Contact block (5th section) ------*/
$_contact_section = (object) array(
    "address" => "Lorem ipsum, 22",
    "postal_code" => "08225",
    "address_city" => "Terrassa (Barcelona)",
    "phone" => "644 87 28 54",
    "email" => "hola@martagonzalez.dev",
    "form_text" => "Si desea más información acerca de cualquiera de nuestros servicios rellene el siguiente formulario y nos pondremos en contacto con usted.",
);


include '_icons.php';

?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">