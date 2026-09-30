<?php

if (empty($is_placeholder_preview)) {
    $dedicated_background_type = get_field('dedicated_background_type');
    $dedicated_background_image = get_field('dedicated_background_image');
    $dedicated_background_color = get_field('dedicated_background_color');
    $dedicated_title = get_field('dedicated_title');
    $dedicated_button_text = get_field('dedicated_button_text');
    $dedicated_list = array();
    $section_style = '';

    if ($dedicated_background_type === 'image' && $dedicated_background_image) {
        $section_style = ' style="background-image: url(\'' . esc_url(wp_get_attachment_image_url($dedicated_background_image, 'full')) . '\');"';
    } elseif ($dedicated_background_type === 'color' && $dedicated_background_color) {
        $section_style = ' style="background-image: none; background-color: ' . esc_attr($dedicated_background_color) . ';"';
    }

    if (have_rows('dedicated_list')) {
        while (have_rows('dedicated_list')) {
            the_row();
            $dedicated_list[] = array(
                'image_id'  => get_sub_field('dedicated_list_item_image'),
                'image_url' => '',
                'content'   => get_sub_field('dedicated_list_item_content'),
            );
        }
    }
}
