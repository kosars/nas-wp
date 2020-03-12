<?php
if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments wrapper comments-area">
	<?php if ( have_comments() ) :?>
	<?php the_comments_navigation(); ?>
    <?php if( pll_current_language() == 'en'):?>
        <h1>COMMENTS</h1>
    <?php else:?>
        <h1>КОММЕНТАРИИ</h1>
    <?php endif; ?>
    
    <div class="comments-container">
        <!-- <div class="comment">
            <p class="comment-name">Анастасия Саламаха</p>
            <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="comment-date">9 апреля 1228 в 22:28</p>
        </div> -->
	</div>
	<?endif; // Check for have_comments().

	comment_form();
	?>
    <!-- <form class="comment-form-container">
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Электронная почта">
        <textarea name="message" rows="3" placeholder="Комментарий"></textarea>
        <input type="submit" value="ДОБАВИТЬ КОММЕНТАРИЙ" class="button">
    </form> -->
</section>
