<li class="nav-link"><a href="<?php echo get_site_url().'/about'; ?>">ШКОЛА</a></li>
<li class="nav-link"><a href="">НОВОСТИ</a></li>
<li class="nav-link"><a href="<?php echo get_post_type_archive_link('calendar'); ?>">КАЛЕНДАРЬ</a></li>
<!-- <li class="nav-link"><a href="">ПОДКАСТ</a></li> -->
<li class="nav-link mobile"><a href="">ПРИНЯТЬ УЧАСТИЕ</a></li>
<li class="nav-link mobile"><a href="">НАУЧНАЯ ДЕЯТЕЛЬНОСТЬ</a></li>
<li class="nav-link mobile"><a href="<?php echo get_post_type_archive_link('sight'); ?>">ПАМЯТНИКИ</a></li>
<li class="nav-link"><a href="">КОНТАКТЫ</a></li>
<li class="lang"><a href="" class="<?php if( pll_current_language() == 'ru') echo 'active';?>">RU</a></li>
<li class="lang"><a href="" class="<?php if( pll_current_language() == 'en') echo 'active';?>">EN</a></li>
<li class="help"><a href="<?php echo get_site_url().'/help'; ?>" class="button">ПОМОЧЬ</a></li>