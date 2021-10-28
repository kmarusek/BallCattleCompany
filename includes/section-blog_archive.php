<?php if(have_posts()): while( have_posts() ): the_post();?>


<section id="blog_archive">
    

<?php 
    
$paged = get_query_var('paged');
$query = new WP_Query( array(
    'category_name' => 'blog',
    'posts_per_page' => 3,
    'paged' => $paged

));


 if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
?>

<div class="card mb-3">
<img class="card-img-top" src="<?php the_field('feature_image');?>" alt="Card image cap">
        <div class="card-body">
            <div class="title">
                <h3><?php the_title();?></h3> 
            </div>
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="btn btn-warning">Read More </a>
        </div>
</div>
<?php endwhile; endif;?>

<nav class="blog-pagination">
<?php 

echo paginate_links(array(
    'total' => $query->max_num_pages,
));

?>
</nav>
</section>

<?php endwhile; else: endif;?>