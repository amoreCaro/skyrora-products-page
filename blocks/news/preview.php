<?php

$is_placeholder_preview = true;
$placeholder = skyrora_block_placeholder_image();
$news_title = 'Latest news';
$section_style = '';
$news_button_link = '#';
$news_button_text = 'All news';
$news_items = array(
    array(
        'link' => '#',
        'target_blank' => false,
        'image_id' => 0,
        'image_url' => $placeholder,
        'desktop_src' => $placeholder,
        'title' => 'Skyrora completes static fire test',
        'date' => '16.09.2026',
        'date_attr' => '2026-09-16',
        'tags' => array('Launch', 'Tests'),
    ),
    array(
        'link' => '#',
        'target_blank' => false,
        'image_id' => 0,
        'image_url' => $placeholder,
        'desktop_src' => $placeholder,
        'title' => 'New partnership announced',
        'date' => '01.09.2026',
        'date_attr' => '2026-09-01',
        'tags' => array('Company'),
    ),
    array(
        'link' => '#',
        'target_blank' => false,
        'image_id' => 0,
        'image_url' => $placeholder,
        'desktop_src' => $placeholder,
        'title' => 'Vehicle update',
        'date' => '12.08.2026',
        'date_attr' => '2026-08-12',
        'tags' => array('Vehicle'),
    ),
);

include __DIR__ . '/render.php';
