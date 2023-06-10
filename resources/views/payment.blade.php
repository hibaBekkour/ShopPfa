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

    <title>Payment Page</title>
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
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>



    <main class="main">
        <section class="section">
        <div class="container">
    <h1 class="payment__title">Payment Page</h1>

    <form class="payment__form" action="/process_payment" method="POST">
    <h2 class="payment__form-title">Payment Methods:</h2>
<div class="payment__form-title-label">
    <input type="radio" name="payment_method" value="on_site" id="payment_method_on_site">
    <label for="payment_method_on_site">Pay On Site</label><br>
    <input type="radio" name="payment_method" value="paypal" id="payment_method_paypal">
    <label for="payment_method_paypal">PayPal</label><br>
    <input type="radio" name="payment_method" value="card" id="payment_method_card" onchange="togglePaymentDetails(this)">
    <label for="payment_method_card">Credit Card</label><br>
</div>

<section class="section hidden">
    <h2 id="paymentDetailsTitle" class="payment__form-title">Payment Details:</h2>
    <label for="card_number">Card Number:</label>
    <input type="text" id="card_number" name="card_number" placeholder="Enter your card number"><br>

    <label for="expiration_date">Expiration Date:</label>
    <input type="text" id="expiration_date" name="expiration_date" placeholder="MM/YY"><br>
</section>


        <!-- Add more fields based on your payment requirements -->

        <h2 class="">Shipping Information:</h2>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your shipping address"><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" placeholder="Enter your contact number"><br>

        <!-- Add more fields based on your shipping information requirements -->

        <h2 class="payment__form-title">Estimated Shipping Time:</h2>
        <p>Estimated shipping time: 3-5 business days</p>

        <h2 class="payment__form-title">Shipment Updates:</h2>
        <p>Please visit the <a href="/shipment_updates">shipment updates</a> page to track the progress of your shipment.</p>
        </div>
        </section>
        <div class="container">
            <h2 class="comfirmation-title">Confirmation:</h2>
            <input type="checkbox" name="confirmation" value="confirmed" required>
            <label for="confirmation">I confirm that I have read privacy and policy.</label><br>
        </div>
        <div class="container cart__prices cart__prices_pay">
        <input type="submit" value="Complete Payment" class="cart__prices-pay_button cart__prices_pay" required>
        </div>
    </form>

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
                        <i class='bx bxl-twitter'></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram'></i>
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
