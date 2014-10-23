jQuery(document).ready(function($) {

  jQuery('.lte8 article:last-child').addClass('last-child');

  // Convert human readable email strings into mailto: hyperlinks
  function mailtoLinks() {
    $('.email-address').each(function() {
      $(this).replaceWith(
        $('<a/>', {
          'href': 'mailto:' + $(this).text().parseEmailString(),
          'class': 'email-address',
          'html': $(this).html().parseEmailString()
        })
      );
    });
    
  }

  String.prototype.parseEmailString = function() {
    return this.replace(/[\s]?at[\s]?/g, '@').replace(/[\s]?dot[\s]?/g, '.').replace(/rose[\s]+/g, 'rose').replace(/>[\s]+</g, '><');
  };

  mailtoLinks();

  jQuery('#rose-message-form textarea').autosize();

  // toggle hide/show menu for mobile
  jQuery('#menu-toggle').click(function() {
    jQuery('#block-rose-main-menu ul.menu').slideToggle(500);
    if (jQuery('#menu-toggle').hasClass('closed')) {
      jQuery('#menu-toggle').attr('class', 'open');
      jQuery('#menu-toggle').html('Hide');
    }
    else if (jQuery('#menu-toggle').hasClass('open')) {
      jQuery('#menu-toggle').attr('class', 'closed');
      jQuery('#menu-toggle').html('Menu');
    }
  });

  //jQuery('#block-views-about-slideshow-about-slideshow .views_slideshow_cycle_slide').css('height', '480px');


  jQuery(window).resize(function() {
    if (jQuery(window).width() > 740 ) {
      jQuery('#block-rose-main-menu ul.menu').attr('style', '');
      jQuery('#menu-toggle').attr('class', 'closed');
      jQuery('#menu-toggle').html('Menu');

      // reset the slideshow styles
      jQuery('#views_slideshow_cycle_teaser_section_about_slideshow-about_slideshow').attr('style', 'position: relative; width: 875px; height: 480px; overflow: hidden;');
    };
  });

  if (jQuery('#block-menu-menu-footer-menu a').hasClass('active')) {
    jQuery('#block-menu-menu-footer-menu a').each(function() {
      if (!jQuery(this).hasClass('active')) {
        jQuery(this).css('color', '#DCE3C0')
      }
    })
  };

  if (jQuery('#block-rose-main-menu a').hasClass('active')) {
    jQuery('#block-rose-main-menu a').each(function() {
      if (!jQuery(this).hasClass('active')) {
        jQuery(this).css('color', '#DCE3C0')
      }
    })
  };

// end of doc ready
});