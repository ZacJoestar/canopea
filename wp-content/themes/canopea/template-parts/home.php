<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canopea
 */

get_header(); ?>

	<section id="banner-top" class="slider">
		<?php layerslider(1) ?>
	</section>

	<?php while(have_posts()) : the_post(); ?>


	<?php if(have_rows('titre_et_fond')): while(have_rows('titre_et_fond')) : the_row(); ?>

	<section id="intro" style="background-image:url(<?php the_sub_field('fond'); ?>);background-size:cover;" class="pt-lg-5 pb-lg-5">
		<div class="container">
			<div class="row  mb-lg-5">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase big-title-dark"><?php the_sub_field('titre'); ?></h2>
					<h4 class="text-uppercase sub-title-dark"><?php the_sub_field('sous-titre'); ?></h4>
				</div>
			</div>

			<?php endwhile; else: endif; ?>

			<div class="row pt-lg-5 flex">
				<div class="col-lg-6">

					<?php 
						if( have_rows('icon_boxs') ):
					    while( have_rows('icon_boxs') ) : the_row();
					?>

						<div class="row">

							<?php if( have_rows('icon_box_1') ): while( have_rows('icon_box_1') ) : the_row(); ?>

								<div class="col-lg-6 icon-box">
									<i class="fa <?php the_sub_field('icon_1'); ?> fa-3x " aria-hidden="true"></i>
									<h5 class="text-uppercase"><?php the_sub_field('titre_1') ?></h5>
									<p><?php the_sub_field('texte_1'); ?></p>
								</div>

							<?php endwhile;	else: endif; ?>

							<?php if( have_rows('icon_box_2') ): while( have_rows('icon_box_2') ) : the_row(); ?>

								<div class="col-lg-6 icon-box">
									<i class="fa <?php the_sub_field('icon_2'); ?> fa-3x " aria-hidden="true"></i>
									<h5 class="text-uppercase"><?php the_sub_field('titre_2') ?></h5>
									<p><?php the_sub_field('texte_2'); ?></p>
								</div>

							<?php endwhile;	else: endif; ?>

						</div>
						<div class="row">

							<?php if( have_rows('icon_box_3') ): while( have_rows('icon_box_3') ) : the_row(); ?>

								<div class="col-lg-6 icon-box">
									<i class="fa <?php the_sub_field('icon_3'); ?> fa-3x " aria-hidden="true"></i>
									<h5 class="text-uppercase"><?php the_sub_field('titre_3') ?></h5>
									<p><?php the_sub_field('texte_3'); ?></p>
								</div>

							<?php endwhile;	else: endif; ?>

							<?php if( have_rows('icon_box_4') ): while( have_rows('icon_box_4') ) : the_row(); ?>

								<div class="col-lg-6 icon-box">
									<i class="fa <?php the_sub_field('icon_4'); ?> fa-3x " aria-hidden="true"></i>
									<h5 class="text-uppercase"><?php the_sub_field('titre_4') ?></h5>
									<p><?php the_sub_field('texte_4'); ?></p>
								</div>

							<?php endwhile;	else: endif; ?>

						</div>

					<?php 
						endwhile;	
						else: 
						endif; 
					?>

				</div>
				<div class="col-lg-6 text-center">
					<img src="<?php the_field('image_droite'); ?>" alt="Canopea photographie" class="img-fluid hide-img" data-aos="fade-left">
				</div>
			</div>
			<!-- <div class="row text-center pt-lg-5">

				<?php if(have_rows('offres')): while(have_rows('offres')): the_row(); ?>

					<?php if(have_rows('offre_1')): while(have_rows('offre_1')): the_row(); ?>

					<div class="col-lg-3 item-offer">
						<img src="<?php the_sub_field('fond_1'); ?>" alt="" class="img-fluid">
						<div class="overlay">
							<h3 class="text-uppercase text-center offer-title"><?php the_sub_field('titre_1'); ?></h3>
							<a href="<?php the_sub_field('lien_bouton_1'); ?>" class="btn btn-light" target="_blank" role="button">Découvrir</a>
						</div>
					</div>

					<?php endwhile; else: endif; ?>

				<?php endwhile; else: endif; ?>

			</div> -->
		</div>
	</section>
	<section id="try-offers" style="background-image:url(http://agence-web-valenciennes.fr/wp-content/uploads/2017/09/Icon_back.jpg);background-size:cover">
		<div class="container">
			<div class="row pt-lg-5 flex">

				<?php if(have_rows('mise_en_lumiere')): while(have_rows('mise_en_lumiere')): the_row(); ?>

				<div class="col-lg-6 try-offers">
					<img src="<?php the_sub_field('image'); ?>" alt="Formation Webmarketing - Canopea" class="img-fluid hide-img" data-aos="fade-right">
				</div>
				<div class="col-lg-6">
					<h2 class="text-left" style="margin-bottom: 40px"><?php the_sub_field('titre'); ?></h2>
					<p style="text-align:justify">
						<?php the_sub_field('texte'); ?>
					</p>
				</div>

				<?php endwhile; else: endif; ?>

			</div>
		</div>
	</section>
	<section id="news" class="pt-lg-5 pb-lg-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-uppercase text-center big-title-dark"><?php the_field('titre'); ?></h2>
					<h4 class="text-uppercase text-center sub-title-dark"><?php the_field('sous-titre'); ?></h4>
					<?php the_field('shortcode'); ?>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" style="background-image:url('<?php the_field('fond_contacts'); ?>');background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-2"></div>
				<div class="col-lg-4 col-sm-8">
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
				<div class="col-lg-4 col-sm-2"></div>
			</div>
		</div>
	</section>

	<?php
		endwhile;
		wp_reset_query();
	?>


<?php
get_footer();
