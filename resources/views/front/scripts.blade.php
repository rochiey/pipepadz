
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<link rel='stylesheet' id='soliloquy-lite-style-css'  href='{{ asset("css/soliloquy.css") }}' type='text/css' media='all' />
<link rel='stylesheet' id='soliloquy-liteclassic-theme-css'  href='{{ asset("css/soliloquy-style.css") }}' type='text/css' media='all' />
<script src="https://js.stripe.com/v3/"></script>
<script type='text/javascript' src='{{ asset("js/q-a-plus.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/primathemes.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/js.cookie.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/cart-fragments.min.js") }}'></script>
<script type='text/javascript'>
    jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
    	jQuery( 'body' ).trigger( 'jetpack-lazy-images-load' );
    } );
    
</script>
<script type='text/javascript' src='{{ asset("js/wp-embed.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/soliloquy-min.js") }}'></script>
<script type="text/javascript">/* Custom Scripts */</script>
<script type="text/javascript">
    if ( typeof soliloquy_slider === 'undefined' || false === soliloquy_slider ) {soliloquy_slider = {};}jQuery('#soliloquy-container-1396').css('height', Math.round(jQuery('#soliloquy-container-1396').width()/(1024/451)));jQuery(window).load(function(){var $ = jQuery;var soliloquy_container_1396 = $('#soliloquy-container-1396'),soliloquy_1396 = $('#soliloquy-1396');soliloquy_slider['1396'] = soliloquy_1396.soliloquy({slideSelector: '.soliloquy-item',speed: 60,pause: 7000,auto: 1,useCSS: 0,keyboard: true,adaptiveHeight: 1,adaptiveHeightSpeed: 400,infiniteLoop: 1,mode: 'fade',pager: 1,controls: 1,nextText: '',prevText: '',startText: '',stopText: '',onSliderLoad: function(currentIndex){soliloquy_container_1396.find('.soliloquy-active-slide').removeClass('soliloquy-active-slide').attr('aria-hidden','true');soliloquy_container_1396.css({'height':'auto','background-image':'none'});if ( soliloquy_container_1396.find('.soliloquy-slider li').length > 1 ) {soliloquy_container_1396.find('.soliloquy-controls').fadeTo(300, 1);}soliloquy_1396.find('.soliloquy-item:not(.soliloquy-clone):eq(' + currentIndex + ')').addClass('soliloquy-active-slide').attr('aria-hidden','false');soliloquy_container_1396.find('.soliloquy-clone').find('*').removeAttr('id');soliloquy_container_1396.find('.soliloquy-controls-direction').attr('aria-label','carousel buttons').attr('aria-controls', 'soliloquy-container-1396');soliloquy_container_1396.find('.soliloquy-controls-direction a.soliloquy-prev').attr('aria-label','previous');soliloquy_container_1396.find('.soliloquy-controls-direction a.soliloquy-next').attr('aria-label','next');},onSlideBefore: function(element, oldIndex, newIndex){soliloquy_container_1396.find('.soliloquy-active-slide').removeClass('soliloquy-active-slide').attr('aria-hidden','true');$(element).addClass('soliloquy-active-slide').attr('aria-hidden','false');},onSlideAfter: function(element, oldIndex, newIndex){},});});			
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>