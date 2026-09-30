<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('leaders_title', 'leaders_list'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<section class="section leaders js-viewport-checker"<?php echo $section_style; ?>>
    <div class="container">
        <?php if ($leaders_title) { ?>
            <h2><?php echo wp_kses($leaders_title, array('br' => array())); ?></h2>
        <?php } ?>

        <div class="leaders__content">
            <div class="row">
                <?php foreach ($leaders as $leader_index => $leader) :
                    $index = $leader_index + 1;
                    if ($index <= 2) {
                        $col_class = 'col-md-12 col-24 l-' . $index;
                    } elseif ($index >= 3 && $index <= 5) {
                        $col_class = 'col-md-8 col-24 l-' . $index;
                    } else {
                        $col_class = 'col-md-12 col-24 l-' . $index;
                    }
                    ?>
                    <div class="<?php echo esc_attr($col_class); ?>">
                        <a href="<?php echo esc_url($leader['permalink']); ?>">
                            <div class="leader-item">
                                <div class="leader-item__img">
                                    <picture>
                                        <?php if (!empty($leader['desktop_src'])) : ?>
                                            <source media="(min-width: 769px)" srcset="<?php echo esc_url($leader['desktop_src']); ?>" />
                                        <?php endif; ?>
                                        <?php if (!empty($leader['image_id'])) : ?>
                                            <?php echo wp_get_attachment_image($leader['image_id'], 'medium'); ?>
                                        <?php elseif (!empty($leader['image_url'])) : ?>
                                            <img src="<?php echo esc_url($leader['image_url']); ?>" alt="">
                                        <?php endif; ?>
                                    </picture>
                                </div>
                                <?php if (!empty($leader['title'])) : ?>
                                    <p><?php echo esc_html($leader['title']); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
