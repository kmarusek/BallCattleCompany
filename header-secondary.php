<section id="header2" class="subpage" style="background-image:url(<?php the_field('subpage_hero_img');?>);">
  			<div class="menu-bar">
				<div class="logo">
					<a href="/" title="Pushard Welding">
						<img src="<?php echo get_template_directory_uri();?>/img/logo-min.png" alt="Logo" />
					</a>
				</div>
				<div class="nav-menu">
					<?php 
						wp_nav_menu(

							array(

							'theme_location' => 'top-menu',
							'container' => 'div',
							'container_class' => 'main-menu',
							'container_id' => 'menu'
							)

						);
					?> 

				</div>

  			</div>

</section>