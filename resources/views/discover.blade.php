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

  <title>Discover ShopPfa</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a  href="{{ url('/') }}" class="nav__logo">
            <img src="web/img/favicon.png" alt="" class=""> ShopPfa
            </a>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>
            </div>

            <a class="nav__item nav__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <!-- Add a hidden form to trigger the logout request -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="bx bx-moon change-theme" id="theme-button">
                    

                    <div class="button-theme"> 
                    <span class="span"></span>
                
                    </div>
                </i>

                <div class="nav__shop" id="cart-shop">
                    <i class="bx bx-shopping-bag"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>
  <!--==================== CART ====================-->
  <div class="cart" id="cart">
            <i class='bx bx-x cart__close' id="cart-close"></i>

            <h2 class="cart__title-center">My Cart</h2>

            <div class="cart__container">
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="web/img/featured1.png" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">LUXURY FOUNTAIN PEN SET</h3>
                        <span class="cart__price">$384</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>
                
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="web/img/featured3.png" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">HANDMADE CERAMIC COFFEE MUG</h3>
                        <span class="cart__price">$15</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>

                <article class="cart__card">
                    <div class="cart__box">
                        <img src="web/img/new1.png" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Floral Maxi Dress</h3>
                        <span class="cart__price">$980</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>
            </div>


            <div class="cart__prices">
                <span class="cart__prices-item">3 items</span>
                <span class="cart__prices-total">$2880</span>
            </div>

            <div class="cart__prices_pay">
                <span class="cart__prices-item">purchase</span>
                <button class="cart__prices-pay_button">
                    <a href="/shipping" class="cart__prices-pay">
                        <span class="cart__prices-pay">Payement</span>
                    </a>
                </button>
            </div> 

        </div>

  
  <main class="main">
  
    <section class="new section container" id="new">
                <h1 class="section__title">Discover More</h1>
                <h4 class="section__title3">Swipe for more</h4>
                <h2 class="section__title2">Accessories</h2>

                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">        
                                <img src="web/img/watch.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Wristwatch</h3>
                                    <span class="new__price">$89</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/necklace.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Statement Necklace</h3>
                                    <span class="new__price">$130</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/gloves.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Leather Gloves</h3>
                                    <span class="new__price">$90</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/hat.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Wool Hat</h3>
                                    <span class="new__price">$39</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                            
                            <article class="new__card swiper-slide">        
                                <img src="web/img/handbag.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Designer Handbag</h3>
                                    <span class="new__price"> $1499</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/belt.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Leather Belt</h3>
                                    <span class="new__price">$42</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/glasses.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Fashion Sunglasses</h3>
                                    <span class="new__price">$39</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/wallet.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Leather Wallet</h3>
                                    <span class="new__price">$43</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section class="new section container" id="new">
                <h2 class="section__title2">men's wear</h2>

                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">        
                                <img src="web/img/polo.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Men's Polo Shirt</h3>
                                    <span class="new__price">$90</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/dressshirt.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Men's Dress Shirt</h3>
                                    <span class="new__price">$50</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/chinos.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Men's Chinos</h3>
                                    <span class="new__price">$89</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/jeans.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Men's Denim Jeans</h3>
                                    <span class="new__price">$57</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                            
                            <article class="new__card swiper-slide">        
                                <img src="web/img/hoodie.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Men's Hoodie</h3>
                                    <span class="new__price"> $99</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/sweater.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Men's Sweater</h3>
                                    <span class="new__price">$102</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/jacket.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Men's Leather Jacket</h3>
                                    <span class="new__price">$150</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/suit.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Men's Tailored Suit</h3>
                                    <span class="new__price">$897</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="new section container" id="new">
                <h2 class="section__title2">women's wear</h2>

                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">        
                                <img src="web/img/new1.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Floral Dress</h3>
                                    <span class="new__price">$980</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/heels.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">High Heels</h3>
                                    <span class="new__price">$30</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/shorts.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Shorts</h3>
                                    <span class="new__price">$48</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/dress.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Cocktail Dress</h3>
                                    <span class="new__price">$390</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                            
                            <article class="new__card swiper-slide">        
                                <img src="web/img/blazer.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Blazer</h3>
                                    <span class="new__price"> $149</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/jacketW.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">  Leather Jacket</h3>
                                    <span class="new__price">$420</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/jumpsuit.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Jumpsuit</h3>
                                    <span class="new__price">$90</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/cardigan.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Cardigan</h3>
                                    <span class="new__price">$43</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section class="new section container" id="new">
                <h2 class="section__title2">Electronics</h2>

                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">        
                                <img src="web/img/assistant.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Smart Home Assistant</h3>
                                    <span class="new__price">$900</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/speaker.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Portable Bluetooth Speaker</h3>
                                    <span class="new__price">$500</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/gc.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Gaming Console</h3>
                                    <span class="new__price">$99</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/headphones.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Wireless Headphones</h3>
                                    <span class="new__price">$199</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                            
                            <article class="new__card swiper-slide">        
                                <img src="web/img/cam.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Digital Camera</h3>
                                    <span class="new__price"> $999</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/tv.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Smart TV</h3>
                                    <span class="new__price">$1020</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/laptop.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title">Laptop</h3>
                                    <span class="new__price">$1500</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">        
                                <img src="web/img/phone.png" alt="" class="new__img">
                                    <div class="new__data">
                                    <h3 class="new__title"> Smartphone</h3>
                                    <span class="new__price">$1197</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

  </main>

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

