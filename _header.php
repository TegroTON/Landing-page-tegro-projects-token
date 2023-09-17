<?php
   $themeClass = '';
   if (!empty($_COOKIE['theme'])) {
     if ($_COOKIE['theme'] == 'dark') {
       $themeClass = 'dark-theme';
     } else if ($_COOKIE['theme'] == 'light') {
       $themeClass = 'light-theme';
     }  
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tegro TGR — Token for Decentralized Secure Finance</title>
      <meta name="description" content="Cross-platform payment token $TGR of the Tegro ecosystem. The first payment token on the TON blockchain, with the ability to exchange through a bridge to another network." />
      <meta property="og:type" content="website">
      <meta property="og:title" content="Cross-platform payment token $TGR of the Tegro ecosystem">
      <meta property="og:description" content="The first payment token on the TON blockchain, with the ability to exchange through a bridge to another network.">
      <meta property="og:url" content="https://tegro.io/">
      <meta property="og:image" content="https://tegro.io/assets/imgages/tgr.png">
      <meta property="og:site_name" content="Cross-platform payment token Tegro $TGR">
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:site" content="@tgrtoken">
      <meta property="twitter:creator" content="@tgrtoken">
      <meta property="twitter:image:src" content="https://tegro.io/assets/imgages/tgr.png">
      <link rel="manifest" href="/manifest.json"/>
      <link rel="canonical" href="https://tegro.io/">
      <link rel="icon" href="/assets/images/favicon.svg">
      <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="/assets/css/style.css?v=<?=time()?>">
      <link rel="stylesheet" href="/assets/libs/slick/slick.css?v=<?=time()?>">
      <link rel="stylesheet" href="/assets/libs/slick/slick-theme.css?v=<?=time()?>">
   </head>
   <body class="<?php echo $themeClass; ?>">
      <div class="wrapper">
      <header class="header border-bottom">
         <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-auto px-xl-5">
               <a href="/" class="header__logo"><img src="/assets/images/logotype.svg" alt="" class="header__logo-img"></a>
               <div class="d-block d-lg-none ms-auto me-4">
                  <a href="https://tegro.finance" class="btn btn-sm-mobile btn-primary text-nowrap" target="_blank">
                     Buy $TGR
                  </a>
               </div>
               <div class="d-flex d-lg-none align-items-center">
                  <button class="btn btn-light btn-icon navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDexContent" aria-controls="navbarDexContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                  <span></span>
                  </button>
               </div>
               <div class="collapse navbar-collapse" id="navbarDexContent">
                  <ul class="navbar-nav align-items-lg-center d-block d-lg-flex align-items-center order-2 order-lg-1 me-auto">
                     <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                     <li class="nav-item dropdown">
                        <a class="nav-link text-nowrap" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        DEX<i class="fa-solid fa-angle-down small ms-auto ms-lg-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class="dropdown-item d-flex" href="https://tegro.finance/" target="_blank">
                                 <i class="fa-light fa-arrow-down-arrow-up dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Exchange
                                    <div class="text-muted small">Trade with the lowest fee</div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://tegro.finance/liquidity" target="_blank">
                                 <i class="fa-light fa-money-bill-transfer dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Liquidity
                                    <div class="text-muted small">Start earning from fees</div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link text-nowrap" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Wallet <i class="fa-solid fa-angle-down small ms-auto ms-lg-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class="dropdown-item d-flex" href="/wallet/" title="Web Wallet">
                                 <i class="fa-light fa-wallet dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Web Wallet
                                    <div class="dropdown-item__desc text-muted small">The easiest way to store, send, and receive Toncoin</div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://play.google.com/store/apps/details?id=com.tonholdwallet.android" title="Android App" target="_blank">
                                 <i class="fa-brands fa-google-play dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Android App
                                    <div class="text-muted small">Wallet extension for Android</div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://chrome.google.com/webstore/detail/cdpdjfhimjdmbakdbabcklagceoikifg" title="Chrome App" target="_blank">
                                 <i class="fa-brands fa-chrome dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Chrome App
                                    <div class="text-muted small">Wallet extension for Chrome browser</div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://microsoftedge.microsoft.com/addons/detail/dgegbhgbijbhkmkacomdlogdkacokpam" title="Microsoft Edge" target="_blank">
                                 <i class="fa-brands fa-edge dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Microsoft Edge
                                    <div class="text-muted small">Wallet extension for Edge browser</div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link text-nowrap" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        E-Commerce<i class="fa-solid fa-angle-down small ms-auto ms-lg-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class="dropdown-item d-flex" href="/commerce/">
                                 <i class="fa-light fa-money-check-dollar-pen dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Payment system
                                    <div class="text-muted small">Connection of payment systems and banks without commissions.</div>
                                 </div>
                              </a>
                           </li>
                           <li class="p-3 fs-14 fw-medium text-muted">
                              For Business
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://tegro.money/referral-program/" target="__blank">
                                 <i class="fa-light fa-handshake dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Affiliate program
                                    <div class="ms-1 u-badge">new</div>
                                    <div class="text-muted small">Invite clients and get percentage of their turnover</div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://tegro.money/security/" target="__blank">
                                 <i class="fa-light fa-shield-check dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Security
                                    <div class="text-muted small">About PCI DSS, SSL Security Standards</div>
                                 </div>
                              </a>
                           </li>
                           <li class="p-3 fs-14 fw-medium text-muted">
                              Developers
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://tegro.money/docs/en/" target="__blank">
                                 <i class="fa-light fa-book dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    All documentation 
                                    <div class="text-muted small">All ways of integration and interaction</div>
                                 </div>
                              </a>
                              <ul class="list-style-inside ps-0 ps-lg-4 d-flex">
                                 <li>
                                    <a class="dropdown-item fs-14" href="https://tegro.money/docs/en/begin/register/add-shop/" target="__blank">
                                    Adding a store
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item fs-14" href="https://tegro.money/docs/en/sci/create-payment/" target="__blank">
                                    Api Documentation
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link text-nowrap" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        NFT <i class="fa-solid fa-angle-down small ms-auto ms-lg-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class="dropdown-item d-flex" href="https://libermall.com/" target="__blank">
                                 <i class="fa-light fa-house dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Libermall 
                                    <div class="dropdown-item__desc text-muted small">A new, modern and slick NFT marketplace</div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://libermall.com/#explore" target="__blank">
                                 <i class="fa-light fa-hexagon-vertical-nft dropdown-item-icon"></i>
                                 <div class="ms-3">
                                    Explore Collections
                                    <div class="text-muted small">Catalog of NFT collections</div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More  <i class="fa-solid fa-angle-down small ms-auto ms-lg-2"></i>
                        </a>
                        <div class="dropdown-menu">
                           <div class="d-flex flex-wrap">
                              <ul class="list-unstyled w-50 flex-lg-fill">
                                 <li>
                                    <a class="dropdown-item d-flex" href="https://tegro.money/pay/coupons/" target="_blank">
                                       <i class="fa-light fa-badge-percent dropdown-item-icon"></i>
                                       <div class="ms-3">
                                          Discounts  
                                          <div class="text-muted small">And coupons</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item d-flex" href="https://tegro.money/advantages/" target="_blank">
                                       <i class="fa-light fa-rocket-launch dropdown-item-icon"></i>
                                       <div class="ms-3">
                                          Advantages
                                          <div class="text-muted small">Use all the features of the service</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item d-flex" href="https://tegro.money/company-career/" target="_blank">
                                       <i class="fa-light fa-code dropdown-item-icon"></i>
                                       <div class="ms-3">
                                          Jobs
                                          <div class="text-muted small">Leaders in the provision of services</div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="list-unstyled w-50 flex-lg-fill">
                                 <li>
                                    <a class="dropdown-item d-flex" href="https://tegro.money/policy/" target="_blank">
                                       <i class="fa-light fa-file-contract dropdown-item-icon"></i>
                                       <div class="ms-3">
                                          Privacy policy
                                          <div class="text-muted small">Last updated October 5, 2021.</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item d-flex" href="https://tegro.money/offer/" target="_blank">
                                       <i class="fa-light fa-file-contract dropdown-item-icon"></i>
                                       <div class="ms-3">
                                          Terms of use
                                          <div class="text-muted small">Last updated October 18, 2022.</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item d-flex" href="https://tegro.money/contacts/" target="_blank">
                                       <i class="fa-light fa-envelope-open-text dropdown-item-icon"></i>
                                       <div class="ms-3">
                                          Contact Us
                                          <div class="text-muted small">Write to us</div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <ul class="navbar-nav align-items-lg-center d-block d-lg-flex align-items-center border-top-mobile order-3 pt-2 mt-2 pt-lg-0 mt-lg-0">
                     <li class="nav-item dropdown">
                        <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-light fa-globe fa-lg d-none d-lg-block"></i>
                        <span class="d-inline d-lg-none">Language</span>
                        <i class="fa-solid fa-angle-down small d-block d-lg-none ms-auto ms-lg-2"></i>
                        </a>
                        <ul class="dropdown-menu me-0 me-lg-4">
                           <li>
                              <a class="dropdown-item d-flex active" href="https://tegro.io/">
                              <img class="me-3" src="/assets/images/usa.svg" alt="">
                              English
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item d-flex" href="https://ru.tegro.io/">
                              <img class="me-3" src="/assets/images/russian.svg" alt="">
                              Russian
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item me-0 me-lg-2">
                        <a href="javascript://" class="nav-link btn-change-theme">
                           <div class="dark-mode-icon w-100">
                              <div class="d-flex align-items-center w-100">
                                 <span class="d-inline d-lg-none me-auto">Dark Mode</span>
                                 <i class="fa-solid fa-moon fs-18" style="transform: rotate(210deg); margin-top: 2px"></i>
                              </div>
                           </div>
                           <div class="light-mode-icon w-100">
                              <div class="d-flex align-items-center w-100">
                                 <span class="d-inline d-lg-none me-auto">Light Mode</span>
                                 <i class="fa-solid fa-sun-bright fs-18"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item d-none d-lg-block ms-lg-2">
                        <a href="https://tegro.finance" class="btn btn-sm btn-primary" target="_blank">Buy $TGR</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>