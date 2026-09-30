<?php

if (!defined('ABSPATH')) exit;

/**
 * Enqueue theme styles and scripts for the front-end
 */
function theme_scripts_front() {
    // Load main compiled CSS file (all styles)
    wp_enqueue_style( 'all', THEME . '/dist/s/css/all.css' );

    // Load helper CSS file (utility/helper classes)
    wp_enqueue_style( 'helper', THEME . '/dist/s/css/helper.css', array(), '2.2' );

    // Load main JavaScript file with jQuery as a dependency
    wp_enqueue_script( 'main', THEME . '/dist/s/js/main.js', array('jquery'), '1.1', true );
}

// Set priority to 100 to make sure we dequeue styles successfully
add_action( 'wp_enqueue_scripts', 'theme_scripts_front', 100 );

/**
 * Styles/scripts for the block editor canvas (including iframe).
 */
function theme_enqueue_block_canvas_assets() {
    if (!is_admin()) {
        return;
    }

    wp_enqueue_style( 'blocks', THEME . '/inc/admin/blocks.css', array( 'wp-editor' ), '2.3' );
    wp_enqueue_style( 'helper', THEME . '/dist/s/css/helper.css',  array( 'wp-editor' ), '2.2' );
    wp_enqueue_style( 'admin_helper', THEME . '/inc/admin/admin.css', array( 'blocks' ), '1.31' );

    wp_enqueue_script(
        'blocks',
        THEME . '/inc/admin/blocks.js',
        array('jquery'),
        '1.4',
        true
    );

    if (!function_exists('theme_get_block_paths')) {
        return;
    }

    foreach (theme_get_block_paths() as $block_path) {
        $style_file = $block_path . '/style.css';

        if (!is_readable($style_file)) {
            continue;
        }

        $block_slug = basename($block_path);

        wp_enqueue_style(
            'theme-block-editor-' . $block_slug,
            PATH_URL . '/blocks/' . $block_slug . '/style.css',
            array('blocks', 'admin_helper'),
            (string) filemtime($style_file)
        );
    }
}

add_action('enqueue_block_assets', 'theme_enqueue_block_canvas_assets');

function theme_admin_scripts() {
    wp_enqueue_style( 'admin_helper', THEME . '/inc/admin/admin.css', array(), '1.31' );
}

add_action('admin_enqueue_scripts', 'theme_admin_scripts');

/**
 * Fallback for the non-iframed editor shell.
 */
function theme_enqueue_block_editor_shell_assets() {
    wp_enqueue_style( 'admin_helper', THEME . '/inc/admin/admin.css', array( 'wp-edit-blocks' ), '1.31' );
}

add_action('enqueue_block_editor_assets', 'theme_enqueue_block_editor_shell_assets');
