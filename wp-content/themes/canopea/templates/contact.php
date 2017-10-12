<?php
/**
 * The template for displaying the home page
 *
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canopea
 */

get_header(); ?>

	<section id="contact-single" style="background-image:url(http://localhost/new-canopea/wp-content/uploads/2017/09/contact-single.jpg);background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<div class="contact-wrapper">
						<h2 class="contat-title">CONTACTS</h2>
						<!-- <div class="contact-btn">
							<button type="button" class="badge badge-pill badge-light" data-toggle="modal" data-target="#myModal">Écrivez-nous !</button>
						</div> -->
						<p class="contact-details">
							<span class="d-wrapper"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i><span><a href="mailto:canopea.webmarketing@gmail.com">canopea.webmarketing@gmail.com</a></span></span>
							<span class="d-wrapper"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><span>+33 7 68 42 50 78 / +41 78 710 64 86</span></span>
						</p>
					</div>
					<div class="social-wrapper"><a href="https://www.facebook.com/canopea.webmarketing/" target="_blank"><i class="fa fa-facebook-square fa-5x" aria-hidden="true"></i></a></div>
					<div class="social-wrapper"><a href="https://twitter.com/Canopea_webmark" target="_blank"><i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i></a></div>
					<div class="social-wrapper"><a href="https://www.instagram.com/canopea.webmarketing/" target="_blank"><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></a></div>
					<div class="social-wrapper"><a href="https://www.pinterest.fr/canopeawebmarketing/" target="_blank"><i class="fa fa-pinterest-square fa-5x" aria-hidden="true"></i></a></div>
					<div class="social-wrapper"><a href="https://www.youtube.com/channel/UC6feBJOHLxGIl1nDRIX9QzA" target="_blank"><i class="fa fa-youtube-square fa-5x" aria-hidden="true"></i></a></div>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</section>

<!-- 	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div> -->
	

<?php
get_footer();
