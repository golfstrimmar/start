<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start
 */

?>



<div class="up_down_btn" title="Наверх">↑</div>

<?php get_template_part('./includes/popup') ?>

		<!-- ============footer area========= -->
    <footer class="footer" id="footer">
      <div class="container">
        <div class="footer__body">
          <div class="footer__item footer-item">
					
					<div class="footer__logo" href="#!">
							<!-- <img src="assets/img/clock.svg"alt="logo"> -->
							<?php	the_custom_logo();?>
          </div>


          <div class="footer-item__title-main">UAB TOMETA</div>
            <p class="footer-item__property footer-item__property--cod1">Įmonės kodas: 110559074</p>
            <p class="footer-item__property footer-item__property--cod2">PVM kodas: LT105590716</p>
          </div>



          <div class="footer__item footer-item">
            <div class="footer-item__title">Kaunas, Technikos g. 18S</div>
            <div class="footer-item__description">
              <p class="footer-item__line">Įprastas darbo laikas:</p>
              <p class="footer-item__line">I-V 09:00-17:30</p>
              <p class="footer-item__line">VI - nedirbame</p>
              <p class="footer-item__line">VII - nedirbame</p>
            </div>
            <div class="footer-item__description">
              <p class="footer-item__line">Telefono numeris:</p>
              <p class="footer-item__line"><span>Tel.: </span>
							<a class="footer-item__tel" href="#!">
								<span>837   455185</span>
							</a>
							</p>
              <p class="footer-item__line">
								<span>Fax.: </span>
								<a class="footer-item__fax" href="#!">
									<span>837 455144</span>
								</a>
							</p>
            </div>
          </div>
          <div class="footer__item footer-item">
            <div class="footer-item__title">Klaipėda, Rumpiškės g. 2</div>
            <div class="footer-item__description">
              <p class="footer-item__line">Įprastas darbo laikas:</p>
              <p class="footer-item__line">I-V 10:00-18:00</p>
              <p class="footer-item__line">VI 10:00-16:00</p>
              <p class="footer-item__line">VII nedirbame</p>
            </div>
            <div class="footer-item__description">
              <p class="footer-item__line">Telefono numeris:</p>
              <p class="footer-item__line"><span>Tel.: </span><a class="footer-item__tel" href="#!"><span>8 46
                    311970</span></a></p>
              <p class="footer-item__line"><span>Tel.: </span><a class="footer-item__tel" href="#!"><span>8 615
                    52012</span></a></p>
              <p class="footer-item__line"><span>Tel.: </span><a class="footer-item__tel" href="#!"><span>8 618
                    14158</span></a></p>
            </div>
          </div>
        </div>
        <div class="footer__copyright">2021 © UNIFORMOS All rights reserved</div>
      </div>
    </footer>

<!-- ============/footer area========= -->






</div><!-- wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
