<?php get_header(); ?>
  <main>
    <section class="works" id="works">
      <div class="works-wrapper __inner">
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">WORKS</a>
        </div>
        <div class="works-wrapper__ttl">
          <div class="ttl">
            <p>制作実績</p>
            <h1 class="ttl-main" data-en="Works"><span>WORKS</span></h1>
          </div>
        </div>
        <h2>My Works</h2>
        <div class="works-wrapper__con">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'paged' => $paged,
              'category_name' => 'works',
              'posts_per_page' => 4, //ページの表示数変更可能
              'orderby'     => 'date',
              'order' => 'DESC'
            ) );
            if ($the_query->have_posts()) :?><?php
              while ($the_query->have_posts()) : $the_query->the_post();?>
            <div class="works-wrapper__con__box">
              <a href="<?php the_permalink(); ?>">
                <div class="works-wrapper__con__box__img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="works-wrapper__con__box__txt">
                  <p><span></span><?php the_title(); ?> <br class="__sp"><small><?php the_field('demo1'); ?></small></p>
                </div>
              </a>
            </div>
          <?php endwhile;?><?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="pagination">
          <?php //ページリスト表示処理
          global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
            $paginate_format = '';
            $paginate_base = add_query_arg('paged','%#%');
          }else{
            $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/','paged');
            $paginate_base .= '%_%';
          }
          echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $the_query->max_num_pages,
            'mid_size' => 1,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '<<',
            'next_text' => '>>',
          ));
          ?>
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