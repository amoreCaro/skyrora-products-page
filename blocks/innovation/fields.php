<?php

if (empty($is_placeholder_preview)) {
    $background_color = get_field('innovation_background_color');
    $section_style = $background_color
        ? ' style="--about-bg: ' . esc_attr($background_color) . ';"'
        : '';
    $innovation_media_type = get_field('innovation_media_type');
    $innovation_image = get_field('innovation_image');
    $innovation_video = get_field('innovation_video');
    if (is_array($innovation_video)) {
        $innovation_video = $innovation_video['url'] ?? '';
    }
    $innovation_title = get_field('innovation_title');
    $innovation_content = get_field('innovation_content');
    $innovation_list = array();

    if (have_rows('innovation_list')) {
        while (have_rows('innovation_list')) {
            the_row();
            $innovation_list[] = get_sub_field('innovation_list_text');
        }
    }
}
