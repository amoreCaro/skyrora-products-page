<?php

$is_placeholder_preview = true;
$hero_background_type = 'image';
$hero_video = '';
$hero_image_url = skyrora_block_placeholder_image();
$hero_subtitle = 'About Skyrora';
$hero_title = 'Building a European launch capability';
$hero_content = 'Dedicated orbital launch services for small satellites.';
$hero_navigation = array(
    array('index' => 2, 'name' => 'Mission'),
    array('index' => 3, 'name' => 'Products'),
    array('index' => 4, 'name' => 'Team'),
);

include __DIR__ . '/render.php';
