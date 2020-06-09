<?php get_header(); ?>








<div id="body-line"></div>

<div id="main-wrapper">

<div id="main">



<div class="page-content">
<div id="featured-image">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail( 'post-thumbnails' ); ?><div id="featured-text"><h3><?php the_field("quote_text"); ?></h3><?php the_field("quote_attribute"); ?></div>

<div id="sidebar-video"><?php the_field("video"); ?></div>

</div>

     <h1><?php the_title(); ?></h1>

     <?php the_content(); ?>
     
     
<!-- theory of change -->


<?php if(is_page( 'Theory of Change' ) ) { ?>

<div id="theory-graphic">

<div id="theory-graphic-left">
<?php the_field("theory_graphic_left"); ?>
</div>

<div id="theory-graphic-right">
<?php the_field("theory_graphic_right"); ?>
</div>

</div> 

<p><?php the_field("content_area"); ?>    

<?php } else { ?>

<?php } ?>

     
 
<!-- / theory of change -->    



<!-- theory of change -->


<?php if(is_page( 'Results' ) ) { ?>

<div id="results-table"><?php the_field("content_area"); ?></div>   

<p><?php the_field("content_area_bottom"); ?>  

<?php } else { ?>

<?php } ?>

     
 
<!-- / theory of change -->    


     
<?php endwhile; endif; ?>     


</div><!-- / page content -->





<?php get_footer(); ?>