<?php get_header(); ?>
	<div class="col-sm-9 main-gutter">
		<?php if (have_posts()) : while (have_posts()) : the_post();
   wpb_set_post_views(get_the_ID()); ?>
   		<div class="article-container">
			<div class="text-center">
				<h2><?php the_title(); ?></h2>
				<h4 class="line"><?php echo get_the_date(); ?></h4>
				<?php $image = get_field('img'); ?>
				<?php if($image){ ?>
				<img class="article-img" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>"> <?php } ?>
			</div>
			<div>
				<?php the_content(); ?>
				
			</div>
		</div>


    <?php comments_template();
 	endwhile; endif; ?>
	</div>

  	<?php get_sidebar(); ?>

<?php get_footer(); ?>