<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ショップカタログ — Kura Living — 日本の家具</title>
  <!-- Fonts: Lufga, Intro & Arial -->
  <link rel="preconnect" href="https://fonts.cdnfonts.com">
  <link href="https://fonts.cdnfonts.com/css/lufga" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/intro" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <div class="top-bar-promo">
        日本全国無料のホワイトグローブ配送 &bull; 職人の技と現代の暮らしをつなぐ家具
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="site-header" id="siteHeader">
    <div class="container header-inner">
      <a href="index.php" class="brand-logo" aria-label="Kura Living Home">
        <span class="logo-title">KURA</span>
        <span class="logo-sub">LIVING</span>
      </a>

      <!-- Navigation -->
      <nav class="nav-menu" id="navMenu">
        <a href="index.php" class="nav-link">ホーム</a>
        <a href="shop.php" class="nav-link active">ショップ</a>
        <a href="collections.php" class="nav-link">コレクション</a>
        <a href="about.php" class="nav-link">ブランドについて</a>
        <a href="contact.php" class="nav-link">お問い合わせ</a>
      </nav>

      <div class="header-actions">
        <button class="action-btn" aria-label="カタログを検索" onclick="document.querySelector('.shop-sort-select').focus();">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </button>

        <button class="action-btn wishlist-trigger-btn" aria-label="お気に入り">
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
      <p style="font-size: 0.75rem; color: #8E887F; margin-bottom: 1rem;">消費税および無料の開梱設置サービスは会計時に計算されます。</p>
      <button class="checkout-btn">チェックアウトへ進む</button>
    </div>
  </aside>

  <!-- Quick View Modal -->
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

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="container page-hero-content">
      <span class="eyebrow">厳選された逸品</span>
      <h1 class="page-hero-title">マスターカタログ</h1>
      <p class="page-hero-desc">持続可能なヨーロッパ産木材、本革フルグレインレザー、磨き上げられた天然大理石から作られた、世代を超えて受け継がれる家具をご覧ください。</p>
      <div class="breadcrumb-nav">
        <a href="index.php">ホーム</a>
        <span>/</span>
        <span class="active">ショップ</span>
      </div>
    </div>
  </section>

  <!-- Shop Catalog Section -->
  <section class="shop-section">
    <div class="container">
      
      <!-- Filter Bar -->
      <div class="shop-filter-bar">
        <div class="category-filter-list">
          <button class="filter-btn active" data-filter="all">すべての家具</button>
          <button class="filter-btn" data-filter="living">リビングルーム</button>
          <button class="filter-btn" data-filter="bedroom">ベッドルーム</button>
          <button class="filter-btn" data-filter="dining">ダイニングルーム</button>
          <button class="filter-btn" data-filter="office">エグゼクティブオフィス</button>
          <button class="filter-btn" data-filter="lighting">照明コレクション</button>
        </div>

        <div class="shop-sort-controls">
          <span class="results-count">全8点のラグジュアリー家具</span>
          <select class="shop-sort-select" aria-label="商品の並び替え">
            <option value="default">並び替え: おすすめ順</option>
            <option value="price-asc">価格: 安い順</option>
            <option value="price-desc">価格: 高い順</option>
            <option value="name">五十音順</option>
          </select>
        </div>
      </div>

      <!-- Products Grid -->
      <div class="products-grid shop-grid">
        <!-- 1: Luxe Comfort Sofa -->
        <div class="product-card" data-id="prod-1" data-category="living" data-price="899" data-desc="手作業で仕上げられた欧州産ブナ材の堅牢なフレーム、羽毛ダウナークッション、高品質なベルギー製ブークレ張地。">
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
              <div class="product-price">¥89,900 <span class="old-price">¥109,900</span></div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- 2: Oakwood Lounge Chair -->
        <div class="product-card" data-id="prod-2" data-category="living" data-price="499" data-desc="彫刻的なジャパニーズホワイトオークのフレームに、サドルステッチを施したトスカーナ産コニャックレザーと真鍮のディテール。">
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

        <!-- 3: Marble Top Coffee Table -->
        <div class="product-card" data-id="prod-3" data-category="living" data-price="349" data-desc="建築的なマットブラックのスチール台座にシームレスに収まる、水磨き仕上げのカララ大理石天板。">
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
              <div class="product-price">¥34,900 <span class="old-price">¥42,000</span></div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- 4: Elena Dining Set (6 Seater) -->
        <div class="product-card" data-id="prod-4" data-category="dining" data-price="1289" data-desc="アメリカンウォールナット無垢材のダイニングテーブルと、リネンクッションを備えた人間工学に基づく曲木オークチェア6脚のセット。">
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
              <div class="product-price">¥128,900 <span class="old-price">¥145,000</span></div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- 5: Aurelia Minimalist King Bed -->
        <div class="product-card" data-id="prod-5" data-category="bedroom" data-price="1450" data-desc="一体型のフローティングナイトテーブルと織質感あるリネンヘッドボードを備えた、ロープロファイルのフローティングベッドフレーム。">
          <span class="badge-tag">新作</span>
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=700&q=80" alt="オーレリア キングベッド">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">ベッド</span>
            <h3 class="product-name">オーレリア ミニマリスト キングベッド</h3>
            <div class="product-bottom-row">
              <div class="product-price">¥145,000 <span class="old-price">¥165,000</span></div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- 6: Artisan Walnut Credenza -->
        <div class="product-card" data-id="prod-6" data-category="living" data-price="780" data-desc="サステナブルに収穫されたウォールナットで作られた蛇腹式スライドドアと、ソフトクロージング機能付きブロンズ金具。">
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?auto=format&fit=crop&w=700&q=80" alt="アーティザン ウォールナット サイドボード">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">収納</span>
            <h3 class="product-name">アーティザン ウォールナット サイドボード</h3>
            <div class="product-bottom-row">
              <div class="product-price">¥78,000</div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- 7: Modena Executive Desk -->
        <div class="product-card" data-id="prod-7" data-category="office" data-price="920" data-desc="隠し配線収納、ブラッシュドブラスのアクセント、フルグレインレザーのインレイを備えた建築的エグゼクティブデスク。">
          <span class="badge-tag">注目の逸品</span>
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?auto=format&fit=crop&w=700&q=80" alt="モデナ エグゼクティブ デスク">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">デスク</span>
            <h3 class="product-name">モデナ エグゼクティブ デスク</h3>
            <div class="product-bottom-row">
              <div class="product-price">¥92,000 <span class="old-price">¥110,000</span></div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- 8: Nórdica Alabaster Pendant Lamp -->
        <div class="product-card" data-id="prod-8" data-category="lighting" data-price="290" data-desc="磨き上げられたブロンズカバーと、柔らかく温かみのある環境光を拡散する半透明の彫刻されたスペイン産アラバスター球体。">
          <span class="badge-tag">ビスポーク</span>
          <button class="wishlist-btn" aria-label="お気に入りに保存">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
          <div class="product-thumb">
            <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=700&q=80" alt="ノルディカ アラバスター ペンダントランプ">
            <button class="quick-view-btn">クイックビュー</button>
          </div>
          <div class="product-details">
            <span class="product-category">照明</span>
            <h3 class="product-name">ノルディカ ペンダントランプ</h3>
            <div class="product-bottom-row">
              <div class="product-price">¥29,000</div>
              <button class="cart-add-btn" aria-label="カートに追加">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              </button>
            </div>
          </div>
        </div>

      </div>

      <!-- Guarantee Banner -->
      <div style="margin-top: 5rem; background-color: var(--bg-secondary); border-radius: var(--radius-md); padding: 3rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem; border: 1px solid var(--border-light);">
        <div style="text-align: center;">
          <h4 style="font-family: var(--font-serif); font-size: 1.15rem; margin-bottom: 0.4rem;">サンプル無料配送</h4>
          <p style="font-size: 0.85rem; color: var(--text-muted);">手触りや質感を確認できる生地・木部仕上げのサンプルボックスを、48時間以内にご自宅へお届けします。</p>
        </div>
        <div style="text-align: center;">
          <h4 style="font-family: var(--font-serif); font-size: 1.15rem; margin-bottom: 0.4rem;">専門スタッフによる設置</h4>
          <p style="font-size: 0.85rem; color: var(--text-muted);">ご指定のお部屋への搬入、開梱、完全組み立て、梱包資材のエコ回収まで無料で行います。</p>
        </div>
        <div style="text-align: center;">
          <h4 style="font-family: var(--font-serif); font-size: 1.15rem; margin-bottom: 0.4rem;">10年間フレーム保証</h4>
          <p style="font-size: 0.85rem; color: var(--text-muted);">人工乾燥された高耐久の硬木フレームは、数十年間にわたり堅牢さを保つよう設計保証されています。</p>
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
          <p class="footer-desc">
            日本の美意識と現代の暮らしをつなぐ、上質で心地よい家具を提案しています。
          </p>
        </div>

        <div>
          <h4 class="footer-col-title">クイックリンク</h4>
          <ul class="footer-links">
            <li><a href="about.php">ブランドについて</a></li>
            <li><a href="shop.php">ショップカタログ</a></li>
            <li><a href="collections.php">コレクション</a></li>
            <li><a href="contact.php">ビスポークアトリエ</a></li>
            <li><a href="contact.php">コンシェルジュに相談</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">カスタマーケア</h4>
          <ul class="footer-links">
            <li><a href="contact.php#faq">よくあるご質問</a></li>
            <li><a href="about.php#sustainability">配送・設置サービス</a></li>
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
          <p style="font-size: 0.82rem; color: #8E887F; margin-bottom: 1rem; line-height: 1.5;">季節の新作コレクションや内覧会へのご招待をお送りします。</p>
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

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>