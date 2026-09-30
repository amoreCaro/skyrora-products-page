<?php

$is_placeholder_preview = true;
$placeholder = skyrora_block_placeholder_image();
$news_title = 'In the news';
$section_style = '';
$news_items = array(
    array(
        'link' => '#',
        'target_blank' => false,
        'image_id' => 0,
        'image_url' => $placeholder,
        'title' => 'Skyrora in the headlines',
        'date' => '16.09.2026',
        'date_attr' => '2026-09-16',
        'tags' => array('Press'),
    ),
    array(
        'link' => '#',
        'target_blank' => false,
        'image_id' => 0,
        'image_url' => $placeholder,
        'title' => 'Industry coverage',
        'date' => '01.09.2026',
        'date_attr' => '2026-09-01',
        'tags' => array('Media'),
    ),
);

include __DIR__ . '/render.php';
