<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('paragraph_text'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<div id="section-<?php echo esc_attr(skyrora_section_index()); ?>" class="container article-container">
    <article class="article-landing article-landing--long">
        <?php if ($content) : ?>
            <p>
                <?php echo wp_kses_post($content); ?>
            </p>
        <?php endif; ?>
    </article>
</div>
