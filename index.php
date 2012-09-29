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
 * @package Founders List Theme
 * @since Founders List Theme 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php founders_list_content_nav( 'nav-above' ); ?>

				<?php
				
				$trades = get_terms( 'fl_trade', 'hide_empty=0');
				
				foreach( $trades as $trade ) {
					
					$args = array(
						'tax_query'	=> array(
							array(
								'taxonomy'	=> 'fl_trade',
								'field'		=> 'id',
								'terms'		=> $trade->term_id
							)
						)
					);
					
					$post_query = new WP_Query( $args );
					
					echo '
					<div class="trade-group">
						<h2>' . $trade->name . '</h2>
						<ul>';
					
					while( $post_query->have_posts() ) : $post_query->the_post();
						$email = get_post_meta( get_the_ID(), '_fl_email_address', true );
						$rss = get_post_meta( get_the_ID(), '_fl_website_url', true );
						$twitter = get_post_meta( get_the_ID(), '_fl_twitter_url', true );
						$facebook = get_post_meta( get_the_ID(), '_fl_facebook_url', true );
						
						echo '<li>';
						echo '<span class="title">' . the_title() . '</span>';
						
						echo '<div class="contact-info">';
							echo '<ul>';
							if ( $email ) {
								echo '<li class="email"><a href="mailto:' . $email . '" class="ss-mail"></a></li>';
							}
							if ( $rss ) {
								echo '<li class="rss"><a href="' . $rss . '" class="ss-rss"></a></li>';
							}
							if ( $twitter ) {
								echo '<li class="twitter"><a href="' . $twitter . '" class="ss-twitter"></a></li>';
							}
							if ( $facebook ) {
								echo '<li class="facebook"><a href="' . $facebook . '" class="ss-facebook"></a></li>';
							}
							echo '</ul>';
						echo '</div><!-- .contact-info -->';
						
						echo '</li>';
					endwhile;
					
					echo '</ul>
					</div><!-- .trade-group -->';	
					
				}
				
				?>

				<?php founders_list_content_nav( 'nav-below' ); ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>