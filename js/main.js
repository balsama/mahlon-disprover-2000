(function($) {
	$(function() { //on DOM ready
    function autoScroll() {
      scroll = $('.pattern-container-outer').marquee().mouseover(function () {
        $(this).trigger('stop');
      }).mouseout(function () {
        $(this).trigger('start');
      }).mousemove(function (event) {
        if ($(this).data('drag') == true) {
          this.scrollLeft = $(this).data('scrollX') + ($(this).data('x') - event.clientX);
        }
      }).mousedown(function (event) {
        $(this).data('drag', true).data('x', event.clientX).data('scrollX', this.scrollLeft);
      }).mouseup(function () {
        $(this).data('drag', false);
      });
    }

    $('#start-scroll').click(function() {
      autoScroll();
      $(this).hide();
      $('#pause-scroll').show();
      $('#unpause-scroll').show();
    });
    $('#pause-scroll').click(function() {
      scroll.trigger('stop');
    });
    $('#unpause-scroll').click(function() {
      scroll.trigger('start');
    });
  });
 })(jQuery);

