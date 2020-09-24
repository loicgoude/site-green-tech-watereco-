<?php
/**
/*
Plugin Name: Bouton lien produit
Description: Shortcodes call to action
Author: Loic
Version : 1.0
*/

add_shortcode('Product-cta', 'action_button_shortcode');

function action_button_shortcode( $atts ){
       extract(shortcode_atts(array('title'=> 'Voir le produit','text'=>'Voir le produit','id'=>''),$atts));
       $link = get_permalink($id);
       return'<div class="loic_button"><button class="loic_button_shortcode_button"><a href="'.$link.'"><span class="loic_button_text">'.$text.'
       </span></a></button></div>';
}
?>