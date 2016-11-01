<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="square-con">
	<div class="square">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail($post->ID, array(300,300, true)); ?>
		  <h3><?php the_title(); ?></h3>
		</a>
	</div>

</div>
