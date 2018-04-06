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
        var switch1 = jQuery('#switch1B');
        var switch2 = jQuery('#switch2B');
        var switch3 = jQuery('#switch3B');
        var switch4 = jQuery('#switch4B');
        var switch5 = jQuery('#switch5B');

        sb1.click(function() {
            if(sb1.attr('name') != 'active') {
                slideWrap.fadeOut('500');
                text.fadeOut('500');
                button1.fadeOut('500');
                button2.fadeOut('500');

                setTimeout(function(){
                    img1.attr('src', 'images/appartments/flat11.jpg');
                    img2.attr('src', 'images/appartments/flat12.jpg');
                    img3.attr('src', 'images/appartments/flat13.jpg');
                    img4.attr('src', 'images/appartments/flat14.jpg');
                    img5.attr('src', 'images/appartments/flat15.jpg');
                    switch1.attr('src', 'images/appartments/preview/flat11.jpg');
                    switch2.attr('src', 'images/appartments/preview/flat12.jpg');
                    switch3.attr('src', 'images/appartments/preview/flat13.jpg');
                    switch4.attr('src', 'images/appartments/preview/flat14.jpg');
                    switch5.attr('src', 'images/appartments/preview/flat15.jpg');
                    sb1.attr('name', 'active');
                    sb2.attr('name', 'notActive');
                    button1.attr('src', 'images/blueRoundButton.png');
                    button2.attr('src', 'images/roundButton.png');
                    jQuery('#b1bt').css('color', '#62aab8');
                    jQuery('#b1st').css('color', '#62aab8');
                    jQuery('#b2bt').css('color', '#5f5f5f');
                    jQuery('#b2st').css('color', '#5f5f5f');
                    text.html('Однокомнатная уютная квартира расположена в центре Могилёва на берегу реки Дубровенка по адресу ул. Бурденко, 12 в 10-ти этажном кирпичном доме на 7-м этаже.<br /><br />Площадь квартиры — 46 м.кв. Большая комната — спальня с отдельной кухней. Имеется большая двуспальная кровать с ортопедическими матрасами и угловой диван.<br /><br />Спальных мест: 2 + 2 + 1.<br /><br />Имеется всё необходимое для проживания: СВЧ, холодильник, стиральная машина, мелкая бытовая техника. Есть балкон, выходящий в тихий двор на стоянку авто.<br /><br />В квартире выполнен современный евроремонт, санузел раздельный, мебель и сантехника новые.<br /><br />Квартира оборудована скоростным Интернетом ADSL + Wi-Fi с круглосуточным бесплатным доступом, и интерактивным IP-телевидением, спутниковой антенной.<br /><br />В непосредственной близости находятся:<br /><ul><li>река "Дубровенка" с пешеходной зоной с летними барами, кафе и прокатом лодок/катамаранов вдоль реки;</li><li>кинотеатр «Октябрь» (DOLBY, 3D);</li><li>развлекательный комплекс «На дубровке» (ресторан, кафе, клуб, боулинг);</li><li>ФОК с бассейном;</li><li>дворец пионеров.</li></ul>В шаговой доступности:<br /><ul><li>гостиница «Могилев»; </li><li>ЦУМ;</li> <li>торговые центры;</li><li>центральный продуктовый рынок;</li><li>баня, сауна;</li><li>салоны красоты;</li><li>медицинские центры;</li><li>кафе;</li><li>рестораны.</li></ul><br />Возможна встреча иногородних гостей на вокзале с доставкой до квартиры на комфортабельном автомобиле.<br /><br /><b style="color: #62aab8;">Стоимость: 20 у.е. в сутки.</b>');
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
                    img1.attr('src', 'images/appartments/flat21.jpg');
                    img2.attr('src', 'images/appartments/flat22.jpg');
                    img3.attr('src', 'images/appartments/flat23.jpg');
                    img4.attr('src', 'images/appartments/flat24.jpg');
                    img5.attr('src', 'images/appartments/flat25.jpg');
                    switch1.attr('src', 'images/appartments/preview/flat21.jpg');
                    switch2.attr('src', 'images/appartments/preview/flat22.jpg');
                    switch3.attr('src', 'images/appartments/preview/flat23.jpg');
                    switch4.attr('src', 'images/appartments/preview/flat24.jpg');
                    switch5.attr('src', 'images/appartments/preview/flat25.jpg');
                    sb1.attr('name', 'notActive');
                    sb2.attr('name', 'active');
                    button1.attr('src', 'images/roundButton.png');
                    button2.attr('src', 'images/blueRoundButton.png');
                    jQuery('#b1bt').css('color', '#5f5f5f');
                    jQuery('#b1st').css('color', '#5f5f5f');
                    jQuery('#b2bt').css('color', '#62aab8');
                    jQuery('#b2st').css('color', '#62aab8');
                    text.html('Трехкомнатная уютная квартира расположена в центре Могилёва по адресу ул. Орловского, 4.<br /><br />Площадь квартиры — 60 м.кв. Имеются большие двуспальные кровати с ортопедическими матрасами и диван.<br /><br />Спальных мест: 2 + 2 + 2 + 1.<br /><br />Имеется всё необходимое для проживания: СВЧ, холодильник, стиральная машина, ЖК-панель с цифровым ТВ, DVD, музыкальный центр, мелкая бытовая техника.<br /><br />В квартире выполнен современный евроремонт. Мебель и сантехника — новые.<br /><br />Квартира оборудована скоростным Интернетом ADSL + Wi-Fi с круглосуточным бесплатным доступом.<br /><br />В непосредственной близости находятся:<br /><ul><li>река "Дубровенка" с пешеходной зоной, летними барами, кафе и прокатом лодок/катамаранов вдоль реки;</li><li>кинотеатр «Октябрь» (DOLBY, 3D);</li><li>развлекательный комплекс «На дубровке» (ресторан, кафе, клуб, боулинг);</li><li>ФОК с бассейном;</li><li>дворец пионеров.</li></ul>В шаговой доступности:</br /><ul><li>гостиница «Могилев»;</li><li>ЦУМ;</li><li>торговые центры;</li><li>центральный продуктовый рынок;</li><li>баня, сауна;</li><li>салоны красоты;</li><li>медицинские центры;</li><li>кафе;</li><li>рестораны.</li></ul><br />Возможна встреча иногородних гостей на вокзале с доставкой до квартиры на комфортабельном автомобиле.<br /><br /><b style="color: #62aab8">Стоимость: 40 у.е. в сутки с торгом.</b>');
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