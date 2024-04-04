<?php

get_header();
?>
<div class="single-post">
    <?php
while(have_posts()){ 
        the_post()?>
     
        
        <h1><?php the_title();?></h1>
        
  <!-- for writting html code in php--->
  <div class="main">
  <div class="thumbnail"><p><?php echo get_the_post_thumbnail();?></p></div>
  
    <div class="content"> <p><?php the_content();?></p>
    <p><?php the_author();?></p>
  <p><?php the_title();?></p>

<p><?php echo get_the_date();?></p>
   

</div>
   
   
   
    </div>
    <?php  comments_template( )?>
    
   
 <hr>
 <?php }
 ?>
 
 </div>


<?php 
  get_footer();
  ?>