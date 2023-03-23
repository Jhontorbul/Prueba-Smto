<footer class="footer">
    <div class="footer-flex">
        <div class="footer-email">
            <h3>Contact us</h3>
                <p>Email</p>
                <p>contact@sitename.com</p>
                <p>contact@sitename.com</p>
        </div>
        <div class="footer-phone">
                <p>Phone</p>
                <p>+9994 44 333 2145</p>
        </div>
        <div class="footer-office">
            <p>Main office</p>
                <p>2536 Cedarwood Ct udson, Ohio(OH), 44236</p>
        </div>
        <div class="apps-footer">
            <h3>Mobile application</h3>
                <div class="apps-footer-flex">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logoplay.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/appstore.png" alt="">
                  </div>
        </div>
    </div>

    <div class="copy">
        <p class="text-center">©<?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved. <a href="#">Privacy Statement</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>