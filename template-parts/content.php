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
      <?php the_post_thumbnail(); ?>
		  <?php the_title(); ?>
		</a>
	</div>

</div>
