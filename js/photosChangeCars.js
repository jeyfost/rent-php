jQuery(document).ready(function() {
    function photoChanger() {
        var img1 = jQuery('#flat1img');
        var img2 = jQuery('#flat2img');
        var img3 = jQuery('#flat3img');
        var img4 = jQuery('#flat4img');
        var img5 = jQuery('#flat5img');
        var sb1 = jQuery('#sliderButton1');
        var sb2 = jQuery('#sliderButton2');
        var slideWrap = jQuery('#slideWrap');
        var text = jQuery('#greetingsText');
        var button1 = jQuery('#roundButton1');
        var button2 = jQuery('#roundButton2');

        sb1.click(function() {
            if(sb1.attr('name') != 'active') {
                slideWrap.fadeOut('500');
                text.fadeOut('500');
                button1.fadeOut('500');
                button2.fadeOut('500');

                setTimeout(function(){
                    img1.attr('src', 'images/cars/car11.jpg');
                    img2.attr('src', 'images/cars/car12.jpg');
                    img3.attr('src', 'images/cars/car13.jpg');
                    img4.attr('src', 'images/cars/car14.jpg');
                    img5.attr('src', 'images/cars/car15.jpg');
                    sb1.attr('name', 'active');
                    sb2.attr('name', 'notActive');
                    button1.attr('src', 'images/blueRoundButton.png');
                    button2.attr('src', 'images/roundButton.png');
                    text.html('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
                }, 500);

                slideWrap.fadeIn('500');
                text.fadeIn('500');
                button1.fadeIn('500');
                button2.fadeIn('500');
            }
        });

        sb2.click(function() {
            if(sb2.attr('name') != 'active') {
                slideWrap.fadeOut('500');
                text.fadeOut('500');
                button1.fadeOut('500');
                button2.fadeOut('500');

                setTimeout(function(){
                    img1.attr('src', 'images/cars/car21.jpg');
                    img2.attr('src', 'images/cars/car22.jpg');
                    img3.attr('src', 'images/cars/car23.jpg');
                    sb1.attr('name', 'notActive');
                    sb2.attr('name', 'active');
                    button1.attr('src', 'images/roundButton.png');
                    button2.attr('src', 'images/BlueRoundButton.png');
                    text.html('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?');
                }, 500);

                slideWrap.fadeIn('500');
                text.fadeIn('500');
                button1.fadeIn('500');
                button2.fadeIn('500');
            }
        });
    }

    photoChanger();

});