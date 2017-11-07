<div class="sidebar col-md-3">
	<div class="img">
		<?php $image = get_field('img', "option"); ?>
		<img class="profile-pic" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>">
	</div>
	<p class="about-me"><?php the_field("about_me", "option"); ?>
	</p>
	<div class="social-container">
		<a target="_blank" href="https://www.facebook.com/<?php the_field('facebook','option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a target="_blank" href="https://twitter.com/<?php the_field('twitter','option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a target="_blank" href="https://www.instagram.com/<?php the_field('instagram','option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a target="_blank" href="https://www.pinterest.com/<?php the_field('pinterest','option'); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
	</div>
	<div class="top-posts">
		<h4>Top Posts</h4>
		<?php 
		$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
		$counter = 0;
		while ( $popularpost->have_posts() ) : $popularpost->the_post(); $counter++; ?>
			<?php echo $counter; ?>. <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
		<?php endwhile; ?>
	</div>
	<?php echo do_shortcode("[instagram-feed]"); ?>

