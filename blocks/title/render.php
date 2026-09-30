<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('acf_title_text'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<div class="container constructor-title">
    <?php if ($title) : ?>
        <?php if ($tag === 'h1') : ?>
            <h1 class="h2"><?php echo esc_html($title); ?></h1>
        <?php else : ?>
            <<?php echo esc_attr($tag); ?>><?php echo esc_html($title); ?></<?php echo esc_attr($tag); ?>>
        <?php endif; ?>
    <?php endif; ?>
</div>
