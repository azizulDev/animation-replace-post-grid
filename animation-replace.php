<?php



if (!defined('ABSPATH')) exit;  // if direct access


add_shortcode( 'animation_replace', 'animation_replace' );

function animation_replace(){

    
    $query_args = array (
        'post_type' => 'accordions',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1,
    );

    $ddwp_query = new WP_Query($query_args);


            


    if ( $ddwp_query->have_posts() ) :
        while ( $ddwp_query->have_posts() ) : 
            $ddwp_query->the_post();

            $post_id = get_the_ID();
            $accordions_ooptions = get_post_meta( $post_id, 'accordions_ooptions', true );

            var_dump($post_id);

            echo '#############';

           echo var_export($accordions_ooptions, true);




           
           
           $metaid =  add_post_meta( $post_id, 'accordions_ooptions', 'adfasd' );

                      echo var_export($metaid, true);


        endwhile;
    endif;












}