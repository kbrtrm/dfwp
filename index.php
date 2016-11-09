<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="grid-container">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<div class="container">
  <div class="row">
    <div class="col-xs-6">
      <img src="https://t3.ftcdn.net/jpg/01/12/66/28/240_F_112662868_0U3GhIIax2bLKolCjDCbBQUM0xSB3USt.jpg" alt="" />
			<br>
			<small class="caption">Disclaimer: This is image is the result of a stock photo search of the phrase "laughing computer guy." This is not me. I do agree with this spirit, though.</small>
    </div>
    <div class="col-xs-6">
      <h1>Hi, I'm a Human</h1>
      <p>I make things, blah, blah, blah BLAH. These are the things that everyone says. I've got ideas, shouting into the void, all things in all things.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente fugiat officiis perferendis repudiandae, labore excepturi perspiciatis eos distinctio nobis alias accusamus, sint necessitatibus! In.</p>
    </div>
  </div>
  <div class="row">&nbsp;</div>
  <div class="row">
    <div class="col-xs-9">
      <h2>Stuff I've Done</h2>
    </div>
    <div class="col-xs-3">
      <a href="#" class="btn btn-default btn-sm btn-block col-sm-4">View all projects</a>
    </div>
  </div>
<br>

  <div class="row">

		<?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 3 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	      <div class="col-xs-4">
					<a href="<?php the_permalink(); ?>">
	        <?php the_post_thumbnail(); ?>
	        <h4><?php the_title(); ?></h4>
					</a>
	        <?php the_excerpt(); ?>
	      </div>

		<?php endwhile; wp_reset_query(); ?>
  </div>

  <div class="row">&nbsp;</div>
  <div class="row">
    <div class="col-xs-9">
      <h2>Thoughts I've Had</h2>
    </div>
    <div class="col-xs-3">
      <a href="#" class="btn btn-default btn-sm btn-block col-sm-4">Read more blog posts</a>
    </div>
  </div>
	<br>
  <div class="row">

				<?php
				$args = array('post_type' => 'post', 'posts_per_page' => 2);
				$query = new WP_Query( $args );
				?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<a href="#">
				      <div class="col-sm-6">
				        <div class="row">
							<div class="col-xs-5">

								<a href="<?php the_permalink(); ?>">
		            <?php the_post_thumbnail('square-large'); ?>
								</a>
		          </div>
		          <div class="col-xs-7">
								<a href="<?php the_permalink(); ?>">
		            <h4><?php the_title(); ?></h4>
							</a>
		            <?php the_excerpt(); ?>
		          </div>
						</div>
		      </div>
		    </a>
					<?php endwhile; wp_reset_query(); ?>


  </div>
<div class="row">&nbsp;</div>
  <!-- <h2>Clients I've Worked With</h2>

  <div class="row client-grid">
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
    <div class="col-xs-2"><img src="http://placehold.it/200x200" alt="" /></div>
  </div> -->
</div>

			<?php
		endif;
		?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
