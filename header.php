<?php 
/**
 * header template
 * @package Aquila 
 */
 ?>

<!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>">
 <head>
     <meta charset="<?php bloginfo('charset'); ?>">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php wp_head(); ?>
     <title>Wordpress Theme</title>
 </head>
 <body <?php body_class(); ?>>
    <?php 
        // this is for google analytics for asynchronous opening
        wp_body_open(); 
    ?>
<header>Header</header>