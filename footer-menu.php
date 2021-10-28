

<section id="footer-2" class="secondary-menu bottom-menu">
	 <div class="inner">
			<div id="footer-widget" class="first">
				<div class="centerwrap">
					<div class="widget widget-1">
					<?php if(is_active_sidebar('footer-widget-1')){
						dynamic_sidebar('footer-widget-1');
					}
					?>
					</div>
					<div class="widget widget-2">
						<div class="item">
							<?php if(is_active_sidebar('footer-widget-2')){
								dynamic_sidebar('footer-widget-2');
							}
							?>
						</div>
						<div class="item">
							<?php if(is_active_sidebar('footer-widget-3')){
								dynamic_sidebar('footer-widget-3');
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>
</div>



