<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kura Living — 暮らしに、静かな美しさを。</title>
  <!-- Fonts: Lufga, Intro & Arial -->
  <link rel="preconnect" href="https://fonts.cdnfonts.com">
  <link href="https://fonts.cdnfonts.com/css/lufga" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/intro" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Top Notification Bar -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <div class="top-bar-promo">
        日本全国無料のホワイトグローブ配送 &bull; 職人の技と現代の暮らしをつなぐ家具
      </div>
    </div>
  </div>

  <!-- Luxury Header -->
  <header class="site-header" id="siteHeader">
    <div class="container header-inner">
      <a href="index.php" class="brand-logo" aria-label="Kura Living Home">
        <span class="logo-title">KURA</span>
        <span class="logo-sub">LIVING</span>
      </a>

      <!-- Navigation -->
      <nav class="nav-menu" id="navMenu">
        <a href="index.php" class="nav-link active">ホーム</a>
        <a href="shop.php" class="nav-link">ショップ</a>
        <a href="collections.php" class="nav-link">コレクション</a>
        <a href="about.php" class="nav-link">ブランドについて</a>
        <a href="contact.php" class="nav-link">お問い合わせ</a>
      </nav>

      <!-- Action Icons -->
      <div class="header-actions">
        <button class="action-btn" aria-label="カタログを検索" onclick="window.location.href='shop.php'">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </button>

        <button class="action-btn wishlist-trigger-btn" aria-label="お気に入り" onclick="window.location.href='shop.php'">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
          </svg>
          <span class="badge-count wishlist-count-badge" style="display:none;">0</span>
        </button>

        <button class="action-btn cart-trigger-btn" aria-label="ショッピングバッグ">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
          </svg>
          <span class="badge-count cart-count-badge">0</span>
        </button>

        <button class="action-btn mobile-toggle" aria-label="メニュー切り替え">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Cart Drawer -->
  <div class="drawer-overlay" id="drawerOverlay"></div>
  <aside class="side-drawer" id="cartDrawer" aria-label="ショッピングバッグ">
    <div class="drawer-header">
      <h3 class="drawer-title">ショッピングバッグ</h3>
      <button class="drawer-close-btn close-drawer-btn" aria-label="バッグを閉じる">
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <div class="drawer-items-list"></div>
    <div class="drawer-footer">
      <div class="drawer-subtotal">
        <span>小計</span>
        <span class="drawer-subtotal-val">¥0</span>
      </div>
      <p style="font-size: 0.75rem; color: #8E887F; margin-bottom: 1rem;">消費税および配送費用はチェックアウト時に計算されます。</p>
      <button class="checkout-btn">チェックアウトへ進む</button>
    </div>
  </aside>

  <!-- Quick View Modal Container -->
  <div class="modal-overlay" id="quickViewModal">
    <div class="modal-container">
      <button class="modal-close-btn" aria-label="モーダルを閉じる">
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
      <div class="modal-grid">
        <div class="modal-media">
          <img src="" alt="家具プレビュー" class="modal-img">
        </div>
        <div class="modal-content">
          <span class="eyebrow modal-category">コレクション</span>
          <h3 class="modal-title">商品名</h3>
          <div class="modal-price">¥0</div>
          <p class="modal-desc">手仕事によるラグジュアリーデザイン。時代を超えた快適さと職人の精度。</p>
          <div style="display: flex; gap: 1rem; margin-top: 1rem;">
            <button class="btn-luxury modal-add-to-cart">バッグに追加する</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Hero Slider Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-slider-wrap">
        
        <!-- Slide 1 -->
        <div class="hero-slide active">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1600&q=85" alt="ラグジュアリーなリビングルーム" class="hero-bg-img">
          <div class="hero-overlay">
            <div class="hero-content">
              <span class="hero-tag">暮らしにより添うデザイン</span>
              <h1 class="hero-title">時代を超えた美しさ、<br><em>あなたのために。</em></h1>
              <p class="hero-desc">上質な快適さ、機能性、エレガンスが調和し、お部屋を心安らぐ建築的空間へと変貌させます。</p>
              <a href="shop.php" class="btn-luxury">
                <span>コレクションを見る</span>
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
          <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=1600&q=85" alt="アーティザンベッドルーム" class="hero-bg-img">
          <div class="hero-overlay">
            <div class="hero-content">
              <span class="hero-tag">自然との調和</span>
              <h2 class="hero-title">建築的な美学、<br><em>自然に根ざした職人技。</em></h2>
              <p class="hero-desc">サステナブルに調達された欧州産オーク、無塗装の真鍮、手織りのファブリックから生まれるオーガニックな造形美。</p>
              <a href="collections.php" class="btn-luxury">
                <span>ルックブックを見る</span>
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
          <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=1600&q=85" alt="彫刻的なダイニングルーム" class="hero-bg-img">
          <div class="hero-overlay">
            <div class="hero-content">
              <span class="hero-tag">ビスポーク アトリエ</span>
              <h2 class="hero-title">彫刻のような存在感、<br><em>受け継がれる品質。</em></h2>
              <p class="hero-desc">すべてのダイニング家具は職人の精度で設計され、温かな語らいのひとときを引き立てます。</p>
              <a href="contact.php" class="btn-luxury">
                <span>特注家具をご相談</span>
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Hero Controls -->
        <div class="hero-controls">
          <div class="slider-counter">
            <span class="counter-current">01</span>
            <span class="divider"></span>
            <span class="counter-total">03</span>
          </div>
          <div class="slider-nav">
            <button class="slider-arrow prev-hero-slide" aria-label="前のスライド">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button class="slider-arrow next-hero-slide" aria-label="次のスライド">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4 Pillars Value Bar -->
  <section class="value-bar">
    <div class="container">
      <div class="value-grid">
        
        <div class="value-item">
          <div class="value-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
          </div>
          <div class="value-text">
            <h4>最高峰の品質</h4>
            <p>厳選された上質素材と職人による手仕事。</p>
          </div>
        </div>

        <div class="value-item">
          <div class="value-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v4m0 4h.01"/></svg>
          </div>
          <div class="value-text">
            <h4>サステナブルデザイン</h4>
            <p>環境に配慮したFSC認証木材を使用。</p>
          </div>
        </div>

        <div class="value-item">
          <div class="value-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
          </div>
          <div class="value-text">
            <h4>オーダーメイド対応</h4>
            <p>仕上げ・生地・サイズをお好みにカスタマイズ。</p>
          </div>
        </div>

        <div class="value-item">
          <div class="value-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
          </div>
          <div class="value-text">
            <h4>無料開梱設置サービス</h4>
            <p>ご指定の場所への丁寧な搬入・組み立て。</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Shop by Collection -->
  <section class="collections-section">
    <div class="container">
      <div class="section-header-flex">
        <div>
          <span class="eyebrow">ラインナップを見る</span>
          <h2 class="section-title">コレクションから探す</h2>
        </div>
        <a href="collections.php" class="view-all-link">
          <span>すべてのコレクションを見る</span>
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <div class="collections-grid">
        <div class="collection-card" onclick="window.location.href='collections.php'">
          <div class="collection-img-wrap">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80" alt="リビングルーム コレクション" class="collection-img">
            <div class="collection-gradient"></div>
          </div>
          <div class="collection-info">
            <h3>リビングルーム</h3>
            <span class="collection-link">詳細を見る &rarr;</span>
          </div>
        </div>

        <div class="collection-card" onclick="window.location.href='collections.php'">
          <div class="collection-img-wrap">
            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80" alt="ベッドルーム コレクション" class="collection-img">
            <div class="collection-gradient"></div>
          </div>
          <div class="collection-info">
            <h3>ベッドルーム</h3>
            <span class="collection-link">詳細を見る &rarr;</span>
          </div>
        </div>

        <div class="collection-card" onclick="window.location.href='collections.php'">
          <div class="collection-img-wrap">
            <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=800&q=80" alt="ダイニングルーム コレクション" class="collection-img">
            <div class="collection-gradient"></div>
          </div>
          <div class="collection-info">
            <h3>ダイニングルーム</h3>
            <span class="collection-link">詳細を見る &rarr;</span>
          </div>
        </div>

        <div class="collection-card" onclick="window.location.href='collections.php'">
          <div class="collection-img-wrap">
            <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=800&q=80" alt="オフィス コレクション" class="collection-img">
            <div class="collection-gradient"></div>
          </div>
          <div class="collection-info">
            <h3>オフィス</h3>
            <span class="collection-link">詳細を見る &rarr;</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Products -->
  <section class="products-section">
    <div class="container">
      <div class="section-header-flex">
        <div>
          <span class="eyebrow">ベストセラー</span>
          <h2 class="section-title">注目の製品</h2>
        </div>
        <a href="shop.php" class="view-all-link">
          <span>すべての製品を見る</span>
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card" data-id="prod-1" data-category="living" data-desc="手作業で仕上げられた欧州産ブナ材の堅牢なフレーム、羽毛ダウナークッション、高品質なベルギー製ブークレ張地。">
          <span class="badge-tag">ベストセラー</span>
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=700&q=80" alt="リュクス コンフォート ソファ">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">リビングルーム</span>
            <h3 class="product-name">リュクス コンフォート ソファ</h3>
            <div class="product-bottom-row">
              <div class="product-price">
                ¥89,900 <span class="old-price">¥109,900</span>
              </div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card" data-id="prod-2" data-category="living" data-desc="彫刻的なジャパニーズホワイトオークのフレームに、サドルステッチを施したトスカーナ産コニャックレザーと真鍮のディテール。">
          <span class="badge-tag">アイコン</span>
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&w=700&q=80" alt="オークウッド ラウンジチェア">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">アームチェア</span>
            <h3 class="product-name">オークウッド ラウンジチェア</h3>
            <div class="product-bottom-row">
              <div class="product-price">¥49,900</div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card" data-id="prod-3" data-category="living" data-desc="建築的なマットブラックのスチール台座にシームレスに収まる、水磨き仕上げのカララ大理石天板。">
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=700&q=80" alt="マーブルトップ コーヒーテーブル">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">テーブル</span>
            <h3 class="product-name">マーブルトップ コーヒーテーブル</h3>
            <div class="product-bottom-row">
              <div class="product-price">
                ¥34,900 <span class="old-price">¥42,000</span>
              </div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card" data-id="prod-4" data-category="dining" data-desc="アメリカンウォールナット無垢材のダイニングテーブルと、リネンクッションを備えた人間工学に基づく曲木オークチェア6脚のセット。">
          <span class="badge-tag">伝統工芸</span>
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1615066390971-03e4e1c36ddf?auto=format&fit=crop&w=700&q=80" alt="エレナ ダイニングセット">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">ダイニングセット</span>
            <h3 class="product-name">エレナ ダイニングセット (6人用)</h3>
            <div class="product-bottom-row">
              <div class="product-price">
                ¥128,900 <span class="old-price">¥145,000</span>
              </div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="why-choose-section">
    <div class="why-split-grid">
      <div class="why-content-col">
        <span class="eyebrow">選ばれる理由</span>
        <h2 class="section-title">あなたらしさを<br>映し出す家具</h2>
        <p class="lead-desc">
          KURA LIVINGの家具は、単なる道具ではありません。世代を超えて受け継がれる、洗練されたスタイルの象徴です。
        </p>

        <div class="why-pillars-grid">
          <div class="why-pillar">
            <div class="pillar-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="pillar-text">
              <h4>普遍的なデザイン</h4>
              <p>流行に左右されない洗練された造形美。</p>
            </div>
          </div>

          <div class="why-pillar">
            <div class="pillar-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="pillar-text">
              <h4>優れた耐久性</h4>
              <p>生涯にわたり堅牢さを保つ伝統のホゾ組み構造。</p>
            </div>
          </div>

          <div class="why-pillar">
            <div class="pillar-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="pillar-text">
              <h4>至高の座り心地</h4>
              <p>人間工学に基づいた高弾性フォームとグースダウン。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Luxury Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top-grid">
        <div class="footer-brand">
          <a href="index.php" class="brand-logo" style="margin-bottom: 0.5rem;">
            <span class="logo-title" style="color:#FAF8F5;">KURA</span>
            <span class="logo-sub">LIVING</span>
          </a>
          <p class="footer-desc">日本の美意識と現代の暮らしをつなぐ、上質で心地よい家具を提案しています。</p>
        </div>
        <div>
          <h4 class="footer-col-title">クイックリンク</h4>
          <ul class="footer-links">
            <li><a href="about.php">ブランドについて</a></li>
            <li><a href="shop.php">ショップカタログ</a></li>
            <li><a href="collections.php">コレクション</a></li>
            <li><a href="contact.php">コンシェルジュに相談</a></li>
          </ul>
        </div>
        <div>
          <h4 class="footer-col-title">カスタマーケア</h4>
          <ul class="footer-links">
            <li><a href="contact.php#faq">よくあるご質問</a></li>
            <li><a href="#">生涯保証</a></li>
            <li><a href="#">プライバシーポリシー</a></li>
          </ul>
        </div>
        <div>
          <h4 class="footer-col-title">旗艦スタジオ（東京）</h4>
          <ul class="contact-info-list">
            <li><span>+81 (0)3-4578-2196</span></li>
            <li><span>hello@kuraliving.jp</span></li>
            <li><span>〒150-0001 東京都渋谷区神宮前4-18-7</span></li>
          </ul>
        </div>
        <div>
          <h4 class="footer-col-title">ニュースレター</h4>
          <p style="font-size: 0.82rem; color: #8E887F; margin-bottom: 1rem;">季節の新作コレクションや内覧会へのご招待をお送りします。</p>
          <form class="newsletter-form" onsubmit="event.preventDefault(); alert('ご登録ありがとうございます。'); this.reset();">
            <div class="newsletter-input-wrap">
              <input type="email" placeholder="メールアドレスを入力" required>
              <button type="submit" class="newsletter-submit" aria-label="登録">&rarr;</button>
            </div>
          </form>
        </div>
      </div>

      <div class="footer-bottom">
        <div>&copy; 2026 Kura Living Furniture. All Rights Reserved.</div>
        <div class="payment-badges">
          <span class="pay-badge">VISA</span>
          <span class="pay-badge">MASTERCARD</span>
          <span class="pay-badge">AMEX</span>
          <span class="pay-badge">PAYPAL</span>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>