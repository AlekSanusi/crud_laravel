<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->

 <!DOCTYPE html>

 <html lang="en">
 <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('template/assets/css/demo.css') }}">
 <link rel="stylesheet" href="{{ asset('template/assets/css/light-bootstrap-dashboard.css') }}">
 <head>
     <style>
         #edit .card{
     padding-bottom: 50px;
     box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
 }
 #edit .card-head{
     height: 45px;
     background-color: #cfcfcf;
     border-radius: 5px 5px 0px 0px;
     color: #525c5f;
 }
     </style>
 
 </head>
 
 <body>
     <!-- Google Tag Manager (noscript) -->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
             style="display:none;visibility:hidden"></iframe></noscript>
     <!-- End Google Tag Manager (noscript) -->
     @include('template.sidebar')
     <div class="main-panel">
         <!-- fixed plugin  -->
 
         <!-- Navbar -->
         @include('template.header')
 
         <!-- End Navbar -->
 
         <div>
          @yield('content')
        </div>
         
         
 
 
 
 
 
 
          @include('template.footer')
 
 
 
             <script>
                 // Facebook Pixel Code Don't Delete
                 ! function(f, b, e, v, n, t, s) {
                     if (f.fbq) return;
                     n = f.fbq = function() {
                         n.callMethod ?
                             n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                     };
                     if (!f._fbq) f._fbq = n;
                     n.push = n;
                     n.loaded = !0;
                     n.version = '2.0';
                     n.queue = [];
                     t = b.createElement(e);
                     t.async = !0;
                     t.src = v;
                     s = b.getElementsByTagName(e)[0];
                     s.parentNode.insertBefore(t, s)
                 }(window,
                     document, 'script', '//connect.facebook.net/en_US/fbevents.js');
 
                 try {
                     fbq('init', '111649226022273');
                     fbq('track', "PageView");
 
                 } catch (err) {
                     console.log('Facebook Track Error:', err);
                 }
 
             </script>
             <noscript>
                 <img height="1" width="1" style="display:none"
                     src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />