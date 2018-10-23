jQuery(function () {
    new Slider();
    new OwlSlider();
    new ServiceLinesAnimation();
    new AlexSectionScrollAnimation();
    new HomeUseCasesSectionAnimation();
    new ScrollToOneScreenBottom();
    new MobileNavActions();
    new ServicesCoursesAnimation();

    jQuery('.js-show-interview').on('click', function (e) {
        e.preventDefault();
        jQuery('.about-section-6').slideToggle();
    });

    var homebg = new Video();
    var screenWidth = jQuery(window).width();

    jQuery(window).on('resize', function () {

        if(screenWidth != jQuery(window).width())
        {
            screenWidth = jQuery(window).width();
            homebg.resize();
        }    
    });

    new PreLoader();

    if (jQuery('#map').length) {
        initialize();
    }
});



var ServicesCoursesAnimation = function () {
  jQuery('.courses-js').on('mouseover', function () {
      var current = this;
      jQuery('.courses-js').each(function (i, e) {
          if(current !== e) {
              jQuery(e).css('opacity', 0.5);
          }
      });
  }).on('mouseleave', function () {
      jQuery('.courses-js').css('opacity', 1);
  });
};


var Screen = function() {};

Screen.prototype.isDesctop = function () {
    if(jQuery(window).width() > 1200)
        return true;
    return false;
};

Screen.prototype.isPad = function () {
    if(jQuery(window).width() <= 1200 && jQuery(window).width() > 767.99)
        return true;
    return false;
};

Screen.prototype.isMobile = function () {
    if(jQuery(window).width() <= 767.99)
        return true;
    return false;
};

var PreLoader = function() {

    this.screen = new Screen();
    
    function closePreLoader() {
        setTimeout(function () {
            jQuery('.pre-loader').find('img').css('display', 'none');
            jQuery('.pre-loader').fadeOut( "slow");
        }, 500);
    }
    
    if(this.screen.isDesctop() && jQuery('#home-video').length)
    {
        var vid = document.getElementById("home-video");

        if(vid.readyState === 4)
        {
            closePreLoader();
        }
        else
        {
            vid.onloadeddata = function()
            {
                closePreLoader();
            };
        }
    }
    else
    {
        if(jQuery('[data-is-loaded]').length === 0)
        {
            closePreLoader();
        }
        else
        {
            jQuery('[data-is-loaded]').each(function(index, el) {

                    var mediaItem = jQuery(el);

                    var status = el.complete || el.naturalWidth > 0;

                    mediaItem.attr('data-is-loaded', status ? 'true' : 'false');

                    if(status)
                    {
                        closePreLoader();
                    }
                    else
                    {
                        mediaItem.on('load', function () {

                            jQuery(this).attr('data-is-loaded', 'true');

                            var loadStatus = true;

                            jQuery.each(jQuery('[data-is-loaded]'), function(i, e) {
                                if(jQuery(e).attr('data-is-loaded') === 'false')
                                {
                                    loadStatus = false;
                                }
                            });

                            if(loadStatus)
                            {
                                closePreLoader();
                            }
                        });
                    }
                });
        }


    }

};

var Video = function () {
    this.screen = new Screen();
    this.headerBg = jQuery('.h-header-bg');
    this.video = jQuery('[data-js="h-header-bg"]');
    this.img = this.headerBg.find('img');
    this.header = jQuery('.home-header');
    this.resize();
};


Video.prototype.resize = function() {
    
    this.headerBg.css({
        'height' : jQuery(window).height(),
        'width' : jQuery(window).width()
    });


    if(this.screen.isMobile())
    {
        this.img.css('width', 'auto');
        this.header.css('width', "100%");

        if(this.img.width() <= jQuery(window).width())
        {
            this.img.css('width', '100%');
            this.img.css('height', 'auto');
        }

        this.headerBg.css('height', jQuery(window).height());
        this.header.css('height', jQuery(window).height());
    }
    else if(this.screen.isPad())
    {
        this.video.css('width', "1200px");
        this.headerBg.css('width', "1200px");
        this.header.css('width', "1200px");
        this.header.height(this.video.height());
    }
    else
    {
        this.video.css('width', "100%");
        this.header.css('width', "100%");
        this.header.height(this.video.height());
    }

    this.video.css({
        'margin-left' : this.video.width() / 2 * -1,
    });

    this.img.css({
        'margin-left' : this.img.width() / 2 * -1,
    });  
};



var Slider = function () {
    var slider = jQuery('.home-slider');

    slider.bxSlider({
        mode: "horizontal",
        auto: true,
        loop : true,
        pause: 5000,
        minSlides: 2,
        maxSlides: 2,
        controls: false,
        pagerSelector: ".dots",
        autoHover: true,
        touchEnabled : false
    });

    jQuery(document).on('click', '[aria-hidden="false"] .home-slider-next', function() {
        slider.goToNextSlide();
        return false;
    });

    jQuery(document).on('click', '[aria-hidden="false"] .home-slider-prev', function() {
        slider.goToPrevSlide();
        return false;
    });
};



var HomeUseCasesSectionAnimation = function() {

    var right = jQuery(".right-content");

    if(!right.length)
        return;

    var right_start = right.offset().top + right.height() / 2;

    jQuery(window).on("scroll", function() {
        if(window.pageYOffset >= right_start)
        {
            right.addClass('view');
        }
    });

    var left = jQuery(".left-content");

    var left_start = left.offset().top + left.height() / 2;

    jQuery(window).on("scroll", function() {
        if(window.pageYOffset >= left_start)
        {
            left.addClass('view');
        }
    });
};



var OwlSlider = function() {
    var newsOwl = jQuery(".owl-carousel");

    if(!newsOwl.length)
        return null;
   

    newsOwl.owlCarousel({
        loop: true,
        responsive : {
            0 :  {
                items : 1
            },

            576 : {
                items : 2
            },

            1200 : {
                items : 3,
            }
        }
    });

    jQuery('.news-slider-prev').click(function() {
        newsOwl.trigger('prev.owl.carousel');
    });

    jQuery('.news-slider-next').click(function() {
        newsOwl.trigger('next.owl.carousel');
    });
};



var ServiceLinesAnimation = function() {

    this.screen = new Screen();

    if(!this.screen.isMobile())
    {
        jQuery('.h-section-part-1-column img, .h-section-part-1-column a, .h-section-part-1-column p').on('mouseover',  function() {
            jQuery(this).parent().addClass('active');
        });

        jQuery(document).on('mouseleave', '.h-section-part-1-column.active', function () {
            jQuery(this).removeClass('active');
        });
    }
    else
    {
        jQuery('.mobile-show-trigger').on('click', function () {

            var parent = jQuery(this).parent();

            if(parent.hasClass('active'))
            {
                parent.removeClass('active');
            }
            else
            {
                parent.addClass('active');
            } 
        });
    }
};




var AlexSectionScrollAnimation = function () {

    var block = jQuery('.home-representative-message-section');

    if(!block.length)
        return;

    var start = block.offset().top + block.height() / 4;

    jQuery(window).on("scroll", function() {
        if(jQuery(window).scrollTop() >= start)
        {
            block.addClass('view');
        }
    });
};




var ScrollToOneScreenBottom = function() {

    var elem = jQuery(".icon-scroll");

    elem.on('click', function() {
        jQuery('html, body').animate({scrollTop: jQuery(window).height()}, 500);
    });
};




var MobileNavActions = function() {

    jQuery('.button-nav').on('click', function () {
        jQuery('.header .nav, .header .nav-inverse').addClass('active');
    });

    jQuery('.nav .close, .nav-inverse .close').on('click', function () {
        jQuery('.header .nav, .header .nav-inverse').removeClass('active');
    });

};



var geocoder;
var map;
var query = new Array('г. Минск, улица Гамарника, 30', 'бульвар Вацлава Гавела, 4, Київ');
var idArr = new Array('mp1', 'mp0');

function initialize() {

    var coordinates = {'lat': 40.757946, 'lng': -73.992323};
    geocoder = new google.maps.Geocoder();
    var mapOptions = {
            mapTypeControl : false,
            streetViewControl : false,
            fullscreenControl : false,
            center: coordinates,
            zoom: 15,
            styles: 
            [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };

        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var url = document.getElementById('mapMarker').value;

         var image = {
            url: url
            // This marker is 20 pixels wide by 32 pixels high.
            // size: new google.maps.Size(89, 112) ,
            // The origin for this image is (0, 0).
            //origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            //anchor: new google.maps.Point(0, 32)
        };

        marker = new google.maps.Marker({
            position: coordinates,
            map: map,
            icon : image
        });
    }

  