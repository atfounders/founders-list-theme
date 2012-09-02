<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package founderslist
 * @since founderslist 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<div id="designers" class="type">
				<div class="user_info">
					<p>John Doe</p>
				</div>
				<ul>
					<li clas="email">Email</li>
					<li class="site">Website</li>
					<li class="phone">Contact</li>
				
				</ul>
			
			</div>
			
			</br>
			
			<div id="developers" class="type">
				<div class="user_info">
					<p>John Doe</p>
				</div>
				<ul>
					<li clas="email">Email</li>
					<li class="site">Website</li>
					<li class="phone">Contact</li>
				
				</ul>
			
			</br>
			
			</div>
			
				<div id="biz_dev" class="type">
				<div class="user_info">
					<p>John Doe</p>
				</div>
				<ul>
					<li clas="email">Email</li>
					<li class="site">Website</li>
					<li class="phone">Contact</li>
				
				</ul>
			</div>
			
			</br>
			
			
			<?php if ( have_posts() ) : ?>

				<?php founderslist_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php founderslist_content_nav( 'nav-below' ); ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>