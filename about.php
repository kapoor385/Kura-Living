<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>伝統とクラフツマンシップ — KURA LIVINGについて</title>
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
        <a href="collections.php" class="nav-link">コレクション</a>
        <a href="about.php" class="nav-link active">ブランドについて</a>
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

  <!-- About Hero -->
  <section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1595428774223-ef52624120d2?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="container page-hero-content">
      <span class="eyebrow">私たちの伝統</span>
      <h1 class="page-hero-title">「静かなるラグジュアリー」を紡ぐ</h1>
      <p class="page-hero-desc">真のラグジュアリーとは主張しすぎるものではなく、精密な木工接合やオーガニック素材、歳月を重ねるほどに味わいを増すデザインの中に静かに宿ると私たちは信じています。</p>
      <div class="breadcrumb-nav">
        <a href="index.php">ホーム</a>
        <span>/</span>
        <span class="active">ブランドについて</span>
      </div>
    </div>
  </section>

  <!-- Brand Story Section -->
  <section class="about-story-section">
    <div class="container">
      <div class="story-grid">
        <div class="story-media">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80" alt="Kura Living Workshop" class="story-main-img">
          <div class="story-badge-card">
            <div class="story-badge-num">28+</div>
            <div class="story-badge-label">年以上の伝統木工技術</div>
          </div>
        </div>

        <div class="story-text">
          <span class="eyebrow">KURA の美学</span>
          <h2 class="section-title">暮らしのためのデザイン、<br>永遠のための品質</h2>
          <p style="font-size: 0.98rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
            1998年に職人のアトリエとして設立されたArtévaは、「住まいとは心身の安らぎを与える究極の聖域である」という明確な信念のもと誕生しました。曲線を描くフレーム、心地よい織地、滑らかな木工接合のすべてに意味が込められています。
          </p>
          <p style="font-size: 0.98rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 2rem;">
            私たちは数百年の伝統を誇るキャビネット製造の木工接合技術と、現代の人間工学に基づく設計技術を融合させています。流行り廃りの激しいデザインを排除し、世代を超えて受け継がれるシルエットを追求しています。
          </p>

          <div style="display: flex; gap: 3rem; border-top: 1px solid var(--border-light); padding-top: 2rem;">
            <div>
              <div style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--text-main);">100%</div>
              <div style="font-size: 0.76rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-light); margin-top: 0.2rem;">FSC認証ハードウッド</div>
            </div>
            <div>
              <div style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--text-main);">4,800+</div>
              <div style="font-size: 0.76rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-light); margin-top: 0.2rem;">オーダーメイド納品実績</div>
            </div>
            <div>
              <div style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--text-main);">14</div>
              <div style="font-size: 0.76rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-light); margin-top: 0.2rem;">国際デザイン賞受賞</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Material Integrity Section -->
  <section class="materials-section">
    <div class="container">
      <div style="text-align: center; max-width: 650px; margin: 0 auto;">
        <span class="eyebrow" style="color: var(--accent-gold);">素材の誠実さ</span>
        <h2 class="section-title" style="color: #FAF8F5;">私たちの素材マニフェスト</h2>
        <p style="color: #A8A095; font-size: 0.95rem;">経年変化、手触り、日光によってより詩的な風合いを増す天然素材のみを使用しています。</p>
      </div>

      <div class="materials-grid">
        <div class="material-card">
          <div class="material-number">01</div>
          <h3 class="material-title">じっくり育まれた欧州産オーク＆ウォールナット</h3>
          <p class="material-desc">ババリア地方およびアメリカの厳格に管理された森林からサステナブルに収穫。4ヶ月間人工乾燥させて含水率を正確に8%に保ち、生涯にわたる狂いや歪みを防ぎます。</p>
        </div>

        <div class="material-card">
          <div class="material-number">02</div>
          <h3 class="material-title">トスカーナ産ベジタブルタンニンレザー</h3>
          <p class="material-desc">サンタ・クローチェ・スッラルノの伝統的な製革所から直接調達。合成クロムを一切使用せず、有機チェスナットの樹皮抽出物とミモザオイルのみで鞣されています。</p>
        </div>

        <div class="material-card">
          <div class="material-number">03</div>
          <h3 class="material-title">水磨き仕上げのアプアンアルプス大理石</h3>
          <p class="material-desc">イタリアの採石場から手作業で厳選されたカララ、アラベスカート、カラカッタビオラ。天然大理石の質感と結晶を活かしたサテンマット仕上げ。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sustainability Pledge -->
  <section style="padding: 6rem 0;" id="sustainability">
    <div class="container">
      <div style="background-color: var(--bg-secondary); border-radius: var(--radius-lg); padding: 4rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3.5rem; align-items: center; border: 1px solid var(--border-light);">
        <div>
          <span class="eyebrow">地球環境への配慮</span>
          <h2 class="section-title">持続可能な森林管理への取り組み</h2>
          <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.75; margin-bottom: 1.5rem;">
            Artévaのコレクション製品に使用される木材1本につき、スカンジナビアおよび中央ヨーロッパの再植林組合を通じて、5本の自生苗木の植樹と育成をサポートしています。
          </p>
          <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.75;">
            プラスチック梱包ゼロ方針：梱包資材の100%に再生綿および漂白されていない生分解性ダンボールを使用しています。
          </p>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80" alt="サステナブルな森林管理" style="border-radius: var(--radius-md); width: 100%; box-shadow: var(--shadow-card);">
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