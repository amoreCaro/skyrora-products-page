<?php

if (!defined('ABSPATH')) {
    exit;
}

if (empty($is_placeholder_preview) && skyrora_block_should_use_placeholder(!empty($is_preview), $block ?? [], array(
    'innovation_title',
    'innovation_content',
    'innovation_list',
    'innovation_image',
    'innovation_video',
))) {
    include __DIR__ . '/preview.php';
    return;
}

include __DIR__ . '/fields.php';
?>
<section class="section about js-viewport-checker"<?php echo $section_style; ?>>
    <div class="about__inner">
        <?php if ($innovation_media_type === 'video') {
            include __DIR__ . '/templates/background-video.php';
        } elseif ($innovation_media_type === 'image') {
            include __DIR__ . '/templates/background.php';
        } ?>

        <div class="container">
            <div data-rellax-percentage="0.2" class="about__content">
                <div class="row">
                    <div class="col-md-14 col-24">
                        <article>
                            <?php if ($innovation_title) : ?>
                                <h2><?php echo wp_kses($innovation_title, array('br' => array())); ?></h2>
                            <?php endif; ?>

                            <?php if ($innovation_content) : ?>
                                <p><?php echo esc_html($innovation_content); ?></p>
                            <?php endif; ?>
                        </article>
                    </div>

                    <?php if (!empty($innovation_list)) : ?>
                        <div class="col-md-10 col-24">
                            <ul>
                                <?php foreach ($innovation_list as $list_text) : ?>
                                    <?php if ($list_text) : ?>
                                        <li>
                                            <span><?php echo esc_html($list_text); ?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
