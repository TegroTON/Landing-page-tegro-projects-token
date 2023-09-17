</div>
<footer class="footer">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-lg-4 mb-5 mb-lg-0 mx-auto">
            <div class="d-flex">
               <img src="/assets/images/footer-logo.png" width="56" alt="Company Tegro LLC" class="footer__logo">
               <div class="ps-4">
                  <p class="small mb-0">
                     The first payment token DEX TegroFinance on the TON blockchain with the ability to exchange through bridges to other networks. Direct integration with the payment system TegroMoney<p>Listing/Contact: token@tegro.io</p>
                  </p>
                  <div class="footer-soclinks d-flex mt-4">
                     <a href="https://www.instagram.com/tontgr/" class="soclinks__item" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                     <a href="https://www.reddit.com/r/tegro/" class="soclinks__item" target="_blank"><i class="fa-brands fa-reddit-alien"></i></a>
                     <a href="https://t.me/TgrTon" class="soclinks__item" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                     <a href="https://twitter.com/TGRtoken" class="soclinks__item" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                     <a href="https://tegromoney.medium.com" class="soclinks__item" target="_blank"><i class="fa-brands fa-medium"></i></a>
                     <a href="https://github.com/TegroTON" class="soclinks__item" target="_blank"><i class="fa-brands fa-github"></i></a>
                     <a href="https://www.linkedin.com/company/tegromoney/" class="soclinks__item" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-6 col-md-4 col-lg-2 ms-auto mb-5 mb-md-0">
            <h5 class="footer__title fs-16 mb-4">Products</h5>
            <a href="https://youton.org" target="_blank" class="d-block mb-3">TON Explorer</a>
            <a href="https://tegro.finance" target="_blank" class="d-block mb-3">DEX for TON</a>
            <a href="https://tonhold.com" target="_blank" class="d-block mb-3">TON Wallet</a>
         </div>
         <div class="col-6 col-md-4 col-lg-2 mb-5 mb-md-0">
            <h5 class="footer__title fs-16 mb-4">Resources</h5>
            <a href="https://tegro.money/docs/en/" target="_blank" class="d-block mb-3">Documentation</a>
            <a href="https://tegro.money/referral-program/" target="_blank" class="d-block mb-3">Affiliate</a>
            <a href="https://tegro.gitbook.io/en/" target="_blank" class="d-block mb-3">Road map</a>
         </div>
         <div class="col-6 col-md-4 col-lg-2">
            <h5 class="footer__title fs-16 mb-4">Company</h5>
            <a href="https://tegro.money/policy/" target="_blank" class="d-block mb-3">Privacy Policy</a>
            <a href="https://tegro.money/offer/" target="_blank" class="d-block mb-3">User Agreement</a>
            <a href="https://tegro.money/branding/" target="_blank" class="d-block mb-3">Brand assets</a>
         </div>
      </div>
      <div class="footer__bottom fs-16 fw-medium text-center">
         © Tegro 2022. All rights reserved.
      </div>
   </div>
   <div class="section__blur">
      <div class="blur__circle-1"></div>
      <div class="blur__circle-2"></div>
   </div>
</footer> 
<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/libs/slick/slick.min.js"></script>
<script defer src="/assets/js/options.js?v=<?=time()?>"></script>
<script>
   function copytext(el) {
    $(el).select();
    document.execCommand("copy");
}

   $('#timer').countdown({
    date: '07/1/2022 23:59:59',
    day: 'Day',
    days: 'Days'
   });
</script>

<script>
   $(document).on('click', '.dropdown-menu', function(e) {
  e.stopPropagation()
})
</script>

<script>
   $('.partners-slider, .partners-slider-2').slick({
       dots: false,
       infinite: true,
       speed: 200,
       slidesToShow: 6,
       slidesToScroll: 1,
       speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
       responsive: [
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 768,
           settings: {
             slidesToShow: 4,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 1024,
           settings: {
             slidesToShow: 5,
             slidesToScroll: 2
           }
         },
         {
           breakpoint: 1280,
           settings: {
             slidesToShow: 6,
             slidesToScroll: 3
           }
         },
         {
           breakpoint: 2300,
           settings: {
             slidesToShow: 9,
             slidesToScroll: 4
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
       });
       
  </script>
  <script type="text/javascript">
   const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
   const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
   
           const btn = document.querySelector(".btn-change-theme");
           const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
           
           btn.addEventListener("click", function() {
             if (prefersDarkScheme.matches) {
               document.body.classList.toggle("light-theme");
               var theme = document.body.classList.contains("light-theme") ? "light" : "dark";
             } else {
               document.body.classList.toggle("dark-theme");
               var theme = document.body.classList.contains("dark-theme") ? "dark" : "light";
             }
             document.cookie = "theme=" + theme;
           });
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");
   
   ym(89744121, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/89744121" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KGR33VMF4J"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   
   gtag('config', 'G-KGR33VMF4J');
</script>
<div id="floatingmes">Shift + Mouse scroll 🤓</div>
</body>
</html>