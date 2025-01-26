<!DOCTYPE html>
<html>

<head>
  <title>@hasSection('page_title')@yield('page_title') @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Shanidham SHG">

  <title> Shanidham SHG </title>

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/stylex.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
  <link href="{{ asset('assets/css/product-slider.css') }}" rel="stylesheet">
  <script
    nonce="a6244318-99b4-4f21-b8a9-28c4fa8f4684">
    (function(w, d) {
      ! function(a, e, t, r) {
        a.zarazData = a.zarazData || {};
        a.zarazData.executed = [];
        a.zaraz = {
          deferred: []
        };
        a.zaraz.q = [];
        a.zaraz._f = function(e) {
          return function() {
            var t = Array.prototype.slice.call(arguments);
            a.zaraz.q.push({
              m: e,
              a: t
            })
          }
        };
        for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
        a.zaraz.init = () => {
          var t = e.getElementsByTagName(r)[0],
            z = e.createElement(r),
            n = e.getElementsByTagName("title")[0];
          n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
          a.zarazData.x = Math.random();
          a.zarazData.w = a.screen.width;
          a.zarazData.h = a.screen.height;
          a.zarazData.j = a.innerHeight;
          a.zarazData.e = a.innerWidth;
          a.zarazData.l = a.location.href;
          a.zarazData.r = e.referrer;
          a.zarazData.k = a.screen.colorDepth;
          a.zarazData.n = e.characterSet;
          a.zarazData.o = (new Date).getTimezoneOffset();
          a.zarazData.q = [];
          for (; a.zaraz.q.length;) {
            const e = a.zaraz.q.shift();
            a.zarazData.q.push(e)
          }
          z.defer = !0;
          for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
            try {
              a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
            } catch {
              a.zarazData["z_" + t.slice(7)] = e.getItem(t)
            }
          }));
          z.referrerPolicy = "origin";
          z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
          t.parentNode.insertBefore(z, t)
        };
        ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, 0, "script");
    })(window, document);
  </script>

  @yield('front-header')
</head>
<body class="{{ $classes }}">

  @yield('guest')

  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script>
    //<![CDATA[
    /*!
     * Collapsible.js v1.2.0
     * https://github.com/jordnkr/collapsible
     *
     * Copyright 2017, Jordan Ruedy
     * This content is released under the MIT license
     * http://opensource.org/licenses/MIT
     */
    ! function(e, s) {
      e.fn.collapsible = function(s) {
        var n = {
            accordion: !1,
            accordionUpSpeed: 400,
            accordionDownSpeed: 400,
            collapseSpeed: 400,
            contentOpen: null,
            arrowRclass: "arrow-r",
            arrowDclass: "arrow-d",
            animate: !0
          },
          c = e.extend(n, s);
        return this.each(function() {
          !1 === c.animate && (c.accordionUpSpeed = 0, c.accordionDownSpeed = 0, c.collapseSpeed = 0);
          var s = e(this).children(":even"),
            n = e(this).children(":odd"),
            r = "accordion-active";
          if (e(this).children(":nth-child(even)").css("display", "none"), !0 === c.accordion) null !== c.contentOpen && (e(s[c.contentOpen]).children(":first-child").toggleClass(c.arrowRclass + " " + c.arrowDclass), e(n[c.contentOpen]).show().addClass(r)), e(s).click(function() {
            e(this).next().attr("class") === r ? (e(this).next().slideUp(c.accordionUpSpeed).removeClass(r), e(this).children(":first-child").toggleClass(c.arrowRclass + " " + c.arrowDclass)) : (e(s).children().removeClass(c.arrowDclass).addClass(c.arrowRclass), e(n).slideUp(c.accordionUpSpeed).removeClass(r), e(this).next().slideDown(c.accordionDownSpeed).addClass(r), e(this).children(":first-child").toggleClass(c.arrowRclass + " " + c.arrowDclass))
          });
          else {
            if (null !== c.contentOpen)
              if (Array.isArray(c.contentOpen))
                for (var a = 0; a < c.contentOpen.length; a++) {
                  var l = c.contentOpen[a];
                  e(s[l]).children(":first-child").toggleClass(c.arrowRclass + " " + c.arrowDclass), e(n[l]).show()
                } else e(s[c.contentOpen]).children(":first-child").toggleClass(c.arrowRclass + " " + c.arrowDclass), e(n[c.contentOpen]).show();
            e(s).click(function() {
              e(this).children(":first-child").toggleClass(c.arrowRclass + " " + c.arrowDclass), e(this).next().slideToggle(c.collapseSpeed)
            })
          }
        })
      }
    }(jQuery);

    //]]>
  </script>
  <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
  <script
    src="{{ asset('assets/js/jquery.countdown.min.js%2bcircle-progress.min.js%2bjquery.countTo.min.js%2bjquery.barfiller.js%2bcustom.js.pagespeed.jc.kfJYmwuD8V.js') }}"></script>
  <script>
    eval(mod_pagespeed_rGIoo5eKqD);
  </script>
  <script>
    eval(mod_pagespeed_s2h45vlwGd);
  </script>
  <script>
    eval(mod_pagespeed_BodgmW9g8N);
  </script>
  <script>
    eval(mod_pagespeed_eZZMgltAKL);
  </script>
  <script>
    eval(mod_pagespeed_4Q30taEYkh);
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"72d30c01ee6533d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
    crossorigin="anonymous"></script>
    @yield('front-footer')
</body>

</html>