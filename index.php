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
		<div id="header_container">
			<img class="logo" src="wp-content/themes/founders-list-theme/images/founders-list-logo.png" alt="Founders Logo" width="300px" height="90px" />
			<p class="header_text">The <b>who's who </b> list of <b>people at Founders</b>! Check it out and see if there's someone you can help out or vice versa!</p>
		</div>
		
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
							<li class="social">Social</li>
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
							<li class="social">Social</li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social">Social</li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social">Social</li>
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
							<li class="social">Social</li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social">Social</li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
							<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social">Social</li>
						</ul>
					</li>
					
					<li class="user_post">
						<div class="user_info">
							<p>John Doe</p>
						</div>
						<ul class="contact_info">
						<li class="email"><a href="#">Email</a></li>
							<li class="site"><a href="#">Website</a></li>
							<li class="social">Social</li>
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
							<li class="social">Social
							<p class="showMe">Twitter, Facebook, and LinkedIn</p>
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
							<li class="social">Social
							<div class="showMe">Twitter, Facebook, and LinkedIn</div>
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
							<li class="social">Social
							<div class="showMe">Twitter, Facebook, and LinkedIn</div>
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
							<li class="social">Social
							<div class="showMe">Twitter, Facebook, and LinkedIn</div>
							</li>
						</ul>
					</li>
				</ul>		
			</div>
		</div>
		
		<div class="clear"></div>
			
		</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	<script type="text/javascript">
		$('li.social').on('click' , function(){
			$(this).children('div.showMe').toggle(750);
			
			});
	</script>
			
		
		<footer>
		
		</footer>
		


		