<?php get_header(); ?>
	
	<main id="main" class="site-main" role="main">
		
		<div class="site-slide">
			
			<?php echo do_shortcode( '[sliderpro id="1"]' ); ?>

		</div>

		<div class="site-slogan">
			<hgroup>
				<h1>CÔNG TY VẬN CHUYỂN HÀNG ĐẦU TỪ MỸ VỀ MÀ TỪ VIỆT NAM QUA MỸ</h1>
				<h3>Đặc biệt đây là công ty duy nhất của người việt tại hải ngoại có dịch vụ giao hàng ở Sài Gòn 24/24 theo yêu cầu của quý khách</h3>
			</hgroup>

			<span class="shipper-guy"></span>
		</div>
		
		<div class="our-services row">
			<?php 
				$menu_name = 'index';

			    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

				$menu_items = wp_get_nav_menu_items($menu->term_id);

				$menu_list = '<ul id="menu-' . $menu_name . '">';

				foreach ( (array) $menu_items as $key => $menu_item ) {
				   
			?>
			<article class="service col-md-4">
				<h2><a href="<?php echo $menu_item->url; ?>" title="<?php echo $menu_item->title; ?>"><?php echo $menu_item->title; ?></a></h2>
				<figure>
					<a href="<?php echo $menu_item->url; ?>" title="<?php echo $menu_item->title; ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/services.png" class="img-responsive">
					</a>
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A explicabo expedita voluptas corporis ipsa, sed excepturi, laborum est aperiam accusantium dolores, nisi aut minus repellendus perspiciatis dignissimos quam itaque aspernatur!</p>
				<a href="<?php echo $menu_item->url; ?>" title="<?php echo $menu_item->title; ?>" class="load-more">Read more »</a>
			</article>

			<?php } }?>
			
		</div>

		<div class="divided"></div>

		<div class="main-content row">

			<div id="secondary" class="secondary col-md-4">
				
				<aside class="widget widget-support">
					
					<h3>Hỗ trợ khách hàng</h3>
					
					<ul>
						<li>
							<p class="name">Mr. A</p>
							<p>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-hotline.png" width="20">09xx xxx xxx</span>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-skype.png" width="22"> mracskh </span>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-viber.png" width="18"> mracskh </span>
							</p>
						</li>
						<li>
							<p class="name">Mr. A</p>
							<p>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-hotline.png" width="20">09xx xxx xxx</span>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-skype.png" width="22"> mracskh </span>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-viber.png" width="18"> mracskh </span>
							</p>
						</li>
						<li>
							<p class="name">Mr. A</p>
							<p>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-hotline.png" width="20">09xx xxx xxx</span>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-skype.png" width="22"> mracskh </span>
								<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-viber.png" width="18"> mracskh </span>
							</p>
						</li>
					</ul>

				</aside>

			</div>
			
			<div id="primary" class="content-area col-md-8">

				<div class="index-new">
					<h3>Tin tức</h3>
					<ul>
						<?php $query = new WP_Query( array( 'cat' => '2' ) ); while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="row">
							<figure class="col-lg-3">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail( 'full', array('class' => 'img-responsive' ));?>
								</a>
							</figure>
							<div class="index-new-title col-lg-9">
								<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
								<p><?php the_excerpt(); ?></p>
							</div>
						</li>
						<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>

			</div>

		</div>

	</main>

<?php get_footer(); ?>