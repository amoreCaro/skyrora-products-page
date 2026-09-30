<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('partners_items'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<div class="partners" id="section-<?php echo esc_attr(skyrora_section_index()); ?>">
    <div class="container">
        <div class="partners__inner">
            <?php foreach ($partners as $partner) : ?>
                <div class="partner-item">
                    <div class="partner-item__img">
                        <picture>
                            <?php if (!empty($partner['image_id'])) : ?>
                                <?php skyrora_image($partner['image_id'], 225, 85, 'lazy'); ?>
                            <?php elseif (!empty($partner['image_url'])) : ?>
                                <img src="<?php echo esc_url($partner['image_url']); ?>" alt="" class="lazy" loading="lazy" decoding="async">
                            <?php endif; ?>
                        </picture>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
