		<div style="clear:both;"></div>		
		
		<footer role="contentinfo">
			<div>Darija S. Radakovic</div>
			<small>&copy;&nbsp;Copyrights are for losers</small>		
		</footer>

	</main><!-- End primary page content -->	
	
	<!-- photoswipe controls -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">			
            <div class="pswp__top-bar" style="background:none;">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button> 
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
	</div>	
	<script type="text/javascript">
		var pswpElement = document.querySelectorAll('.pswp')[0];
		
		function psInit(i) {
			var options = { index:i };
			var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
			gallery.init();
		}
		
		function psInitSec(i) {
			var options = { index:i };
			var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, sec_items, options);
			gallery.init();			
		}		
		
		var sec_items = [];
		
      $(document).ready(function() {
      	fitMainTop();
     	   $("aside[role='complementary']").find("img").each(function(i) {
     	   	$(this).attr("onclick", "psInitSec(" + i + ")");
     	   	sec_items.push({
    				src: $(this).attr("src"),
    				w: $(this).attr("data-w"),
    				h: $(this).attr("data-h")
    			});
     	   });
      });
      
      $(window).resize(function() {
      	fitMainTop();
      });
      
      function fitMainTop() {
      	if ($(window).width() < 760) {
      		$("main[role='main']").css('top', ($(".navbar").outerHeight() - 25) + "px");
      	}
      	else {
      		$("main[role='main']").css('top', "20pt");
      	}
      }
	</script>
	<!-- photoswipe controls -->
	
</body>
</html>