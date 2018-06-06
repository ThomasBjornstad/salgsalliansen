<?php
function wl_styles(){
wp_enqueue_style('main-style', get_template_directory_uri() . '/css/app.css');
wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');
wp_enqueue_style('hover-style', get_template_directory_uri() . '/css/hover.css');

}
add_action('wp_enqueue_scripts', 'wl_styles');

add_action('wp_enqueue_scripts', 'load_scripts');

function wl_scripts(){
  wp_enqueue_script("jquery", true);
  if(is_page()){ //Check if we are viewing a page
 global $wp_query;

       //Check which template is assigned to current page we are looking at
       $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
       if($template_name == 'index.php'){
          //If page is using slider portfolio template then load our slider script
            wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', '', '', true);
        }
        if($template_name == 'om-oss.php'){
           //If page is using slider portfolio template then load our slider script
             wp_enqueue_script('about-us-js', get_template_directory_uri() . '/js/about-us.js', '', '', true);
         }
         if($template_name == 'tjenester.php'){
            //If page is using slider portfolio template then load our slider script
            wp_enqueue_script('services-js', get_template_directory_uri() . '/js/services.js', '', '', true);
          }
          if($template_name == 'karriere.php'){
             //If page is using slider portfolio template then load our slider script
             wp_enqueue_script('career-js', get_template_directory_uri() . '/js/career.js', '', '', true);
           }
          if($template_name == 'kontakt.php'){
             //If page is using slider portfolio template then load our slider script
             wp_enqueue_script('validate-js', 'https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js', '', '', true);
             wp_enqueue_script('contact-js', get_template_directory_uri() . '/js/contact.js', '', '', true);
           }
         }
}

add_action('wp_enqueue_scripts', 'wl_scripts');



ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

 ?>
