<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>お会計 | Sakura Table</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><nav class="navbar navbar-expand-lg sticky-top"><div class="container">
<a class="navbar-brand d-flex align-items-center gap-2" href="index.php"><span class="brand-mark">桜</span><span class="brand-name">Sakura <b>Table</b></span></a>
<a href="index.php" class="btn btn-outline-warning rounded-pill px-4">メニューに戻る</a>
</div></nav></header>
<main class="checkout-page"><div class="container">
<div class="text-center checkout-heading"><span class="eyebrow dark">もうすぐ完了です</span><h1>ご注文を<em>確定</em>してください。</h1><p>ご注文を受けてから丁寧にご用意します。</p></div>
<div class="row g-5">
<div class="col-lg-7 order-lg-1"><div class="checkout-card"><h3>お客様情報</h3>
<form class="needs-validation" novalidate>
<div class="row g-3"><div class="col-sm-6"><label class="form-label">名</label><input class="form-control" required></div><div class="col-sm-6"><label class="form-label">姓</label><input class="form-control" required></div>
<div class="col-12"><label class="form-label">メールアドレス</label><input type="email" class="form-control" placeholder="you@example.com" required></div>
<div class="col-12"><label class="form-label">電話番号</label><input type="tel" class="form-control" placeholder="+81 ..." required></div>
<div class="col-12"><label class="form-label">受け取りに関するメモ</label><input class="form-control" placeholder="受け取り時間・ご要望など"></div></div>
<hr><h3>お支払い</h3><div class="form-check mb-4"><input class="form-check-input" type="radio" checked><label class="form-check-label">店頭・受け取り時にお支払い</label></div>
<button class="btn btn-primary btn-lg w-100" type="submit">注文を確定する <i class="bi bi-arrow-right"></i></button></form></div></div>
<div class="col-lg-5 order-lg-2"><div class="checkout-card summary"><h3>ご注文内容</h3><ul class="cart-items list-group mb-3"></ul><div class="summary-total"><span>合計</span><strong class="total-price">¥0</strong></div><div class="address-note"><i class="bi bi-geo-alt"></i><div><b>Sakura Table</b><span>埼玉県川越市2-14-8 〒350-1123<br>+81 49-278-4612</span></div></div></div></div>
</div></div></main>
<footer><div class="container"><div class="footer-bottom"><span>© 2026 Sakura Table. All rights reserved.</span><span>埼玉・日本 · 心を込めて</span></div></div></footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(function(){
 let cart=JSON.parse(localStorage.getItem('cart')||'[]'), total=parseFloat(localStorage.getItem('totalCost')||'0');
 function render(){$('.cart-items').empty(); if(!cart.length){$('.cart-items').php('<li class="list-group-item text-muted">カートは空です。</li>');} cart.forEach(i=>$('.cart-items').append('<li class="list-group-item d-flex align-items-center gap-3"><img src="'+i.image+'" width="55" height="55" style="object-fit:cover;border-radius:8px"><span class="flex-grow-1">'+i.title+'</span><b>¥'+Number(i.price).toFixed(0)+'</b></li>'));$('.total-price').text('¥'+total.toFixed(0));}
 render();
 $('.needs-validation').on('submit',function(e){e.preventDefault();if(!this.checkValidity()){this.classList.add('was-validated');return;}$(this).find('button').php('注文を受け付けました ✓').prop('disabled',true);localStorage.removeItem('cart');localStorage.removeItem('totalCost');});
});
</script>
</body></html>