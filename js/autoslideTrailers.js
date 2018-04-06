function autoSlide() {
    var slideWrap = jQuery('#slideWrapTrailers');
    var pic1 = jQuery('#switch1');
    var pic2 = jQuery('#switch2');
    var pic3 = jQuery('#switch3');


    if(pic1.attr('name') == 'active') {
        slideWrap.animate({left: -960}, 500, function() {
            pic1.attr('name', 'notActive');
            pic2.attr('name', 'active');
            pic1.attr('style', '');
            pic2.attr('style', 'cursor: default; background-color: #62aab8;');
        });
    }

    if(pic2.attr('name') == 'active') {
        slideWrap.animate({left: -1920}, 500, function() {
            pic2.attr('name', 'notActive');
            pic3.attr('name', 'active');
            pic2.attr('style', '');
            pic3.attr('style', 'cursor: default; background-color: #62aab8;');
        });
    }

    if(pic3.attr('name') == 'active') {
        slideWrap.animate({left: 0}, 500, function() {
            pic3.attr('name', 'notActive');
            pic1.attr('name', 'active');
            pic3.attr('style', '');
            pic1.attr('style', 'cursor: default; background-color: #62aab8;');
        });
    }

    setTimeout(autoSlide, 5000);
}

autoSlide();