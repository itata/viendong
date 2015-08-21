<?php 
/*
	Template Name: Contact
*/
?>
<?php get_header(); ?>

	<main id="main" class="site-main" role="main">

		<div class="main-content row">

			<div id="primary" class="content-area col-xs-12 col-md-12">

				<article class="single-page content-post">

					<?php while ( have_posts() ) : the_post(); ?>

					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13270.402431707873!2d-117.9622309!3d33.7451424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e39da6398593b7!2sVien+Dong+Shipping!5e0!3m2!1sen!2s!4v1439387472037" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<div class="entry-content row">
						<div class="col-xs-12 col-md-4">
							<?php the_content(); ?>
						</div>
						<div class="office col-xs-12 col-md-3">
							<div class="office-1">
								<span>Office 1:</span>

								<p>964 Story Rd San Jose, CA 95122</p>
								<p>Phone:(408) 275 8800</p>
								<p>Contact: Mr .Tuyen or Ms. Dung.</p>
								<p>viendongsanjose@gmail.com</p>
							</div>

							<div class="office-1">
								<span>Office 2:</span>

								<p>625 E. Valley Blvd San Gabriel,, CA 91776</p>
								<p>Phone: (626) 288 8851</p>
								<p>Contact: Mr. Vương</p>
							</div>
						</div>

						<div class="contact-form col-xs-12 col-md-5">
							<?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form 1"]' ); ?>
						</div>
					</div>

						

					<footer class="entry-footer">
						
					</footer>

					<?php endwhile; ?>

				</article>

			</div>

		</div>

	</main>

<?php get_footer(); ?>