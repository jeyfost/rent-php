jQuery(document).ready(function() {
    function htmlSlider() {
        var slideWrap = jQuery('#slideWrap');
        var pic1 = jQuery('#switch1');
        var pic2 = jQuery('#switch2');
        var pic3 = jQuery('#switch3');
        var pic4 = jQuery('#switch4');
        var pic5 = jQuery('#switch5');
        var pic6 = jQuery('#switch6');
        var pic7 = jQuery('#switch7');
        var pic8 = jQuery('#switch8');
        var pic9 = jQuery('#switch9');
        var pic10 = jQuery('#switch10')
        var pic11 = jQuery('#switch11');
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

                if(pic4.attr('name') == 'active') {
                    var x = 0;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = 0;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = 0;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = 0;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = 0;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = 0;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = 0;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = 0;
                    var element = pic10;
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

                if(pic4.attr('name') == 'active') {
                    var x = -960;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -960;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -960;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -960;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -960;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -960;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -960;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -960;
                    var element = pic11;
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

                if(pic4.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -1920;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic3.attr('name', 'active');
                    pic3.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic4.click(function() {
            if(pic4.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic3;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -2880;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic4.attr('name', 'active');
                    pic4.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic5.click(function() {
            if(pic5.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic4;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -3840;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic5.attr('name', 'active');
                    pic5.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic6.click(function() {
            if(pic6.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic5;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -4800;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic6.attr('name', 'active');
                    pic6.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic7.click(function() {
            if(pic7.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic6;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -5760;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic7.attr('name', 'active');
                    pic7.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic8.click(function() {
            if(pic8.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic7;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -6720;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic8.attr('name', 'active');
                    pic8.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic9.click(function() {
            if(pic9.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic8;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic10;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -7680;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic9.attr('name', 'active');
                    pic9.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic10.click(function() {
            if(pic10.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic9;
                }

                if(pic11.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic11;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic10.attr('name', 'active');
                    pic10.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });

        pic11.click(function() {
            if(pic11.attr('name') != 'active') {

                if(pic1.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic1;
                }

                if(pic2.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic2;
                }

                if(pic3.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic3;
                }

                if(pic4.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic4;
                }

                if(pic5.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic5;
                }

                if(pic6.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic6;
                }

                if(pic7.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic7;
                }

                if(pic8.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic8;
                }

                if(pic9.attr('name') == 'active') {
                    var x = -8640;
                    var element = pic9;
                }

                if(pic10.attr('name') == 'active') {
                    var x = -9600;
                    var element = pic10;
                }

                slideWrap.animate({left: x}, 500, function(){
                    pic11.attr('name', 'active');
                    pic11.attr('style', 'cursor: default; background-color: #62aab8;');
                    element.attr('name', 'notActive');
                    element.attr('style', '');
                });
            }
        });
    }

    htmlSlider();

});