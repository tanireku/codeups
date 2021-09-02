<?php get_header(); ?>

<!-- mv -->
<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/img_about-pc.jpg" media="(min-width: 768px)">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contactpage_sp.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">CONTACT</h2>
    <span class="p-sub-mv__subtitle">お問い合わせ</span>
  </div>
</div><!-- /mv -->

<section class="l-sub-contact p-sub-contact">
  <div class="l-inner">
    <div class="p-sub-contact__textBox">
      <p class="p-sub-contact__text">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</p>
    </div>
    <div class="p-sub-contact__contents">
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お問い合わせ種別</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.l-sub-contact p-sub-contact -->

<?php get_footer(); ?>