/**
 * KURA LIVING LUXURY LIVING — MASTER SCRIPT
 * GSAP Animations, Cart Drawer, Wishlist, Quick View Modal, Filters & Micro-interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  // Initialize GSAP & ScrollTrigger if loaded
  initGsapAnimations();

  // Navigation & Header Scroll State
  initNavigation();

  // Hero Slider
  initHeroSlider();

  // E-commerce Cart & Wishlist System
  initCartAndWishlist();

  // Quick View Modal
  initQuickView();

  // Shop Page Filtering & Sorting
  initShopFilters();

  // Contact Form Submission
  initContactForm();
});

/* ==========================================================================
   GSAP ANIMATIONS & SCROLL REVEALS
   ========================================================================== */
function initGsapAnimations() {
  if (typeof gsap === 'undefined') return;

  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  // Hero entrance animation
  const heroTl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1 } });
  
  if (document.querySelector('.hero-tag')) {
    heroTl.fromTo('.hero-tag', { opacity: 0, y: 30 }, { opacity: 1, y: 0, delay: 0.2 })
          .fromTo('.hero-title', { opacity: 0, y: 40 }, { opacity: 1, y: 0 }, '-=0.7')
          .fromTo('.hero-desc', { opacity: 0, y: 30 }, { opacity: 1, y: 0 }, '-=0.7')
          .fromTo('.hero-content .btn-luxury', { opacity: 0, scale: 0.95 }, { opacity: 1, scale: 1 }, '-=0.6')
          .fromTo('.hero-controls', { opacity: 0 }, { opacity: 1 }, '-=0.5');
  }

  // Page Hero entrance (for shop, collections, about, contact)
  if (document.querySelector('.page-hero-content')) {
    gsap.fromTo('.page-hero-content > *', 
      { opacity: 0, y: 30 }, 
      { opacity: 1, y: 0, stagger: 0.15, duration: 0.9, ease: 'power2.out' }
    );
  }

  // ScrollTrigger reveals
  if (typeof ScrollTrigger !== 'undefined') {
    // Value props reveal
    gsap.utils.toArray('.value-item').forEach((item, i) => {
      gsap.from(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top 85%',
        },
        opacity: 0,
        y: 40,
        duration: 0.8,
        delay: i * 0.1,
        ease: 'power2.out'
      });
    });

    // Collection cards reveal
    gsap.utils.toArray('.collection-card').forEach((card, i) => {
      gsap.from(card, {
        scrollTrigger: {
          trigger: card,
          start: 'top 85%',
        },
        opacity: 0,
        y: 50,
        duration: 0.9,
        delay: i * 0.12,
        ease: 'power3.out'
      });
    });

    // Product cards reveal
    gsap.utils.toArray('.product-card').forEach((card, i) => {
      gsap.from(card, {
        scrollTrigger: {
          trigger: card,
          start: 'top 90%',
        },
        opacity: 0,
        y: 35,
        duration: 0.7,
        delay: (i % 4) * 0.1,
        ease: 'power2.out'
      });
    });

    // Journal cards reveal
    gsap.utils.toArray('.journal-card').forEach((card, i) => {
      gsap.from(card, {
        scrollTrigger: {
          trigger: card,
          start: 'top 85%',
        },
        opacity: 0,
        y: 45,
        duration: 0.8,
        delay: i * 0.15,
        ease: 'power2.out'
      });
    });

    // Lookbook items reveal
    gsap.utils.toArray('.lookbook-item').forEach(item => {
      gsap.from(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top 80%',
        },
        opacity: 0,
        y: 60,
        duration: 1,
        ease: 'power3.out'
      });
    });
  }
}

/* ==========================================================================
   NAVIGATION & STICKY HEADER
   ========================================================================== */
function initNavigation() {
  const header = document.querySelector('.site-header');
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');

  // Sticky Header state
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  // Mobile drawer toggle
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      const isExpanded = navMenu.classList.contains('open');
      mobileToggle.setAttribute('aria-expanded', isExpanded);
    });

    // Close on clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
        navMenu.classList.remove('open');
      }
    });
  }

  // Active link highlighter based on current URL path
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '' && href === 'index.html') || (currentPath.includes('index') && href.includes('index'))) {
      link.classList.add('active');
    }
  });
}

/* ==========================================================================
   HERO SLIDER
   ========================================================================== */
function initHeroSlider() {
  const slides = document.querySelectorAll('.hero-slide');
  if (!slides.length) return;

  const prevBtn = document.querySelector('.prev-hero-slide');
  const nextBtn = document.querySelector('.next-hero-slide');
  const counterCurrent = document.querySelector('.counter-current');
  const counterTotal = document.querySelector('.counter-total');

  let currentIndex = 0;
  const totalSlides = slides.length;

  if (counterTotal) {
    counterTotal.textContent = String(totalSlides).padStart(2, '0');
  }

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
    if (counterCurrent) {
      counterCurrent.textContent = String(index + 1).padStart(2, '0');
    }
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
  }

  if (nextBtn) nextBtn.addEventListener('click', nextSlide);
  if (prevBtn) prevBtn.addEventListener('click', prevSlide);

  // Auto transition every 7 seconds
  let slideInterval = setInterval(nextSlide, 7000);

  const heroWrap = document.querySelector('.hero-slider-wrap');
  if (heroWrap) {
    heroWrap.addEventListener('mouseenter', () => clearInterval(slideInterval));
    heroWrap.addEventListener('mouseleave', () => {
      slideInterval = setInterval(nextSlide, 7000);
    });
  }
}

/* ==========================================================================
   CART & WISHLIST SYSTEM (With LocalStorage Persistence)
   ========================================================================== */
let cart = JSON.parse(localStorage.getItem('kura_cart')) || [
  {
    id: 'prod-1',
    name: 'Kura Linen Sofa',
    price: 89900,
    qty: 1,
    image: 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=600&q=80'
  },
  {
    id: 'prod-2',
    name: 'Hikari Oak Lounge Chair',
    price: 49900,
    qty: 1,
    image: 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&w=600&q=80'
  }
];

let wishlist = JSON.parse(localStorage.getItem('kura_wishlist')) || ['prod-1'];

function initCartAndWishlist() {
  updateCartBadge();
  updateWishlistBadge();
  renderCartDrawer();

  // Cart Drawer open/close triggers
  const cartTrigger = document.querySelector('.cart-trigger-btn');
  const cartDrawer = document.getElementById('cartDrawer');
  const drawerOverlay = document.getElementById('drawerOverlay');
  const closeDrawerBtn = document.querySelector('.close-drawer-btn');

  function openCart() {
    cartDrawer?.classList.add('active');
    drawerOverlay?.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeCart() {
    cartDrawer?.classList.remove('active');
    drawerOverlay?.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (cartTrigger) cartTrigger.addEventListener('click', openCart);
  if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeCart);
  if (drawerOverlay) drawerOverlay.addEventListener('click', closeCart);

  // Bind add-to-cart clicks across any product card
  document.addEventListener('click', (e) => {
    const addBtn = e.target.closest('.cart-add-btn');
    if (addBtn) {
      e.preventDefault();
      const card = addBtn.closest('.product-card');
      if (card) {
        const id = card.dataset.id || 'prod-' + Date.now();
        const name = card.querySelector('.product-name')?.textContent || 'Artéva Piece';
        const priceText = card.querySelector('.product-price')?.textContent || '¥50,000';
        const price = parseFloat(priceText.replace(/[^0-9.]/g, '')) || 500;
        const image = card.querySelector('.product-thumb img')?.getAttribute('src') || '';

        addToCart({ id, name, price, qty: 1, image });
        showToast(`Added "${name}" to your luxury cart.`);
      }
    }

    // Wishlist Toggle
    const wishBtn = e.target.closest('.wishlist-btn');
    if (wishBtn) {
      e.preventDefault();
      const card = wishBtn.closest('.product-card');
      const id = card ? card.dataset.id : 'prod-fav';
      toggleWishlist(id, wishBtn);
    }
  });

  // Checkout button simulation
  const checkoutBtn = document.querySelector('.checkout-btn');
  if (checkoutBtn) {
    checkoutBtn.addEventListener('click', () => {
      if (cart.length === 0) {
        showToast('Your bag is currently empty.');
        return;
      }
      showToast('Proceeding to Artéva Bespoke Concierge Checkout...');
      setTimeout(() => {
        alert('Thank you for choosing Artéva. Your luxury order reservation has been placed! Our client concierge will contact you shortly.');
        cart = [];
        saveCart();
        renderCartDrawer();
        updateCartBadge();
        closeCart();
      }, 900);
    });
  }
}

function addToCart(item) {
  const existing = cart.find(p => p.id === item.id);
  if (existing) {
    existing.qty += 1;
  } else {
    cart.push(item);
  }
  saveCart();
  renderCartDrawer();
  updateCartBadge();
}

function updateQuantity(id, delta) {
  const item = cart.find(p => p.id === id);
  if (item) {
    item.qty += delta;
    if (item.qty <= 0) {
      cart = cart.filter(p => p.id !== id);
    }
    saveCart();
    renderCartDrawer();
    updateCartBadge();
  }
}

function removeFromCart(id) {
  cart = cart.filter(p => p.id !== id);
  saveCart();
  renderCartDrawer();
  updateCartBadge();
  showToast('Item removed from cart.');
}

function saveCart() {
  localStorage.setItem('kura_cart', JSON.stringify(cart));
}

function updateCartBadge() {
  const badge = document.querySelector('.cart-count-badge');
  if (badge) {
    const totalCount = cart.reduce((sum, item) => sum + item.qty, 0);
    badge.textContent = totalCount;
    badge.style.display = totalCount > 0 ? 'flex' : 'none';
  }
}

function renderCartDrawer() {
  const container = document.querySelector('.drawer-items-list');
  const subtotalEl = document.querySelector('.drawer-subtotal-val');
  if (!container) return;

  if (cart.length === 0) {
    container.innerHTML = `
      <div style="text-align: center; padding: 4rem 1rem; color: #8E887F;">
        <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 1rem; opacity: 0.5;">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
        </svg>
        <p style="font-family: var(--font-serif); font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.5rem;">Your bag is empty</p>
        <p style="font-size: 0.85rem;">Discover timeless pieces curated for modern sanctuary living.</p>
      </div>
    `;
    if (subtotalEl) subtotalEl.textContent = '¥0';
    return;
  }

  let total = 0;
  container.innerHTML = cart.map(item => {
    const itemTotal = item.price * item.qty;
    total += itemTotal;
    return `
      <div class="drawer-item" data-id="${item.id}">
        <img src="${item.image}" alt="${item.name}" class="drawer-item-thumb">
        <div class="drawer-item-info">
          <h4 class="drawer-item-name">${item.name}</h4>
          <div class="drawer-item-price">$${item.price.toLocaleString()}</div>
          <div class="drawer-qty-controls">
            <button onclick="updateQuantity('${item.id}', -1)">-</button>
            <span>${item.qty}</span>
            <button onclick="updateQuantity('${item.id}', 1)">+</button>
          </div>
        </div>
        <button class="drawer-item-remove" onclick="removeFromCart('${item.id}')" title="Remove item">
          <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    `;
  }).join('');

  if (subtotalEl) {
    subtotalEl.textContent = `$${total.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
  }
}

// Wishlist handling
function toggleWishlist(id, btn) {
  const index = wishlist.indexOf(id);
  if (index > -1) {
    wishlist.splice(index, 1);
    btn.classList.remove('active');
    showToast('Item removed from your wishlist.');
  } else {
    wishlist.push(id);
    btn.classList.add('active');
    showToast('Saved to your private Artéva wishlist.');
  }
  localStorage.setItem('kura_wishlist', JSON.stringify(wishlist));
  updateWishlistBadge();
}

function updateWishlistBadge() {
  const badge = document.querySelector('.wishlist-count-badge');
  if (badge) {
    badge.textContent = wishlist.length;
    badge.style.display = wishlist.length > 0 ? 'flex' : 'none';
  }
}

/* ==========================================================================
   QUICK VIEW MODAL
   ========================================================================== */
function initQuickView() {
  const modalOverlay = document.getElementById('quickViewModal');
  const closeBtn = modalOverlay?.querySelector('.modal-close-btn');

  function openModal(data) {
    if (!modalOverlay) return;
    modalOverlay.querySelector('.modal-img').src = data.img;
    modalOverlay.querySelector('.modal-title').textContent = data.name;
    modalOverlay.querySelector('.modal-category').textContent = data.category;
    modalOverlay.querySelector('.modal-price').textContent = data.price;
    modalOverlay.querySelector('.modal-desc').textContent = data.desc;
    
    // Store current modal item data on modal add button
    const modalAddBtn = modalOverlay.querySelector('.modal-add-to-cart');
    if (modalAddBtn) {
      modalAddBtn.onclick = () => {
        const numPrice = parseFloat(data.price.replace(/[^0-9.]/g, '')) || 500;
        addToCart({
          id: data.id,
          name: data.name,
          price: numPrice,
          qty: 1,
          image: data.img
        });
        showToast(`Added "${data.name}" to cart.`);
        closeModal();
      };
    }

    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modalOverlay?.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeModal();
    });
  }

  // Quick view triggers
  document.addEventListener('click', (e) => {
    const qvBtn = e.target.closest('.quick-view-btn');
    if (qvBtn) {
      e.preventDefault();
      const card = qvBtn.closest('.product-card');
      if (card) {
        const data = {
          id: card.dataset.id || 'prod-qv',
          name: card.querySelector('.product-name')?.textContent || 'Luxury Creation',
          category: card.querySelector('.product-category')?.textContent || 'Curated Space',
          price: card.querySelector('.product-price')?.textContent || '$89,900',
          img: card.querySelector('.product-thumb img')?.src || '',
          desc: card.dataset.desc || 'Artfully handcrafted with sustainably harvested solid oak, top-grain Italian leather, and artisan brass accents. Designed for timeless serenity.'
        };
        openModal(data);
      }
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalOverlay?.classList.contains('active')) {
      closeModal();
    }
  });
}

/* ==========================================================================
   SHOP PAGE CATEGORY FILTERING & SORTING
   ========================================================================== */
function initShopFilters() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const productCards = document.querySelectorAll('.shop-grid .product-card');
  const sortSelect = document.querySelector('.shop-sort-select');
  const resultsCount = document.querySelector('.results-count');

  if (!filterBtns.length || !productCards.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      let visibleCount = 0;

      productCards.forEach(card => {
        const category = card.dataset.category;
        if (filter === 'all' || category === filter) {
          card.style.display = 'flex';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      if (resultsCount) {
        resultsCount.textContent = `Showing ${visibleCount} luxury pieces`;
      }
    });
  });

  // Sort select handler
  if (sortSelect) {
    sortSelect.addEventListener('change', () => {
      const container = document.querySelector('.shop-grid');
      const cardsArray = Array.from(productCards);

      if (sortSelect.value === 'price-asc') {
        cardsArray.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
      } else if (sortSelect.value === 'price-desc') {
        cardsArray.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
      } else if (sortSelect.value === 'name') {
        cardsArray.sort((a, b) => a.querySelector('.product-name').textContent.localeCompare(b.querySelector('.product-name').textContent));
      }

      cardsArray.forEach(card => container.appendChild(card));
    });
  }
}

/* ==========================================================================
   CONTACT FORM SUBMISSION
   ========================================================================== */
function initContactForm() {
  const contactForm = document.getElementById('bespokeContactForm');
  if (!contactForm) return;

  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    submitBtn.innerHTML = 'Submitting Request...';
    submitBtn.disabled = true;

    // Simulate luxury inquiry processing
    setTimeout(() => {
      submitBtn.innerHTML = 'Inquiry Received';
      showToast('Thank you! Your bespoke consultation request has been received. An Artéva design director will be in touch within 24 hours.');
      contactForm.reset();

      setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
      }, 3000);
    }, 1200);
  });
}

/* ==========================================================================
   TOAST NOTIFICATION UTILITY
   ========================================================================== */
function showToast(message) {
  let toast = document.querySelector('.toast-msg');
  if (!toast) {
    toast = document.createElement('div');
    toast.className = 'toast-msg';
    document.body.appendChild(toast);
  }

  toast.textContent = message;
  toast.classList.add('show');

  setTimeout(() => {
    toast.classList.remove('show');
  }, 3500);
}
