<?php

if (empty($is_placeholder_preview)) {
    $news_title = get_field('about_news_title');
    $news_background_color = get_field('about_news_bg');
    $section_style = $news_background_color
        ? ' style="background-color: ' . esc_attr($news_background_color) . ';"'
        : '';
    $news_items = array();
    $news = get_field('about_news_list');

    if ($news) {
        foreach ($news as $news_item) {
            $id = skyrora_acf_item_id($news_item);

            if ($id < 1) {
                continue;
            }
            $use_advanced_link = get_field('ac_post_advanced_link_choice', $id) == 'yes';
            $link = $use_advanced_link ? get_field('ac_post_advanced_link', $id) : get_the_permalink($id);
            $tags = get_the_tags($id);
            $tag_names = array();

            if (!empty($tags)) {
                foreach ($tags as $tag) {
                    $tag_names[] = $tag->name;
                }
            }

            $news_items[] = array(
                'link'         => $link,
                'target_blank' => get_field('ac_post_advanced_link_tab', $id) == 'yes',
                'image_id'     => get_post_thumbnail_id($id),
                'image_url'    => '',
                'title'        => get_the_title($id),
                'date'         => get_the_date('d.m.Y', $id),
                'date_attr'    => get_the_date('Y-m-d', $id),
                'tags'         => $tag_names,
            );
        }
    }
}
