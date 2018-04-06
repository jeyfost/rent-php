jQuery(document).ready(function() {
    function htmlSlider() {
        var slideWrap = jQuery('#slideWrapTrailers');
        var pic1 = jQuery('#switch1');
        var pic2 = jQuery('#switch2');
        var pic3 = jQuery('#switch3');
        var slideWidth = jQuery('.slideItem').outerWidth();

        pic1.click(function() {
            if(pic1.attr('name') != 'active') {

                if(pic2.attr('name') == 'active') {
                    var x = 0;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = 0;
                    var element = pic3;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic1.attr('name', 'active');
                    pic1.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic2.click(function() {
            if(pic2.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -960;
                    var element = pic1;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -960;
                    var element = pic3;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic2.attr('name', 'active');
                    pic2.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });

            }
        });

        pic3.click(function() {
            if(pic3.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic2;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic3.attr('name', 'active');
                    pic3.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });
    }

    htmlSlider();

});