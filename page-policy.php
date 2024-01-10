<?php get_header(); ?>
  <main>
    <section class="policy" id="policy">
      <div class="policy-wrapper __inner">
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">POLICY</a>
        </div>
        <div class="works-wrapper__ttl">
          <div class="ttl">
            <p>プライバシーポリシー</p>
            <h2 class="ttl-main" data-en="POLICY"><span>POLICY</span></h2>
          </div>
        </div>
        <div class="policy-wrapper__con">
          <?php echo the_content(); ?>
        </div>
      </div>
    </section>
    <section class="contact-top" id="contact">
      <div class="contact-top-wrapper __inner">
        <div class="contact-top-wrapper__ttl">
          <div class="ttl">
            <p>お問い合わせ</p>
            <h2 class="ttl-main" data-en="Contact"><span>CONTACT</span></h2>
          </div>
        </div>
        <div class="contact-top-wrapper__con">
          <div class="contact-top-wrapper__con__txt">
            <p>
              お気軽にお問い合わせください。<br>
              3営業日以内にご連絡をさせていただきます。
            </p>
          </div>
          <div class="contact-top-wrapper__con__btn">
            <a href="<?php echo get_page_link(11); ?>">
              <p>お問い合わせはこちら</p>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>