<?php get_header(); ?>
	<main id="main" class="site-main" role="main">

		<div class="main-content row">

			<?php get_sidebar(); ?>
			
			<div id="primary" class="content-area col-md-8">

				<h1 class="single_cat_title">Kết quả tìm kiếm</h1>

				<?php while ( have_posts() ) : the_post(); ?>
				<article class="archive-posts row">

					<figure class="col-md-3">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail( 'full', array('class' => 'img-responsive' ));?>
						</a>
					</figure>

					<div class="archive-title col-md-9">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(); ?></p>
					</div>
			
				</article>
				<?php endwhile; ?>

			</div>

		</div>

	</main>
<?php get_footer(); ?>