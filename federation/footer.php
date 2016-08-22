        <footer>
            <div>
                <?php $arg=array(
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'theme_location'  => 'footer-menu'
                );
                echo strip_tags(wp_nav_menu($arg), '<a>' );
                ?>
            </div>
            <p>&nbsp;</p>
            <div>کلیه حقوق سایت محفوظ و مربوط به فدراسیون تیراندازی جمهوری اسلامی ایران می‌باشد.</div>
        </footer>
    </div><!-- / wrapper -->
    <?php wp_footer()?>
</body>

</html>