<?php get_header(); ?>

<!-- mv -->
<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/img_about-pc.jpg" media="(min-width: 768px)">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/img_about-sp.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">ABOUT US</h2>
    <span class="p-sub-mv__subtitle">DIGSMILEについて</span>
  </div>
</div><!-- /mv -->

<section class="l-vision p-vision">
  <div class="p-vision__inner l-inner">
    <h2 class="c-section-title">vision</h2>
    <div class="p-vision__content">
      <h3 class="p-vision__subtitle">デザインで人を笑顔にする会社</h3>
      <div class="p-vision__box">
        <p class="p-vision__text">私達のデザインで人が笑顔になる。</p>
        <p class="p-vision__text">そんなデザインを目指しています。</p>
        <p class="p-vision__text">私達が考える人を笑顔にできるデザインとは、<br>デザインが課題を適切に解決ができているかどうか。</p>
        <div class="p-vision__text">ビジュアルだけではなく、<br>本当に求められているものは何かを考え抜いて、<br>デザインしていきたい。</div>
        <div class="p-vision__text">誰かの幸せを創ることも、<br>世界の常識を変えていくことだってできる。</div>
        <div class="p-vision__text">私達はデザインの力を信じています。</div>
      </div>
    </div>
  </div>
</section><!-- /.vision -->

<section class="l-message p-message">
  <div class="p-message__inner">
    <div class="p-message__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/img_message.jpg" alt="女性が写っている写真"></div>
  </div>
  <div class="l-inner">
    <div class="p-message__content">
      <h2 class="c-section-title">ceo message</h2>
      <div class="p-message__box">
        <p class="p-message__text">良いデザインは人を幸せにする。</p>
        <p class="p-message__text">私達はそう信じています。</p>
        <p class="p-message__text">デザインを通して、ビジネスの課題とユーザーの課題を解決することで、世の中を幸せにしていきたい。</p>
        <div class="p-message__text">現在はあらゆるプロダクトがデジタル化されており、デザイナーに対する需要はますます高まっています。それとともに、期待される役割も幅広くなりつつあります。</div>
        <div class="p-message__text">クリエイティブで社会の可能性を切り開いていく。</div>
        <div class="p-message__text">変化の激しい現代、私達はデザインの力で社会を良い方向に変革していく企業を目指していきます。</div>
      </div>
    </div>
  </div>
</section><!-- /.l-message p-message -->

<section class="l-company p-company">
  <div class="l-inner">
    <h2 class="c-section-title">company</h2>
    <div class="p-company__content">
      <dl class="p-company__info p-explain">
        <div class="p-explain__block">
          <dt class="p-explain__header">社名</dt>
          <dd class="p-explain__description">株式会社DIGSMILE</dd>
        </div>
        <div class="p-explain__block">
          <dt class="p-explain__header">代表取締役</dt>
          <dd class="p-explain__description">テイラー・スウィフト</dd>
        </div>
        <div class="p-explain__block">
          <dt class="p-explain__header">設立</dt>
          <dd class="p-explain__description">2020年1月1日</dd>
        </div>
        <div class="p-explain__block">
          <dt class="p-explain__header">資本金</dt>
          <dd class="p-explain__description">1億円</dd>
        </div>
        <div class="p-explain__block">
          <dt class="p-explain__header">所在地</dt>
          <dd class="p-explain__description">東京都新宿区☓☓0-0-0</dd>
        </div>
        <div class="p-explain__block">
          <dt class="p-explain__header">電話番号</dt>
          <dd class="p-explain__description">03-0000-00000</dd>
        </div>
      </dl>     
    </div>
  </div>
</section><!-- /.l-company p-company -->

<div class="l-map p-map">
  <div class="l-inner">
    <div class="p-map__iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4878371906343!2d139.69838261514244!3d35.68961103712002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1630503570611!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div><!-- /.l-map p-map -->

<?php get_footer(); ?>