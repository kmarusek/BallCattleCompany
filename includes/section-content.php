<?php if(have_posts()): while( have_posts() ): the_post();?>

<section id="content">
    <div class="inner">
        <?php if(get_field('h1_text')):?>)
        <div class="h1-wrap">
            <h1><?php the_field('h1_text');?></h1>
            <span class="bottom-border"></span>
        </div>
        <?php endif;?>
        <div class="center-wrap">
                <?php the_content();?>
        </div>
    </div>
</section>

<?php endwhile; else: endif;?>