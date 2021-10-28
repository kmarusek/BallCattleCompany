

<section id="contact-page">
    <div class="inner">
      <div class="itembox formbox">
        <div class="title-wrap">
            <h2>Contact Us Now</h2>
        </div>
        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]');?>
        </div>
      </div>  
      <div class="itembox mapbox">
            <div class="gmap">
                    <?php the_field('gmap_embed');?>
            </div>
      </div>
        
    </div>
</section>
