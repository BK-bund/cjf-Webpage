<?php

function enqueue_cjf_kaakeli_style() {
  wp_enqueue_style( 'cjf_kaakeli', get_stylesheet_directory_uri().'/style.css',  array('kaakeli'), '0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_cjf_kaakeli_style' );
