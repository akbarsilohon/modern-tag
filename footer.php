    <footer class="modern_footer">
        <div class="footer_inner"></div>
        <div class="full_footer">
            <p class="footer_copy">
                &copy; <?php echo date('Y'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>. All rights reserved.
            </p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>