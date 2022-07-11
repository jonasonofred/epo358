<?php

function jns_assets() {

  wp_register_style(
    'font',
    'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,700;1,300&display=swap',
    array(),
    null,
    'all'
  );


  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/assets/css/main.min.css',
    array('font'),
    false,
    '(min-width: 280px)'
  );


  wp_enqueue_script(
    'puntero',
    get_template_directory_uri() . '/assets/js/main.min.js',
    array(),
    false,
    true
  );


/*-------------------- Footer Style --------------------*/

  wp_register_style(
    'footer-small',
    get_template_directory_uri() . '/assets/css/footer/small.min.css',
    array(),
    false
  );

  wp_register_style(
    'footer-medium',
    get_template_directory_uri() . '/assets/css/footer/medium.min.css',
    array(),
    false
  );





/*-------------------- Index --------------------*/

  if( is_front_page() ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/index/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/index/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


     wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/index/large.min.css',
      array(),
      false,
      '(min-width: 680px)'
    );


    wp_enqueue_style(
      'extra-large',
      get_template_directory_uri() . '/assets/css/index/extra_large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'largeX',
      get_template_directory_uri() . '/assets/css/index/largeX.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





/*-------------------- About --------------------*/

  if( is_page('sobrenosotros') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/about/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/about/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 680px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/about/large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'largeX',
      get_template_directory_uri() . '/assets/css/about/largeX.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





/*-------------------- Academician --------------------*/

  if( is_page('academico') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/academician/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/academician/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/academician/large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'extra_large',
      get_template_directory_uri() . '/assets/css/academician/extra_large.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





/*-------------------- Student --------------------*/

  if( is_page('alumnos') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/student/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/student/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/student/large.min.css',
      array(),
      false,
      '(min-width: 680px)'
    );


    wp_enqueue_style(
      'extra_large',
      get_template_directory_uri() . '/assets/css/student/extra_large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'largeX',
      get_template_directory_uri() . '/assets/css/student/largeX.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





  /*-------------------- Teachers --------------------*/

  if( is_page('docentes') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/teachers/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/teachers/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/teachers/large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'extra_large',
      get_template_directory_uri() . '/assets/css/teachers/extra_large.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );



  }





  /*-------------------- Contact --------------------*/

  if( is_page('contacto') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/contact/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/contact/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/contact/large.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





  /*-------------------- Control --------------------*/

  if( is_page('control') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/control/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/control/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/control/large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'extra_large',
      get_template_directory_uri() . '/assets/css/control/extra_large.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





  /*-------------------- Facilities --------------------*/

  if( is_page('instalaciones') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/facilities/small.min.css',
      array(),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/facilities/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


    wp_enqueue_style(
      'large',
      get_template_directory_uri() . '/assets/css/facilities/large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'largeX',
      get_template_directory_uri() . '/assets/css/facilities/largeX.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }





  /*-------------------- Orientation --------------------*/

  if( is_page('orientacion') ) {

    wp_enqueue_style(
      'small',
      get_template_directory_uri() . '/assets/css/orientation/small.min.css',
      array('footer-small'),
      false,
      '(min-width: 280px)'
    );


    wp_enqueue_style(
      'medium',
      get_template_directory_uri() . '/assets/css/orientation/medium.min.css',
      array('footer-medium'),
      false,
      '(min-width: 480px)'
    );


    wp_enqueue_style(
      'extra_large',
      get_template_directory_uri() . '/assets/css/orientation/extra_large.min.css',
      array(),
      false,
      '(min-width: 800px)'
    );


    wp_enqueue_style(
      'largeX',
      get_template_directory_uri() . '/assets/css/orientation/largeX.min.css',
      array(),
      false,
      '(min-width: 1024px)'
    );

  }

}

add_action( 'wp_enqueue_scripts', 'jns_assets' );


















