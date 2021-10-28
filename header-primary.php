<section id="header-primary" >
  			<div class="menu-bar">
				<div class="logo">
					<a href="/" title="ball cattle company">
						<img src="<?php echo get_template_directory_uri();?>/img/logo-min.png" alt="Logo" />
					</a>
				</div>

				<?php 
						wp_nav_menu(

							array(

							'theme_location' => 'primary-menu',
							'container' => 'div',
							'container_class' => 'callout-menu',
							'container_id'=> 'nav-callouts'
							)

						);
					?>
					<div class="burger">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
					</div>
				<?php 
					wp_nav_menu(

						array(

						'theme_location' => 'primary-menu',
						'container' => 'div',
						'container_class' => 'mobile-menu',
						'container_id' => 'mobile',
						)

					);
				?> 	
  			</div>

</section>
