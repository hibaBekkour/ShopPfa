
// Define an array of products
const products = [
    { type: 'accessories', name: 'Watch', price: 99.99 },
    { type: 'accessories', name: 'Sunglasses', price: 49.99 },
    { type: 'clothes-men', name: 'T-Shirt', price: 19.99 },
    { type: 'clothes-men', name: 'Jeans', price: 59.99 },
    { type: 'clothes-women', name: 'Dress', price: 79.99 },
    { type: 'clothes-women', name: 'Handbag', price: 149.99 },
    { type: 'electronics', name: 'Smartphone', price: 699.99 },
    { type: 'electronics', name: 'Headphones', price: 129.99 },
      { type: 'electronics', name: 'TEST', price: 999999999999999999999999999999999999999999999999 },
    // Add more products here...
  ];
  
  // Get the products container element
  const productsContainer = document.querySelector('.products__container');
  
  // Create a function to generate product cards
  function generateProductCard(product) {
    const card = document.createElement('div');
    card.classList.add('product-card');
  
    const image = document.createElement('img');
    image.classList.add('product-card__image');
    // Set the image source based on the product image URL
  
    const content = document.createElement('div');
    content.classList.add('product-card__content');
  
    const title = document.createElement('h3');
    title.classList.add('product-card__name');
    title.textContent = product.name;
  
    const price = document.createElement('p');
    price.classList.add('product-card__price');
    price.textContent = `$${product.price}`;
  
    content.appendChild(title);
    content.appendChild(price);
  
    card.appendChild(image);
    card.appendChild(content);
  
    return card;
  }
  
  // Group products by type
  const productsByType = {};
  products.forEach(product => {
    if (!productsByType[product.type]) {
      productsByType[product.type] = [];
    }
    productsByType[product.type].push(product);
  });
  
  // Generate product cards for each type
  for (const type in productsByType) {
    const section = document.createElement('section');
    section.classList.add('product-section');
  
    const title = document.createElement('h2');
    title.classList.add('product-section__title');
    title.textContent = type;
  
    section.appendChild(title);
  
    const productContainer = document.createElement('div');
    productContainer.classList.add('product-section__container');
  
    productsByType[type].forEach(product => {
      const card = generateProductCard(product);
      productContainer.appendChild(card);
    });
  
    section.appendChild(productContainer);
    productsContainer.appendChild(section);
  }
  
/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () =>{
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    this.scrollY >= 50 ? header.classList.add('scroll-header') 
                       : header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== TESTIMONIAL SWIPER ===============*/
let testimonialSwiper = new Swiper(".testimonial-swiper", {
    spaceBetween: 30,
    loop: 'true',

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

/*=============== NEW SWIPER ===============*/
let newSwiper = new Swiper(".new-swiper", {
    spaceBetween: 24,
    loop: 'true',

    breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
    },
});

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')
    
const scrollActive = () =>{
  	const scrollY = window.pageYOffset

	sections.forEach(current =>{
		const sectionHeight = current.offsetHeight,
			  sectionTop = current.offsetTop - 58,
			  sectionId = current.getAttribute('id'),
			  sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')

		if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
			sectionsClass.classList.add('active-link')
		}else{
			sectionsClass.classList.remove('active-link')
		}                                                    
	})
}
window.addEventListener('scroll', scrollActive)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SHOW CART ===============*/
const cart = document.getElementById('cart'),
      cartShop = document.getElementById('cart-shop'),
      cartClose = document.getElementById('cart-close')

/*===== CART SHOW =====*/
/* Validate if constant exists */
if(cartShop){
    cartShop.addEventListener('click', () =>{
        cart.classList.add('show-cart')
    })
}

/*===== CART HIDDEN =====*/
/* Validate if constant exists */
if(cartClose){
    cartClose.addEventListener('click', () =>{
        cart.classList.remove('show-cart')
    })
}

/*=============== DARK LIGHT THEME ===============*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

  