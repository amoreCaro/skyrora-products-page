<?php

$is_placeholder_preview = true;
$is_editor_preview = true;
$placeholder = skyrora_block_placeholder_image();
$products = array(
    array(
        'id' => 0,
        'title' => 'Skyrora XL',
        'short_content' => 'Orbital launch vehicle',
        'status' => 'publish',
        'permalink' => '#',
        'image_id' => 0,
        'image_url' => $placeholder,
        'hover_video_url' => '',
        'hover_video_safari_url' => '',
    ),
    array(
        'id' => 0,
        'title' => 'Skyrora XL',
        'short_content' => 'Upper stage',
        'status' => 'publish',
        'permalink' => '#',
        'image_id' => 0,
        'image_url' => $placeholder,
        'hover_video_url' => '',
        'hover_video_safari_url' => '',
    ),
    array(
        'id' => 0,
        'title' => 'Skyrora XL',
        'short_content' => 'First stage',
        'status' => 'publish',
        'permalink' => '#',
        'image_id' => 0,
        'image_url' => $placeholder,
        'hover_video_url' => '',
        'hover_video_safari_url' => '',
    ),
    array(
        'id' => 0,
        'title' => 'Payload',
        'short_content' => 'Fairing',
        'status' => 'publish',
        'permalink' => '#',
        'image_id' => 0,
        'image_url' => $placeholder,
        'hover_video_url' => '',
        'hover_video_safari_url' => '',
    ),
    array(
        'id' => 0,
        'title' => 'Engine',
        'short_content' => 'Skyforce',
        'status' => 'publish',
        'permalink' => '#',
        'image_id' => 0,
        'image_url' => $placeholder,
        'hover_video_url' => '',
        'hover_video_safari_url' => '',
    ),
);

include __DIR__ . '/render.php';
