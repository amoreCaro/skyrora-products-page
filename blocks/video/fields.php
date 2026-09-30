<?php

if (empty($is_placeholder_preview)) {
    $media_type = get_field('media_type');
    $video_url = get_field('video_url');
    $video_img = get_field('video_img');
    $video_content = get_field('video_content');
    $background_color = get_field('video_background');
    $section_style = $background_color
        ? ' style="--about-bg: ' . esc_attr($background_color) . ';"'
        : '';
}
