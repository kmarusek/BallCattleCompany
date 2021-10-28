<?php if(have_posts()): while( have_posts() ): the_post();?>


    <?php if(have_rows('callout_repeater')):?>

        <?php while( have_rows('callout_repeater')): the_row();?>
        <section id="content" class="callout_content">
            <div class="inner">
                <div class="contentwrap">
                    <div class="centerwrap">
                        <?php the_sub_field('callout_content');?>
                    </div>          
                </div>
                <img src="<?php the_sub_field("callout_img");?>">
            </div>
        </section>
        <?php endwhile;?>

    <?php endif;?>






<?php endwhile; else: endif;?>