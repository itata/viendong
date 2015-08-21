<div id="secondary" class="secondary col-md-4">

	<aside class="widget widget-category">
		<h3>Dịch vụ vận chuyển</h3>
		<ul>
			<li><a href="">Giao hàng tận nhà - Door to door</a></li>
			<li><a href="">Giao hàng tận nhà - Door to door</a></li>
			<li><a href="">Giao hàng tận nhà - Door to door</a></li>
		</ul>
	</aside>
	
	<aside class="widget widget-post">
		<h3 class="widget_title">Tin tức</h3>
		<div class="widget_content">
			<ul>
	    		<?php $query = new WP_Query( array( 'cat' => '2' ) ); while ( $query->have_posts() ) : $query->the_post(); ?>
				<li class="row">
					<figure class="col-md-4">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail( 'full', array('class' => 'img-responsive' ));?>
						</a>
					</figure>

					<div class="col-md-8">
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
					</div>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div>
	</aside>

	<aside class="widget widget-support">
		
		<h3>Hỗ trợ khách hàng</h3>
		
		<ul>
			<li>
				<p class="name">Mr. A</p>
				<p>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-hotline.png" width="20"> 09xx xxx xxx</span>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-skype.png" width="22"> mracskh </span>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-viber.png" width="18"> mracskh </span>
				</p>
			</li>
			<li>
				<p class="name">Mr. A</p>
				<p>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-hotline.png" width="20"> 09xx xxx xxx</span>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-skype.png" width="22"> mracskh </span>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-viber.png" width="18"> mracskh </span>
				</p>
			</li>
			<li>
				<p class="name">Mr. A</p>
				<p>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-hotline.png" width="20"> 09xx xxx xxx</span>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-skype.png" width="22"> mracskh </span>
					<span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ico-viber.png" width="18"> mracskh </span>
				</p>
			</li>
		</ul>

	</aside>

</div>