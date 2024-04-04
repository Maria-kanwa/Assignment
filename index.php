<?php

get_header();
?>
<section class="all-posts">
<h1>All posts</h1>
<?php 

    while(have_posts()){ 
        the_post()?>
     <div class="posts-div">
        
        <h1><?php the_title();?></h1>
        <div class="post-thumbnail"><p><?php echo get_the_post_thumbnail();?></p></div>
        
  <!-- for writting html code in php--->
    <p><?php the_content();?></p>
    <p><?php the_author();?></p>

    <p><?php echo get_the_date();?></p>
    <a href="<?php  the_permalink();?>">
<p>Read More</p>
</a>
 <hr>
</div>
    
 <?php }
?>
<div class="pagination">
<?php  echo get_the_posts_pagination();?></div>
</div>

<?php 
  get_footer();
  ?>
