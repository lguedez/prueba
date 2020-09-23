<?php
/*
Plugin Name: leo
Plugin URI: 
Description: 
Version: 1.0.0
Author:
Author URI: 
License: GPLv2
*/


//funcion para PHP

add_shortcode("llamar_shortcode", "social_leo");

function social_leo($atts) {
    $facebook = "<a>Facebook</a>";
    $twitter = "<a>Twitter</a>";
    $google = "<a>Google</a>";

    $redes = $facebook . " " . $twitter . " " . $google;
    return $redes;
}

$A="jhfhjjjj";








                
?>

