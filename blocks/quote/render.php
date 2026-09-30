<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('quote_text'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<div id="section-<?php echo esc_attr(skyrora_section_index()); ?>" class="container article-container">
    <article class="article-landing article-landing--long article-landing--quote">
        <?php if ($quote_text) : ?>
            <blockquote>
                <?php echo wp_kses_post($quote_text); ?>
            </blockquote>
        <?php endif; ?>
    </article>
</div>
