<?php if (!empty($innovation_video)) : ?>
    <div class="about__video">
        <video autoplay="autoplay" loading="lazy" decoding="async" playsinline muted loop="loop">
            <source src="<?php echo esc_url($innovation_video); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
    </div>
<?php endif; ?>
