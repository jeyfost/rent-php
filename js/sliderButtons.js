function textColor1(action) {
    if(jQuery('#sliderButton1').attr('name') == 'notActive') {
        if(action) {
            jQuery('#b1bt').attr('style', 'color: #62aab8');
            jQuery('#b1st').attr('style', 'color: #62aab8');
        }
        else {
            jQuery('#b1bt').attr('style', 'color: #5f5f5f');
            jQuery('#b1st').attr('style', 'color: #5f5f5f');
        }
    }
}

function textColor2(action) {
    if(jQuery('#sliderButton2').attr('name') == 'notActive') {
        if(action) {
            jQuery('#b2bt').attr('style', 'color: #62aab8');
            jQuery('#b2st').attr('style', 'color: #62aab8');
        }
        else {
            jQuery('#b2bt').attr('style', 'color: #5f5f5f');
            jQuery('#b2st').attr('style', 'color: #5f5f5f');
        }
    }
}