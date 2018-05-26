 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 logo logo--footer">
                    <a href="#" class="logo__link logo__link--footer">
                        <img src="<?php bloginfo('stylesheet_directory')?>/img/invert-logo.png" alt="Grafique logo" class="logo__img">
                    </a>
                    <span class="logo__text logo__text--footer">Architect</span>
                </div>
            </div>
            <div class="row justify-content-sm-center justify-content-md-between align-items-center">
                <p class="col-sm-12 col-md-6 text-sm-center text-md-left footer__copyright">Grafique Copyrirht © 2018
                    <a href="#" class="footer__copyright-link">Zemez</a>
                </p>
                <ul class="col-sm-12 col-md-6 socials socials--desktop socials--footer">
                    <li class="socials__item">
                        <a href="#">
                            <i class="fab fab--footer fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#">
                            <i class="fab fab--footer fa-twitter"></i>
                        </a>

                    </li>
                    <li class="socials__item">
                        <a href="#">
                            <i class="fab fab--footer fa-instagram"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <a href="#header" id="toTop" class="to-top-btn"><i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
		</footer>

        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
            <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/min/tiny-slider.helper.ie8.js"></script><![endif]-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/min/tiny-slider.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfrzx3QTPX5VkmDSOfavaVEYRHnu-Ki3s"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('google-maps');
            var mapOptions = {
                center: new google.maps.LatLng(-33.82140, 150.99542),
                disableDefaultUI: true,
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            map.set('styles', [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
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
                    "stylers": [{
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
                    "stylers": [{
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
            ]);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-33.82140, 150.99542),
                map: map,
                title: "We are here! Click to zoom"
            });
            marker.setMap(map);
            // Zoom to 9 when clicking on marker
            google.maps.event.addListener(marker, 'click', function () {
                map.setZoom(18);
                map.setCenter(marker.getPosition());
            });
        }
        google.maps.event.addDomListener(window, 'load', function() {
            var isFrontPage = <?=(is_front_page()) ? 'true' : 'false'?>;
            if (isFrontPage) {
            initialize()
            var slider = tns({
                container: '.hero-slider',
                "items": 1,
                "lazyload": true,
                "nav": true,
                "controls": false,
                "speed": 400,
                "navContainer": '.hero-slider__nav'
            });
            baguetteBox.run('.projects__grid', {
                "captions": false,
                "async": true
            });
            }
        });
    </script>
    <script>

        document.querySelector('.mobile-nav__trigger').addEventListener('click', toggleNav, false);
            function toggleNav() {
                document.querySelector('.mobile-nav').classList.toggle('mobile-nav--is-open');
            }
            function toggleSearch() {
                document.querySelector('.search-form').classList.toggle('search-form--is-open');
            }
            // handle search form show/hide
            document.querySelector('.search-form__close').addEventListener('click', toggleSearch, false);
            document.querySelector('.nav__search').addEventListener('click',
            toggleSearch, false);
            document.querySelector('.mobile-nav__search').addEventListener('click',
            toggleSearch, false);
            document.querySelector('.search-form__close--nav').addEventListener('click', toggleNav, false);

            document.querySelectorAll('.menu-item a').forEach(function(item) {
            item.addEventListener('click', toggleNav, false);
            });

            function pagePreloaderInit() {
                var preloader = $('.page-preloader-cover')
                if (preloader) {
                    preloader.delay(750).fadeTo(750, 0, function() {
                        preloader.remove();
                    });
                }
            }

            pagePreloaderInit();
            function updateFab() {
                var fabBtn = document.getElementById('toTop');

                if (window.pageYOffset > document.querySelector('.header').offsetTop + 200) {
                    fabBtn.style.display = 'block';
                }
                else {
                    fabBtn.style.display = 'none';
                }
            }

            function startAchievements() {
                var breakingEl = document.querySelector('.about')
                if (breakingEl && window.pageYOffset > breakingEl.offsetTop - 200) {
                    $('.achievements__item-number').each(function() {
                        $(this).countTo();
                    })
                }
            }
            document.addEventListener('scroll', function() {
                updateFab();
                startAchievements();
            }, false);

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    </script>
</body>
</html>
