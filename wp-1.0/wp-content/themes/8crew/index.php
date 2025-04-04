<?php get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <main class="main">
         <div class="container">
            <div class="main__container">
               <section class="first-section">
                  <div class="first-section__column">
                     <div class="first-section__header">
                        <h1 class="heading-1">Зимові дослідження
                           у комфортному взутті</h1>
                        <a href='categoryPage.html' class="first-section__content">
                           <div class="first-section__image">
                              <img src="img/main/main-1.png" alt="Main image">
                           </div>
                           <div class="section-label">
                              <span class="section-label__title">Nike ACG Winter explorer</span>
                              <span class="section-label__amount">18 товарів</span>

                           </div>
                           <button type='button' class="main-arrow button-small">
                              <svg class="icon">
                                 <use href="#arrow"></use>
                              </svg>
                           </button>
                        </a>

                     </div>

                  </div>
                  <div class="first-section__column">
                     <div class="first-section__slider">
                        <div class="swiper main-swiper">
                           <!-- Additional required wrapper -->
                           <div class="swiper-wrapper main-swiper-wrapper">
                              <!-- Slides -->
                              <a href='./categoryPage.html' class="swiper-slide main-swiper-slide">
                                 <img src="img/main/main-2.png" alt="Banner image">
                                 <div class="section-label">
                                    <span class="section-label__title">Унікальна підбірка зимового взуття</span>
                                    <span class="section-label__amount">54 товари</span>

                                 </div>
                                 <button type='button' class="main-arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                              </a>
                              <a href='./categoryPage.html' class="swiper-slide main-swiper-slide">
                                 <img src="img/main/main-1.png" alt="Banner image">
                                 <div class="section-label">
                                    <span class="section-label__title">Унікальна підбірка зимового взуття</span>
                                    <span class="section-label__amount">53 товари</span>

                                 </div>
                                 <button type='button' class="main-arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                              </a>
                              <a href='./categoryPage.html' class="swiper-slide main-swiper-slide">
                                 <img src="img/main/main-2.png" alt="Banner image">
                                 <div class="section-label">
                                    <span class="section-label__title">Унікальна підбірка зимового взуття</span>
                                    <span class="section-label__amount">52 товари</span>

                                 </div>
                                 <button type='button' class="main-arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                              </a>

                           </div>
                           <!-- If we need pagination -->
                           <div class="swiper-pagination main-swiper-pagination">
                           </div>


                        </div>

                     </div>

                  </div>

               </section>
               <section class="basic-section">
                  <div class="basic-section__block">
                     <h2 class="basic-section__title heading-3">Нові надходження</h2>
                     <div data-aos="fade-up" class="basic-section__slider">
                        <div class="swiper arrivals-swiper">
                           <!-- Additional required wrapper -->
                           <div class="swiper-wrapper arrivals-swiper-wrapper">
                              <!-- Slides -->
                              <div class="swiper-slide arrivals-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide arrivals-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide arrivals-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide arrivals-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide arrivals-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>

                           </div>
                           <!-- If we need scrollbar -->
                           <div class="swiper-scrollbar arrivals-swiper-scrollbar"></div>

                        </div>
                        <!-- If we need navigation buttons -->
                        <button type='button' class="swiper-button-prev arrivals-swiper-btn-prev">
                           <svg width='20' height='20' viewBox="0 0 20 20">
                              <use xlink:href="#arrow-next"></use>
                           </svg>
                        </button>
                        <button type='button' class="swiper-button-next arrivals-swiper-btn-next">
                           <svg width='20' height='20' viewBox="0 0 20 20">
                              <use xlink:href="#arrow-next"></use>
                           </svg>
                        </button>

                        <a href="./categoryPage.html" class="basic-section__link bordered-button">Показати усе</a>
                     </div>

                  </div>
                  <div class="basic-section__block">
                     <h2 class="basic-section__title heading-3">Колекції</h2>

                     <div data-aos="fade-up" class="swiper collection-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper collection-swiper-wrapper">
                           <!-- Slides -->
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-1.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-2.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-3.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-4.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-5.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-6.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-7.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-8.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-9.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-1.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-2.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-3.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-4.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-5.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-6.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-7.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-8.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-9.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-1.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-2.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-3.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-4.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-5.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-6.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>
                           <div class="swiper-slide collection-swiper-slide">
                              <a href='#' class="collection-card">
                                 <button type='button' class="collection-card__arrow button-small">
                                    <svg class="icon">
                                       <use href="#arrow"></use>
                                    </svg>
                                 </button>
                                 <div class="collection-card__label">
                                    <div class="collection-card__title">Adidas Yeezy</div>
                                    <div class="collection-card__amount">54 товари</div>

                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-7.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__small-img">
                                    <img src="img/collections/collections-8.png" alt="Collection product">
                                 </div>
                                 <div class="collection-card__big-img">
                                    <img src="img/collections/collections-9.png" alt="Collection product">
                                 </div>

                              </a>
                           </div>


                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination collection-swiper-pagination"></div>



                     </div>

                  </div>

                  <div class="basic-section__block">
                     <h2 class="basic-section__title heading-3">Зимове взуття</h2>
                     <div data-aos="fade-up" class="basic-section__slider">
                        <div class="swiper season-swiper">
                           <!-- Additional required wrapper -->
                           <div class="swiper-wrapper season-swiper-wrapper">
                              <!-- Slides -->
                              <div class="swiper-slide season-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide season-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide season-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide season-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>
                              <div class="swiper-slide season-swiper-slide">
                                 <a href='./productPage.html' class="product-card">
                                    <button type='button' class='icon-link product-card__icon fill'>

                                       <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like"></use>
                                       </svg>
                                       <svg class="icon hidden" width='24' height='24' viewBox="0 0 24 24" fill="none">
                                          <use xlink:href="#like-fill"></use>
                                       </svg>
                                    </button>

                                    <div class="product-card__image">
                                       <img src="img/products/product-2.png" alt="Shoe image">
                                    </div>
                                    <div class="product-card__content">
                                       <div class="product-card__info">
                                          <h5 class="product-card__title">THERE Skateboards x Nike Dunk Low SB 'Ultra Humanized'</h5>
                                          <div class="product-card__description">
                                             <div class="product-card__size">EU 42-44</div>
                                             <div class="product-card__price">Від 160$</div>

                                          </div>

                                       </div>
                                       <button type='button' class="product-card__button button-small">
                                          <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>

                                             <use xlink:href="#basket"></use>
                                          </svg>
                                       </button>

                                    </div>

                                 </a>

                              </div>

                           </div>
                           <!-- If we need scrollbar -->
                           <div class="swiper-scrollbar season-swiper-scrollbar"></div>

                        </div>
                        <!-- If we need navigation buttons -->
                        <button type='button' class="swiper-button-prev season-swiper-btn-prev">
                           <svg width='20' height='20' viewBox="0 0 20 20">
                              <use xlink:href="#arrow-next"></use>
                           </svg>
                        </button>
                        <button type='button' class="swiper-button-next season-swiper-btn-next">
                           <svg width='20' height='20' viewBox="0 0 20 20">
                              <use xlink:href="#arrow-next"></use>
                           </svg>
                        </button>

                        <a href="./categoryPage.html" class="basic-section__link bordered-button">Показати усе</a>
                     </div>

                  </div>
                  <div class="basic-section__block">
                     <h2 class="basic-section__title heading-3">Блог</h2>
                     <div data-aos="fade-up" class="basic-section__blog ">
                        <a href='#' class="blog-card">
                           <div class="blog-card__image">
                              <img src="img/blog-section/blog-1.png" alt="Blog image">
                              <div class="blog-card__data">April 14, 2022</div>
                              <div class="blog-card__title">The Ukrainian fashion brands to support right now</div>
                           </div>
                           <div class="blog-card__content">
                              <div class="blog-card__text">With Russia's ongoing war on Ukraine, Vogue Scandinavia's Mikko Puttonen lists the Ukrainian brands
                                 to shop and support right now </div>
                              <span class="blog-card__arrow button-small">
                                 <svg class="icon">
                                    <use href="#arrow"></use>
                                 </svg>
                              </span>
                           </div>

                        </a>

                        <a href='#' class="blog-card">
                           <div class="blog-card__image">
                              <img src="img/blog-section/blog-1.png" alt="Blog image">
                              <div class="blog-card__data">April 14, 2022</div>
                              <div class="blog-card__title">The Ukrainian fashion brands to support right now</div>
                           </div>
                           <div class="blog-card__content">
                              <div class="blog-card__text">With Russia's ongoing war on Ukraine, Vogue Scandinavia's Mikko Puttonen lists the Ukrainian brands
                                 to shop and support right now</div>
                              <span class="blog-card__arrow button-small">
                                 <svg class="icon">
                                    <use href="#arrow"></use>
                                 </svg>
                              </span>
                           </div>

                        </a>
                        <a href='#' class="blog-card">
                           <div class="blog-card__image">
                              <img src="img/blog-section/blog-1.png" alt="Blog image">
                              <div class="blog-card__data">April 14, 2022</div>
                              <div class="blog-card__title">The Ukrainian fashion brands to support right now</div>
                           </div>
                           <div class="blog-card__content">
                              <div class="blog-card__text">With Russia's ongoing war on Ukraine, Vogue Scandinavia's Mikko Puttonen lists the Ukrainian brands
                                 to shop and support right now</div>
                              <span class="blog-card__arrow button-small">
                                 <svg class="icon">
                                    <use href="#arrow"></use>
                                 </svg>
                              </span>
                           </div>

                        </a>
                     </div>

                  </div>
               </section>
            </div>

         </div>
      </main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>