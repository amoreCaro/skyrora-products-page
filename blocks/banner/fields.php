<?php

if (empty($is_placeholder_preview)) {
    $banner_media_type = get_field('banner_media_type');
    $banner_background_color = get_field('banner_background_color');
    $banner_video = get_field('banner_video');
    $banner_image = get_field('banner_image');
    $banner_image_url = '';

    if (is_array($banner_image)) {
        $banner_image_url = (string) ($banner_image['url'] ?? '');
    } elseif (!empty($banner_image)) {
        $banner_image_url = (string) $banner_image;
    }

    $logos = get_field('banner_images');
    $banner_title = get_field('banner_title');
    $banner_subtitle = get_field('banner_subtitle');
    $section_style = ($banner_media_type === 'color' && $banner_background_color)
        ? ' style="background-color: ' . esc_attr($banner_background_color) . ';"'
        : '';
}
