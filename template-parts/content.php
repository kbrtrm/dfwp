<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="col-xs-4">
  <a href="<?php the_permalink(); ?>">
  <?php the_post_thumbnail($post->ID, array(300,300, true)); ?>
  <h4><?php the_title(); ?></h4>
  </a>
  <?php the_excerpt(); ?>
</div>
