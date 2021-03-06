<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Réseaux Sociaux
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canopea
 */

get_header(); ?>

	<?php if(have_rows('banniere')): while(have_rows('banniere')): the_row(); ?>
	
	<section id="banner-top" class="banner-top" style="background-image:url('<?php the_sub_field('fond')?>'); background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center big-title-light"><?php the_sub_field('titre') ?></h1>
					<h2 class="text-center sub-title-light"><?php the_sub_field('sous-titre') ?></h2>
				</div>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif ?>

	<?php if(have_rows('section')): while(have_rows('section')): the_row(); ?>

	<section id="first-section" class="pt-lg-5 pb-lg-5" style="background-image:url('<?php the_sub_field('fond'); ?>'); background-size:cover; background-position: center">
		<div class="container">
			<div class="row pb-lg-5 flex">
				<div class="col-lg-6">
					<h2 class="img-title"><?php the_sub_field('titre') ?></h2>
					<h3 class="sub-title" style="padding:1em 0;"><?php the_sub_field('sous-titre') ?></h3>
					<p class="highlight-text" style="line-height: 30px; letter-spacing:1px">
						<?php the_sub_field('texte') ?>
					</p>
				</div>
				<div class="col-lg-6">
					<img src="<?php the_sub_field('image'); ?>" alt="Formation réseaux sociaux - Canopea" class="text-center margin-mobile" data-aos="fade-up">
				</div>
			</div>
			<div class="row pb-lg-5 pt-lg-5 flex">
				<div class="col-lg-6">
					<img src="<?php the_sub_field('image_2'); ?>" alt="Formation réseaux sociaux - Canopea" class="text-center hide-img" data-aos="fade-up">
				</div>
				<div class="col-lg-6">
					<h2 class="img-title"><?php the_sub_field('titre_2') ?></h2>
					<h3 class="sub-title" style="padding:1em 0;"><?php the_sub_field('sous-titre_2') ?></h3>
					<p class="highlight-text" style="line-height: 30px; letter-spacing:1px">
						<?php the_sub_field('texte_2') ?>
					</p>
				</div>
				<img src="<?php the_sub_field('image_2'); ?>" alt="Formation réseaux sociaux - Canopea" class="text-center hide-desk" data-aos="fade-up">
			</div>
		</div>
	</section>

	<?php endwhile; else: endif ?>

	<?php if(have_rows('contact')): while(have_rows('contact')): the_row(); ?>

	<section id="contact" style="background-image:url(<?php the_sub_field('fond'); ?>);background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<div class="contact-wrapper">
						<h2 class="contat-title">CONTACTS</h2>
						<div class="contact-btn">
							<a href="./contact"><button type="button" class="badge badge-pill badge-light">Écrivez-nous !</button>
						</div>
						<p class="text-center">
							<a href="https://www.facebook.com/canopea.webmarketing/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
							<a href="https://twitter.com/Canopea_webmark" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/canopea.webmarketing/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
							<a href="https://www.pinterest.fr/canopeawebmarketing/" target="_blank"><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
							<a href="https://www.youtube.com/channel/UC6feBJOHLxGIl1nDRIX9QzA" target="_blank"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</section>
	
	<?php endwhile; else: endif ?>

<?php
get_footer();
