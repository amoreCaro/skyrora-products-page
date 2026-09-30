<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array(
    'dedicated_title',
    'dedicated_list',
    'dedicated_button_text',
    'dedicated_background_image',
))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<section class="section--nextIsVideo section about-dedicated-mod js-viewport-checker checker-visible"<?php echo $section_style; ?>>
    <div class="container">
        <div class="about-dedicated__inner">
            <div class="about__content--dedicated-mod">
                <?php if ($dedicated_title) : ?>
                    <h2><?php echo wp_kses($dedicated_title, array('br' => array())); ?></h2>
                <?php endif; ?>

                <?php if (!empty($dedicated_list)) : ?>
                    <ul>
                        <?php foreach ($dedicated_list as $list_item) : ?>
                            <li>
                                <span class="icon-wrap">
                                    <?php
                                    if (!empty($list_item['image_id'])) {
                                        echo wp_get_attachment_image($list_item['image_id'], 'thumbnail');
                                    } elseif (!empty($list_item['image_url'])) {
                                        echo '<img src="' . esc_url($list_item['image_url']) . '" alt="">';
                                    }
                                    ?>
                                </span>
                                <?php if (!empty($list_item['content'])) : ?>
                                    <span><?php echo esc_html($list_item['content']); ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <button type="button" data-popup-name="popup-book" class="button button--blue js-popup-btn">
                    <span><?php echo esc_html($dedicated_button_text); ?></span>
                    <svg width="1em" height="1em" class="icon icon-arrow-right">
                        <use xlink:href="<?php echo esc_url(THEME . '/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right'); ?>"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
