<?php

if (empty($is_placeholder_preview)) {
    $value_items = array();

    if (have_rows('corporate_value_items')) {
        while (have_rows('corporate_value_items')) {
            the_row();
            $value_items[] = array(
                'name'    => get_sub_field('corporate_value_name'),
                'content' => get_sub_field('corporate_value_content'),
            );
        }
    }
}
