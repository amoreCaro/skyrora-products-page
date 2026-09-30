<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('ACF_EXPERIMENTAL_PRELOAD_BLOCKS')) {
    define('ACF_EXPERIMENTAL_PRELOAD_BLOCKS', true);
}

/**
 * Build a block icon SVG (Lucide-style stroke icons for WP block inserter).
 */
function skyrora_icon_stroke_attrs() {
    return 'fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"';
}

function skyrora_block_icon($paths) {
    return '<svg class="skyrora-block-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" aria-hidden="true" focusable="false">' . $paths . '</svg>';
}

function skyrora_icon_paths($items) {
    $s = skyrora_icon_stroke_attrs();
    $svg = '';

    foreach ($items as $item) {
        $tag = $item[0];
        $attrs = $item[1];
        $attr_str = '';

        foreach ($attrs as $key => $value) {
            $attr_str .= ' ' . $key . '="' . $value . '"';
        }

        $svg .= '<' . $tag . $attr_str . ' ' . $s . '/>';
    }

    return $svg;
}

function skyrora_block_icons() {
    static $icons = null;

    if ($icons !== null) {
        return $icons;
    }

    $icons = array(
        'banner' => skyrora_block_icon(skyrora_icon_paths(array(
            array('rect', array('x' => '3', 'y' => '3', 'width' => '18', 'height' => '18', 'rx' => '2')),
            array('circle', array('cx' => '8.5', 'cy' => '8.5', 'r' => '1.5')),
            array('path', array('d' => 'm21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21')),
        ))),
        'products' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z')),
            array('path', array('d' => 'M12 22V12')),
            array('path', array('d' => 'm3.3 7 8.7 5 8.7-5')),
            array('path', array('d' => 'm12 12 9-5')),
        ))),
        'innovation' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5')),
            array('path', array('d' => 'M9 18h6')),
            array('path', array('d' => 'M10 22h4')),
        ))),
        'dedicated' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z')),
        ))),
        'news' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2')),
            array('path', array('d' => 'M18 14h-8')),
            array('path', array('d' => 'M15 18h-5')),
            array('path', array('d' => 'M10 6h8v4h-8V6Z')),
        ))),
        'leaders' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2')),
            array('circle', array('cx' => '9', 'cy' => '7', 'r' => '4')),
            array('path', array('d' => 'M22 21v-2a4 4 0 0 0-3-3.87')),
            array('path', array('d' => 'M16 3.13a4 4 0 0 1 0 7.75')),
        ))),
        'title' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M6 12h12')),
            array('path', array('d' => 'M6 20V4')),
            array('path', array('d' => 'M18 20V4')),
        ))),
        'quote' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z')),
            array('path', array('d' => 'M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z')),
        ))),
        'partners' => skyrora_block_icon(skyrora_icon_paths(array(
            array('circle', array('cx' => '18', 'cy' => '5', 'r' => '3')),
            array('circle', array('cx' => '6', 'cy' => '12', 'r' => '3')),
            array('circle', array('cx' => '18', 'cy' => '19', 'r' => '3')),
            array('path', array('d' => 'm8.59 13.51 6.83 3.98')),
            array('path', array('d' => 'm15.41 6.51-6.82 3.98')),
        ))),
        'news-about' => skyrora_block_icon(skyrora_icon_paths(array(
            array('circle', array('cx' => '12', 'cy' => '12', 'r' => '10')),
            array('path', array('d' => 'M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20')),
            array('path', array('d' => 'M2 12h20')),
        ))),
        'paragraph' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M13 4v16')),
            array('path', array('d' => 'M17 4v16')),
            array('path', array('d' => 'M19 4H9a4 4 0 0 0 0 8h6')),
        ))),
        'corporate-value' => skyrora_block_icon(skyrora_icon_paths(array(
            array('circle', array('cx' => '12', 'cy' => '8', 'r' => '6')),
            array('path', array('d' => 'm15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526')),
        ))),
        'hero' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'M12 2 2 7l10 5 10-5-10-5Z')),
            array('path', array('d' => 'm2 17 10 5 10-5')),
            array('path', array('d' => 'm2 12 10 5 10-5')),
        ))),
        'video' => skyrora_block_icon(skyrora_icon_paths(array(
            array('path', array('d' => 'm16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5')),
            array('rect', array('x' => '2', 'y' => '6', 'width' => '14', 'height' => '12', 'rx' => '2')),
        ))),
    );

    return $icons;
}

add_filter('block_categories_all', function ($categories, $post) {
    return array(
        array(
            'slug'  => 'skyrora',
            'title' => 'Skyrora',
            'icon'  => skyrora_block_icon(skyrora_icon_paths(array(
                array('path', array('d' => 'M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z')),
                array('path', array('d' => 'm12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z')),
                array('path', array('d' => 'M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0')),
                array('path', array('d' => 'M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5')),
            ))),
        ),
    );
}, 10, 2);

add_action('acf/init', 'theme_register_blocks');

add_filter('acf/register_block_type_args', 'theme_force_acf_blocks_v3');

add_filter('acf/blocks/default_block_version', 'theme_default_acf_block_version', 10, 2);

add_action('enqueue_block_editor_assets', 'skyrora_warm_acf_block_preview_cache', 5);

function theme_force_acf_blocks_v3(array $args): array {
    $args['api_version']       = 3;
    $args['acf_block_version'] = 3;

    if (!isset($args['supports']) || !is_array($args['supports'])) {
        $args['supports'] = array();
    }

    $args['supports']['mode'] = true;

    return $args;
}

function theme_default_acf_block_version($version, $block) {
    return 2;
}

/**
 * ACF 6 preloads editor HTML by default. ACF 5.9 only does this when
 * ACF_EXPERIMENTAL_PRELOAD_BLOCKS is on, and only if the cache is already warm.
 * Render saved ACF blocks first so Gutenberg can show them without a spinner.
 */
function skyrora_warm_acf_block_preview_cache() {
    if (!function_exists('parse_blocks') || !function_exists('acf_rendered_block') || !function_exists('acf_get_store')) {
        return;
    }

    if (function_exists('acf_update_setting')) {
        acf_update_setting('preload_blocks', true);
    }

    $post = get_post();

    if (!$post instanceof WP_Post && !empty($_GET['post'])) {
        $post = get_post((int) $_GET['post']);
    }

    if (!$post instanceof WP_Post || $post->post_content === '') {
        return;
    }

    skyrora_warm_acf_block_preview_cache_from_blocks(parse_blocks($post->post_content), (int) $post->ID);
}

function skyrora_warm_acf_block_preview_cache_from_blocks(array $blocks, $post_id) {
    foreach ($blocks as $block) {
        $name = $block['blockName'] ?? '';

        if ($name && strpos($name, 'acf/') === 0 && function_exists('acf_has_block_type') && acf_has_block_type($name)) {
            $attrs = isset($block['attrs']) && is_array($block['attrs']) ? $block['attrs'] : array();
            $block_id = isset($attrs['id']) ? (string) $attrs['id'] : '';

            if ($block_id !== '') {
                $attrs['name'] = $name;
                $html = '<div class="acf-block-preview">' . acf_rendered_block($attrs, $block['innerHTML'] ?? '', true, $post_id) . '</div>';

                if (defined('ACF_VERSION') && version_compare(ACF_VERSION, '6.0', '>=')) {
                    acf_get_store('block-cache')->set(
                        $block_id,
                        array(
                            'form' => false,
                            'html' => $html,
                        )
                    );
                } else {
                    acf_get_store('block-cache')->set($block_id, $html);
                }
            }
        }

        if (!empty($block['innerBlocks']) && is_array($block['innerBlocks'])) {
            skyrora_warm_acf_block_preview_cache_from_blocks($block['innerBlocks'], $post_id);
        }
    }
}

function theme_register_blocks() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    foreach (theme_get_block_paths() as $block_path) {
        theme_register_acf_block_from_json($block_path);
    }
}

function theme_register_acf_block_from_json($block_path) {
    $block_json_path = $block_path . '/block.json';

    if (!is_readable($block_json_path)) {
        return;
    }

    $config = json_decode(file_get_contents($block_json_path), true);

    if (!is_array($config) || empty($config['acf'])) {
        return;
    }

    $acf_config = $config['acf'];
    $block_slug = basename($block_path);
    $name = $config['name'] ?? $block_slug;

    if (strpos($name, 'acf/') === 0) {
        $name = substr($name, 4);
    }

    $render_template = $acf_config['renderTemplate'] ?? 'render.php';

    if (strpos($render_template, '/') !== 0) {
        $render_template = $block_path . '/' . ltrim($render_template, './');
    }

    $icons = skyrora_block_icons();
    $icon = $icons[$block_slug] ?? ($config['icon'] ?? 'block-default');

    $args = array(
        'name'              => $name,
        'name_one'          => str_replace('-', '_', $name),
        'title'             => $config['title'] ?? $name,
        'category'          => $config['category'] ?? 'skyrora',
        'icon'              => $icon,
        'keywords'          => $config['keywords'] ?? array(),
        'mode'              => $acf_config['mode'] ?? 'preview',
        'render_template'   => $render_template,
        'supports'          => array_merge(
            array(
                'mode'   => true,
                'anchor' => true,
            ),
            $config['supports'] ?? array()
        ),
        'acf_block_version' => $acf_config['blockVersion'] ?? 2,
        'api_version'       => $config['apiVersion'] ?? 2,
    );

    if (!empty($config['example'])) {
        $args['example'] = $config['example'];
        if (empty($args['example']['viewportWidth'])) {
            $args['example']['viewportWidth'] = 1400;
        }
    }

    if (!empty($config['style'])) {
        $style = is_array($config['style']) ? $config['style'][0] : $config['style'];

        if (strpos($style, 'file:./') === 0) {
            $args['enqueue_style'] = PATH_URL . '/blocks/' . $block_slug . '/' . substr($style, 7);
        }
    }

    if (!empty($config['viewScript'])) {
        $script = is_array($config['viewScript']) ? $config['viewScript'][0] : $config['viewScript'];

        if (strpos($script, 'file:./') === 0) {
            $script_relative_path = substr($script, 7);
            $script_file = $block_path . '/' . $script_relative_path;

            if (is_readable($script_file)) {
                $script_handle = 'theme-block-' . sanitize_title($name);
                $script_url = PATH_URL . '/blocks/' . $block_slug . '/' . $script_relative_path;
                $script_version = (string) filemtime($script_file);
                $existing_enqueue_assets = $args['enqueue_assets'] ?? null;

                $args['enqueue_assets'] = static function () use ($existing_enqueue_assets, $script_handle, $script_url, $script_version) {
                    if (is_callable($existing_enqueue_assets)) {
                        $existing_enqueue_assets();
                    }

                    wp_enqueue_script(
                        $script_handle,
                        $script_url,
                        array(),
                        $script_version,
                        true
                    );
                };
            }
        }
    }

    acf_register_block_type($args);
}

function theme_get_block_paths() {
    $paths = array();
    $blocks_dir = PATH . '/blocks';

    if (!is_dir($blocks_dir)) {
        return $paths;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($blocks_dir, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->getFilename() !== 'block.json') {
            continue;
        }

        $paths[] = $file->getPath();
    }

    sort($paths);

    return $paths;
}

function theme_get_registered_acf_block_names() {
    $names = array();

    foreach (theme_get_block_paths() as $block_path) {
        $block_json_path = $block_path . '/block.json';

        if (!is_readable($block_json_path)) {
            continue;
        }

        $config = json_decode(file_get_contents($block_json_path), true);

        if (!is_array($config) || empty($config['name'])) {
            continue;
        }

        $name = $config['name'];

        if (strpos($name, 'acf/') !== 0) {
            $name = 'acf/' . $name;
        }

        $names[] = $name;
    }

    return $names;
}

/**
 * Allow only theme ACF blocks discovered via block.json.
 */
add_filter('allowed_block_types_all', 'theme_allowed_blocks', 20, 2);

function theme_allowed_blocks($allowed_blocks, $editor_context) {
    $names = theme_get_registered_acf_block_names();

    return $names !== array() ? $names : false;
}

/**
 * Whether the editor should show placeholder demo content.
 *
 * ACF 5.9 does not pass `example` into WP register_block_type, and the
 * block-renderer REST request often has $is_preview = false. Demo HTML is
 * used when example data says so, or when an empty block is rendered in
 * the editor / REST preview.
 *
 * @param bool  $is_preview
 * @param array $block
 * @param array $field_names
 */
function skyrora_block_should_use_placeholder($is_preview, $block, array $field_names) {
    $data = (isset($block['data']) && is_array($block['data'])) ? $block['data'] : array();

    if (!empty($data['is_preview'])) {
        return true;
    }

    foreach ($field_names as $field_name) {
        if (get_field($field_name)) {
            return false;
        }
    }

    if (!empty($is_preview) || is_admin()) {
        return true;
    }

    return defined('REST_REQUEST') && REST_REQUEST && current_user_can('edit_posts');
}

/**
 * ACF 5.9.3 registers blocks without `example`, so Gutenberg never shows
 * the inserter / library preview. Copy it onto the WP block type.
 */
add_filter('register_block_type_args', 'skyrora_wp_block_type_args', 10, 2);

function skyrora_wp_block_type_args($args, $name) {
    if (strpos((string) $name, 'acf/') !== 0 || !function_exists('acf_get_block_type')) {
        return $args;
    }

    $block = acf_get_block_type($name);

    if (!is_array($block)) {
        return $args;
    }

    if (!empty($block['example'])) {
        $args['example'] = $block['example'];
    }

    foreach (array('title', 'category', 'icon', 'keywords') as $key) {
        if (!empty($block[$key])) {
            $args[$key] = $block[$key];
        }
    }

    if (!empty($block['supports']) && is_array($block['supports'])) {
        $args['supports'] = array_merge($args['supports'] ?? array(), $block['supports']);
    }

    return $args;
}

function skyrora_block_placeholder_image() {
    return PATH_URL . '/dist/s/images/useful/stub.webp';
}
