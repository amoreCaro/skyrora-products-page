<?php
if (!defined('ABSPATH')) {
    exit;
}

$theme_locations = get_nav_menu_locations();
$columns = [
  [
    'acf_footer_menu_list' => [
      ['acf_footer_page_name' => 'WHO WE ARE', 'acf_footer_page_url' => home_url('/who-we-are/')],
      ['acf_footer_page_name' => 'About Skyrora', 'acf_footer_page_url' => home_url('/who-we-are/')],
      ['acf_footer_page_name' => 'Career and Internships', 'acf_footer_page_url' => home_url('/career/')],
    ],
  ],
  [
    'acf_footer_menu_list' => [
      ['acf_footer_page_name' => 'PRODUCTS', 'acf_footer_page_url' => home_url('/products/')],
      ['acf_footer_page_name' => 'Skyrora XL', 'acf_footer_page_url' => home_url('/product/skyrora-xl/')],
      ['acf_footer_page_name' => 'Skylark L', 'acf_footer_page_url' => home_url('/product/skylark-l/')],
      ['acf_footer_page_name' => 'Skylark Micro', 'acf_footer_page_url' => home_url('/product/skylark-micro/')],
      ['acf_footer_page_name' => 'Skylark Nano', 'acf_footer_page_url' => home_url('/product/skylark-nano/')],
      ['acf_footer_page_name' => 'Third Stage', 'acf_footer_page_url' => home_url('/product/third-stage/')],
      ['acf_footer_page_name' => 'Space Tug', 'acf_footer_page_url' => home_url('/product/space-tug/')],
    ],
  ],
  [
    'acf_footer_menu_list' => [
      ['acf_footer_page_name' => 'MEDIA', 'acf_footer_page_url' => home_url('/blog/')],
      ['acf_footer_page_name' => 'Press About Us', 'acf_footer_page_url' => home_url('/press-about-us/')],
      ['acf_footer_page_name' => 'Stem & Education', 'acf_footer_page_url' => home_url('/blog/category/outreach/')],
      ['acf_footer_page_name' => 'UK Space News', 'acf_footer_page_url' => home_url('/blog/category/uk-space-news/')],
      ['acf_footer_page_name' => 'Satellite Uses', 'acf_footer_page_url' => home_url('/blog/category/satellites/')],
      ['acf_footer_page_name' => 'Our News', 'acf_footer_page_url' => home_url('/blog/category/our-news/')],
    ],
  ],
  [
    'acf_footer_menu_list' => [
      ['acf_footer_page_name' => 'TECHNOLOGY', 'acf_footer_page_url' => home_url('/technology/')],
      ['acf_footer_page_name' => 'Aerospace Additive Manufacturing', 'acf_footer_page_url' => home_url('/technology/additive/')],
      ['acf_footer_page_name' => 'Ecosene', 'acf_footer_page_url' => home_url('/technology/ecosene/')],
    ],
  ],
  [
    'acf_footer_menu_list' => [
      ['acf_footer_page_name' => 'LEGAL', 'acf_footer_page_url' => ''],
      ['acf_footer_page_name' => 'Terms of Use', 'acf_footer_page_url' => home_url('/terms/')],
      ['acf_footer_page_name' => 'Privacy policy', 'acf_footer_page_url' => home_url('/privacy/')],
      ['acf_footer_page_name' => 'Carbon Reduction Plan', 'acf_footer_page_url' => home_url('/carbon-reduction-plan/')],
      ['acf_footer_page_name' => 'Modern Slavery Statement', 'acf_footer_page_url' => home_url('/modern-slavery-statement/')],
      ['acf_footer_page_name' => 'Contact us', 'acf_footer_page_url' => home_url('/contacts/')],
    ],
  ],
];
$footer_copyright = '© 2026. Skyrora Limited';
$footer_social = [
  ['icon' => 'fb', 'link' => 'https://www.facebook.com/Skyrora'],
  ['icon' => 'yt', 'link' => 'https://www.youtube.com/channel/UCbvhnK_lUF1vH8jCTy0y2-w'],
  ['icon' => 'tw', 'link' => 'https://twitter.com/Skyrora_Ltd'],
  ['icon' => 'li', 'link' => 'https://www.linkedin.com/company/25012809/'],
];
?>
<footer class="footer">
  <div class="container">
    <div class="footer__content">
      <?php
      $footer_sprite = THEME . '/dist/s/images/useful/svg/theme/symbol-defs.svg';
      $footer_arrow = '<svg width="1em" height="1em" class="icon icon-arrow-right"><use xlink:href="' . esc_url($footer_sprite) . '#icon-arrow-right"></use></svg>';
      $show_footer_breadcrumbs = ! is_front_page() && ! is_home() && ! is_singular('post') && (
        is_page() ||
        is_singular(['product', 'list_technology', 'list_vacancy', 'personal']) ||
        is_paged()
      );
      $footer_parent = null;
      if ( is_singular('product') ) {
        $footer_parent = ['url' => HOME . '/products/', 'label' => 'Products'];
      } elseif ( is_singular('list_technology') ) {
        $footer_parent = ['url' => HOME . '/technology/', 'label' => 'Technology'];
      } elseif ( is_singular('list_vacancy') ) {
        $footer_parent = ['url' => HOME . '/career/', 'label' => 'SPACE CAREERS'];
      } elseif ( is_singular('personal') ) {
        $footer_parent = ['url' => HOME . '/who-we-are/', 'label' => 'About us'];
      }
      ?>
      <?php if ( $show_footer_breadcrumbs && is_paged() ) { ?>
      <div class="breadcrumbs breadcrumbs--archive">
        <div class="breadcrumbs__inner">
          <ul class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="link link_gr h-link-seo" href="<?=HOME?>" itemprop="item" aria-label="breadcrumbs">
                <span itemprop="name">Skyrora</span>
              </a>
              <?= $footer_arrow ?>
              <meta itemprop="position" content="1">
            </li>
            <li>
              <a href="<?=HOME?>/blog" aria-label="breadcrumbs">
                <span>Media</span>
              </a>
              <?= $footer_arrow ?>
            </li>
            <li class="breadcrumb__item">
              <?php if ( is_tag() ) {
                $tag_id = get_queried_object()->term_id; ?>
              <a href="<?php echo esc_url( get_term_link( $tag_id ) ); ?>" aria-label="breadcrumbs">
              <?php } else {
                $category_id = get_queried_object()->term_id; ?>
              <a href="<?php echo esc_url( get_category_link( $category_id ) ); ?>" aria-label="breadcrumbs">
              <?php } ?>
                <span><?= esc_html( get_queried_object()->name ); ?></span>
              </a>
              <?= $footer_arrow ?>
            </li>
            <li class="breadcrumb__item">
              <span class="breadcrumbs__current">page-<?= get_query_var('paged'); ?></span>
            </li>
          </ul>
        </div>
      </div>
      <?php } elseif ( $show_footer_breadcrumbs ) { ?>
      <div class="breadcrumbs">
        <div class="breadcrumbs__inner">
          <ul class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="link link_gr h-link-seo" href="<?=HOME?>" itemprop="item">
                <span itemprop="name">Skyrora</span>
              </a>
              <?= $footer_arrow ?>
              <meta itemprop="position" content="1">
            </li>
            <?php if ( $footer_parent ) { ?>
            <li>
              <a href="<?php echo esc_url( $footer_parent['url'] ); ?>">
                <span><?php echo esc_html( $footer_parent['label'] ); ?></span>
              </a>
              <?= $footer_arrow ?>
            </li>
            <?php } ?>
            <li class="breadcrumb__item">
              <span class="breadcrumbs__current"><?php echo esc_html( get_the_title() ); ?></span>
            </li>
          </ul>
        </div>
      </div>
      <?php } ?>

      <div class="footer__content-main row row-cols-lg-5">
        <?php 
              if( $columns ){
                foreach( $columns as $column ){ 
                  if( isset($column) && !empty($column) ){ ?>
        <div class="js-collapse footer__col col-24">
          <?php if( isset($column['acf_footer_menu_list'][0]) ){ ?>
          <button type="button" class="footer__content-collapseMobileBtn js-collapse-btn" aria-label="footer collapse">
            <span>
              <?php 
                          echo $column['acf_footer_menu_list'][0]['acf_footer_page_name']; 
                        ?>
            </span>
            <svg width="1em" height="1em" class="icon icon-down ">
              <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-down"></use>
            </svg>
          </button>
          <?php } ?>

          <?php if( $column['acf_footer_menu_list'] ){ ?>
          <ul class="js-collapse-content">
            <?php foreach( $column['acf_footer_menu_list'] as $item ){ ?>
            <li>
              <?php if( !empty($item['acf_footer_page_url']) ){ ?>
              <a href="<?php echo esc_url($item['acf_footer_page_url']); ?>" aria-label="footer-nav">
                <?php echo esc_html($item['acf_footer_page_name']); ?>
              </a>
              <?php } else { ?>
              <span>
                <?php echo esc_html($item['acf_footer_page_name']); ?>
              </span>
              <?php } ?>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>

        </div>
        <?php } }
              }?>

      </div>
      <div class="footer__content-bottom">
        <span>
          <?php echo esc_html($footer_copyright); ?>
        </span>
        <div class="content-media">
          <?php foreach ($footer_social as $social) { ?>
          <a href="<?php echo esc_url($social['link']); ?>" aria-label="social">
            <svg width="1em" height="1em" class="icon icon-<?php echo esc_attr($social['icon']); ?>">
              <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-<?php echo esc_attr($social['icon']); ?>">
              </use>
            </svg>
          </a>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<div class="l-modals">

  <div id="popup-book" class="popup-layout js-popup-content">
    <div class="popup-wrap">
      <div class="popup-inner">
        <div class="popup-top">
          <div class="container">
            <div class="popup-top__row">
              <a href="<?=HOME?>" class="popup-top__logo" aria-label="logo">
                <svg width="1em" height="1em" class="icon icon-logo ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                </svg>
              </a>
              <button type="button" class="popup-top__close js-popup-close" aria-label="close">
                <svg width="1em" height="1em" class="icon icon-close ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <?php echo do_shortcode('[skyrora_contact_form id="4962"]')?>
      </div>
    </div>
  </div>
  <div id="popup-indicate" class="popup-layout js-popup-content">
    <div class="popup-wrap">
      <div class="popup-inner">
        <div class="popup-top">
          <div class="container">
            <div class="popup-top__row">
              <a href="<?=HOME?>" class="popup-top__logo">
                <svg width="1em" height="1em" class="icon icon-logo ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                </svg>
              </a>
              <button type="button" class="popup-top__close js-popup-close">
                <svg width="1em" height="1em" class="icon icon-close ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <?php echo do_shortcode('[skyrora_contact_form id="4961"]')?>
      </div>
    </div>
  </div>

  <div id="popup-mail" class="popup-layout js-popup-content">
    <div class="popup-wrap">
      <div class="popup-inner">
        <div class="popup-top">
          <div class="container">
            <div class="popup-top__row">
              <a href="<?=HOME?>" class="popup-top__logo" aria-label="logo">
                <svg width="1em" height="1em" class="icon icon-logo ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                </svg>
              </a>
              <button type="button" class="popup-top__close js-popup-close" aria-label="close">
                <svg width="1em" height="1em" class="icon icon-close ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <?php echo do_shortcode('[skyrora_contact_form id="4960"]')?>
      </div>
    </div>
  </div>

  <div id="popup-subscribe" class="popup-layout js-popup-content">
    <div class="popup-wrap">
      <div class="popup-inner">
        <div class="popup-top">
          <div class="container">
            <div class="popup-top__row">
              <a href="<?=HOME?>" class="popup-top__logo" aria-label="logo">
                <svg width="1em" height="1em" class="icon icon-logo ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                </svg>
              </a>
              <button type="button" class="popup-top__close js-popup-close" aria-label="close">
                <svg width="1em" height="1em" class="icon icon-close ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <?php echo do_shortcode('[skyrora_contact_form id="4959"]')?>
      </div>
    </div>
  </div>

</div>

<?php wp_footer(); ?>

</body>

</html>