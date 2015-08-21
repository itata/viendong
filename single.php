<?php get_header(); ?>

	<main id="main" class="site-main" role="main">

		<div class="main-content row">

			<?php get_sidebar(); ?>
			
			<div id="primary" class="content-area col-md-8">

				<article class="single-post content-post">

					<?php while ( have_posts() ) : the_post(); ?>

					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<footer class="entry-footer">
						
					</footer>

					<?php endwhile; ?>

				</article>

			</div>

		</div>

	</main>

<?php get_footer(); ?>