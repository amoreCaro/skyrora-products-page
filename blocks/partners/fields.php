<?php

if (empty($is_placeholder_preview)) {
    $partners = array();
    $partner_items = get_field('partners_items');

    if ($partner_items) {
        foreach ($partner_items as $partner) {
            $partner_id = is_object($partner) ? $partner->ID : (int) $partner;
            $partners[] = array(
                'image_id'  => get_post_thumbnail_id($partner_id),
                'image_url' => '',
            );
        }
    }
}
