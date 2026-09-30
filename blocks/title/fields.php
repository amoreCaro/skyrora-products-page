<?php

if (empty($is_placeholder_preview)) {
    $tag = get_field('acf_title_type') ?: 'h2';
    $title = get_field('acf_title_text');
}
