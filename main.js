/**
 * Created by forest on 04.01.16.
 */

// Use for http://gv.forest-gr.com/

    var
    wing = new TimelineMax({
        repeat:-1
    }),

    wing2 = new TimelineMax({
        repeat:-1
    }),

    zeppelin = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    cityscape = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    forest = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    cart = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    floversprout = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    star = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    speaker = new TimelineMax({

        repeat:-1,
        yoyo:true
    }),
    fintech = new TimelineMax({

        repeat:-1,
        yoyo:true
    });

    wing.to( '#wing', 9, { rotation: 360, transformOrigin:'center', ease: Linear.easeNone});
    wing2.to( '#wing2', 9, { rotation: 360, transformOrigin:'center', ease: Linear.easeNone});
    zeppelin.to( '#zeppelin', 33, { x: 360, y:110, transformOrigin:'center', ease: Back.easeInOut})
        .to( '#zeppelin', 7, { x: 510, y:-150, transformOrigin:'center', ease: Back.easeOutIn})
        .to( '#zeppelin', 13, { x: 70, y:-70, transformOrigin:'center', ease: Back.easeOutIn})
        .to( '#zeppelin', 9, { x: -170, y:-130, transformOrigin:'center', ease: Back.easeOutIn});
    cityscape.to( '#mainCityscape', 55, { x: -170, ease: Linear.easeNone});
    forest.to( '#forest', 55, { x: 20, ease: Linear.easeNone});
    cart.to( '#cart', 3, { x: 50, ease: Back.easeOutIn});
    floversprout.to( '#floversprout', 2, { y: -15, ease: Linear.easeNone});
    star.to( '#star02, #star01', 1, { scale:0.7, transformOrigin:'center', ease: Back.easeOutIn})
        .to( '#star_small02, #star_small03, #star_small01', 1, { scale:0.7, transformOrigin:'center', ease: Back.easeOutIn});

    speaker.from( '#level1',0.5,  {attr:{class:'st0 stoutline_end'}}).to( '#level1',0.5,  {attr:{class:'st0 stoutline_st'}})
        .from( '#level2',0.5,  {attr:{class:'st0 stoutline_end'}}).to( '#level2',0.5,  {attr:{class:'st0 stoutline_st'}})
        .from( '#level3',0.5,  {attr:{class:'st0 stoutline_end'}}).to( '#level3',0.5,  {attr:{class:'st0 stoutline_st'}});

    fintech.from( '#light01',0.5,  {attr:{class:'st0'}}).to( '#light01',0.5,  {attr:{class:'st0 lightson'}})
        .from( '#light02',0.5,  {attr:{class:'st0'}}).to( '#light02',0.5,  {attr:{class:'st0 lightson'}})
        .from( '#light03',0.5,  {attr:{class:'st0'}}).to( '#light03',0.5,  {attr:{class:'st0 lightson'}});


    $('#wing, #wing2, #mainCityscape, #zeppelin, #forest, #computer, #e-commerce, #FinTech, #speaker, #dream').appear();

    $(document.body).on('appear', '#computer', function(e, $affected) {

        floversprout.resume();
    });

    $(document.body).on('appear', '#e-commerce', function(e, $affected) {

        cart.resume();
    });
    $(document.body).on('appear', '#FinTech', function(e, $affected) {

        fintech.resume();
    });

    $(document.body).on('appear', '#speaker', function(e, $affected) {

        speaker.resume();
    });


    $(document.body).on('appear', '#dream', function(e, $affected) {

        star.resume();
    });


    $(document.body).on('disappear', '#computer', function(e, $affected) {
        floversprout.pause();
    });

    $(document.body).on('disappear', '#e-commerce', function(e, $affected) {
        cart.pause();
    });

    $(document.body).on('disappear', '#FinTech', function(e, $affected) {
        fintech.pause();
    });

    $(document.body).on('disappear', '#speaker', function(e, $affected) {

        speaker.pause();
    });

    $(document.body).on('disappear', '#dream', function(e, $affected) {

        star.pause();
    });

    $(document.body).on('appear', '#wing, #wing2, #mainCityscape, #zeppelin, #forest', function(e, $affected) {

        // console.log($affected.attr('id'));

        if($affected.attr('id') == 'wing') {
        }

        if($affected.attr('id') == 'wing2') {
            wing2.resume();
        }

        if($affected.attr('id') == 'zeppelin') {
        }

        if($affected.attr('id') == 'mainCityscape') {

            wing.resume();
            zeppelin.resume();
            cityscape.resume();
            forest.resume();
        }

    });

    $(document.body).on('disappear', '#wing, #wing2, #mainCityscape, #zeppelin #forest', function(e, $affected) {

        if($affected.attr('id') == 'wing2') {

            wing2.pause();
        }

        if($affected.attr('id') == 'mainCityscape') {

            wing.pause();
            cityscape.pause();
            zeppelin.pause();
            forest.pause();
        }
    });


 /**
 * F Shortcodes *
 **/

//gallery
    //gallery-columns-1

    if($('.entry-content').find($('.gallery')).length > 0){


        $('.gallery').each(function (idx, item) {
            var col = 1,
                classes = $(this).attr('class').split(' ');

                for (var i=0; i<classes.length; i++){
                        if (classes[i].slice(0,16) === 'gallery-columns-')
                    {
                        //console.log(classes[i].slice(16));
                        col = classes[i].slice(16);
                    }
                }

            $(this).slick({
                slidesToShow: col,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: (col > 3) ? col - 1: col,
                            slidesToScroll: 1,
                            infinite: true,
                            //arrows:true
                            dots: true
                        }
                    },{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: (col > 3) ? 3 : col,
                            slidesToScroll: 1,
                            infinite: true,
                            //arrows:true
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            //arrows:true
                            dots: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            //arrows:true
                            dots: true
                        }
                    }
                ]
            });
        });
    }


    /**
     *  =translate el
     */


    $(window).scroll(function() {

        if($('main').hasClass('landing')){

            $('section').each(function(index){

                $('#skyline0').translateY(7);
                $('#skyline1').translateY(25);
                $('#cloud02_1_').translateY(5);
                $('#cloud03_1_').translateY(15);
            });
        }
    });

    $.fn.translateY = function(speed){
        var windowscroll = $(window).scrollTop(),
            scroll = windowscroll + (this.offset().top + this.outerHeight(true)),
            speed = speed == null ? 9 : speed,
            pos = this.offset();

        this.css("transform","translateY(" +  (-(scroll - pos.top)/speed)  + "px) translateZ(0)");
    }


    if($('#map_canvas').length > 0){

        window.onload = gmap;
    }


    /* ********************************** MAP *********************************** */

    function gmap() {
        var styles =
            [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];

        var officeLatlng = new google.maps.LatLng(22.298508, 114.174647),
            mapOptions = {
                zoom: 13,
                scrollwheel: false,
                disableDefaultUI: true,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL,
                    position: google.maps.ControlPosition.LEFT_CENTER
                },
                center: officeLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP},
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions),

            marker = new google.maps.Marker({

                position: map.getCenter(),
                map: map,
                zIndex:1000,
                animation: google.maps.Animation.DROP
            });

        map.setOptions({styles: styles});

        function toggleBounce() {

            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    }
    /* ********************************** MAP *********************************** */

}(jQuery));
