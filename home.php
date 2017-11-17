<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="col-md-9 main-gutter">

  <?php
	global $post;	
	$args = array( 'posts_per_page' => 5);
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<div class="article-container">
			<div class="text-center">
				<h2><?php the_title(); ?></h2>
				<h4 class="line"><?php echo get_the_date(); ?></h4>
				<?php $image = get_field('img'); ?>
				<?php if($image){ ?>
				<img class="article-img" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> <?php } ?>
			</div>
			<div>
				<?php the_excerpt(); ?>
				<a class="btn btn-md btn-default" href="<?php the_permalink(); ?>">
					Continue Reading
				</a>
			</div>
			<div class="bottom">
				Category: <?php the_category( " | ");   ?>
				<span class="social-span">
					<a title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
						<i class="fa fa-facebook-official" aria-hidden="true">
						</i>
					</a>
					<a title="Pin it" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $image['url']; ?>" target="_blank">
						<i class="fa fa-pinterest" aria-hidden="true">
						</i>
					</a>
					<a title="Tweet it" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>&hashtags=MillennialMomTimes<?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo ',' . $tag->name; }}?>" target="_blank">
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
					</a>
					<a href="mailto:<?php the_field('email', 'option'); ?>?body=<?php echo urlencode(get_permalink()); ?>">
						<i class="fa fa-envelope" aria-hidden="true">
						</i>
					</a>
				</span>
				<span class="comment-span">  
				<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed'); ?>
				</span>
			</div>
		</div>
	<?php endforeach; wp_reset_postdata();?>
</div>

  	<?php get_sidebar(); ?>
  
<?php get_footer(); ?>