<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta <?php bloginfo( 'charset' ); ?> >
  <meta name="description" content="Escuela Preparatoria Oficial Número 358.">
  <meta name="keywords" content="Preparatoria, preparatoria, Bachillerato, bachillerato, Prepa, prepa, EPO, epo, Lerma, lerma">
  <meta name="robots" content="index, follow">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
</head>
<body>


<div class="containerHeader">
    <header class="header">
  
      <div class="header__navBar">
  
        <a href="<?= home_url(); ?>">
          <img src="<?= get_template_directory_uri(); ?>/assets/logos/logoWhite.png" alt="Logo EPO 358" id="iconLogo">
        </a>
  
  
        <nav id="navMenu">
  
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list iconBar"
            id="iconMenuMobile" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
  
          <div class="navContainer">
            <p class="nav__container--title">epo 358</p>
            <ul>
              <li><a href="<?= home_url(); ?>">Inicio</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/sobrenosotros">Conócenos</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/instalaciones">Instalaciones</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/alumnos">Alumnos</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/docentes">Docentes</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/control">Control Escolar</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/orientacion">Orientación</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/academico">Académico</a></li>
              <li><a href="<?php get_template_directory_uri(); ?>/contacto">Contacto</a></li>
            </ul>
            <figure>
              <img src="<?= get_template_directory_uri(); ?>/assets/logos/logo.png" alt="Logo epo358">
            </figure>
          </div>
  
        </nav>
  
      </div>
  
  
  
      <div class="header__container">
  
        <div class="header__background">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/assets/images/heroImage480.jpg" media="(max-width: 480px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/images/heroImage680.jpg" media="(max-width: 680px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/images/heroImage800.jpg" media="(max-width: 800px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/images/heroImage1200.jpg" media="(max-width: 1200px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/images/heroImage1400.jpg" media="(max-width: 1400px)">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/heroImage.jpg" id="heroImage">
          </picture>
        </div>
  
        <h1><?php wp_title(''); ?></h1>
  
        <img src="<?= get_template_directory_uri(); ?>/assets/icons/lineedomex.png" class="header--lineEdomex" id="line_edomex">
  
      </div>
  
  
    </header>
  </div>





<div class="container">