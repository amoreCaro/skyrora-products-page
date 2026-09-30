<?php

if (empty($is_placeholder_preview)) {
    $is_editor_preview = !empty($is_preview);
    $products = array();
    $product_ids = get_field('products_list');

    if (!empty($product_ids)) {
        $product_posts = get_posts(array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'post_status'    => array('publish', 'draft'),
            'post__in'       => $product_ids,
            'orderby'        => 'post__in',
        ));

        foreach ($product_posts as $product) {
            $product_id = $product->ID;
            $hover_video = get_field('acf_product_hover', $product_id);
            $hover_safari = get_field('acf_product_hover_safary', $product_id);

            if (is_array($hover_video)) {
                $hover_video = $hover_video['url'] ?? '';
            }
            if (is_array($hover_safari)) {
                $hover_safari = $hover_safari['url'] ?? '';
            }

            $products[] = array(
                'id'                    => $product_id,
                'title'                 => get_the_title($product_id),
                'short_content'         => get_field('acf_product_short_content', $product_id),
                'status'                => get_post_status($product_id),
                'permalink'             => get_permalink($product_id),
                'image_id'              => get_post_thumbnail_id($product_id),
                'image_url'             => '',
                'hover_video_url'       => (string) $hover_video,
                'hover_video_safari_url'=> (string) $hover_safari,
            );
        }
    }
}
