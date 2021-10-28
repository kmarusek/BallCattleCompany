<?php if(have_posts()): while( have_posts() ): the_post();?>

	<div class="gtco-testimonials" style="background-image: url(<?php the_field('testimonial_background_img');?>);">
	  <div class="contentwrap">
			<h2><?php the_field('testimonial_repeater_title');?></h2>
			<span class="bottom-border"></span>
    	
<?php if( have_rows('testimonial_carousel') ): ?>
		<div class="owl-carousel owl-carousel1 owl-theme">
    <?php while( have_rows('testimonial_carousel') ): the_row(); ?>
		<div>
		   <div class="card text-center">
          		<div class="card-body">
            		<p><?php the_sub_field('testimonial_testament');?></p>
					<h5>-<?php the_sub_field('testimonial_name');?></h5>
					<h5><?php the_sub_field('testimonial_company');?></h5>
           		</div>
           	</div>
      	</div>
    <?php endwhile; ?>
    	</div>
<?php endif; ?>
	</div>
	</div>
<?php endwhile; else: endif;?>