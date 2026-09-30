<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array('about_news_title', 'about_news_list'))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<section id="section-<?php echo esc_attr(skyrora_section_index()); ?>" class="section news js-viewport-checker"<?php echo $section_style; ?>>
    <div class="container">
        <div class="news__top">
            <?php if ($news_title) : ?>
                <h1 class="h2" style="color:black;"><?php echo wp_kses($news_title, array('br' => array())); ?></h1>
            <?php endif; ?>
        </div>
        <div class="news__collage">
            <div class="row news__row">
                <?php foreach ($news_items as $news_index => $item) : ?>
                    <?php if ($news_index < 1) : ?>
                        <div class="col-lg-16 col-md-12 col-24">
                            <a href="<?php echo esc_url($item['link']); ?>" class="news-banner"<?php echo $item['target_blank'] ? ' target="_blank"' : ''; ?>>
                                <div class="news-banner__picture">
                                    <div class="h-object-fit">
                                        <?php if (!empty($item['image_id'])) { skyrora_image($item['image_id'], 780, 440); } elseif (!empty($item['image_url'])) { echo '<img src="' . esc_url($item['image_url']) . '" alt="">'; } ?>
                                    </div>
                                </div>
                                <div class="news-banner__info">
                                    <div class="news-banner__info-top">
                                        <?php foreach ($item['tags'] as $tag) { echo '<span>#' . esc_html($tag) . '</span>'; } ?>
                                    </div>
                                    <div class="news-banner__info-main">
                                        <?php if ($item['title']) : ?>
                                            <h4><?php echo esc_html($item['title']); ?></h4>
                                        <?php endif; ?>
                                        <time datetime="<?php echo esc_attr($item['date_attr']); ?>"><?php echo esc_html($item['date']); ?></time>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php elseif ($news_index === 1) : ?>
                        <div class="col-lg-8 col-md-12 col-24">
                            <a href="<?php echo esc_url($item['link']); ?>" class="news-banner"<?php echo $item['target_blank'] ? ' target="_blank"' : ''; ?>>
                                <div class="news-banner__picture">
                                    <div class="h-object-fit">
                                        <?php if (!empty($item['image_id'])) { skyrora_image($item['image_id'], 380, 440); } elseif (!empty($item['image_url'])) { echo '<img src="' . esc_url($item['image_url']) . '" alt="">'; } ?>
                                    </div>
                                </div>
                                <div class="news-banner__info">
                                    <div class="news-banner__info-top">
                                        <?php foreach ($item['tags'] as $tag) { echo '<span>#' . esc_html($tag) . '</span>'; } ?>
                                    </div>
                                    <div class="news-banner__info-main">
                                        <h4><?php echo esc_html($item['title']); ?></h4>
                                        <time datetime="<?php echo esc_attr($item['date_attr']); ?>"><?php echo esc_html($item['date']); ?></time>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php else : ?>
                        <div class="col-lg-8 col-md-12 col-24">
                            <a href="<?php echo esc_url($item['link']); ?>" class="news-item"<?php echo $item['target_blank'] ? ' target="_blank"' : ''; ?>>
                                <div class="news-item__picture">
                                    <div class="h-object-fit">
                                        <?php if (!empty($item['image_id'])) { skyrora_image($item['image_id'], 280, 336); } elseif (!empty($item['image_url'])) { echo '<img src="' . esc_url($item['image_url']) . '" alt="">'; } ?>
                                    </div>
                                </div>
                                <div class="news-item__info">
                                    <div class="news-item__info-top">
                                        <?php foreach ($item['tags'] as $tag) { echo '<span>#' . esc_html($tag) . '</span>'; } ?>
                                    </div>
                                    <div class="news-item__info-main">
                                        <h4><?php echo esc_html($item['title']); ?></h4>
                                        <time datetime="<?php echo esc_attr($item['date_attr']); ?>"><?php echo esc_html($item['date']); ?></time>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
