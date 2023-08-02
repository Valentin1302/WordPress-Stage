<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package interlignes
 */

?>

<footer>
	<div class="enfantFooter">
		<div>
			<h3>Inter Lignes :</h3>
			<a href="http://wordpress-stage.test/mentions-legales/" target="_blank">Mentions legales</a>
			<p>Conditions generales</p>
			<p>Gestion de données</p>
			<p>Gérer mes cookies</p>
		</div>
		<div class="reseau">
			<h3>Nos Réseaux Sociaux :</h3>
			<div class="fb">
				<img class="panier" src="<?= get_field("imgfb")["url"] ?>" alt="">
				<p class="namefb"><a href="https://www.facebook.com/librairie.interlignes.soissons/?locale=fr_FR" target="_blank">Inter Lignes Soissons</a></p>

			</div>

			<div class="insta">
				<img class="panier" src="<?= get_field("imginsta")["url"] ?>" alt="">
				<p class="namefb"><a href="https://www.instagram.com/inter.lignes/?hl=fr" target="_blank">inter.lignes</a></p>
			</div>
		</div>
		<div class="contact">
			<h3>Nous Contacter :</h3>
			<div class="phone">
				<img class="panier" src="<?= get_field("imgtel")["url"] ?>" alt="">
				<p class="namefb"><a href="tel:+323762271">03-23-76-22-71</a></p>
			</div>
			<div class="gmail">
				<img class="panier" src="<?= get_field("imgmail")["url"] ?>" alt="">
				<p class="namefb"><a href="mailto:interlignes@bbox.fr">interlignes@bbox.fr</a></p>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.slider').slick();
  });
</script>

</body>

</html>