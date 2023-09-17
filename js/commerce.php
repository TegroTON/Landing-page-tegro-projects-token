<?php
   require "_header.php";
   ?> 
<main id="wrapper" class="border-page-right border-page-left" data-scroll-container>
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-xl-5 my-5">
            <div class="section pb-5">
               <div class="section__subtitle text-primary fw-medium">Tegro Money</div>
               <h1 class="hero__title mb-4">
                  <span class="d-inline d-lg-block">The system</span>
                  <span class="d-inline d-lg-block">for accepting</span>
                  <span class="d-inline fs-56 d-lg-block">online payments</span>
               </h1>
               <p class="text-muted fs-24 mb-5">Connection of payment systems and banks <br> without commissions.</p>
               <a href="https://tegro.money/my/login/" class="btn btn-primary" target="_blank">Start accepting payments</a>
            </div>
            <div class="section pb-5">
               <h2 class="section__title fs-48">A complete solution for your business</h2>
               <p class="text-muted fs-20">
                  One payment solution for all everyday tasks
               </p>
               <p class="text-muted fs-20 mb-5">
                  We implement all the functionality of the payment gateway. We integrate directly with acquiring banks,
                  <br> and also meet all the requirements 
                  <a href="https://ru.wikipedia.org/wiki/PCI_DSS" target="_blank">PCI DSS <i class="fal fa-external-link ml-1"></i></a>
               </p>
               <ul class="list-unstyled m-0 p-0">
                  <li class="d-flex mb-3">
                     <i class="fa-regular fa-square-check text-primary fs-20 mt-1"></i>
                     <div class="ms-3">
                        <strong>Accepting payments</strong>
                        <p class="mb-0">Accept payments from customers via the website, messenger or any way convenient for you.</p>
                     </div>
                  </li>
                  <li class="d-flex mb-3">
                     <i class="fa-regular fa-square-check text-primary fs-20 mt-1"></i>
                     <div class="ms-3">
                        <strong>Mass payments</strong>
                        <p class="mb-0">Pay funds to counterparties to electronic and bank wallets in automatic mode.</p>
                     </div>
                  </li>
                  <li class="d-flex mb-3">
                     <i class="fa-regular fa-square-check text-primary fs-20 mt-1"></i>
                     <div class="ms-3">
                        <strong>Referral program</strong>
                        <p class="mb-0">Invite your acquaintances, friends, colleagues and get a fixed percentage of their turnover.</p>
                     </div>
                  </li>
                  <li class="d-flex">
                     <i class="fa-regular fa-square-check text-primary fs-20 mt-1"></i>
                     <div class="ms-3">
                        <strong>Ready-made payment module</strong>
                        <p class="mb-0">Use a simple form builder to install payment acceptance on the site in just a few minutes.</p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="section__title fs-48">Direct payments <span class="d-block">your wallets</span></h2>
               <p class="text-muted fs-20">
                  You can set up payment acceptance directly to your banking details.
               </p>
               <p class="text-muted fs-20 mb-5">
                  Payment information and notifications will be sent to the control panel, as with a regular payment.
               </p>
               <a href="https://tegro.money/my/login/" class="btn btn-primary" target="_blank">Connect Store</a>
            </div>
         </div>
         <div class="col-lg-6 col-xl-5 ms-auto section pt-0 my-5">
            <div class="sticky-top" style="top: 100px;">
               <img src="/assets/images/dashboard.png?v=2" width="838" alt="Tegro Money" class="project__image">
               <div class="section__blur" style="top: 30%; left: -8%;">
                  <div class="blur__circle-1"></div>
                  <div class="blur__circle-2"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section class="section tokensale border-top border-bottom">
      <div class="container">
         <div class="row justify-content-lg-between align-items-center">
            <div class="col-lg-5 me-auto">
               <div class="d-flex align-items-center mb-4">
                  <img src="https://tegro.money/assets/tpay/images/section/toncoin.svg" width="60" class="img-fluid" alt="Toncoin">
                  <h2 class="section__title fs-48 mb-0 ms-3">Toncoin</h2>
               </div>
               <p class="text-muted fs-20 mb-5">
                  The Open Network — это самостоятельный уникальный блокчейн, разработанный Telegram и поддерживаемый open-source community
               </p>
               <a href="/pricing/" class="btn btn-primary">Подключить TON <i class="fas fa-arrow-right ms-3"></i></a> 
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0 px-2 px-lg-0">
               <ul class="list-unstyled section__desc m-0">
                  <li class="pb-4">
                     <div class="d-flex align-items-center">
                        <i class="fa-solid fa-circle-check fs-24 text-primary"></i>
                        <span class="ms-3 fs-18">Приём платежей в Toncoin с комиссией 1%;</span>
                     </div>
                  </li>
                  <li class="pb-4">
                     <div class="d-flex align-items-center">
                        <i class="fa-solid fa-circle-check fs-24 text-primary"></i>
                        <span class="ms-3 fs-18">Выставление счёта для оплаты;</span>
                     </div>
                  </li>
                  <li class="pb-4">
                     <div class="d-flex align-items-center">
                        <i class="fa-solid fa-circle-check fs-24 text-primary"></i>
                        <span class="ms-3 fs-18">Добавление кошельков сети TON;</span>
                     </div>
                  </li>
                  <li class="p-0">
                     <div class="d-flex align-items-center">
                        <i class="fa-solid fa-circle-check fs-24 text-primary"></i>
                        <span class="ms-3 fs-18">Простая интеграция с Telegram ботом</span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <?php
      require "_partners.php";
      ?> 
</main>
<?php
   require "_footer.php";
   ?>