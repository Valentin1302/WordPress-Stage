<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package interlignes
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="texte">
		<h1><?= get_field("titreprincipal") ?></h1>
		<div class="image">
			<div class="ext">
				<img src="<?= get_field("imgfacade")["url"] ?>" alt="">
			</div>
			<div class="horaire">
				<div class="info">
					<p><?= get_field("horaire") ?></p>
				</div>
				<div class="jour">
					<p><?= get_field("day") ?></p>
				</div>
				<div class="heure">
					<p><?= get_field("hour") ?></p>
				</div>
			</div>
		</div>


		<div class="biographie">
			<div class="intro">
				<h2><?= get_field("titlepre") ?></h2>
			</div>
			<div class="histoire">
				<p><?= get_field("presentation") ?></p>
			</div>
		</div>
	</div>
	<h2><?= get_field("h2sel") ?></h2>
	<section class="bookList">

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgkiem")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namekiem") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricekiem") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgcopro")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namecopro") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricecopro") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgconte")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("nameconte") ?></h3>
			<div class="priceImg">
				<p><?= get_field("priceconte") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgmal")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namemal") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricemal") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgmortel")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namemortel") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricemortel") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>


		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgroyaume")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("nameroyaume") ?></h3>
			<div class="priceImg">
				<p><?= get_field("priceroyaume") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>
	</section>

	<h2 id="actu" class="titleBook"><?= get_field("actu") ?></h2>
	<section class="bookList">
		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgflorent")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("nameflorent") ?></h3>
			<div class="priceImg">
				<p><?= get_field("priceflorent") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgkiemm")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namekiemm") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricekiemm") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgengre")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("nameengre") ?></h3>
			<div class="priceImg">
				<p><?= get_field("priceengre") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgfranck")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namefranck") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricefranck") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>

		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgtsunami")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("nametsu") ?></h3>
			<div class="priceImg">
				<p><?= get_field("pricetsu") ?></p>
				<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
			</div>
		</div>


		<div class="blocBook">
			<div>
				<img class="imgBook" src="<?= get_field("imgmaison")["url"] ?>" alt="">
			</div>
			<h3><?= get_field("namemaison") ?></p>
				<div class="priceImg">
					<p><?= get_field("pricemaison") ?></p>
					<img class="imgpa" src="<?= get_field("imgpanier")["url"] ?>" alt="">
				</div>
		</div>



</main><!-- #main -->

<?php
