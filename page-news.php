<?php get_header(); ?>
  <main>
    <section class="news" id="news">
      <div class="news-wrapper __inner">
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">NEWS</a>
        </div>
        <div class="news-wrapper__ttl">
          <div class="ttl">
            <p>ニュース</p>
            <h1 class="ttl-main" data-en="news"><span>NEWS</span></h1>
          </div>
        </div>
        <div class="news-wrapper__con">
          <h3 class="news-wrapper__con__ttl">All News</h3>
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'paged' => $paged,
              'category_name' => 'news',
              'posts_per_page' => 4, //ページの表示数変更可能
              'orderby'     => 'date',
              'order' => 'ASC'
            ) );
            if ($the_query->have_posts()) :?><?php
              while ($the_query->have_posts()) : $the_query->the_post();?>
            <div class="news-wrapper__con__cont">
              <div class="news-wrapper__con__cont__date">
                <a href="<?php the_permalink(); ?>">
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
                </a>
              </div>
              <div class="news-wrapper__con__cont__txt">
                <a href="<?php the_permalink(); ?>">
                  <h2 class="title"><?php the_title(); ?></h2>
                  <P class="txt">
                    <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                  </P>
                </a>
              </div>
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