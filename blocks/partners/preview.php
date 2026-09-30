<?php

$is_placeholder_preview = true;
$placeholder = skyrora_block_placeholder_image();
$partners = array(
    array('image_id' => 0, 'image_url' => $placeholder),
    array('image_id' => 0, 'image_url' => $placeholder),
    array('image_id' => 0, 'image_url' => $placeholder),
    array('image_id' => 0, 'image_url' => $placeholder),
);

include __DIR__ . '/render.php';
