<?php /* Template Name: About Me */ ?>
<?php get_header(); ?>
		<div class="col-md-10 col-md-offset-1">
		<h2 class="line text-center"><?php the_field("page_title") ?></h2>
		<?php $image = get_field('img'); ?>
				<?php if($image){ ?>
				<img class="main-img" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> <?php } ?>

				<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

?> 
		</div>

	<?php get_footer(); ?>
	


