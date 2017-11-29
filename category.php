<?php get_header(); ?>
<div class="col-md-9 main-gutter">
<?php 
$currCat = get_category(get_query_var('cat'));
  $cat_name = $currCat->name;
  $cat_id   = get_cat_ID( $cat_name );
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
  $args = array( 'posts_per_page' => 8, 'paged' => $paged, 'post_type' => 'post', 'cat' => $cat_id,   'pagination' => true, 'orderby' => 'date', );
  $postslist = new WP_Query( $args );
?>
  <?php if ( $postslist->have_posts() ) { ?>
    <h2 class="line"><?php single_cat_title(); ?></h2>
    <?php $myCount = $postslist->post_count;  ?>
    <?php $counter = 0; $totalCounter = 0;
    while ( $postslist->have_posts() ) : $postslist->the_post(); $totalCounter++;   
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


      </div>
 
      </div>
      <?php if ($counter == 2 || $totalCounter == 8 || $myCount == $totalCounter ) {
       echo "</div>"; $counter = 0; } ?>
    <?php endwhile; // End Loop ?>
   
    <div class="btn-holder">

      <?php next_posts_link( '&laquo; Older', $postslist->max_num_pages ); ?>
      <?php previous_posts_link( 'Recent &raquo;' ); ?> 
      <?php wp_reset_postdata();?>
    </div>

    <?php } else { ?>
    <div class="col-sm-12"><p>Sorry, no posts are here yet :(</p></div>
    <?php } ?>
  </div>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>