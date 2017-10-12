<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Qui sommes-nous ?
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canopea
 */

get_header(); ?>

	<section id="banner-top" class="banner-top" style="background-image:url('http://giangreco.agency/wp-content/uploads/2014/10/giangreco_agency.jpg'); background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center big-title-light">Qui sommes-nous ?</h1>
					<h2 class="text-center sub-title-light">Agence de communication</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="intro" class="pt-lg-5 pb-lg-5" style="background-image:url('<?php the_field('qsn_fond'); ?>'); background-size:cover; background-position:center center">
		<div class="container">
			<div class="row  mb-lg-5">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase big-title-dark"><?php the_field('qsn_titre'); ?></h2>
					<h3 class="text-uppercase sub-title-dark"><?php the_field('qsn_sous-titre'); ?></h4>
				</div>
			</div>

			<div class="row pt-lg-5">
				<div class="col-lg-12 text-center">
					<img src="<?php the_field('image_gauche'); ?>" class="img-fluid">
				</div>
				<div class="col-lg-12">
					<p class="headline-solo text-center">
						<?php the_field('headline') ?>
					</p>
				</div>
				<div class="col-lg-6">
					<p class="highlight-text text-left">
						<?php the_field('qsn_text_g') ?>
					</p>
				</div>
				<div class="col-lg-6">
					<p class="highlight-text text-left">
						<?php the_field('qsn_text_d') ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" style="background-image:url('<?php the_field('qsn_contacts'); ?>');background-size:cover">
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

<?php
get_footer();
