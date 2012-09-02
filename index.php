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
			<div id="pageLayout">
			<div id="designers" class="type">
				<h1 class="type_heading">Designers</h1>
					</br>
				<ul>
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>

						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
							</li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
				</ul>
			</div>
			
			<div id="developers" class="type">	
				<h1 class="type_heading">Developers</h1>
					</br>	
				<ul>
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
						<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
				</ul>
			</div>
			
			</br>
			
				<div id="biz_dev" class="type">
					<h1 class="type_heading">Biz Dev</h1>
						</br>
					<ul>
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social"><a href="#">Social</a></li>
						</ul>
					</li>
				</ul>		
			</div>
			<p class="twitter">twitter</p>
		</div>
		
		<div class="clear"></div>
			
		</div>
		
		<footer>
		
		</footer>
		
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	<script type="text/javascript">
		$('a.social').on('click' , function() {
			$('.twitter').show('slow');
		});
	
	</script>


		