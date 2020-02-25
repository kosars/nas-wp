<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
		do_action( 'cherry_footer_before' );

		do_action( 'cherry_footer' );

		do_action( 'cherry_footer_after' ); ?>

	</div><!--site-wrapper-->

<?php do_action( 'cherry_body_end' ); ?>

<?php echo get_post_meta($post->ID, 'mobile-header-slider', true); ?>
<?php echo get_post_meta($post->ID, 'main-page-banner', true); ?>

<script>
if (screen.width < 500) {
$(".site-content .widget-area").css("background": "#4e342e");
}
</script>

<script>$(document).ready(function() {
    $('#footer-calendar').fullCalendar({
    titleFormat: 'MMMM',
	locale: 'ru',
    header: {
        left:   '',
        center: 'title',
        right:  'prev,next'
    },
    height: 410,
    contentHeight: 405,
    theme: true,
    googleCalendarApiKey: 'AIzaSyCRtXClIJass_r3N9zEhdw2z9Rd2bhot-c',
        events: {
            googleCalendarId: 'dg2i2d20u398bf20ibtnvf1d7o@group.calendar.google.com'
        },
    className: 'gcal-event',
    eventClick: function(event) {
        if (event.url) {
            window.open(event.url);
            return false;
            
        }
    },
    eventMouseover: function( event ) {
        if (event.url) {
           $("#my-footer-popup").html(event.title).show();
           $(this).css('border-color', 'green');
            return false;
            }
    },
     eventMouseout: function( event ) {
        if (event.url) {
           $("#my-footer-popup").hide();
           $(this).css('border-color', 'white');
            return false;
            }
    },
    eventBackgroundColor: 'green',
    eventBorderColor: '#fff',
    eventRender: function(event, element, view) {                   
            var ntoday = new Date().getTime();
            var eventEnd = moment( event.end ).valueOf();
            var eventStart = moment( event.start ).valueOf();
            if (!event.end){
                if (eventStart < ntoday){
                    element.addClass("past-event");
                    element.children().addClass("past-event");
                }
            } else {
                if (eventEnd < ntoday){
                    element.addClass("past-event");
                    element.children().addClass("past-event");
                }
            }
        } 
    });
});</script>

<script>
$('html:lang(ru-RU) .load_more_button4').text('Больше');
</script>

<script>
// English calendar
   $(document).ready(function() {
    $('#footer-calendar-en').fullCalendar({
    titleFormat: 'MMMM',
	locale: 'en',
    header: {
        left:   '',
        center: 'title',
        right:  'prev,next'
    },
    height: 410,
    contentHeight: 405,
    theme: true,
    googleCalendarApiKey: 'AIzaSyCRtXClIJass_r3N9zEhdw2z9Rd2bhot-c',
        events: {
            googleCalendarId: 'dg2i2d20u398bf20ibtnvf1d7o@group.calendar.google.com'
        },
    className: 'gcal-event',
    eventClick: function(event) {
        if (event.url) {
            window.open(event.url);
            return false;
            
        }
    },
    eventMouseover: function( event ) {
        if (event.url) {
           $("#my-footer-popup").html(event.title).show();
           $(this).css('border-color', 'green');
            return false;
            }
    },
     eventMouseout: function( event ) {
        if (event.url) {
           $("#my-footer-popup").hide();
           $(this).css('border-color', 'white');
            return false;
            }
    },
    eventBackgroundColor: 'green',
    eventBorderColor: '#fff',
    eventRender: function(event, element, view) {                   
            var ntoday = new Date().getTime();
            var eventEnd = moment( event.end ).valueOf();
            var eventStart = moment( event.start ).valueOf();
            if (!event.end){
                if (eventStart < ntoday){
                    element.addClass("past-event");
                    element.children().addClass("past-event");
                }
            } else {
                if (eventEnd < ntoday){
                    element.addClass("past-event");
                    element.children().addClass("past-event");
                }
            }
        } 
    });
});
</script>
<script>
$("html:lang(en-US) .site-title.image-logo").html('<a href="http://nas.zp.ua/en/" rel="home"><img src="http://nas.zp.ua/wp-content/uploads/2018/06/logo-english-2.png" alt="NAS"></a>');
$("html:lang(en-US) .site-info").html('<a class="footer-site-link" href="http://nas.zp.ua/en" rel="home" target="blanc">NAS</a> 2018');
$("html:lang(en-US) h3.cherry-follow_title").text('CONTACT:');
$('html:lang(en-US) .type-post a.btn.btn-default').text('Read more');
$('html:lang(en-US) .related-posts_item a.btn.btn-default').text('Read more');
</script>
	
<?php wp_footer(); ?>
</body>
</html>