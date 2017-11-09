<?php get_header(); ?>
<div class="col-md-9 main-gutter">
  <?php if ( have_posts() ) : ?>
    <h2 class="line"><?php single_cat_title(); ?></h2>
    <?php $myCount = $wp_query->found_posts;	?>
    <?php $counter = 0; $totalCounter = 0;
    while ( have_posts() ) : the_post(); $totalCounter++;   
    $counter++; ?>
      <?php if ($counter == 1) { echo "<div class='cat-row'>"; } ?>
      <div class="col-sm-6 outer-padding">
      <div class="article-container">
 
      <?php $image = get_field('img'); ?>
        <?php if($image){ ?>
        <a class="img-link" href="<?php the_permalink(); ?>">
        <img  class="article-img" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"></a> <?php } ?>
        <div class="inner-padding">
        <a  class="title-link" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <p><?php echo get_excerpt_custom(get_permalink()); ?></p>
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
    <p>Sorry, no posts are here yet :(</p>
    <?php endif; ?>
  </div>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>