<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>{{ $collection['name'] }} - ذوق</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: #f5efe8;
            color: #2b1b14;
            overflow-x: hidden;
        }

        html {
            scroll-behavior: smooth;
        }

        /* ============================================
           NAVBAR - نفس تصميم الرئيسية
        ============================================ */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 22px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            background: rgba(18, 13, 10, 0.88);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .logo {
            color: white;
            font-size: 26px;
            font-weight: 700;
            font-family: 'Reem Kufi', sans-serif;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s;
        }

        .logo:hover { color: #c49a7c; }

        .nav-back {
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-back:hover {
            color: #c49a7c;
        }

        .nav-back .arrow {
            font-size: 18px;
        }

        /* ============================================
           BANNER - صورة كبيرة مع عنوان المجموعة
        ============================================ */
        .collection-banner {
            position: relative;
            height: 55vh;
            min-height: 380px;
            overflow: hidden;
            margin-top: 0;
        }

        .collection-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.55);
        }

        .banner-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to top,
                rgba(18, 13, 10, 0.75) 0%,
                rgba(18, 13, 10, 0.2) 60%,
                transparent 100%
            );
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-bottom: 60px;
            text-align: center;
        }

        .banner-label {
            font-size: 12px;
            letter-spacing: 4px;
            color: #c49a7c;
            margin-bottom: 14px;
            text-transform: uppercase;
        }

        .banner-title {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 48px;
            color: #fff;
            line-height: 1.2;
        }

        .banner-desc {
            color: rgba(255,255,255,0.7);
            font-size: 15px;
            margin-top: 12px;
        }

        /* ============================================
           PRODUCTS GRID - شبكة المنتجات
        ============================================ */
        .products-section {
            padding: 80px 60px 100px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .products-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .products-header h2 {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 26px;
            color: #6b3f2a;
            margin-bottom: 8px;
        }

        .products-header p {
            color: #9a7060;
            font-size: 14px;
        }

        /* خط فاصل */
        .products-header .divider {
            width: 50px;
            height: 2px;
            background: linear-gradient(to left, transparent, #c49a7c, transparent);
            margin: 18px auto 0;
        }

        /* شبكة المنتجات */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
        }

        /* كرت المنتج */
        .product-card {
            border-radius: 20px;
            overflow: hidden;
            background: white;
            border: 1px solid rgba(0,0,0,0.06);
            box-shadow: 0 8px 28px rgba(107,63,42,0.10);
            transition: transform 0.4s cubic-bezier(0.23,1,0.32,1),
                        box-shadow 0.4s ease;
            cursor: pointer;
        }

        @keyframes productPulse {
            0%   { transform: translateY(-3px) scale(1);    box-shadow: 0 8px 28px rgba(107,63,42,0.10); }
            50%  { transform: translateY(-8px) scale(1.02); box-shadow: 0 22px 55px rgba(196,154,124,0.35); }
            100% { transform: translateY(-3px) scale(1);    box-shadow: 0 8px 28px rgba(107,63,42,0.10); }
        }

        .product-card:hover {
            animation: productPulse 1.3s infinite ease-in-out;
        }

        .product-card .product-image {
            position: relative;
            height: 380px;
            overflow: hidden;
        }

        .product-card .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.06);
        }

        .product-card .product-info {
            padding: 20px 22px 24px;
            text-align: right;
        }

        .product-card .product-name {
            font-size: 16px;
            font-weight: 600;
            color: #2b1b14;
            margin-bottom: 7px;
        }

        .product-card .product-price {
            font-size: 15px;
            color: #6b3f2a;
            font-weight: 700;
            font-family: 'Cairo', sans-serif;
        }

        /* ============================================
           RESPONSIVE
        ============================================ */
        @media (max-width: 1100px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            nav {
                padding: 18px 20px;
            }

            .banner-title {
                font-size: 32px;
            }

            .collection-banner {
                height: 45vh;
            }

            .products-section {
                padding: 50px 20px 70px;
            }

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 18px;
            }

            .product-card .product-image {
                height: 280px;
            }
        }

        @media (max-width: 480px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .product-card .product-image {
                height: 340px;
            }

            .banner-title {
                font-size: 26px;
            }
        }

        @media (min-width: 1400px) {
            .products-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            nav {
                padding: 24px 90px;
            }
        }

    </style>
</head>

<body>

<!-- NAV -->
<nav>
    <a href="/" class="logo">ذوق</a>
    <a href="/" class="nav-back">
        <span class="arrow">→</span>
        العودة للرئيسية
    </a>
</nav>

<!-- BANNER -->
<div class="collection-banner">
    <img src="{{ $collection['banner'] }}" alt="{{ $collection['name'] }}">
    <div class="banner-overlay">
        <span class="banner-label">مجموعة ذوق</span>
        <h1 class="banner-title">{{ $collection['name'] }}</h1>
        <p class="banner-desc">{{ $collection['description'] }}</p>
    </div>
</div>

<!-- PRODUCTS -->
<div class="products-section">

    <div class="products-header">
        <h2>قطع المجموعة</h2>
        <p>{{ count($products) }} قطعة مختارة بعناية</p>
        <div class="divider"></div>
    </div>

    <div class="products-grid">

        @foreach($products as $product)
        <div class="product-card">
            <div class="product-image">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
            </div>
            <div class="product-info">
                <div class="product-name">{{ $product['name'] }}</div>
                <div class="product-price">{{ $product['price'] }} ريال</div>
            </div>
        </div>
        @endforeach

    </div>

</div>

</body>
</html>