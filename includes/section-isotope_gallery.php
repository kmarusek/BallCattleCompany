<?php if(have_posts()): while( have_posts() ): the_post();?>

<div class="filter isotope-filter">
        <ul>
                <li class="active" data-filter="*"><h4>All</h4></li>
                <li data-filter=".edm"><h4>EDM</h4></li>
                <li data-filter=".grinding"><h4>Grinding</h4></li>
                <li data-filter=".milling"><h4>Milling</h4></li>
                <li data-filter=".secondaryServices"><h4>Secondary Services</h4></li>
                <li data-filter=".turning"><h4>Turning</h4></li>
        </ul>
</div>

<section id="isotope_gallery">
      
    <?php if(have_rows('gallery_repeater')):?>
        <div class="gallery-container grid">
            <div class="grid-sizer"></div>
    <?php while( have_rows('gallery_repeater')): the_row();?>
        <div class="<?php  the_sub_field('filter_class');?> grid-item">
            <a class="mag" href="<?php the_sub_field('gallery_image');?>" data-title="<?php  the_sub_field('filter_class');?>">
                <img src="<?php the_sub_field('gallery_image');?>">
            </a>
        </div>



    <?php endwhile;?>
        </div>
    <?php endif;?>





</section>

<?php endwhile; else: endif;?>