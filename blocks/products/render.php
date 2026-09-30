<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('products_list'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';

$is_editor_preview = !empty($is_editor_preview);
$products = $products ?? array();
$icon_arrow = esc_url(THEME . '/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right');
?>
<section data-rellax-speed="-8" id="mainPageCategoriesId" class="section section--nextIsVideo categories rellax">
    <div class="container">
        <div class="grid-container grid-container--type1">
            <?php foreach ($products as $product_index => $product) :
                $product_tag = $is_editor_preview ? 'div' : 'a';
                $product_href_attr = $is_editor_preview ? '' : ' href="' . esc_url($product['permalink']) . '"';
                $hover_video_url = $product['hover_video_url'];
                $hover_video_safari_url = $product['hover_video_safari_url'];
                $product_status = $product['status'];
                $product_image_id = $product['image_id'];

                if ($product_index == 0) { ?>
                    <<?php echo $product_tag; ?><?php echo $product_href_attr; ?> class="js-product product product--<?php echo esc_attr($product_index); ?>">
                        <div class="product__info">
                            <div class="product__info-top">
                                <?php if ($product['title']) { ?>
                                    <span><?php echo esc_html($product['title']); ?></span>
                                <?php } ?>
                                <?php if ($product['short_content']) { ?>
                                    <p><?php echo esc_html($product['short_content']); ?></p>
                                <?php } ?>
                            </div>
                            <div class="product__info-read">
                                <span>Read more</span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                    <use xlink:href="<?php echo $icon_arrow; ?>"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="product__picture">
                            <?php if ($hover_video_url) { ?>
                                <video class="product__video" loop="loop" muted="muted" playsinline loading="lazy" decoding="async" poster="<?php skyrora_image_url($product_image_id, 150, 880); ?>">
                                   <source src="<?php echo esc_url($hover_video_url); ?>" type="video/webm">
                                <?php if ($hover_video_safari_url) { ?>
                                <source src="<?php echo esc_url($hover_video_safari_url); ?>" type="video/quicktime">
                                <?php } ?>
                                </video>
                            <?php } elseif ($product_image_id) {
                                skyrora_image($product_image_id, 180, 220);
                            } elseif (!empty($product['image_url'])) { ?>
                                <img src="<?php echo esc_url($product['image_url']); ?>" alt="" class="lazy">
                            <?php } ?>
                        </div>
                    </<?php echo $product_tag; ?>>
                <?php } elseif ($product_index > 0 && $product_index < 5) { ?>
                    <<?php echo $product_tag; ?><?php echo $product_href_attr; ?> class="js-product product product--<?php echo esc_attr($product_index); ?>">
                        <div class="product__info">
                            <div class="product__info-top">
                                <?php if ($product['title']) { ?>
                                    <span><?php echo esc_html($product['title']); ?></span>
                                <?php } ?>
                                <?php if ($product['short_content']) { ?>
                                    <p><?php echo esc_html($product['short_content']); ?></p>
                                <?php } ?>
                            </div>
                            <div class="product__info-read">
                                <span>Read more</span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                    <use xlink:href="<?php echo $icon_arrow; ?>"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="product__picture">
                            <?php if ($hover_video_url) { ?>
                                <video class="product__video" muted="muted" loop="loop" playsinline loading="lazy" decoding="async" poster="<?php skyrora_image_url($product_image_id, 130, 394); ?>">
                                    <source src="<?php echo esc_url($hover_video_url); ?>" type="video/webm">
                                    <?php if ($hover_video_safari_url) { ?>
                                    <source src="<?php echo esc_url($hover_video_safari_url); ?>" type="video/quicktime">
                                    <?php } ?>
                                </video>
                            <?php } elseif ($product_image_id) {
                                skyrora_image($product_image_id, 180, 220);
                            } elseif (!empty($product['image_url'])) { ?>
                                <img src="<?php echo esc_url($product['image_url']); ?>" alt="" class="lazy">
                            <?php } ?>
                        </div>
                    </<?php echo $product_tag; ?>>
                <?php } else { ?>
                    <?php if ($product_status == 'publish' && ! $is_editor_preview) { ?>
                        <a href="<?php echo esc_url($product['permalink']); ?>" class="product--horizontal product product--<?php echo esc_attr($product_index); ?>">
                    <?php } else { ?>
                        <div class="product--horizontal product product--<?php echo esc_attr($product_index); ?>">
                    <?php } ?>
                            <div class="product__info">
                                <div class="product__info-top">
                                    <?php if ($product['title']) { ?>
                                        <span><?php echo esc_html($product['title']); ?></span>
                                    <?php } ?>
                                    <?php if ($product['short_content']) { ?>
                                        <p><?php echo esc_html($product['short_content']); ?></p>
                                    <?php } ?>
                                </div>
                                <?php if ($product_status == 'publish') { ?>
                                    <div class="product__info-read">
                                        <span>Read more</span>
                                        <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                            <use xlink:href="<?php echo $icon_arrow; ?>"></use>
                                        </svg>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="product__picture">
                                <?php if ($product_image_id) {
                                    skyrora_image($product_image_id, 180, 220);
                                } elseif (!empty($product['image_url'])) { ?>
                                    <img src="<?php echo esc_url($product['image_url']); ?>" alt="" class="lazy">
                                <?php } ?>
                            </div>
                    <?php if ($product_status == 'publish' && ! $is_editor_preview) { ?>
                        </a>
                    <?php } else { ?>
                        </div>
                    <?php }
                }
            endforeach; ?>
        </div>
    </div>
</section>
