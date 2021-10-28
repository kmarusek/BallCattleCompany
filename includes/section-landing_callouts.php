<?php if(have_posts()): while( have_posts() ): the_post();?>

<section id="landing_callout">
    <div class="titlewrap">
        <h3><?php the_field('product_section_title');?></h3> 
        <span class="bottom-border"></span>
    </div>
    <div class="inner">
    <?php if(have_rows('product_repeater')):?>

        <?php while( have_rows('product_repeater')): the_row();?>
        <div class="itembox" style="background-image: url(<?php the_sub_field('product_image');?>)">
        
            <div class="contentwrap">
                <div class="title">
                    <h4><?php the_sub_field('product_title');?></h4>
                </div>
            <?php if( get_sub_field('product_link')):?>
                <div class="buttonwrap">
                    <a class="button button1 more-link" href="<?php the_sub_field('product_link');?>">
			    	    <p>Learn More</p>
			        </a>
                </div>
            <?php endif;?>
            </div>
        
        </div>
        <?php endwhile;?>

    <?php endif;?>
    </div>
</section>

<?php endwhile; else: endif;?>