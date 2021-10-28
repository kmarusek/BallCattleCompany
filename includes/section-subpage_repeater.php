<?php if(have_posts()): while( have_posts() ): the_post();?>

<?php if(have_rows('content_repeater')):?>
    <section class="content_repeater">
    <?php if(get_field('content_repeater_title')):?>
        <div class="titlewrap">
            <h2><?php the_field('content_repeater_title');?></h2>
        </div>
    <?php endif;?>
        <div class="itemwrap">
        <?php while( have_rows('content_repeater')): the_row();?>
            <div class="itembox">
                <div class="imagewrapper">
                    <img src="<?php the_sub_field('content_rpt_img');?>"/>
                </div>
                <div class="contentwrap">
                            <div class="centerbox">
                                <div class="title">
                                    <h2><?php the_sub_field('content_rpt_title');?></h2>
                                </div>
                                <div class="textwrap">
                                    <p><?php the_sub_field('content_rpt_text');?></p>
                                </div>
                            </div>
                </div>
            </div>
        <?php endwhile;?>
        </div>
    </section>
<?php endif;?>


 

<?php endwhile; else: endif;?>