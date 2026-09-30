<?php

if (empty($is_placeholder_preview)) {
    $hero_background_type = get_field('hero_background_type');
    $hero_video = get_field('hero_video');
    $hero_image = get_field('hero_backgroud_image');
    $hero_image_url = '';

    if (is_array($hero_image)) {
        $hero_image_url = (string) ($hero_image['url'] ?? '');
    } elseif (!empty($hero_image)) {
        $hero_image_url = (string) $hero_image;
    }

    $hero_subtitle = get_field('hero_subtitle');
    $hero_title = get_field('hero_title');
    $hero_content = get_field('content');
    $hero_navigation = array();

    if (have_rows('hero_page_navigation')) {
        while (have_rows('hero_page_navigation')) {
            the_row();
            $hero_navigation[] = array(
                'index' => get_sub_field('hero_section_index'),
                'name'  => get_sub_field('hero_name_section'),
            );
        }
    }
}
