<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ＆ビスポークアトリエ — プライベートご相談 | KURA LIVING</title>
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
        <a href="about.php" class="nav-link">ブランドについて</a>
        <a href="contact.php" class="nav-link active">お問い合わせ</a>
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

  <!-- Contact Hero -->
  <section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1615066390971-03e4e1c36ddf?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="container page-hero-content">
      <span class="eyebrow">コンシェルジュ直通</span>
      <h1 class="page-hero-title">プライベートご相談＆オーダーメイドのご依頼</h1>
      <p class="page-hero-desc">特注サイズのご相談、カスタム生地の組み合わせ、またはショールームのプライベート見学など、デザインディレクターがお手伝いいたします。</p>
      <div class="breadcrumb-nav">
        <a href="index.php">ホーム</a>
        <span>/</span>
        <span class="active">お問い合わせ</span>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="contact-split-layout">
        
        <!-- Left Column: Global Showrooms & FAQ -->
        <div>
          <span class="eyebrow">グローバル拠点</span>
          <h2 class="section-title" style="margin-bottom: 2rem;">フラッグシップ ブティック</h2>

          <div class="boutique-card">
            <h3 class="boutique-city">東京 &bull; 南青山 フラッグシップ</h3>
            <div class="boutique-info">
              <p>〒150-0001 東京都渋谷区神宮前4-18-7</p>
              <p>月 &ndash; 土: 10:00 &ndash; 19:00 | 日: 完全予約制</p>
              <p style="color: var(--accent-gold-dark); font-weight: 600; margin-top: 0.4rem;">+81 (0)3-4578-2196</p>
            </div>
          </div>

          <div class="boutique-card">
            <h3 class="boutique-city">ミラノ &bull; ブレラ デザイン地区</h3>
            <div class="boutique-info">
              <p>Via Solferino 18, 20121 Milano MI, Italy</p>
              <p>火 &ndash; 土: 10:30 &ndash; 19:30</p>
              <p style="color: var(--accent-gold-dark); font-weight: 600; margin-top: 0.4rem;">+39 02 8901 3450</p>
            </div>
          </div>

          <div class="boutique-card">
            <h3 class="boutique-city">ロンドン &bull; メイフェア アトリエ</h3>
            <div class="boutique-info">
              <p>44 Mount Street, Mayfair, London W1K 2RX</p>
              <p>月 &ndash; 土: 10:00 &ndash; 18:30</p>
              <p style="color: var(--accent-gold-dark); font-weight: 600; margin-top: 0.4rem;">+44 20 7946 0912</p>
            </div>
          </div>

          <!-- FAQ Section -->
          <div style="margin-top: 3.5rem;" id="faq">
            <span class="eyebrow">よくあるご質問</span>
            <h3 style="font-family: var(--font-serif); font-size: 1.4rem; margin-bottom: 1.25rem;">FAQ</h3>
            
            <div style="border-top: 1px solid var(--border-light); padding: 1.2rem 0;">
              <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 0.3rem;">カスタム家具の通常の納期はどのくらいですか？</h4>
              <p style="font-size: 0.84rem; color: var(--text-muted); line-height: 1.6;">オーダーメイドの特注家具は制作に6〜10週間ほどいただき、その後専任スタッフによる無料の開梱設置サービス（ホワイトグローブ配送）にてお届けいたします。</p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding: 1.2rem 0;">
              <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 0.3rem;">特注サイズでの注文は可能ですか？</h4>
              <p style="font-size: 0.84rem; color: var(--text-muted); line-height: 1.6;">はい。ダイニングテーブル、サイドボード、ソファの80％以上はお部屋の寸法に合わせてセンチ単位でサイズ調整が可能です。</p>
            </div>
          </div>
        </div>

        <!-- Right Column: Bespoke Form -->
        <div>
          <div class="bespoke-form-wrap">
            <span class="eyebrow">ビスポークのご相談</span>
            <h2 class="section-title" style="font-size: 2.1rem; margin-bottom: 0.8rem;">特注・オーダーメイドのご依頼</h2>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 2.2rem; line-height: 1.6;">
              プロジェクトの詳細を下記にご記入ください。KURA LIVING専任の家具職人およびインテリア建築家がテーラーメイドのご提案を作成いたします。
            </p>

            <form id="bespokeContactForm">
              <div class="form-grid-2">
                <div class="form-group">
                  <label for="fullName">お名前（フルネーム） *</label>
                  <input type="text" id="fullName" name="fullName" class="form-control" placeholder="例: 山田 太郎" required>
                </div>

                <div class="form-group">
                  <label for="email">メールアドレス *</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="yamada@domain.com" required>
                </div>
              </div>

              <div class="form-grid-2">
                <div class="form-group">
                  <label for="phone">電話番号</label>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="+81 90-0000-0000">
                </div>

                <div class="form-group">
                  <label for="interest">ご関心のあるカテゴリ *</label>
                  <select id="interest" name="interest" class="form-control" required>
                    <option value="Living Room Furniture">リビングルーム シリーズ</option>
                    <option value="Dining Room Commission">ダイニングテーブル＆チェア</option>
                    <option value="Master Bedroom Sanctuary">マスターベッドルーム</option>
                    <option value="Executive Office">エグゼクティブ アトリエ / オフィス</option>
                    <option value="Full Residence Furnishing">住宅全体のトータルコーディネート</option>
                    <option value="Private Showroom Appointment">ショールーム見学のご予約</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="timeline">ご希望の納品時期</label>
                <select id="timeline" name="timeline" class="form-control">
                  <option value="Immediate (Next 4 weeks)">お急ぎ（4週間以内）</option>
                  <option value="1 to 3 Months">1〜3ヶ月以内</option>
                  <option value="3 to 6 Months">3〜6ヶ月以内</option>
                  <option value="Architectural Planning Phase">建築・設計段階</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message">プロジェクト概要・ご要望サイズ・素材仕様など *</label>
                <textarea id="message" name="message" class="form-control" placeholder="お部屋の広さ、ご希望の寸法、お好みの木材やファブリックについてご記入ください..." required></textarea>
              </div>

              <button type="submit" class="btn-luxury" style="width: 100%; justify-content: center; padding: 1.15rem;">
                <span>コンシェルジュに相談する</span>
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </button>
            </form>
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
            <li><a href="#faq">よくあるご質問</a></li>
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