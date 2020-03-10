<?php if( pll_current_language() == 'en'):?>
    <li class="nav-link"><a href="<?php echo get_site_url().'/en/about-en'; ?>">SCHOOL</a></li>
    <li class="nav-link"><a href="<?php echo get_site_url().'/en/all-en'; ?>">NEWS</a></li>
    <li class="nav-link"><a href="<?php echo get_post_type_archive_link('calendar'); ?>">CALENDAR</a></li>
    <!-- <li class="nav-link"><a href="">PODCAST</a></li> -->
    <li class="nav-link mobile"><a href="">PARTICIPATE</a></li>
    <li class="nav-link mobile"><a href="<?php echo get_site_url().'/en/tag/nauchnaya-deyatelnost'; ?>">SCIENTIFIC ACTIVITY</a></li>
    <li class="nav-link mobile"><a href="<?php echo get_post_type_archive_link('sight'); ?>">SIGHTS</a></li>
    <li class="nav-link"><a href="">КОНТАКТЫ</a></li>
    <!-- <li class="lang"><a href="">RU</a></li>
    <li class="lang"><a href="" class="active">EN</a></li> -->
    <?php echo $output;?>
    <li class="help"><a href="<?php echo get_site_url().'/en/help-en'; ?>" class="button">ПОМОЧЬ</a></li>
<?php else:?>
    <li class="nav-link"><a href="<?php echo get_site_url().'/about'; ?>">ШКОЛА</a></li>
    <li class="nav-link"><a href="<?php echo get_site_url().'/all'; ?>">НОВОСТИ</a></li>
    <li class="nav-link"><a href="<?php echo get_post_type_archive_link('calendar'); ?>">КАЛЕНДАРЬ</a></li>
    <!-- <li class="nav-link"><a href="">ПОДКАСТ</a></li> -->
    <li class="nav-link mobile"><a href="">ПРИНЯТЬ УЧАСТИЕ</a></li>
    <li class="nav-link mobile"><a href="<?php echo get_site_url().'/tag/nauchnaya-deyatelnost'; ?>">НАУЧНАЯ ДЕЯТЕЛЬНОСТЬ</a></li>
    <li class="nav-link mobile"><a href="<?php echo get_post_type_archive_link('sight'); ?>">ПАМЯТНИКИ</a></li>
    <li class="nav-link"><a href="">КОНТАКТЫ</a></li>
    <!-- <li class="lang"><a href="" class="active">RU</a></li>
    <li class="lang"><a href="" class="">EN</a></li> -->
    <?php echo $output;?>
    <li class="help"><a href="<?php echo get_site_url().'/help'; ?>" class="button">ПОМОЧЬ</a></li>
<?php endif; ?>