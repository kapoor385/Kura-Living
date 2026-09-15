<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>厳選コレクション＆ルックブック — Kura Living — 日本の上質家具</title>
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
        <a href="shop.php" class="nav-link">ショップ</a>
        <a href="collections.php" class="nav-link active">コレクション</a>
        <a href="about.php" class="nav-link">ブランドについて</a>
        <a href="contact.php" class="nav-link">お問い合わせ</a>
      </nav>

      <div class="header-actions">
        <button class="action-btn" aria-label="検索" onclick="window.location.href='shop.php'">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </button>
        <button class="action-btn wishlist-trigger-btn" aria-label="お気に入り" onclick="window.location.href='shop.php'">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          <span class="badge-count wishlist-count-badge" style="display:none;">0</span>
        </button>
        <button class="action-btn cart-trigger-btn" aria-label="ショッピングバッグ">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
          <span class="badge-count cart-count-badge">0</span>
        </button>
        <button class="action-btn mobile-toggle" aria-label="メニュー切り替え">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
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
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
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

  <!-- Lookbook Page Hero -->
  <section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="container page-hero-content">
      <span class="eyebrow">空間エディトリアル</span>
      <h1 class="page-hero-title">厳選コレクション＆ルックブック</h1>
      <p class="page-hero-desc">日本の美意識を取り入れた洗練された空間の世界をご体感ください。スポットライトにカーソルを置くと各家具の詳細をご覧いただけます。</p>
      <div class="breadcrumb-nav">
        <a href="index.php">ホーム</a>
        <span>/</span>
        <span class="active">コレクション</span>
      </div>
    </div>
  </section>

  <!-- Collections Showcase -->
  <section style="padding: 5rem 0 7rem;">
    <div class="container">

      <!-- Lookbook 1: Living Room -->
      <div class="lookbook-item">
        <div class="lookbook-scene">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1400&q=85" alt="モダンサンクチュアリ リビングルーム">
          
          <div class="scene-hotspot" style="top: 55%; left: 45%;" title="リュクス コンフォート ソファ">
            <svg width="12" height="12" fill="#141312" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
            <div class="hotspot-card">
              <h5>リュクス コンフォート ソファ</h5>
              <span>¥89,900</span>
              <p style="font-size: 0.72rem; color: #bbb; margin-top: 0.3rem;">羽毛ダウンの深い座り心地。</p>
            </div>
          </div>

          <div class="scene-hotspot" style="top: 68%; left: 32%;" title="マーブルトップ コーヒーテーブル">
            <svg width="12" height="12" fill="#141312" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
            <div class="hotspot-card">
              <h5>マーブル コーヒーテーブル</h5>
              <span>¥34,900</span>
              <p style="font-size: 0.72rem; color: #bbb; margin-top: 0.3rem;">磨き上げられたイタリア産カララ大理石。</p>
            </div>
          </div>

          <div class="scene-hotspot" style="top: 25%; left: 78%;" title="アーティザン オーク ブックケース">
            <svg width="12" height="12" fill="#141312" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
            <div class="hotspot-card">
              <h5>ビスポーク オークシェルフ</h5>
              <span>¥142,000</span>
              <p style="font-size: 0.72rem; color: #bbb; margin-top: 0.3rem;">間接照明システム内蔵。</p>
            </div>
          </div>
        </div>

        <div class="lookbook-details">
          <div>
            <span class="eyebrow">コレクション NO. 01</span>
            <h2 class="lookbook-title">温もりあるミニマリストの聖域</h2>
            <p class="lookbook-desc">上質なリネン、マットなウォールナット木工、オーガニックな照明が織りなす静寂の対話。日々の喧騒から離れ、五感を解放する空間です。</p>
          </div>
          <div>
            <a href="shop.php" class="btn-luxury">
              <span>部屋の家具を見る</span>
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Lookbook 2: Dining Room -->
      <div class="lookbook-item">
        <div class="lookbook-scene">
          <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=1400&q=85" alt="アーティザン ダイニングルーム Suite">
          
          <div class="scene-hotspot" style="top: 60%; left: 52%;" title="エレナ ダイニングテーブル">
            <svg width="12" height="12" fill="#141312" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
            <div class="hotspot-card">
              <h5>エレナ ウォールナット テーブル</h5>
              <span>¥128,900</span>
              <p style="font-size: 0.72rem; color: #bbb; margin-top: 0.3rem;">最大8人までゆったり座れるサイズ。</p>
            </div>
          </div>

          <div class="scene-hotspot" style="top: 25%; left: 48%;" title="ブロンズ ペンダント シャンデリア">
            <svg width="12" height="12" fill="#141312" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
            <div class="hotspot-card">
              <h5>ブロンズペンダント デュオ</h5>
              <span>¥48,000</span>
              <p style="font-size: 0.72rem; color: #bbb; margin-top: 0.3rem;">手作業で叩き出した真鍮製ランプ。</p>
            </div>
          </div>
        </div>

        <div class="lookbook-details">
          <div>
            <span class="eyebrow">コレクション NO. 02</span>
            <h2 class="lookbook-title">豊かな集いのダイニング アトリエ</h2>
            <p class="lookbook-desc">色あせないおもてなしのために設計された空間。重厚な木造テーブルと美しくカーブしたチェアが、心温まる語らいの時間を演出します。</p>
          </div>
          <div>
            <a href="shop.php" class="btn-luxury">
              <span>部屋の家具を見る</span>
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Lookbook 3: Bedroom -->
      <div class="lookbook-item">
        <div class="lookbook-scene">
          <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=1400&q=85" alt="マスターベッドルーム サンクチュアリ">
          
          <div class="scene-hotspot" style="top: 65%; left: 45%;" title="オーレリア キングベッド">
            <svg width="12" height="12" fill="#141312" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
            <div class="hotspot-card">
              <h5>オーレリア ミニマリスト キングベッド</h5>
              <span>¥145,000</span>
              <p style="font-size: 0.72rem; color: #bbb; margin-top: 0.3rem;">スノコ構造＆織布ヘッドボード。</p>
            </div>
          </div>
        </div>

        <div class="lookbook-details">
          <div>
            <span class="eyebrow">コレクション NO. 03</span>
            <h2 class="lookbook-title">静寂のマスターベッドルーム</h2>
            <p class="lookbook-desc">肌触りの良いファブリック、低重心の水平ライン、心身を深く癒やす柔らかい間接照明に包まれた空間。</p>
          </div>
          <div>
            <a href="shop.php" class="btn-luxury">
              <span>部屋の家具を見る</span>
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
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