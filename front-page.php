<?php get_header('inicio'); ?>


<main class="mainContent">

  <div class="hero">

    <h1 class="hero__title">
      <figure>
        <img src="<?= get_template_directory_uri(); ?>/assets/logos/name.png" alt="Escuela Preparatoria Oficial No. 358" class="hero__tittle--image">
        <figcaption>Por la Educación el Hombre Transforma al Mundo</figcaption>
      </figure>
    </h1>


    <div class="hero__social">

      <div class="hero__socialMediaOne">

        <p>Nuestras Redes Sociales</p>

        <div class="hero__socialMediaOne--logos">

          <figure>
            <a href="https://www.instagram.com/epo358/" target="_black">
              <img src="<?= get_template_directory_uri(); ?>/assets/logos/instagram.webp" alt="Logo Instagram">
            </a>
          </figure>


          <figure>
            <a href="https://www.facebook.com/EPO-358-108468385127559/" target="_black">
              <img src="<?= get_template_directory_uri(); ?>/assets/logos/facebook.png" alt="Logo Facebook">
            </a>
          </figure>


          <figure>
            <a href="https://twitter.com/epo358" target="_black">
              <img src="<?= get_template_directory_uri(); ?>/assets/logos/twitter.png" alt="Logo Twitter">
            </a>
          </figure>

        </div>

        <p>@epo358</p>

      </div>


      <div class="hero__logo">
        <figure>
          <img src="<?= get_template_directory_uri(); ?>/assets/logos/logo.png" alt="Logo Epo 358">
        </figure>
      </div>


      <div class="hero__socialMediaTwo">

        <figure>
          <a href="https://www.youtube.com/channel/UCzJWMjmIMC7AQWiwyyp8dLA" target="_black">
            <img src="<?= get_template_directory_uri(); ?>/assets/logos/youtube.png" alt="Logo Youtube">
          </a>
        </figure>
        <p>Tenemos Canal de Youtube</p>

      </div>

    </div>

  </div>





  <div class="cards">

    <div class="cards__section">

      <section>
        <h2>Instalaciones</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum amet voluptas inventore, natus ipsum, alias dolore veniam esse libero corrupti obcaecati asperiores quasi iste harum, veritatis sit fuga! Recusandae, aliquam!</p>
      </section>


      <button>
        <a href="<?php get_template_directory_uri(); ?>/instalaciones">Ver más</a>
      </button>
      
    </div>


    <div class="cards__section">

      <section>
        <h2>Eventos</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, blanditiis modi! Eaque, placeat voluptates molestias saepe quas sapiente impedit ex illum optio voluptatem laborum quidem laboriosam doloribus corporis aut commodi.</p>
      </section>


      <button>
        <a href="#">Ver más</a>
      </button>

    </div>


    <div class="cards__section">

      <section>
        <h2>Docentes</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aperiam dignissimos inventore iure error! Iusto corrupti totam sapiente commodi eos. Recusandae, expedita maiores aperiam nobis necessitatibus vero nesciunt hic omnis.</p>
      </section>


      <button>
        <a href="#">Ver más</a>
      </button>

    </div>

  </div>





  <div class="videoIntro">

    <div class="videoIntro__container">
      <video controls preload="none" poster="<?= get_template_directory_uri(); ?>/assets/logos/logo.png" muted>
        <source src="<?= get_template_directory_uri(); ?>/assets/videos/intro.webm" type="video/webm">
        Lo sentimos, tu navegador no soporta la reproducción de este video.
      </video>
    </div>


    <section>
      <h3>Título</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, non deleniti odio explicabo natus delectus mollitia sunt! Quos possimus non illo cumque quisquam natus quo, voluptas aspernatur, doloremque perferendis quasi.</p>
    </section>
    
  </div>





  <div class="panoramic"></div>





  <div class="reason__container">

    <figure>
      <img src="<?= get_template_directory_uri(); ?>/assets/images/rectangle.png">
    </figure>

    <section class="reason">
      <h4>- ¿Por qué Estudiar con Nosotros? -</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo minima tempore dolorem eligendi autem doloremque officiis optio dolores? Tempore labore fuga ipsum sit autem numquam, obcaecati aspernatur libero quo ducimus.</p>
    </section>

  </div>





  <div class="iconsPlus">

    <div>

      <svg viewBox="0 0 68 68" xmlns="http://www.w3.org/2000/svg" class="icon">
        <path d="M33.9993 16.5322L33.3342 16.7341L6.77167 25.6336L0.732422 27.6247L4.2493 28.751V47.3447C2.98067 48.0821 2.1243 49.4272 2.1243 50.9997C2.1243 52.1269 2.57206 53.2079 3.36909 54.0049C4.16612 54.802 5.24713 55.2497 6.3743 55.2497C7.50147 55.2497 8.58247 54.802 9.3795 54.0049C10.1765 53.2079 10.6243 52.1269 10.6243 50.9997C10.6243 49.4272 9.76792 48.0821 8.4993 47.3447V30.2172L12.7493 31.6091V42.4997C12.7493 44.2422 13.8118 45.6872 15.074 46.686C16.3363 47.6783 17.9045 48.3796 19.7873 49.0086C23.557 50.2623 28.5253 50.9997 33.9993 50.9997C39.4733 50.9997 44.4415 50.2645 48.2113 49.0065C50.094 48.3796 51.6623 47.6784 52.9245 46.6838C54.1868 45.6872 55.2493 44.2422 55.2493 42.4997V31.6091L61.2269 29.6159L67.2662 27.6247L61.2248 25.6315L34.6623 16.7341L33.9993 16.5322ZM33.9993 20.9841L53.9212 27.6247L33.9993 34.2654L14.0774 27.6247L33.9993 20.9841ZM16.9993 33.0711L33.3363 38.5154L33.9993 38.7151L34.6644 38.5132L50.9993 33.069V42.4997C50.9993 42.521 51.0078 42.7675 50.3342 43.2966C49.6627 43.8279 48.4578 44.4972 46.8811 45.0242C43.7318 46.0718 39.0887 46.7497 33.9993 46.7497C28.9099 46.7497 24.2668 46.074 21.1154 45.0221C19.5429 44.4972 18.3359 43.8257 17.6644 43.2966C16.9887 42.7654 16.9993 42.521 16.9993 42.4997V33.069V33.0711Z" fill="#BE9217" />
      </svg>


      <p>311 Estudientes y Creciendo</p>

    </div>


    <div>

      <svg viewBox="0 0 68 68" xmlns="http://www.w3.org/2000/svg" class="icon">
        <path d="M5.94922 12.75V17H52.6992V51H22.9492V55.25H61.1992V51H56.9492V12.75H5.94922ZM14.4535 19.125C12.2011 19.1328 10.0432 20.0307 8.45021 21.623C6.85717 23.2152 5.95818 25.3727 5.94922 27.625C5.94922 32.2979 9.78272 36.125 14.4535 36.125C16.7047 36.116 18.861 35.2175 20.4525 33.6253C22.0439 32.033 22.9414 29.8762 22.9492 27.625C22.9492 22.9564 19.12 19.125 14.4535 19.125ZM27.1992 21.25V25.5H37.8242V21.25H27.1992ZM42.0742 21.25V25.5H48.4492V21.25H42.0742ZM14.4535 23.375C16.8207 23.375 18.6992 25.2514 18.6992 27.625C18.6992 30.005 16.8228 31.875 14.4535 31.875C12.0735 31.875 10.1992 30.005 10.1992 27.625C10.1992 25.2514 12.0756 23.375 14.4535 23.375ZM27.1992 29.75V34H48.4492V29.75H27.1992ZM5.94922 38.25V55.25H10.1992V42.5H16.5742V55.25H20.8242V43.8983L25.2102 46.2188C26.4533 46.8775 27.9472 46.8754 29.1882 46.2188V46.223L36.6895 42.2556L34.7068 38.4944L27.2035 42.4618L20.6245 38.9895C19.7063 38.5044 18.6837 38.2506 17.6452 38.25H5.94922Z" fill="#BE9217" />
      </svg>


      <p>Docentes Altamente Calificados</p>

    </div>


    <div>

      <svg viewBox="0 0 68 68" xmlns="http://www.w3.org/2000/svg" class="icon">
        <path d="M33.9993 16.5322L33.3342 16.7341L6.77167 25.6336L0.732422 27.6247L4.2493 28.751V47.3447C2.98067 48.0821 2.1243 49.4272 2.1243 50.9997C2.1243 52.1269 2.57206 53.2079 3.36909 54.0049C4.16612 54.802 5.24713 55.2497 6.3743 55.2497C7.50147 55.2497 8.58247 54.802 9.3795 54.0049C10.1765 53.2079 10.6243 52.1269 10.6243 50.9997C10.6243 49.4272 9.76792 48.0821 8.4993 47.3447V30.2172L12.7493 31.6091V42.4997C12.7493 44.2422 13.8118 45.6872 15.074 46.686C16.3363 47.6783 17.9045 48.3796 19.7873 49.0086C23.557 50.2623 28.5253 50.9997 33.9993 50.9997C39.4733 50.9997 44.4415 50.2645 48.2113 49.0065C50.094 48.3796 51.6623 47.6784 52.9245 46.6838C54.1868 45.6872 55.2493 44.2422 55.2493 42.4997V31.6091L61.2269 29.6159L67.2662 27.6247L61.2248 25.6315L34.6623 16.7341L33.9993 16.5322ZM33.9993 20.9841L53.9212 27.6247L33.9993 34.2654L14.0774 27.6247L33.9993 20.9841ZM16.9993 33.0711L33.3363 38.5154L33.9993 38.7151L34.6644 38.5132L50.9993 33.069V42.4997C50.9993 42.521 51.0078 42.7675 50.3342 43.2966C49.6627 43.8279 48.4578 44.4972 46.8811 45.0242C43.7318 46.0718 39.0887 46.7497 33.9993 46.7497C28.9099 46.7497 24.2668 46.074 21.1154 45.0221C19.5429 44.4972 18.3359 43.8257 17.6644 43.2966C16.9887 42.7654 16.9993 42.521 16.9993 42.4997V33.069V33.0711Z" fill="#BE9217" />
      </svg>


      <p>Estudientes</p>

    </div>

  </div>

</main>


<div class="logo">
    
  <p>epo 358</p>

  <figure>
    <img src="<?= get_template_directory_uri(); ?>/assets/logos/logo.png" alt="Logo EPO 358">
  </figure>

  <p>somos lobos</p>

</div>


<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-arrow-up-circle-fill circle" viewBox="0 0 16 16" id="prba">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
</svg>


<?php get_footer(); ?>