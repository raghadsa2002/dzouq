<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>ذوق - عبايات فخمة</title>

    <style>

        /* ============================================
           BASE - محفوظ من الأصل بالكامل
        ============================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: #120d0a;
            color: white;
            overflow-x: hidden;
            overflow-y: auto;
        }

        html {
            scroll-behavior: smooth;
        }

        /* ============================================
           NAVBAR - محفوظ + إضافة روابط جديدة
        ============================================ */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 25px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            /* أضفت backdrop خفيف للناف بار عند التمرير */
            transition: background 0.4s ease;
        }

        nav.scrolled {
            background: rgba(18, 13, 10, 0.85);
            backdrop-filter: blur(12px);
            padding: 15px 60px;
        }

        .logo {
            color: white;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 3px;
            font-family: 'Reem Kufi', sans-serif;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .logo:hover {
            color: #c49a7c;
        }

        /* القائمة - محفوظة + أضفت روابط anchor */
        ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        li {
            cursor: pointer;
            transition: 0.3s;
            font-size: 15px;
        }

        li a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        li a:hover,
        li:hover {
            color: #c49a7c;
        }

        li a:hover {
            color: #c49a7c;
        }

        /* زر الهامبرغر للجوال - جديد */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            z-index: 200;
        }

        .hamburger span {
            width: 25px;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: 0.3s;
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100vh;
            background: rgba(18, 13, 10, 0.97);
            backdrop-filter: blur(20px);
            z-index: 99;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }

        .mobile-menu.open {
            display: flex;
        }

        .mobile-menu a {
            color: white;
            text-decoration: none;
            font-size: 22px;
            font-family: 'Cairo', sans-serif;
            transition: 0.3s;
        }

        .mobile-menu a:hover {
            color: #c49a7c;
        }

        .close-menu {
            position: absolute;
            top: 25px;
            left: 25px;
            font-size: 28px;
            cursor: pointer;
            color: white;
            background: none;
            border: none;
        }

        /* ============================================
           HERO + SLIDER - محفوظ 100% من الأصل
        ============================================ */
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: 1.2s ease-in-out;
            filter: brightness(0.7);
        }

        .slide.active {
            opacity: 1;
        }

        .content {
            position: absolute;
            bottom: 120px;
            right: 60px;
            z-index: 5;
            background: rgba(0, 0, 0, 0.4);
            padding: 25px 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .content h1 {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 50px;
            font-weight: 700;
        }

        .content p {
            font-family: 'Cairo', sans-serif;
            font-weight: 400;
            color: #ccc;
            margin-top: 10px;
        }

        .underline {
            position: relative;
            font-weight: bold;
        }

        .underline::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -3px;
            width: 100%;
            height: 2px;
            background: #c49a7c;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #6b3f2a;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
            background: #8a5136;
        }

        /* ============================================
           SECTION BASE - محفوظ من الأصل
        ============================================ */
        .section {
            padding: 120px 60px;
            text-align: center;
            background: #f5efe8;
            color: #2b1b14;
        }

        .section h2 {
            margin-bottom: 40px;
            color: #6b3f2a;
            font-size: 30px;
            font-weight: bold;
        }

        /* ============================================
           COLLECTIONS SECTION - جديد (طلب 1)
           يحل محل الكروت القديمة بكروت مجموعات
        ============================================ */
        #collections {
            padding: 120px 60px;
            text-align: center;
            background: #f5efe8;
            color: #2b1b14;
        }

        #collections h2 {
            margin-bottom: 15px;
            color: #6b3f2a;
            font-size: 32px;
            font-weight: bold;
            font-family: 'Reem Kufi', sans-serif;
        }

        #collections .section-subtitle {
            color: #9a7060;
            font-size: 30px;
            margin-bottom: 60px;
        }

        /* شبكة الكروت */
        .collections-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 28px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* كرت المجموعة */
        .collection-card {
            position: relative;
            border-radius: 22px;
            overflow: hidden;
            cursor: pointer;
            height: 480px;
            text-decoration: none;
            display: block;

            /* ظل ناعم */
            box-shadow: 0 8px 32px rgba(107, 63, 42, 0.15);

            /* انتقال الـ hover */
            transition: transform 0.45s cubic-bezier(0.23, 1, 0.32, 1),
                        box-shadow 0.45s ease;
        }

        /* صورة الكرت */
        .collection-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            filter: brightness(0.75);
        }

        /* نبضة خفيفة عند Hover */
        @keyframes cardPulse {
            0%   { transform: translateY(-4px) scale(1.01); box-shadow: 0 16px 48px rgba(107, 63, 42, 0.3); }
            50%  { transform: translateY(-8px) scale(1.025); box-shadow: 0 28px 70px rgba(196, 154, 124, 0.45); }
            100% { transform: translateY(-4px) scale(1.01); box-shadow: 0 16px 48px rgba(107, 63, 42, 0.3); }
        }

        .collection-card:hover {
            animation: cardPulse 1.4s infinite ease-in-out;
        }

        .collection-card:hover img {
            transform: scale(1.07);
            filter: brightness(0.6);
        }

        /* طبقة التدرج فوق الصورة */
        .collection-card .card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to top,
                rgba(18, 13, 10, 0.82) 0%,
                rgba(18, 13, 10, 0.25) 50%,
                transparent 100%
            );
            transition: 0.4s;
        }

        .collection-card:hover .card-overlay {
            background: linear-gradient(
                to top,
                rgba(18, 13, 10, 0.9) 0%,
                rgba(18, 13, 10, 0.35) 55%,
                transparent 100%
            );
        }

        /* محتوى الكرت */
        .collection-card .card-body {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            padding: 28px 24px;
            text-align: right;

            /* تأثير زجاجي خفيف */
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(6px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);

            border-radius: 0 0 22px 22px;
            transform: translateY(0);
            transition: 0.4s ease;
        }

        .collection-card:hover .card-body {
            background: rgba(255, 255, 255, 0.10);
        }

        .collection-card .card-title {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 20px;
            color: #fff;
            margin-bottom: 7px;
            letter-spacing: 1px;
        }

        .collection-card .card-desc {
            font-size: 13px;
            color: #d4b99a;
            line-height: 1.6;
        }

        /* سهم الانتقال */
        .collection-card .card-arrow {
            display: inline-block;
            margin-top: 12px;
            padding: 6px 18px;
            background: rgba(196, 154, 124, 0.2);
            border: 1px solid rgba(196, 154, 124, 0.5);
            border-radius: 30px;
            color: #c49a7c;
            font-size: 12px;
            transition: 0.3s;
        }

        .collection-card:hover .card-arrow {
            background: #c49a7c;
            color: #2b1b14;
        }

        /* ============================================
           ABOUT SECTION - جديد (طلب 3)
        ============================================ */
        #about {
            position: relative;
            padding: 130px 60px;
            text-align: center;
            background: #f5efe8;
            overflow: hidden;
        }

        /* صورة ضبابية في الخلفية */
        #about .about-bg {
            position: absolute;
            inset: 0;
            background-image: url('/images/about-bg.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(4px) brightness(0.35);
            transform: scale(1.05);
            z-index: 0;
        }

        /* كرت الزجاجي */
        .about-card {
            position: relative;
            z-index: 2;
            max-width: 720px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            padding: 70px 60px;
            box-shadow: 0 20px 80px rgba(0, 0, 0, 0.3);
        }

        .about-card .about-label {
            display: inline-block;
            font-size: 12px;
            letter-spacing: 4px;
            color: #603e27;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-family: 'Cairo', sans-serif;
        }

        .about-card h2 {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 38px;
            color: #62450c;
            margin-bottom: 28px;
            line-height: 1.4;
        }

        .about-card p {
            font-size: 17px;
            color: rgba(105, 67, 25, 0.82);
            line-height: 2;
            font-family: 'Cairo', sans-serif;
            font-weight: 300;
        }

        /* خط زخرفي تحت العنوان */
        .about-card .divider {
            width: 60px;
            height: 2px;
            background: linear-gradient(to left, transparent, #744726, transparent);
            margin: 24px auto;
        }

        /* ============================================
           CONTACT SECTION - جديد (طلب 4)
        ============================================ */
        #contact {
            position: relative;
            padding: 130px 60px;
            text-align: center;
            background: #5f4738;
            overflow: hidden;
        }

        /* نقاط زخرفية خلفية */
        #contact::before {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(196, 154, 124, 0.08), transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #contact .contact-label {
            display: inline-block;
            font-size: 12px;
            letter-spacing: 4px;
            color: #c49a7c;
            margin-bottom: 15px;
        }

        #contact h2 {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 34px;
            color: #fff;
            margin-bottom: 60px;
        }

        /* كرت التواصل الزجاجي */
        .contact-card {
            position: relative;
            z-index: 2;
            max-width: 680px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 28px;
            padding: 60px 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        .contact-items {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px 24px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.07);
            transition: 0.3s;
            text-align: right;
        }

        .contact-item:hover {
            background: rgba(196, 154, 124, 0.1);
            border-color: rgba(196, 154, 124, 0.3);
            transform: translateX(-4px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: rgba(196, 154, 124, 0.15);
            border: 1px solid rgba(196, 154, 124, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .contact-info {
            flex: 1;
            text-align: right;
        }

        .contact-info span {
            display: block;
            font-size: 12px;
            color: #c49a7c;
            margin-bottom: 4px;
            letter-spacing: 1px;
        }

        .contact-info a,
        .contact-info p {
            color: #fff;
            font-size: 15px;
            text-decoration: none;
            transition: 0.3s;
            margin: 0;
        }

        .contact-info a:hover {
            color: #c49a7c;
        }

        /* ============================================
           FOOTER - جديد بسيط
        ============================================ */
        footer {
            padding: 40px 60px;
            text-align: center;
            background: #5f4738;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        footer p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 13px;
            margin: 0;
        }

        footer .footer-logo {
            font-family: 'Reem Kufi', sans-serif;
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 10px;
            display: block;
        }

        /* ============================================
           CARD SLIDER - محفوظ من الأصل
        ============================================ */
        @keyframes strongPulse {
            0%   { transform: translateY(-3px) scale(1);    box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
            50%  { transform: translateY(-6px) scale(1.03); box-shadow: 0 20px 60px rgba(196,154,124,0.45); }
            100% { transform: translateY(-3px) scale(1);    box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
        }

        .card {
            width: 300px;
            border-radius: 18px;
            overflow: hidden;
            text-align: center;
            background: white;
            border: 1px solid rgba(0,0,0,0.08);
            transition: 0.5s;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .card:hover {
            animation: strongPulse 1.2s infinite ease-in-out;
        }

        .card img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            transition: 0.5s;
        }

        .card h3 {
            margin: 15px 0 5px;
            color: #2b1b14;
        }

        .card p {
            color: #6b3f2a;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .card-slider {
            position: relative;
            width: 100%;
            height: 380px;
            overflow: hidden;
        }

        .card-slider img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: 0.6s ease-in-out;
        }

        .card-slider img:first-child {
            opacity: 1;
        }

        .cards {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* ============================================
           RESPONSIVE - محسّن (طلب 5)
        ============================================ */

        /* تابلت */
        @media (max-width: 1100px) {
            .collections-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .collection-card {
                height: 420px;
            }
        }

        /* جوال كبير / تابلت صغير */
        @media (max-width: 768px) {
            nav {
                padding: 18px 20px;
            }

            nav ul {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .logo {
                font-size: 22px;
            }

            h1 {
                font-size: 30px;
            }

            .content {
                right: 15px;
                left: 15px;
                bottom: 60px;
                padding: 18px 20px;
            }

            .content h1 {
                font-size: 30px;
            }

            /* Collections */
            #collections {
                padding: 80px 20px;
            }

            .collections-grid {
                grid-template-columns: 1fr 1fr;
                gap: 18px;
            }

            .collection-card {
                height: 340px;
            }

            .collection-card .card-title {
                font-size: 16px;
            }

            /* About */
            #about {
                padding: 80px 20px;
            }

            .about-card {
                padding: 45px 28px;
            }

            .about-card h2 {
                font-size: 27px;
            }

            /* Contact */
            #contact {
                padding: 80px 20px;
            }

            .contact-card {
                padding: 40px 24px;
            }

            /* Section */
            .section {
                padding: 80px 20px;
            }

            .cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 90%;
            }

            footer {
                padding: 30px 20px;
            }
        }

        /* جوال صغير */
        @media (max-width: 480px) {
            .collections-grid {
                grid-template-columns: 1fr;
            }

            .collection-card {
                height: 380px;
            }

            .contact-item {
                flex-direction: column;
                align-items: flex-end;
                text-align: right;
            }

            #contact h2,
            #about .about-card h2 {
                font-size: 24px;
            }
        }

        /* شاشات كبيرة */
        @media (min-width: 1400px) {
            .collections-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .collection-card {
                height: 540px;
            }

            nav {
                padding: 28px 90px;
            }

            #collections,
            #about,
            #contact {
                padding: 140px 100px;
            }
        }

    </style>
</head>

<body>

<!-- ============================================
     NAV - محفوظ + روابط anchor جديدة + همبرغر
============================================ -->
<nav id="navbar">
    <div class="logo">ذوق</div>

    <!-- قائمة الديسكتوب -->
    <ul>
        <li><a href="#hero">الرئيسية</a></li>
        <li><a href="#collections">المجموعات</a></li>
        <li><a href="#about">من نحن</a></li>
        <li><a href="#contact">تواصل معنا</a></li>
    </ul>

    <!-- زر الهامبرغر للجوال -->
    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<!-- قائمة الجوال -->
<div class="mobile-menu" id="mobileMenu">
    <button class="close-menu" id="closeMenu">✕</button>
    <a href="#hero"        onclick="closeMobile()">الرئيسية</a>
    <a href="#collections" onclick="closeMobile()">المجموعات</a>
    <a href="#about"       onclick="closeMobile()">من نحن</a>
    <a href="#contact"     onclick="closeMobile()">تواصل معنا</a>
</div>

<!-- ============================================
     HERO + SLIDER - محفوظ 100% من الأصل
============================================ -->
<div class="hero" id="hero">

    <div class="slide active" style="background-image:url('/images/abaya1.jpg')"></div>
    <div class="slide"        style="background-image:url('/images/abaya2.jpg')"></div>
    <div class="slide"        style="background-image:url('/images/abaya3.jpg')"></div>

    <div class="content">
        <h1>الأناقة في كل تفصيلة</h1>
        <p>عبايات مختارة بعناية لكل <span class="underline">ذوق</span></p>
        <a href="#collections" class="btn">تسوقي الآن</a>
    </div>

</div>

<!-- ============================================
     COLLECTIONS SECTION - جديد (طلب 1)
============================================ -->
<section id="collections">

    <h2>مجموعاتنا</h2>
    <p class="section-subtitle">اكتشفي عالماً من الأناقة والرقي</p>

    <div class="collections-grid">

        <!-- مجموعة 1: عبايات فخمة -->
        <a href="/collections/luxury" class="collection-card">
            <img src="/images/collection-luxury.jpg" alt="عبايات فخمة">
            <div class="card-overlay"></div>
            <div class="card-body">
                <div class="card-title">عبايات فخمة</div>
                <div class="card-desc">تصاميم راقية تجمع بين الجمال والفخامة</div>
                <span class="card-arrow">استعرضي المجموعة ←</span>
            </div>
        </a>

        <!-- مجموعة 2: عبايات يومية -->
        <a href="/collections/daily" class="collection-card">
            <img src="/images/collection-daily.jpg" alt="عبايات يومية">
            <div class="card-overlay"></div>
            <div class="card-body">
                <div class="card-title">عبايات يومية</div>
                <div class="card-desc">أناقة مريحة لكل يوم جميل</div>
                <span class="card-arrow">استعرضي المجموعة ←</span>
            </div>
        </a>

        <!-- مجموعة 3: عبايات مناسبات -->
        <a href="/collections/events" class="collection-card">
            <img src="/images/collection-events.jpg" alt="عبايات مناسبات">
            <div class="card-overlay"></div>
            <div class="card-body">
                <div class="card-title">عبايات مناسبات</div>
                <div class="card-desc">كوني الأجمل في كل مناسبة خاصة</div>
                <span class="card-arrow">استعرضي المجموعة ←</span>
            </div>
        </a>

        <!-- مجموعة 4: عبايات شتوية -->
        <a href="/collections/winter" class="collection-card">
            <img src="/images/collection-winter.jpg" alt="عبايات شتوية">
            <div class="card-overlay"></div>
            <div class="card-body">
                <div class="card-title">عبايات شتوية</div>
                <div class="card-desc">دفء وأناقة في كل موسم</div>
                <span class="card-arrow">استعرضي المجموعة ←</span>
            </div>
        </a>

    </div>
</section>

<!-- ============================================
     ABOUT SECTION - جديد (طلب 3)
============================================ -->
<section id="about">

    <!-- خلفية ضبابية -->
    <div class="about-bg"></div>

    <!-- كرت زجاجي -->
    <div class="about-card">
        <span class="about-label">من نحن</span>

        <h2>ذوق</h2>

        <div class="divider"></div>

        <p>
            في <strong style="color:#brown;">ذوق</strong> نؤمن أن الأناقة تكمن في التفاصيل الصغيرة،
            لذلك نختار تصاميمنا بعناية لتجمع بين الرقي والبساطة والجودة.
            كل قطعة نقدمها تحمل لمسة من الفن ورؤية واضحة للمرأة العصرية
            التي تعرف ما تريد وتستحق الأفضل.
        </p>
    </div>

</section>

<!-- ============================================
     CONTACT SECTION - جديد (طلب 4)
============================================ -->
<section id="contact">

    <span class="contact-label">تواصلي معنا</span>
    <h2>نحن هنا لكِ دائماً</h2>

    <div class="contact-card">
        <div class="contact-items">

            <!-- الهاتف -->
            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <div class="contact-info">
                    <span>رقم الهاتف</span>
                    <a href="tel:+966500000000">+966 50 000 0000</a>
                </div>
            </div>

            <!-- البريد -->
            <div class="contact-item">
                <div class="contact-icon">✉️</div>
                <div class="contact-info">
                    <span>البريد الإلكتروني</span>
                    <a href="mailto:info@thoq.sa">info@thoq.sa</a>
                </div>
            </div>

            <!-- إنستغرام -->
            <div class="contact-item">
                <div class="contact-icon">📸</div>
                <div class="contact-info">
                    <span>إنستغرام</span>
                    <a href="https://instagram.com/thoq.sa" target="_blank">@thoq.sa</a>
                </div>
            </div>

            <!-- الموقع -->
            <div class="contact-item">
                <div class="contact-icon">📍</div>
                <div class="contact-info">
                    <span>الموقع</span>
                    <p>الرياض، المملكة العربية السعودية</p>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- ============================================
     FOOTER - جديد بسيط
============================================ -->
<footer>
    <span class="footer-logo">ذوق</span>
    <p>© 2026 ذوق - جميع الحقوق محفوظة</p>
</footer>

<!-- ============================================
     JAVASCRIPT - محفوظ + إضافات
============================================ -->
<script>

    /* --- HERO SLIDER - محفوظ من الأصل --- */
    let slides = document.querySelectorAll('.slide');
    let slideIndex = 0;

    setInterval(() => {
        slides[slideIndex].classList.remove('active');
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.add('active');
    }, 5000);

    /* --- NAVBAR SCROLL EFFECT - جديد --- */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    /* --- HAMBURGER MENU - جديد --- */
    const hamburger   = document.getElementById('hamburger');
    const mobileMenu  = document.getElementById('mobileMenu');
    const closeMenuBtn = document.getElementById('closeMenu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.add('open');
    });

    closeMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
    });

    function closeMobile() {
        mobileMenu.classList.remove('open');
    }

    /* --- SMOOTH SCROLL للروابط - يضمن عمل الـ anchor --- */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

</script>

</body>
</html>