<?php
// Determine current active page
$current_page = basename($_SERVER['SCRIPT_NAME'], '.php');
if ($current_page == '' || $current_page == 'index') $current_page = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' — ARTÉVA Luxury Furniture' : 'ARTÉVA FURNITURE — Timeless Furniture, Made for You'; ?></title>
  <meta name="description" content="Artéva Furniture crafts timeless, sustainable luxury furniture that blends comfort, functionality, and architectural elegance to transform your space.">
  
  <!-- Fonts: Lufga, Intro & Arial -->
  <link rel="preconnect" href="https://fonts.cdnfonts.com">
  <link href="https://fonts.cdnfonts.com/css/lufga" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/intro" rel="stylesheet">
  
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Top Notification Bar -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <div class="top-bar-promo">
        COMPLIMENTARY WHITE GLOVE DELIVERY ACROSS INDIA &bull; BESPOKE ARCHITECTURAL CRAFTSMANSHIP
      </div>
    </div>
  </div>

  <!-- Luxury Header -->
  <header class="site-header" id="siteHeader">
    <div class="container header-inner">
      
      <!-- Brand Logo -->
      <a href="index.php" class="brand-logo" aria-label="Artéva Furniture Home">
        <span class="logo-title">ART&Eacute;VA</span>
        <span class="logo-sub">FURNITURE</span>
      </a>

      <!-- Desktop Navigation Menu (5 Dedicated Pages) -->
      <nav class="nav-menu" id="navMenu">
        <a href="index.php" class="nav-link <?php echo $current_page === 'home' ? 'active' : ''; ?>">Home</a>
        <a href="shop.php" class="nav-link <?php echo $current_page === 'shop' ? 'active' : ''; ?>">Shop</a>
        <a href="collections.php" class="nav-link <?php echo $current_page === 'collections' ? 'active' : ''; ?>">Collections</a>
        <a href="about.php" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">About Us</a>
        <a href="contact.php" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">Contact</a>
      </nav>

      <!-- Action Icons (Search, Wishlist, Cart, Mobile Toggle) -->
      <div class="header-actions">
        <!-- Search Trigger -->
        <button class="action-btn" aria-label="Search Catalog" onclick="document.querySelector('#navSearchModal') ? document.querySelector('#navSearchModal').classList.toggle('active') : alert('Search our luxury catalog on the Shop page.');">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </button>

        <!-- Wishlist Indicator -->
        <button class="action-btn wishlist-trigger-btn" aria-label="Wishlist" onclick="window.location.href='shop.php'">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
          </svg>
          <span class="badge-count wishlist-count-badge" style="display:none;">0</span>
        </button>

        <!-- Shopping Cart Drawer Trigger with Badge -->
        <button class="action-btn cart-trigger-btn" aria-label="Shopping Cart">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
          </svg>
          <span class="badge-count cart-count-badge">0</span>
        </button>

        <!-- Mobile Menu Toggle Button -->
        <button class="action-btn mobile-toggle" aria-label="Toggle Navigation Menu">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

    </div>
  </header>

  <!-- Cart Drawer Overlay & Slideout Panel -->
  <div class="drawer-overlay" id="drawerOverlay"></div>
  <aside class="side-drawer" id="cartDrawer" aria-label="Shopping Cart">
    <div class="drawer-header">
      <h3 class="drawer-title">Shopping Bag</h3>
      <button class="drawer-close-btn close-drawer-btn" aria-label="Close Bag">
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <div class="drawer-items-list">
      <!-- Injected via JavaScript -->
    </div>

    <div class="drawer-footer">
      <div class="drawer-subtotal">
        <span>Subtotal</span>
        <span class="drawer-subtotal-val">$0.00</span>
      </div>
      <p style="font-size: 0.75rem; color: #8E887F; margin-bottom: 1rem;">Taxes and complimentary white-glove shipping calculated at concierge checkout.</p>
      <button class="checkout-btn">Proceed to Checkout</button>
    </div>
  </aside>

  <!-- Quick View Modal Container -->
  <div class="modal-overlay" id="quickViewModal">
    <div class="modal-container">
      <button class="modal-close-btn" aria-label="Close modal">
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
      <div class="modal-grid">
        <div class="modal-media">
          <img src="" alt="Furniture Preview" class="modal-img">
        </div>
        <div class="modal-content">
          <span class="eyebrow modal-category">Collection</span>
          <h3 class="modal-title">Product Name</h3>
          <div class="modal-price">$0.00</div>
          <p class="modal-desc">Handcrafted luxury design with timeless comfort and artisanal precision.</p>
          <div style="display: flex; gap: 1rem; margin-top: 1rem;">
            <button class="btn-luxury modal-add-to-cart">Add To Luxury Bag</button>
          </div>
        </div>
      </div>
    </div>
  </div>
