<?php

$is_placeholder_preview = true;
$placeholder = skyrora_block_placeholder_image();
$section_style = '';
$dedicated_title = 'Dedicated to delivering orbital launch';
$dedicated_button_text = 'Book a launch';
$dedicated_list = array(
    array('image_id' => 0, 'image_url' => $placeholder, 'content' => 'In-house propulsion'),
    array('image_id' => 0, 'image_url' => $placeholder, 'content' => 'Vertical integration'),
    array('image_id' => 0, 'image_url' => $placeholder, 'content' => 'UK launch capability'),
);

include __DIR__ . '/render.php';
