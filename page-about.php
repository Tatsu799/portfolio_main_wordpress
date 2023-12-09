<?php get_header(); ?>
  <main>
    <section class="about" id="about">
      <div class="about-wrapper __inner">
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">ABOUT</a>
        </div>
        <div class="about-wrapper__ttl">
          <div class="ttl">
            <p>自己紹介</p>
            <h2 class="ttl-main" data-en="About"><span>ABOUT</span></h2>
          </div>
        </div>
        <div class="about-wrapper__con">
          <div class="about-wrapper__con__box">
            <h3>氏名</h3>
            <?php the_field('name')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>事業内容</h3>
            <?php the_field('business')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>スキル</h3>
            <?php the_field('skills')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>所在地</h3>
            <?php the_field('address')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>お問い合わせ</h3>
            <?php the_field('contact')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>略歴</h3>
            <?php echo the_content(); ?>
          </div>
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