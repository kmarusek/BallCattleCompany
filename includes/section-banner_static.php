<?php if(have_posts()): while( have_posts() ): the_post();?>

<div class="page_hero">
      <img src="<?php the_field('hero_img');?>" class="hero_img">
      <div class="content">
        <div class="itemwrap itemwrap1">
          <div class="titlewrap">
            <h2><?php the_field('hero_title');?></h2>
          </div>
        </div>
        <div class="itemwrap itemwrap2">
          <div class="imagewrap">
            <img src="<?php echo get_template_directory_uri();?>/img/sub-banner-semi-transparent-angle-divider-min.png" alt="">
          </div>
        </div>
        <div class="itemwrap itemwrap3">
          <div class="textwrap">
            <h4><?php the_field('hero_sub_text');?></h4>
          </div>
        </div>
      </div>
</div>


<?php endwhile; else: endif;?>