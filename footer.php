<footer class="footer" id="footer">
        <div class="footer-wrapper __inner">
            <nav class="footer-wrapper__nav">
            <?php
                $args = array(
                    'menu' => 'footer-menu',
                    'menu_class' => 'footer-wrapper__nav__list',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
            </nav>
            <div class="footer-wrapper__copyright">
                <small>© 2023 TATSUYAYOSHIIKE All Rights Reserved.</small>
            </div>
        </div>
    </footer>
    <div id="top-button" class="top-button">TOP</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top-button.js"></script>
    <?php wp_footer(); ?>
</body>
</html>