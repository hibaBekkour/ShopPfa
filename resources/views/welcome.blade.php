<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="web/img/favicon.png" type="image/x-icon">       

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="web/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="web/css/styles.css">

        <title>ShopPfa</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                <img src="web/img/favicon.png" alt="" class=""> ShopPfa
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Dashboard</a>
                        </li>
                        <li class="nav__item">
                            <a href="#featured" class="nav__link">Featured</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#new" class="nav__link">New</a>
                        </li>

                        <li class="nav__item">
                            <a href="auth.login" class="nav__link"></a>
                        </li>
                        <li class="nav__item">
                            <a href="auth.login" class="nav__link"></a>
                        </li>

                        <li class="nav__item">
                            <a href="login" class="nav__link">Login</a>
                        </li>

                        <li class="nav__item">
                            <a href="register" class="nav__link">Register</a>
                        </li>
                    </ul>

                    

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class='bx bx-moon change-theme' id="theme-button">
                        
    
    <div class="button-theme"> 
      <span class="span"></span>
  
    </div>
                    </i>

                    

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
            </nav>
        </header>

        

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="web/img/home.png" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">THE BEST<br>  Multi-Service shopping place </h1>
                        <p class="home__description">
                        ShopPfa is a reliable and secure e-commerce platform that offers an efficient and user-friendly shopping experience, from product browsing to order delivery tracking.
                        </p>
                        <span class="home__price">ShopPfa</span>

                        <div class="home__btns">
                            <a href="/discover" class="button button--gray button--small">
                                Discover
                            </a>

                            <button class="button home__button">Start The Journey</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== FEATURED ====================-->
            <section class="xl" id="featured">
                <h2 class="section__title">
                    Featured
                </h2>

                <div class="featured__container grid">
                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="web/img/featured1.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Luxury Fountain Pen Set</h3>
                            <span class="featured__price">$384</span>
                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>
                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="web/img/featured3.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title"> Handmade Ceramic Coffee Mug</h3>
                            <span class="featured__price">$15</span>
                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>
                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="web/img/featured2.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Organic Skincare Gift Set</h3>
                            <span class="featured__price">$400</span>
                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="web/img/featured4.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Fitness Tracker Watch</h3>
                            <span class="featured__price">$170</span>
                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>

                
                </div>
            </section>

            <!--==================== STORY ====================-->
            <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                            Our Story seller
                        </h2>
    
                        <h1 class="story__title">
                        The Journey of  <br> a Thousand Miles
                        </h1>
    
                        <p class="story__description">
                        A captivating and inspiring memoir that follows the extraordinary life of an adventurer 
                        as they explore the world, overcoming challenges and discovering new perspectives.
                        </p>
    
                        <a href="discover.html" class="button button--small">Discover</a>
                    </div>

                    <div class="story__images">
                        <img src="web/img/story.png" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="products section container" id="products">
                <h2 class="section__title">
                    Products
                </h2>

                <div class="products__container grid">
                    <article class="products__card">
                        <img src="web/img/product1.png" alt="" class="products__img">

                        <h3 class="products__title">Electric Toothbrush</h3>
                        <span class="products__price">$30</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="web/img/product2.png" alt="" class="products__img">

                        <h3 class="products__title">Digital Camera</h3>
                        <span class="products__price">$1500</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="web/img/product3.png" alt="" class="products__img">

                        <h3 class="products__title">Wireless Charging Pad</h3>
                        <span class="products__price">$87</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="web/img/product4.png" alt="" class="products__img">

                        <h3 class="products__title">Yoga Mat</h3>
                        <span class="products__price">$65</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="web/img/product5.png" alt="" class="products__img">

                        <h3 class="products__title"> Portable Bluetooth Speaker</h3>
                        <span class="products__price">$95</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="web/img/moreproducts.png" alt="" class="products__img">

                        <h3 class="products__title"> More </h3>
                        <span class="products__price">A whole variety of products at the tips of your fingers</span>
                        <p></p>
                        <br>
                        <button href="discover.html" class="button button--small">Discover More</button>
                       
                    </article>

                    
                </div>
            </section>

            
            <!--==================== NEW ====================-->
            <section class="new section container" id="new">
                <h2 class="section__title">
                    New Arrivals
                </h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="web/img/new1.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Floral Maxi Dress</h3>
                                    <span class="new__price">$980</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="web/img/new2.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">men's running shoes</h3>
                                    <span class="new__price">$130</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="web/img/new3.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title"> Smartphone Tripod Stand</h3>
                                    <span class="new__price">$25</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="web/img/new4.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title"> Wireless Bluetooth Earbuds</h3>
                                    <span class="new__price">$1590</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>                       
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section container">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                        <p class="newsletter__description">
                            Don't miss out on your discounts. Subscribe to our email 
                            newsletter to get the best offers, discounts, coupons, 
                            gifts and much more.
                        </p>
                    </div>

                    <form action="" class="newsletter__subscribe">
                        <input type="email" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            SUBSCRIBE
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Our information</h3>

                    <ul class="footer__list">
                        <li>adress</li>
                        <li>other info</li>
                        <li>+212 xxxxxxxxx</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Support Center</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customer Support</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Copy Right</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Product</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">make-up</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">clothes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Electronics</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">ShopPfa All rigths reserved</span>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SWIPER JS ===============-->
        <script src="web/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="web/js/main.js"></script>
    </body>
</html>