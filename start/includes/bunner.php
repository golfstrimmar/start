<section class="first" id="first">
      <section class="bunner" id="bunner">
        <div class=" imgs">
          <picture>
            <source srcset="<?php echo get_template_directory_uri()?>/assets/img/paralax.jpg, <?php echo get_template_directory_uri()?>/assets/img/paralax@2.jpg 2x, <?php echo get_template_directory_uri()?>/assets/img/paralax@3.jpg 3x," type="image/jpg" media="(min-width: 1200px)">
            <source srcset="<?php echo get_template_directory_uri()?>/assets/img/img-2.png" type="image/png" media="(min-width: 1000px) and (max-width: 1199px)">
            <source srcset="<?php echo get_template_directory_uri()?>/assets/img/busic.gif" type="image/gif" media="(max-width: 999px)">
            <img  src="<?php echo get_template_directory_uri()?>/assets/img/img-2.png" alt="img">
          </picture>
        </div>
        <div class="container">
          <div class="bunner__body">
            <div class="bunner__title">
              <h1>Блог о компании</h1>
            </div>
            <div class="bunner__text">
              <p>и способы борьбы с конкурирующими компаниями</p><a
                class="btn btn--success bunner__button popup-init-js" href="#!">Take the Tour</a>
            </div>
          </div>
        </div>
      </section>
</section>