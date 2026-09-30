<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array(
    'banner_title',
    'banner_subtitle',
    'banner_image',
    'banner_video',
    'banner_images',
))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<section id="section-<?php echo esc_attr(skyrora_section_index()); ?>" class="section banner js-viewport-checker"<?php echo $section_style; ?>>
    <?php if ($banner_media_type === 'video' && $banner_video) { ?>
        <div id="bannerVideoId" data-src="<?php echo esc_url($banner_video); ?>" class="banner__video">
            <video autoplay playsinline muted loop class="bv-video" data-prevent-transform="true">
                <source src="<?php echo esc_url($banner_video); ?>" type="video/mp4" />
            </video>
        </div>
    <?php } else { ?>
        <div id="bannerVideoId" data-src="<?php echo esc_url($banner_image_url); ?>" class="banner__video banner--image">
            <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
                <video autoplay="true" playsinline muted loop="true" poster="<?php echo esc_url($banner_image_url); ?>" class="bv-video" preload="metadata" style="position: absolute; z-index: 1;">
                    <source src="<?php echo esc_url($banner_image_url); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    <?php } ?>

    <div class="container">
        <div class="banner__content">
            <div class="banner__content-txt">
                <?php if (!empty($logos)) { ?>
                    <div class="banner__content-logo">
                        <?php foreach ($logos as $item) {
                            $image_id = $item['ID'] ?? null;
                            if (!$image_id) {
                                continue;
                            }
                            ?>
                            <div class="banner__content-logo__item">
                                <figure>
                                    <?php skyrora_image($image_id, 300, 300); ?>
                                </figure>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if ($banner_title) { ?>
                    <h1><?php echo wp_kses($banner_title, array('br' => array())); ?></h1>
                <?php } ?>

                <?php if ($banner_subtitle) { ?>
                    <p><?php echo esc_html($banner_subtitle); ?></p>
                <?php } ?>
            </div>

            <div class="banner__content-list decor--ml-auto">
                <div class="banner__content-scrollDown">
                    <a href="#mainPageCategoriesId" rel="nofollow" class="js-header-anchor">
                        <span>Scroll</span>
                        <svg width="1em" height="1em" class="icon icon-arrow-down">
                            <use xlink:href="<?php echo esc_url(THEME . '/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-down'); ?>"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
