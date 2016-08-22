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
        <script>
            $(function(){
                var tmb=$(".thumb div"), sn=st=0,sL=$(".slide a").length;
                function setSlide(i){
                    $('.slide>div').css('margin-top', -i*$('.slide').height());
                    tmb.removeClass("active").eq(i).addClass("active");
                    st=(new Date).getTime();
                    sn=i;
                }
                tmb.click(function(){
                    setSlide($(this).index());
                });
                setInterval(function(){
                    if((new Date).getTime()-st>3E3)
                        setSlide((sn<sL-1)?1+sn:0);
                }, 3E3);
                $(".menu-icon").click(function(){
                    $("nav>ul").toggleClass("hide-in-small");
                });
            });
        </script>
</html>