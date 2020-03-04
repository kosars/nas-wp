<?php get_header();?>
<?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );

     
                $type = get_post_meta(get_the_ID(), 'event_type', true);
                $date_start = strtotime(get_post_meta(get_the_ID(), 'event_date_start', true));
                $date_end = strtotime(get_post_meta(get_the_ID(), 'event_date_end', true));
                $description = get_post_meta(get_the_ID(), 'event_description', true);
                $coords = get_post_meta(get_the_ID(), 'event_coords', true);      
                  //the_post_navigation();
?>
<section class="article-wrapper">
    <h1 class="article-name"><?php the_title();?></h1>
    <div class="article-info-container">
        <div class="article-category-container">
            <span class="article-category"><?php   echo date_i18n('j F, Y', $date_start);?>
                <?php   if(!empty(get_post_meta(get_the_ID(), 'event_date_end', true))){?> — <?echo date_i18n('j F, Y', $date_end);}?>
            <span class="article-date"> <?php   if(!empty(get_post_meta(get_the_ID(), 'event_time_start', true))){?> Начало в <?echo date_i18n('H:i', strtotime(get_post_meta(get_the_ID(), 'event_time_start', true)));}?></span>

            </span>
        </div>
        <div class="article-tags-container">
            <span class="tag"><?=$type?></span>
        </div>
    </div>
    <?php the_content();?>            
</section>
            <!-- инста -->
            <section class="instagram">
                <div class="instagram-text margin-top">
                    <h1>#НАШ</h1>
                    <p>Больше о наших экспедициях в Instagram.
                        <br>
                        Подписывайтесь, будет интересно!
                        <a href="https://www.instagram.com/new_archaeological_school/" target="_blank">@new_archaeological_school</a>
                    </p>
                </div>

                <div class="instagram-slider">
                    <div class="slider__wrapper">
                        <a class="slider__item" href="https://www.instagram.com/p/B7dU4M7JKNs/" target="_blank"><img srcset="https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c160.0.960.960a/s150x150/80693890_613876039374652_6668239987261047103_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=LiA0e8_83BQAX_oGnXo&oh=dbdefc1a6479bb44eb079d34163783b1&oe=5EB7F358 150w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c160.0.960.960a/s240x240/80693890_613876039374652_6668239987261047103_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=LiA0e8_83BQAX_oGnXo&oh=a7a9564107a5e52148e7c5b0f31d2b16&oe=5EBDB712 240w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c160.0.960.960a/s320x320/80693890_613876039374652_6668239987261047103_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=LiA0e8_83BQAX_oGnXo&oh=55a516d9cc1174d04b399c3423c0a17b&oe=5EC37DA8 320w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c160.0.960.960a/s480x480/80693890_613876039374652_6668239987261047103_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=LiA0e8_83BQAX_oGnXo&oh=37ff96ff3a4b3cdb4f8b1811ede45510&oe=5EC849F2 480w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c160.0.960.960a/s640x640/80693890_613876039374652_6668239987261047103_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=LiA0e8_83BQAX_oGnXo&oh=5b5ed075c705a2c40fd784de016318c8&oe=5ED7B230 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/B6qzIxHJi6i/" target="_blank"><img srcset="https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s150x150/75372349_456428428633963_95709526425643_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=JJxkZ8ldZpkAX9mvmh-&oh=cdc7c4656497707f40ec9f1f30f61bb0&oe=5ED0A01B 150w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s240x240/75372349_456428428633963_95709526425643_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=JJxkZ8ldZpkAX9mvmh-&oh=1f04f82df16e295255e436eac8cf657a&oe=5ED1DA7D 240w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s320x320/75372349_456428428633963_95709526425643_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=JJxkZ8ldZpkAX9mvmh-&oh=cb6f894dd6ff1ca5ab1c601345fa8313&oe=5EBEA888 320w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s480x480/75372349_456428428633963_95709526425643_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=JJxkZ8ldZpkAX9mvmh-&oh=2ee4520d84d7327e5db558be179eaca0&oe=5ECE951C 480w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/75372349_456428428633963_95709526425643_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=JJxkZ8ldZpkAX9mvmh-&oh=f6cc54bc1c283274637e826b79c287de&oe=5ECF5BA4 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/B6ETjjDJVf4/" target="_blank"><img srcset="https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s150x150/76955951_163659138206496_161085370450437275_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=EhLPztvxzeUAX_eGKv9&oh=7d77e310f259f88f888197fbee82a22b&oe=5EBEC608 150w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s240x240/76955951_163659138206496_161085370450437275_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=EhLPztvxzeUAX_eGKv9&oh=a59cea59a218dd9db339c87a898128c0&oe=5EC915BD 240w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s320x320/76955951_163659138206496_161085370450437275_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=EhLPztvxzeUAX_eGKv9&oh=0955258cbd60c0edbf62d09b207c0129&oe=5EC11105 320w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s480x480/76955951_163659138206496_161085370450437275_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=EhLPztvxzeUAX_eGKv9&oh=95d8ead0c487ffe95f42f77f11782df8&oe=5EC0B359 480w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/76955951_163659138206496_161085370450437275_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=EhLPztvxzeUAX_eGKv9&oh=22858090c7d1b8ea7cd7777bee4c1904&oe=5EDBD9FD 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/B1EnxX1o-U6/" target="_blank"><img srcset="https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/67369590_381586095833481_4939651070005883658_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=0f6y2iYN3UAAX_O09zW&oh=0400d722396a105d7450bd9ffffaab51&oe=5ECA7155 150w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/67369590_381586095833481_4939651070005883658_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=0f6y2iYN3UAAX_O09zW&oh=454b7c11a11e3df7c2357ab1848babb7&oe=5ECE6E1F 240w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/67369590_381586095833481_4939651070005883658_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=0f6y2iYN3UAAX_O09zW&oh=feefd9b0f4d2c708765e16d3bb44da8b&oe=5ED236A5 320w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/67369590_381586095833481_4939651070005883658_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=0f6y2iYN3UAAX_O09zW&oh=9dde72b4614e848c0654c9831714501c&oe=5ECDFCFF 480w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/67369590_381586095833481_4939651070005883658_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=0f6y2iYN3UAAX_O09zW&oh=327f32f19d2592a8d798090ae1c3351c&oe=5EBBDBF2 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/B0LYhZSoAJj/" target="_blank"><img srcset="https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c178.0.723.723a/s150x150/67316789_650778295400180_4638937863481959684_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=vKXDmXd4xR4AX81lsA6&oh=862a3474c1acf1b68ade722de63b3d7b&oe=5EC80BB6 150w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c178.0.723.723a/s240x240/67316789_650778295400180_4638937863481959684_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=vKXDmXd4xR4AX81lsA6&oh=0ec71b85b365c0fc34e823bd716d02e6&oe=5EC177FC 240w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c178.0.723.723a/s320x320/67316789_650778295400180_4638937863481959684_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=vKXDmXd4xR4AX81lsA6&oh=a35e65d87604035e7e0fe0609eeb9b33&oe=5ED44546 320w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c178.0.723.723a/s480x480/67316789_650778295400180_4638937863481959684_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=vKXDmXd4xR4AX81lsA6&oh=e1d9013713977372679481ab082b5c51&oe=5ED85E1C 480w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c178.0.723.723a/s640x640/67316789_650778295400180_4638937863481959684_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=vKXDmXd4xR4AX81lsA6&oh=ef900a04cc0b6f9004e36727e28a7cdd&oe=5EC045DE 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/Bows9b8nuvd/" target="_blank"><img srcset="https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s150x150/42078550_1903186716655969_4545173321097222430_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=B1s-pAzV2h8AX_o5sh4&oh=4cc65e4e609c57941c7aba91471ead98&oe=5EC285CC 150w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s240x240/42078550_1903186716655969_4545173321097222430_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=B1s-pAzV2h8AX_o5sh4&oh=7612798f9dc4e95f5454df2e90271bfa&oe=5ED64DCA 240w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s320x320/42078550_1903186716655969_4545173321097222430_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=B1s-pAzV2h8AX_o5sh4&oh=cb472cb2437faaf41d660fb123e04433&oe=5ED5F5B4 320w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s480x480/42078550_1903186716655969_4545173321097222430_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=B1s-pAzV2h8AX_o5sh4&oh=23317ba6b39af81927a14145a362bbb9&oe=5EC8D6F3 480w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/42078550_1903186716655969_4545173321097222430_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=B1s-pAzV2h8AX_o5sh4&oh=a2ad474745aaf9c198b7517747fed5e3&oe=5EB8B1FC 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/Bmiu2HoAZN6/" target="_blank"><img srcset="https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c107.0.866.866a/s150x150/39114683_1018016245042432_1368634446047084544_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=l2hPPLXuuKEAX_dJU_E&oh=f542e7ef44337d6ab25fa706e1089f18&oe=5ED76CA3 150w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c107.0.866.866a/s240x240/39114683_1018016245042432_1368634446047084544_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=l2hPPLXuuKEAX_dJU_E&oh=b49646da18be61a94b36cf407c3cee26&oe=5ED636A5 240w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c107.0.866.866a/s320x320/39114683_1018016245042432_1368634446047084544_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=l2hPPLXuuKEAX_dJU_E&oh=dd95b13ffbec34598e1728056ffc0964&oe=5ED6CEDB 320w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/e35/c107.0.866.866a/s480x480/39114683_1018016245042432_1368634446047084544_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=l2hPPLXuuKEAX_dJU_E&oh=67cf36ed58079b25ead7682ef1a804e3&oe=5EC14E9C 480w,https://instagram.fiev25-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c107.0.866.866a/s640x640/39114683_1018016245042432_1368634446047084544_n.jpg?_nc_ht=instagram.fiev25-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=l2hPPLXuuKEAX_dJU_E&oh=60a4f6087a68663d6c76064ca833dcbd&oe=5EB6FEE4 640w" alt=""></a>
                        <a class="slider__item" href="https://www.instagram.com/p/B5KSZ5kHUea/" target="_blank"><img srcset="https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s150x150/75595227_182598516127856_4765887137185578344_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=rsiVJsByd_kAX_ZGZZ-&oh=df632f11cdca19d22b22653cfcf63264&oe=5ED2CAEC 150w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s240x240/75595227_182598516127856_4765887137185578344_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=rsiVJsByd_kAX_ZGZZ-&oh=3b2790c45624f34d3fc75b1cf238cb1e&oe=5EDAAFA6 240w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s320x320/75595227_182598516127856_4765887137185578344_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=rsiVJsByd_kAX_ZGZZ-&oh=8be6306dd17104943e48b2bdef0e4bcc&oe=5ECBE11C 320w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.810.810a/s480x480/75595227_182598516127856_4765887137185578344_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=rsiVJsByd_kAX_ZGZZ-&oh=81f0c9b2a290406bb949dc5c24f7d28f&oe=5EBF7E46 480w,https://instagram.fiev25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/75595227_182598516127856_4765887137185578344_n.jpg?_nc_ht=instagram.fiev25-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=rsiVJsByd_kAX_ZGZZ-&oh=4c2c377362b0a02c7f09cad4d6c79438&oe=5EC88184 640w" alt=""></a>
                    </div>
                    <span class="slider__control slider__control_left">&#10094</span>
                    <span class="slider__control slider__control_right slider__control_show">&#10095</span>
                </div>
            </section>
<?php              // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
?>
<?php get_footer();?>    