<?php

if (empty($is_placeholder_preview)) {
    $leaders_title = get_field('leaders_title');
    $leaders_background_color = get_field('leaders_background_color');
    $section_style = $leaders_background_color
        ? ' style="background-color: ' . esc_attr($leaders_background_color) . ';"'
        : '';
    $leaders = array();
    $leader_items = get_field('leaders_list');

    if (!empty($leader_items)) {
        foreach ($leader_items as $leader_item) {
            $leader_id = $leader_item->ID;
            $leaders[] = array(
                'permalink'   => get_permalink($leader_id),
                'title'       => get_the_title($leader_id),
                'image_id'    => $leader_id,
                'image_url'   => '',
                'desktop_src' => get_the_post_thumbnail_url($leader_id, array(160, 35)),
            );
        }
    }
}
