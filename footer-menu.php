

<section id="footer-2" class="secondary-menu bottom-menu" style="background-image: url(<?php echo get_template_directory_uri();?>/img/footer-bg-min.jpg);">
	 <div class="inner">
		 <div class="centerwrap">
	 		<div class="footer-logo">
				<a href="/" title="4 Flutes Machining">
					<img src="<?php echo get_template_directory_uri();?>/img/footer-logo-min.png" alt="Logo"/>
				</a>
			</div>
			<?php 
			wp_nav_menu(

				array(

					'theme_location' => 'footer-menu',
					'container' => 'div',
					'container_class' => 'footer-menu',
					'container_id' => 'footer-menu'
				)

			);
			?>
			<div class="buttonwrap">
				<a href="/contact" class="button more-link">Request Quote</a>
			</div> 
	
			<!-- <div class="bottom-bar">
				<p><strong>VICKSBURG, MICHIGAN</strong> | ph <a href="tel:12693520009">(269) 352 - 0009</a></p>
			</div> -->

			<div id="footer-widget" class="first">
				<div class="centerwrap">
					<?php if(is_active_sidebar('footer-widget-1')){
						dynamic_sidebar('footer-widget-1');
					}
					?>
				</div>
			</div>
		</div>
	</div> 
</section>
</div>



