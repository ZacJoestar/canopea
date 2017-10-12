<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Visites virtuelles
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

	<?php if(have_rows('premiere_section')): while(have_rows('premiere_section')): the_row(); ?>

	<section id="intro" class="pt-lg-5" style="background-image:url('<?php the_sub_field('fond'); ?>'); background-size:cover; background-position:top center">
		<div class="container">
			<div class="row  mb-lg-5">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase big-title-dark"><?php the_sub_field('titre'); ?></h2>
					<h3 class="text-uppercase sub-title-dark"><?php the_sub_field('sous-titre'); ?></h3>
				</div>
			</div>

			<div class="row pt-sm-5 pb-lg-5">
				<div class="col-lg-12 text-center">
					<img data-aos="fade-up" src="<?php the_sub_field('image'); ?>" class="img-fluid">
				</div>
			</div>
			<div class="row flex pt-lg-5 vv">

				<?php if(have_rows('icon_box_1')): while(have_rows('icon_box_1')): the_row(); ?>

				<div class="col-lg-4 icon-box text-center">
					<i class="fa <?php the_sub_field('icon'); ?> fa-3x " aria-hidden="true"></i>
					<h5 class="text-uppercase"><?php the_sub_field('titre') ?></h5>
					<p><?php the_sub_field('texte'); ?></p>
				</div>

				<?php endwhile; else: endif; ?>

				<?php if(have_rows('icon_box_2')): while(have_rows('icon_box_2')): the_row(); ?>

				<div class="col-lg-4 icon-box text-center">
					<i class="fa <?php the_sub_field('icon'); ?> fa-3x " aria-hidden="true"></i>
					<h5 class="text-uppercase"><?php the_sub_field('titre') ?></h5>
					<p><?php the_sub_field('texte'); ?></p>
				</div>

				<?php endwhile; else: endif; ?>
				
				<?php if(have_rows('icon_box_3')): while(have_rows('icon_box_3')): the_row(); ?>

				<div class="col-lg-4 icon-box text-center">
					<i class="fa <?php the_sub_field('icon'); ?> fa-3x " aria-hidden="true"></i>
					<h5 class="text-uppercase"><?php the_sub_field('titre') ?></h5>
					<p><?php the_sub_field('texte'); ?></p>
				</div>

				<?php endwhile; else: endif; ?>

			</div>
		</div>
		<div class="container no-padding">
			<div class="col-lg-12 text-center">
				<img data-aos="fade-up" src="<?php the_sub_field('big_image'); ?>" class="img-fluid">
			</div>	
		</div>
	</section>

	<?php endwhile; else: endif; ?>

	<?php if(have_rows('deuxieme_section')): while(have_rows('deuxieme_section')): the_row(); ?>

	<section id="google-trust" style="background-image:url(<?php the_sub_field('fond'); ?>);background-size:cover">
		<div class="container gg-trust">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<img src="http://localhost/new-canopea/wp-content/uploads/2017/09/Google-Trusted.png" alt="" class="img-fluid black-white">
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif; ?>


	<section id="third-section" class="canopea-bg">
		<img src="http://localhost/new-canopea/wp-content/uploads/2017/09/canon-trans.png" class="floating-img hide-img" data-aos="zoom-in">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 pt-lg-5 pb-lg-5">
					<h2 class="img-title-light">Visite Virtuelle Google Street View Trusted</h2>
					<h3 class="sub-title-light" style="padding:1em 0;">pourquoi choisir cette technologie?</h3>
					<p class="highlight-text-light" style="line-height: 30px; letter-spacing:1px">
						Les statistiques démontrent clairement qu’un consommateur, face à deux propositions d’établissements similaires sur le net, choisira l’établissement qui possède une visite virtuelle car il sera certain de ce qu’il trouvera en s’y rendant tandis que des photos classiques mettent toujours le doute car celles-ci ne montrent pas tout et peuvent être retouchées, voire « photoshopées ». Avec la visite virtuelle, pas de triche possible, tout est visible, comme si on y était!
					</p>
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</section>

	<section id="fourth-section">
		<div class="container">
			<div class="row pt-lg-5 pb-lg-5">
				<div class="col-lg-12">
					<h2 class="text-uppercase big-title-dark text-center">Street View Trusted</h2>
					<h3 class="text-uppercase text-center sub-title-dark">Visites virtuelles Google haute qualité</h3>
				</div>
			</div>
			<div class="row pt-lg-5 pb-lg-5">
				<div class="col-lg-6">
					<img src="http://localhost/new-canopea/wp-content/uploads/2017/09/flat_browser_dark.png" alt="" class="img-fluid" data-aos="fade-up">
				</div>
				<div class="col-lg-6">
					<p class="headline-solo">De nombreux avantages:</p>
					<ul class="advantages">
						<li><i class="fa fa-check-square-o fa-1x" aria-hidden="true"></i>Totalement et facilement intégrables à n’importe quel site internet</li>
						<li><i class="fa fa-check-square-o fa-1x" aria-hidden="true"></i>Peuvent être mises en lien sur les réseaux sociaux tels que Facebook</li>
						<li><i class="fa fa-check-square-o fa-1x" aria-hidden="true"></i>Menus facilitant et dynamisant l’utilisation de votre visite virtuelle </li>
						<li><i class="fa fa-check-square-o fa-1x" aria-hidden="true"></i>Offrent une grande visibilité sur internet</li>
						<li><i class="fa fa-check-square-o fa-1x" aria-hidden="true"></i>Améliorent de beaucoup votre référencement</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="exemple-vv">
		<div class="container-fluid no-padding">
			<div class="row">
					<div class="col-md-2 col-sm-1 col-md-offset-1 wrapper-vv">
						<img src="http://blog.ice-shop.eu/wp-content/uploads/2017/05/restaurant-ice-shop.jpg" alt="Visites virtuelles - Canopea" class="img-fluid img-vv">
						<div class="vv-content">
							<h3>le 1680</h3>
							<a href="https://goo.gl/WN7rfo" target="_blank"><button type="button" class="badge badge-pill badge-light">Découvrir</button></a>
						</div>
					</div>
					<div class="col-md-2 col-sm-1 wrapper-vv">
						<img src="http://blog.ice-shop.eu/wp-content/uploads/2017/05/restaurant-ice-shop.jpg" alt="Visites virtuelles - Canopea" class="img-fluid img-vv">
						<div class="vv-content">
							<h3>Studio Pilates Lausanne</h3>
							<a href="https://goo.gl/j59Gz7" target="_blank"><button type="button" class="badge badge-pill badge-light">Découvrir</button></a>
						</div>
					</div>
					<div class="col-md-2 col-sm-1 wrapper-vv">
						<img src="http://blog.ice-shop.eu/wp-content/uploads/2017/05/restaurant-ice-shop.jpg" alt="Visites virtuelles - Canopea" class="img-fluid img-vv">
						<div class="vv-content">
							<h3>Carosserie de Gingins</h3>
							<a href="https://goo.gl/AWZmtY" target="_blank"><button type="button" class="badge badge-pill badge-light">Découvrir</button></a>
						</div>
					</div>
					<div class="col-md-2 col-sm-1 wrapper-vv">
						<img src="http://blog.ice-shop.eu/wp-content/uploads/2017/05/restaurant-ice-shop.jpg" alt="Visites virtuelles - Canopea" class="img-fluid img-vv">
						<div class="vv-content">
							<h3>Garage RMB Cars </h3>
							<a href="https://goo.gl/niCgPU" target="_blank"><button type="button" class="badge badge-pill badge-light">Découvrir</button></a>
						</div>
					</div>
					<div class="col-md-2 col-sm-1 wrapper-vv">
						<img src="http://blog.ice-shop.eu/wp-content/uploads/2017/05/restaurant-ice-shop.jpg" alt="Visites virtuelles - Canopea" class="img-fluid img-vv">
						<div class="vv-content">
							<h3>Le Régent Collège</h3>
							<a href="https://tourmake.it/leregentcollege" target="_blank"><button type="button" class="badge badge-pill badge-light">Découvrir</button></a>
						</div>
					</div>
			</div>
		</div>
	</section>

	<section id="contact" style="background-image:url('http://agence-web-valenciennes.fr/wp-content/uploads/2017/09/contact-vv.jpg');background-size:cover">
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
