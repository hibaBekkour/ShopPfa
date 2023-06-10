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

        <title>Shipping modes and choices</title>
    </head>

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
    
<body>

    <main class="main">
        <section class="section">
        <div class="container">
            <h1 class="section__title">Shipping Options</h1>
            <div class="options">
            <div class="option">
                <input type="radio" id="home-delivery" name="shipping-option">
                <label for="home-delivery">Home Delivery</label>
            </div>
            <div class="option">
                <input type="radio" id="local-pickup" name="shipping-option">
                <label for="local-pickup">Local Pickup</label>
            </div>
            <div class="option">
                <input type="radio" id="post-office" name="shipping-option">
                <label for="post-office">Post Office/Mail Delivery</label>
            </div>
            <div class="option">
                <input type="radio" id="locker-delivery" name="shipping-option">
                <label for="locker-delivery">Locker Delivery</label>
            </div>
            <div class="option">
                <input type="radio" id="workplace-delivery" name="shipping-option">
                <label for="workplace-delivery">Workplace Delivery</label>
            </div>
            </div>
        </div>
        </section>

        <!-- shippingMode.blade.php -->


<section id="additional-options" class="section hidden">
    <div class="container">
        <h2 class="section__title">Shipping Mode</h2>
        <div class="option">
            <form action="{{ route('store.location') }}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="location-input">Address</label>
                    <input type="text" id="address" class="form-control" name="address" required>
                </div>
                <button type="submit" class="margin__top cart__prices-pay_button cart__prices-pay">Save Location</button>
           </form>
         </div>   
    </div>
</section>


    </main>
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


