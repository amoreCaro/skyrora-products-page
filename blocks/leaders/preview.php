<?php

$is_placeholder_preview = true;
$placeholder = skyrora_block_placeholder_image();
$leaders_title = 'Leadership';
$section_style = '';
$leaders = array(
    array('permalink' => '#', 'title' => 'Volodymyr Levykin', 'image_id' => 0, 'image_url' => $placeholder, 'desktop_src' => $placeholder),
    array('permalink' => '#', 'title' => 'Jack Mason', 'image_id' => 0, 'image_url' => $placeholder, 'desktop_src' => $placeholder),
    array('permalink' => '#', 'title' => 'Team member', 'image_id' => 0, 'image_url' => $placeholder, 'desktop_src' => $placeholder),
);

include __DIR__ . '/render.php';
