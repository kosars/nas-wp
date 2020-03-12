</main>
    <footer>
        <?php if( pll_current_language() == 'en'):?>
        <div class="footer-content">
            <div class="block footer-logo">
                <a href=""><img src="<?php echo get_template_directory_uri() ?>/img/logo-en.png" alt="НАШ"></a>
            </div>
            <div class="block">
                <h1>SCHOOL</h1>
                <a href="<?php echo get_site_url().'/en/about-en'; ?>">About us</a>
                <a href="<?php echo get_post_type_archive_link('calendar'); ?>">Calendar</a>
                <a href="<?php echo get_site_url().'/en/about-en'; ?>">How to participate</a>
                <a href="<?php echo get_post_type_archive_link('family'); ?>">Team</a>
                <a href="<?php echo get_site_url().'/en/help-en'; ?>">Help</a>
            </div>
            <div class="block">
                <h1>SCIENTIFIC<br>ACTIVITY</h1>
                <a href="<?php echo get_site_url().'/en/tag/stati/'; ?>">NAS Articles</a>
                <a href="<?php echo get_site_url().'/en/archeo-news'; ?>">News</a>
                <a href="<?php echo get_post_type_archive_link('sight'); ?>">Sights</a>
                <!-- <a href="">Подкаст</a>
                <a href="">Сотрудничество</a> -->
            </div>
            <div class="block footer-contacts">
                <h1>CONTACTS</h1>
                <p>
                    Zaporizhzhya, <br>
                    Nemirovicha-Danchenko str. 46A<br>
                    Regional station of young tourists. <br>
                    nas.archaeology@gmail.com<br>
                </p>
                <p>
                    Chief<br>
                    Oleg Tuboltsev<br>
                    olegtuboltzev@gmail.com<br>
                    <a href="tel:+380679908363" class="footer-tel">+380679908363</a><br>
                </p>
            </div>
        </div>
        <?php else:?>
        <div class="footer-content">
            <div class="block footer-logo">
                <a href=""><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="НАШ"></a>
            </div>
            <div class="block">
                <h1>ШКОЛА</h1>
                <a href="<?php echo get_site_url().'/about'; ?>">О нас</a>
                <a href="<?php echo get_post_type_archive_link('calendar'); ?>">Календарь</a>
                <a href="<?php echo get_site_url().'/about'; ?>">Как принять участие</a>
                <a href="<?php echo get_post_type_archive_link('family'); ?>">Команда</a>
                <a href="<?php echo get_site_url().'/help'; ?>">Помощь</a>
            </div>
            <div class="block">
                <h1>НАУЧНАЯ <br>ДЕЯТЕЛЬНОСТЬ</h1>
                <a href="<?php echo get_site_url().'/tag/stati/'; ?>">НАШи статьи</a>
                <a href="<?php echo get_site_url().'/archeo-news'; ?>">Новости</a>
                <a href="<?php echo get_post_type_archive_link('sight'); ?>">Памятники</a>
                <!-- <a href="">Подкаст</a>
                <a href="">Сотрудничество</a> -->
            </div>
            <div class="block footer-contacts">
                <h1>КОНТАКТЫ</h1>
                <p>
                    г. Запорожье, <br>
                    ул. Немировича-Данченко, 46а<br>
                    Комунальное заведение <br>
                    «Центр туризма» ЗОР.<br>
                    nas.archaeology@gmail.com<br>
                </p>
                <p>
                    Руководитель<br>
                    Олег Валентинович Тубольцев<br>
                    olegtuboltzev@gmail.com<br>
                    <a href="tel:+380679908363" class="footer-tel">+380679908363</a><br>
                </p>
            </div>
        </div>
        <?php endif; ?>    
        <div class="footer-social">
            <a href="https://www.instagram.com/new_archaeological_school/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/groups/327894417648353/?ref=group_header" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>