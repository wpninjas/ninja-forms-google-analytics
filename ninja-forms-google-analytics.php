<?php

/*
 * Plugin Name: Ninja Forms - Google Analytics
 * Version: 3.0.0
 * Description: Trigger a custom GA event for Ninja Forms (v3) Submissions.
 * Author: Kyle B. Johnson
 * Author URI: http://kylebjohnson.me
 */

final class NF_GoogleAnalytics_Plugin
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script( 'nf-ga', plugin_dir_url( __FILE__ ) . 'nf-ga.js', array( 'nf-front-end' ) );
    }
}

new NF_GoogleAnalytics_Plugin();
