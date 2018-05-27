jQuery(function ($) {
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

    document.querySelectorAll('.menu-item a').forEach(function (item) {
        item.addEventListener('click', toggleNav, false);
    });

    function pagePreloaderInit() {
        var preloader = $('.page-preloader-cover')
        if (preloader) {
            preloader.delay(750).fadeTo(750, 0, function () {
                preloader.remove();
            });
        }
    }

    pagePreloaderInit();

    function updateFab() {
        var fabBtn = document.getElementById('toTop');

        if (window.pageYOffset > document.querySelector('.header').offsetTop + 200) {
            fabBtn.style.display = 'block';
        } else {
            fabBtn.style.display = 'none';
        }
    }

    function startAchievements() {
        var breakingEl = document.querySelector('.about')
        if (breakingEl && window.pageYOffset > breakingEl.offsetTop - 200) {
            $('.achievements__item-number').each(function () {
                $(this).countTo();
            })
        }
    }
    document.addEventListener('scroll', function () {
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
})
