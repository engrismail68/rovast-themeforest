<?php
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
?>
<?php
 add_theme_support('menus');
 add_theme_support('widgets');
 add_theme_support('custom-header');
 add_theme_support('custom-background');
 add_theme_support('post-thumbnails');
 path:<?php echo get_template_directory_uri()?> /style.css

 <!-- theme name and title change korar program  -->
 1.<?php bloginfo('name');?>

  <!-- theme name and description chane korar program  -->
 2.<?php bloginfo('description');?>

 <!-- language all support korar jonno -->
 3.<?php language_attributes(); ?>

 <!-- all language support -->
 4.<?php bloginfo('charset');?>

 <!-- admin bar pawar jonno headerer opore and body close er opore likhte hobe -->
 <?php wp-header();?>
 <?php wp-footer();?>

 <!-- header -img change korar jonno -->
 5.<?php header_image();?>

 <!-- body te background image set korar jonno -->
 6.<?php body_class();?>


 7.


?>
