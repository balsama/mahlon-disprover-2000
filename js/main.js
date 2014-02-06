(function($) {
	$(function() { //on DOM ready
    var scroll = $('.pattern-container-outer').marquee().mouseover(function () {
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

    $('#pause-scroll').click(function() {
      scroll.trigger('stop');
    });
    $('#start-scroll').click(function() {
      scroll.trigger('start');
    });
  });
 })(jQuery);

