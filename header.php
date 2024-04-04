<div class="header">
<div class="logo">
    <?php
    echo get_custom_logo();
    ?>
</div>
<div class="main">



<div class="site title">
<h1><?php
    echo bloginfo('name');
    ?></h1>
</div>
<div class="tagline">
<p><?php
    echo bloginfo('description');
    ?></p>

</div>
</div>

<div class="header1">
<?php

wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'navbar-2',//got the registration of class for styling navbar in style.css
 
))
?>
</div>
</div>





<?php
 wp_head();
  ?>