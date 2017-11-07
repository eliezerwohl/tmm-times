<?php get_header(); ?>
<div class="col-sm-9 main-gutter">
  <?php if ( have_posts() ) : ?>
    <h2 class="line"><?php single_cat_title(); ?></h2>
    <?php $myCount = $wp_query->found_posts;	?>
    <?php $counter = 0; $totalCounter = 0;
    while ( have_posts() ) : the_post(); $totalCounter++;   
    $counter++; ?>
      <?php if ($counter == 1) { echo "<div class='cat-row'>"; } ?>
      <div class="col-md-6 outer-padding">
      <div class="article-container">
 
      <?php $image = get_field('img'); ?>
        <?php if($image){ ?>
        <img  class="article-img" src="<?php echo $image['sizes']['medium']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>"> <?php } ?>
        <div class="inner-padding">
        <h3><?php the_title(); ?></h3>
        <p><?php echo get_excerpt_custom(); ?></p>
        </div>

      <!-- <div>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">
          <button class="btn btn-md btn-default">Continue Reading</button>
        </a>
      </div> -->
<!--       <div class="bottom">
       
       
        <span class="comment-span">  
        <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed'); ?>
        </span>
      </div> -->
      </div>
 
      </div>
      <?php if ($counter == 2 || $myCount == $totalCounter ) {
       echo "</div>"; $counter = 0; } ?>
    <?php endwhile; // End Loop

    else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>