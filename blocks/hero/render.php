<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array(
    'hero_title',
    'hero_subtitle',
    'content',
    'hero_page_navigation',
    'hero_video',
    'hero_backgroud_image',
))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<section id="section-<?php echo esc_attr(skyrora_section_index()); ?>" class="banner--landing banner--description section banner js-viewport-checker">
    <?php if ($hero_background_type === 'video' && $hero_video) { ?>
        <div id="bannerVideoId" data-src="<?php echo esc_url($hero_video); ?>" class="banner__video">
            <video autoplay playsinline muted loop class="bv-video" data-prevent-transform="true">
                <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4" />
            </video>
        </div>
    <?php } else { ?>
        <div id="bannerVideoId" data-src="<?php echo esc_url($hero_image_url); ?>" class="banner__video banner--image">
            <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
                <video autoplay="true" playsinline muted loop="true" poster="<?php echo esc_url($hero_image_url); ?>" class="bv-video" preload="metadata" style="position: absolute; z-index: 1;">
                    <source src="<?php echo esc_url($hero_image_url); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    <?php } ?>

    <div class="container">
        <div class="banner__content">
            <div class="banner__content-txt">
                <?php if ($hero_subtitle) { ?>
                    <span class="title-sub"><?php echo wp_kses($hero_subtitle, array('br' => array())); ?></span>
                <?php } ?>

                <?php if ($hero_title) { ?>
                    <h1><?php echo wp_kses($hero_title, array('br' => array())); ?></h1>
                <?php } ?>

                <?php if ($hero_content) { ?>
                    <p><?php echo wp_kses($hero_content, array('br' => array())); ?></p>
                <?php } ?>
            </div>

            <?php if (!empty($hero_navigation)) : ?>
                <div class="banner__content-list">
                    <ul>
                        <?php foreach ($hero_navigation as $nav_item) : ?>
                            <li>
                                <a href="#section-<?php echo esc_attr($nav_item['index']); ?>" data-section-nav="#section-<?php echo esc_attr($nav_item['index']); ?>">
                                    <?php echo esc_html($nav_item['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
