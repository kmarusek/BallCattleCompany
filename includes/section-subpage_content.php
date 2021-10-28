<?php if(have_posts()): while( have_posts() ): the_post();?>

<section id="content">
    <div class="inner">
        <div class="contentwrap">
            <div class="centerwrap">
                <?php the_content();?>
            </div>          
        </div>
            <img src="<?php the_field("content_img");?>" alt="<?php the_field('image_alt');?>">
    </div>
</section>

<?php endwhile; else: endif;?>