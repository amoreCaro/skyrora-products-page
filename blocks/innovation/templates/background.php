<?php if (!empty($innovation_image)) : ?>
    <div class="about__video about--image">
        <picture>
            <?php skyrora_image($innovation_image, 1600, 900); ?>
        </picture>
    </div>
<?php elseif (!empty($innovation_image_url)) : ?>
    <div class="about__video about--image">
        <picture>
            <img src="<?php echo esc_url($innovation_image_url); ?>" alt="" loading="lazy" decoding="async">
        </picture>
    </div>
<?php endif; ?>
