<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="{{ route('home') }}" />
  <title>BuxBusinesses</title>
  <meta name="description"
    content="A leading software development company 🏆 3,600+ completed projects. High-quality software delivered on time. 1,220+ satisfied customers.">
  <link rel="alternate" hreflang="en" href="{{ route('home') }}" />
  <link rel="alternate" hreflang="x-default" href="{{ route('home') }}" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="BuxBusinesses">
  <meta property="og:url" content="{{ route('home') }}">
  <meta property="og:description"
    content="A leading software development company 🏆 3,600+ completed projects. High-quality software delivered on time. 1,220+ satisfied customers.">
  <meta name="robots" content="noindex">
  <link rel="preload" href="bundles/app/fonts/OpenSans-Regular-webfont.woff2" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="bundles/app/fonts/OpenSans-Semibold-webfont.woff2" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="bundles/app/fonts/OpenSans-Bold-webfont.woff2" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="bundles/app/fonts/OpenSans-Italic-webfont.woff2" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



  <link rel="preload" href="bundles/app/fonts/Sumana400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="bundles/app/fonts/Sumana700.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="bundles/app/fonts/s-icons.woff" as="font" type="font/woff" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/stylex.css">
  {{-- Check if the current route is 'contact' --}}
@if(Request::is('contact'))
    {{-- Include the stylesheet only if the current route is 'contact' --}}
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
@endif
  <link rel="stylesheet" href="bundles/app/clients.0c816fc6.css">
  <link rel="stylesheet" href="bundles/app/services.2d9023af.css">
  <link rel="stylesheet" href="bundles/app/tabs-with-icons.25abfa44.css">
  <link rel="stylesheet" href="bundles/app/technologies.47811c72.css">
  <link rel="stylesheet" href="bundles/app/link.d2659507.css">
  <link rel="stylesheet" href="bundles/app/testimonial.283dd83c.css">
  <link rel="stylesheet" href="bundles/app/icon-box.a8bad10a.css">
  <link rel="stylesheet" href="bundles/app/recognitions.53de5d46.css">
  <link rel="stylesheet" href="bundles/app/blog.4321664a.css">
  <link rel="stylesheet" href="bundles/app/grid.e7cf97e7.css">
  <link rel="stylesheet" href="bundles/app/contact-us-template.553332b8.css">
  <link rel="stylesheet" href="bundles/app/collapsible-list.4daba170.css">
  <link rel="stylesheet" href="bundles/app/separator-with-image-and-text.98091b12.css">
  <link rel="stylesheet" href="bundles/app/slider-with-banners.ad309978.css">
  <link rel="stylesheet" href="bundles/app/wysiwyg.11728f7f.css">
  <link rel="stylesheet" href="bundles/app/image-text.841ec385.css">
  <link rel="stylesheet" href="bundles/app/solution-types.0c03dd5b.css">
  <link rel="stylesheet" href="bundles/app/case-studies.dfe1cd9a.css">
  <link rel="stylesheet" href="bundles/app/contact-information.d8e5c87f.css">
  <link rel="stylesheet" href="bundles/app/html-code.31d6cfe0.css">
  <link rel="stylesheet" href="bundles/app/image-video-text.0072e3b9.css">
  <link rel="stylesheet" href="bundles/app/home_page.2ba9c976.css">
  @yield('styles')
  <script>
    window.dataLayer = window.dataLayer || [];
    window.editmode = 0;
    window.language = 'en';
    window.isRtl = document.getElementsByTagName('html')[0].getAttribute('dir') === 'rtl';
    window.startDate = new Date();
    window.livechatType = '';
    window.addLinkOnCopy = true;
    window.pageType = 'Home Page';
    window.isMobile = function () {
      try {
        return /Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.matchMedia("(max-width: 767px)").matches;
      } catch (e) {
        return false;
      }
    };
    window.addDelayedScript = function (src, delay = 0, callback = null) {
      document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
          var d = document;
          var s = d.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = src;
          s.onload = callback;
          var x = d.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        }, delay);
      });
    };
    document.addEventListener('DOMContentLoaded', function () {
      setTimeout(function () { dataLayer.push({ 'event': 'afterLoadDelay' }); }, isMobile() ? 5000 : 1500);
      setTimeout(function () { dataLayer.push({ 'event': 'afterLoadMobileDelay' }); }, isMobile() ? 3500 : 100);
    });
  </script>
  <style>
    @media (max-width: 767px) {
      body.bg-img {
        background-image: none !important;
      }
    }
  </style>

  <script>
    window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments); }; ga.l = +new Date;
    ga('create', 'UA-37313680-1', 'auto');

    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ 'website_page_type': 'Home Page' });

    function gtag() { dataLayer.push(arguments); };
    gtag('config', 'G-HE55HYGEXZ', { 'content_group': 'Home Page' });
  </script>
  <!-- Piwik -->
  <script>
    window._paq = window._paq || [];

    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    _paq.push(['setSessionCookieTimeout', 3600]); // 60min, default=30min
    _paq.push(['setCustomVariable', 2, 'Page Type', 'Home Page', 'page']);
    _paq.push(['setCustomVariable', 4, 'SEO Keywords Properties', '{"category":"Custom software","topic":"Software Development Company"}', 'page']);

    (function () {
      var u = 'https://piwik.scnsoft.com/';
      _paq.push(['setTrackerUrl', u + 'piwik.php']);
      _paq.push(['setSiteId', 1]);
      var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
      g.type = 'text/javascript'; g.async = true; g.src = u + 'piwik.js'; s.parentNode.insertBefore(g, s);
    })();
  </script>
  <!-- End Piwik -->
  <!--livechat snippet-->
  <script type="application/javascript">
    var APP_ID = "u82mdhaf";

    window.intercomSettings = {
      app_id: APP_ID,
      show_livechat: 1,
      livechat_delay: 2000,
      livechat_mobile_delay: 5000,
    };

    var w = window; var i = function () { i.c(arguments); }; i.q = []; i.c = function (args) { i.q.push(args); }; w.Intercom = i;

    _paq.push([function () {
      Intercom('update', { piwikVisitorId: this.getVisitorId() });
    }]);
  </script>
  <!--/livechat snippet-->
  <script src="bundles/app/runtime.1ff3c4d6.js" defer></script>
  <script src="bundles/app/3913.a66acd25.js" defer></script>
  <script src="bundles/app/6669.8099ae4d.js" defer></script>
  <script src="bundles/app/3511.5e1b1032.js" defer></script>
  <script src="bundles/app/2732.18785b94.js" defer></script>
  <script src="bundles/app/4291.6665c477.js" defer></script>
  <script src="bundles/app/2400.0ff4ad52.js" defer></script>
  <script src="bundles/app/main.80022665.js" defer></script>
  <script src="bundles/app/7908.3ea8fec2.js" defer></script>
  <script src="bundles/app/clients.be948eb7.js" defer></script>
  <script src="bundles/app/services.21b9fcf2.js" defer></script>
  <script src="bundles/app/tabs-with-icons.5de8213a.js" defer></script>
  <script src="bundles/app/technologies.297a2399.js" defer></script>
  <script src="bundles/app/link.b01c3056.js" defer></script>
  <script src="bundles/app/testimonial.dbe78959.js" defer></script>
  <script src="bundles/app/icon-box.81743402.js" defer></script>
  <script src="bundles/app/recognitions.a31fbf7e.js" defer></script>
  <script src="bundles/app/blog.6760751a.js" defer></script>
  <script src="bundles/app/grid.1454fbb9.js" defer></script>
  <script src="bundles/app/3587.774c9c80.js" defer></script>
  <script src="bundles/app/9323.e0f0740d.js" defer></script>
  <script src="bundles/app/4812.f775e66e.js" defer></script>
  <script src="bundles/app/5046.f843b0f1.js" defer></script>
  <script src="bundles/app/7722.a8726cc8.js" defer></script>
  <script src="bundles/app/contact-us-template.6f08f308.js" defer></script>
  <script src="bundles/app/collapsible-list.999cd7ae.js" defer></script>
  <script src="bundles/app/separator-with-image-and-text.9c59932d.js" defer></script>
  <script src="bundles/app/slider-with-banners.fa7ffc7f.js" defer></script>
  <script>
    var _ptg = _ptg || {};
    _ptg.options = _ptg.options || {};



  </script>
  <script src="assetsjs/t" async></script>
  <style>
    .swiper-container {
      width: 1300px;
      height: 300px;
    }

    .swiper-slide>.a-home-testimonial__card {
      /* background-color: #fafafa; */
      box-shadow: 0 0 10px 3px rgba(0, 0, 0, .1);
    }
  </style>
</head>

<body class=" home-page bg-img " data-track-source="Site"
  style="background-image: url('---home-page-illustrations/background_optimized.png');">
  <header class="header header-transparent  sb-header-transparent" data-track-source="Header">
    <div class="container header-container" data-nosnippet>
      <div class="header-row">
        <div class="header-logo ">
          <div class="header-logo-svg-wrapper">
            <a href="{{ route('home') }}" class="js-track-click" itemprop="url">
              <span style="font-size: 30px; font-weight: 600; color:#005EB8;" itemprop="name">BUX Businesses</span>
            </a>
          </div>
        </div>
        <nav class="header-menu" data-track-source="Header menu" itemscope
          itemtype="https://schema.org/SiteNavigationElement" role="menu">
          <div class=" header-menu-item">
            <a href="{{ route('home') }}" class="header-menu-item-label js-track-click" itemprop="url"
              data-track-element="item">
              <span itemprop="name">Home</span>
            </a>
          </div>
          <div class=" header-menu-item">
            <a href="{{ route('about') }}" class="header-menu-item-label js-track-click" itemprop="url"
              data-track-element="item">
              <span itemprop="name">About</span>
            </a>
          </div>
          <div class=" header-menu-item">
            <a href="{{ route('services') }}" class="header-menu-item-label js-track-click" itemprop="url"
              data-track-element="item">
              <span itemprop="name">Services</span>
            </a>
          </div>
          <div class=" header-menu-item">
            <a href="{{ route('capabilities') }}" class="header-menu-item-label js-track-click" itemprop="url"
              data-track-element="item">
              <span itemprop="name">Capabilities</span>
            </a>
          </div>
          <!-- <div class=" header-menu-item">
            <a href="#" class="header-menu-item-label js-track-click" itemprop="url" data-track-element="item">
              <span itemprop="name">Blog</span>
            </a>
          </div> -->
          <div class="header-menu-page-shadow d-none"></div>
        </nav>
        <div class="header-yellow-buttons" data-track-source="Header menu">
          <div class="header-yellow-button">
            <a href="{{ route('contact') }}" class="header-yellow-button-label js-track-click" data-track-element="item">
              Contact us
            </a>
          </div>
        </div>
        <button class="header-burger-btn js-track-click" aria-label="Open mobile menu"
          data-track-source="Header mobile menu" data-track-text="Open mobile menu"></button>
      </div>
    </div>
    <div class="header-menu-mobile d-none" data-nosnippet data-track-source="Header mobile menu">
      <button class="header-menu-mobile-close-btn js-track-click" aria-label="Close mobile menu"
        data-track-text="Close mobile menu">
        <i class="icon-s-close"></i>
      </button>
      <div class="header-menu-mobile-items" itemscope itemtype="https://schema.org/SiteNavigationElement" role="menu">
        <div class="header-menu-mobile-item js-track-click" data-track-element="item" data-track-text="About">
          <a href="{{ route('home') }}" class="header-menu-mobile-item-label " itemprop="url">
            <span itemprop="name">Home</span>
          </a>
        </div>
        <div class="header-menu-mobile-item js-track-click" data-track-element="item" data-track-text="About">
          <a href="{{ route('about') }}" class="header-menu-mobile-item-label " itemprop="url">
            <span itemprop="name">About</span>
          </a>
        </div>
        <div class="header-menu-mobile-item js-track-click" data-track-element="item" data-track-text="Services">
          <a href="{{ route('services') }}" class="header-menu-mobile-item-label " itemprop="url">
            <span itemprop="name">Services</span>
          </a>
        </div>
        <div class="header-menu-mobile-item js-track-click" data-track-element="item" data-track-text="Capabilities">
          <a href="{{ route('capabilities') }}" class="header-menu-mobile-item-label " itemprop="url">
            <span itemprop="name">Capabilities</span>
          </a>
        </div>
        <!-- <div class="header-menu-mobile-item js-track-click" data-track-element="item" data-track-text="Blog">
          <a href="#" class="header-menu-mobile-item-label " itemprop="url">
            <span itemprop="name">Blog</span>
          </a>
        </div> -->
        <div class="header-menu-mobile-item header-yellow-button js-track-click" data-track-element="item"
          data-track-text="Contact us">
          <a href="{{ route('contact') }}" class="header-menu-mobile-item-label header-yellow-button-label" itemprop="url">
            <span itemprop="name">Contact us</span>
          </a>
        </div>
        <div class="header-menu-mobile-contacts">
          <a href="tel:+1 518 951 0353" class="header-menu-mobile-phone">
            <i class="icon-s-phone-bordered" style="color: #000 !important;"></i>
            <span class="header-menu-mobile-phone-text" dir="ltr">+518 951 0353</span>
          </a>
          <a href="mailto:help@company.com" class="header-menu-mobile-email">
            <i class="icon-s-envelope"></i>
            <span class="header-menu-mobile-email-text" dir="ltr">moeen@buxbusinesses.com</span>
          </a>
        </div>
      </div>
    </div>
    <div class="header-menu-mobile-shadow js-track-click" data-track-source="Header mobile menu" data-track-element="button" data-track-text="Close mobile menu"></div>
  </header>

@yield('content')

<footer class="footer " data-track-source="Footer">
    <div class="footer-content">
      <div class="container">
        <div class="footer-row">
          <div class="footer-contacts-links-item footer-flex">
            <h4 class="footer-logo">
              BuxBusinesses
            </h4>
            <div class="footer-text">
              <p>Empower your organization with expert consultancy, seamless integration of
                technologies, and personalized solutions for
                elevated IT infrastructure. Partner for strategic insights in the digital
                landscape</p>
            </div>
          </div>
          <div class="footer-contacts-links-item footer-flex">
            <h4 class="footer-heading">
              Company
            </h4>
            <ul class="footer-items-list">
              <li>
                <p><a href="{{ route('about') }}">About</a></p>
              </li>
              <li>
                <p><a href="{{ route('services') }}">Services</a></p>
              </li>
              <li>
                <p><a href="{{ route('capabilities') }}">Capabilities</a></p>
              </li>
              <!-- <li>
                <p><a href="blogs.html">Blogs</a></p>
              </li> -->
            </ul>
          </div>
          <div class="footer-contacts-links-item footer-flex">
            <h4 class="footer-heading">
              Contact
            </h4>

            <ul class="footer-items-list">
              <li class="footer-links">
                <p>
                  <span><svg version="1.1" id="svg1" width="18" height="18" viewBox="0 0 512 512"
                      xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                      <defs id="defs1" />
                      <g id="g1">
                        <path style="fill:#ffffff;stroke:none"
                          d="M 246,0.42437744 C 220.59013,3.7606812 196.77753,8.1548767 174,20.861877 156.09927,30.848236 140.51309,43.693756 126.94984,59 c -10.43287,11.77359 -18.40768,24.907623 -25.20832,39 -18.774571,38.90491 -21.267063,85.00919 -7.996151,126 6.552081,20.23788 17.768521,38.46259 27.949071,57 15.40094,28.04303 30.85865,56.06058 46.44522,84 20.96817,37.58612 42.03957,75.1629 62.5517,113 4.90762,9.0527 13.57582,35.01837 26.30864,33.74304 11.12222,-1.11401 18.70358,-23.06463 23.2554,-31.74304 17.13761,-32.67413 35.62912,-64.77768 53.60495,-97 17.44473,-31.27029 34.55524,-62.72961 52,-94 C 401.37253,261.19385 418.21622,233.85068 423.75,202 439.04459,113.96936 384.50912,26.998047 297,5.1265564 280.94498,1.1138611 262.53879,-1.7471313 246,0.42437744 M 254,85.30014 C 305.423,80.492584 345.47733,131.97986 340.83023,180 336.89917,220.62115 302.99561,252.00864 263,255.83023 198.84973,261.95984 152.11232,192.66541 178.3125,135 192.3869,104.02289 221.47929,88.340515 254,85.30014 Z"
                          id="path1" />
                      </g>
                    </svg></span> Wynantskill, NY
                </p>
              </li>
              <li class="footer-links">
                <p><span><svg version="1.1" id="svg1" width="18" height="18" viewBox="0 0 512 512"
                      xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                      <defs id="defs1" />
                      <g id="g1">
                        <path style="fill:#ffffff;stroke:none"
                          d="M 95,0.42825317 C 73.214622,3.5491638 60.816704,19.183289 46,34 33.383675,46.616333 17.142794,59.005829 8.7847223,75 -12.090283,114.94687 8.0182858,167.28973 24.424383,205 44.222355,250.50668 75.165329,292.87646 107.71528,330 157.54721,386.83383 215.8035,440.0863 283,475.78009 c 40.70499,21.62189 92.84897,46.15601 140,32.79166 18.67044,-5.29187 30.74985,-19.3216 44,-32.57175 16.3038,-16.3038 38.29388,-32.24741 43.33102,-56 C 518.61261,380.94806 475.96597,352.96597 452,329 441.24722,318.24722 430.91638,305.59161 418,297.38348 398.20892,284.80661 370.37845,288.71146 355.46759,307.00076 341.47455,324.16431 340.0524,344.97394 315,351.71063 295.28833,357.0112 275.86328,348.85751 259,338.79938 224.85745,318.435 195.58098,289.73926 174.57639,256 165.46521,241.36487 155.39058,221.79047 157.17053,204 158.65225,189.19025 168.29126,175.65424 181,168.1983 c 7.87231,-4.6185 16.83521,-6.58136 23.99924,-12.527 C 217.75545,145.08453 221.6819,129.888 220.96065,114 220.14761,96.090271 206.80948,83.809479 195,72 L 152,29 C 136.36853,13.36853 119.09158,-3.0230103 95,0.42825317 Z"
                          id="path1" />
                      </g>
                    </svg></span> <a href="tel://+15189510353">518 951 0353</a>
                </p>
              </li>
              <li class="footer-links">
                <p> <span> <svg version="1.1" id="svg1" width="18" height="18" viewBox="0 0 512 512"
                      xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                      <defs id="defs1" />
                      <g id="g1">
                        <path style="fill:#ffffff;stroke:none"
                          d="M 42,64.428253 C 6.0337639,69.592285 -14.208777,113.47687 11.615741,141.82947 26.691946,158.38153 51.420013,169.94669 70,182.33334 L 191,263 c 18.8685,12.57898 43.51076,36.60245 68,33.71295 27.05005,-3.19162 51.97787,-26.69818 74,-41.37961 l 111,-74 c 18.01517,-12.0101 40.4487,-23.01681 55.56094,-38.62271 C 518.6698,122.97757 514.80969,89.533234 492.99615,73.48999 478.85294,63.088043 462.63797,64 446,64 H 372 151 C 115.71476,64 76.902199,59.416992 42,64.428253 M 0,172 v 184 c 0,24.401 -5.7500849,56.03479 11.618827,75.91049 C 34.324345,457.89304 84.177216,448 115,448 h 278 53 c 21.02057,0 41.49033,0.0544 55.87964,-18.00385 C 517.85236,409.95074 512,377.9664 512,354 V 172 c -19.95102,8.39221 -38.95584,25.30392 -57,37.33334 L 340,286 c -25.14331,16.76221 -52.04517,40.9213 -84,40.9213 -31.95486,0 -58.85664,-24.15906 -84,-40.9213 L 57,209.33334 C 38.95591,197.30396 19.950979,180.39218 0,172 Z"
                          id="path1" />
                      </g>
                    </svg></span>
                  <a href="mailto:moeen@buxbusinesses.com">Moeen@buxbusinesses.com</a>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-scripts">
        <div class="pimcore_area_html-code pimcore_area_content ">
          <div class="" data-track-source="Editable: Html Code">
            <div class="html-code-editable-wrapper  ">
            </div>
          </div>
        </div>
      </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Initialize Swiper
  var swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20, // Adjust the value based on your desired gap
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>

@yield('scripts')

</html>