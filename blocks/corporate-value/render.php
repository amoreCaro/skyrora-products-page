<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('corporate_value_items'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<div id="section-<?php echo esc_attr(skyrora_section_index()); ?>" class="container constructor-columns">
    <div class="row">
        <?php foreach ($value_items as $item) : ?>
            <div class="col-md-12">
                <article class="article-column">
                    <h4></h4>
                    <?php if (!empty($item['name'])) : ?>
                        <h3><?php echo wp_kses($item['name'], array('br' => array())); ?></h3>
                    <?php endif; ?>

                    <?php if (!empty($item['content'])) : ?>
                        <p>
                            <?php echo wp_kses($item['content'], array('br' => array())); ?>
                        </p>
                    <?php endif; ?>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>
