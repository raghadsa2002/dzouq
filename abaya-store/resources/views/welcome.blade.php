<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <title>عبايات فخمة</title>

    <style>
@media (max-width: 768px){

    h1{
        font-size:30px;
    }

    .content{
        right:15px;
        bottom:60px;
        padding:15px;
    }

    .cards{
        flex-direction:column;
        align-items:center;
    }

    .card{
        width:90%;
    }

    nav{
        padding:15px 20px;
    }

    .logo{
        font-size:22px;
    }
}
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Cairo', sans-serif;
        }

        body{
            background:#120d0a;
            color:white;
            overflow-x:hidden;
            overflow-y:auto;
        }

        /* NAVBAR */
        nav{
            position:fixed;
            top:0;
            width:100%;
            padding:25px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            z-index:10;
        }

        .logo{
    color:white;
    font-size:28px;
    font-weight:700;
    letter-spacing:3px;

    font-family:'Cairo', sans-serif;

    cursor:pointer;
    transition:0.3s ease;
}
.logo{
    font-family:'Reem Kufi', sans-serif;
}

        ul{
            display:flex;
            gap:30px;
            list-style:none;
        }

        li{
            cursor:pointer;
            transition:0.3s;
        }

        li:hover{
            color:#c49a7c;
        }

      /* SLIDER */
.hero{
    position:relative;
    height:100vh;
    overflow:hidden;
}

.slide{
    position:absolute;
    width:100%;
    height:100%;
    background-size:cover;
    background-position:center;
    opacity:0;
    transition:1.2s ease-in-out;
    filter:brightness(0.7);
}

.active{
    opacity:1;
}

        /* TEXT */
        .content{
            position:absolute;
            bottom:120px;
            right:60px;
            z-index:5;

            background:rgba(0,0,0,0.4);
            padding:25px 30px;
            border-radius:15px;

            backdrop-filter:blur(10px);
            border:1px solid rgba(255,255,255,0.1);
        }

        h1{
            font-size:50px;
        }

        p{
            color:#ccc;
            margin-top:10px;

        }

        button{
            margin-top:20px;
            padding:12px 30px;
            border:none;
            background:#6b3f2a;
            color:white;
            cursor:pointer;
            border-radius:12px;
            transition:0.3s;
        }

        button:hover{
            transform:scale(1.05);
            background:#8a5136;
        }

        /* SECTION (تصحيح مهم) */
        .section{
            padding:120px 60px;
            text-align:center;

            background:#f5efe8;
            color:#2b1b14;
        }

        .section h2{
            margin-bottom:40px;
            color:#6b3f2a;
            font-size:30px;
            font-weight:bold;
        }

        .cards{
            display:flex;
            gap:30px;
            justify-content:center;
            flex-wrap:wrap;
        }

        /* CARD (تصحيح كامل) */
        .card{
            width:300px;
            border-radius:18px;
            overflow:hidden;
            text-align:center;

            background:white;
            border:1px solid rgba(0,0,0,0.08);

            transition:0.5s;
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
        }

        .card img{
            width:100%;
            height:380px;
            object-fit:cover;
            transition:0.5s;
        }

        .card h3{
            margin:15px 0 5px;
            color:#2b1b14;
        }

        .card p{
            color:#6b3f2a;
            margin-bottom:20px;
            font-weight:bold;
            
        }

   @keyframes strongPulse {
    0% {
        transform: translateY(-3px) scale(1);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    50% {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 20px 60px rgba(196,154,124,0.45);
    }

    100% {
        transform: translateY(-3px) scale(1);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
}

.card:hover{
    animation: strongPulse 1.2s infinite ease-in-out;
}

.card:hover .card-slider img:last-child{
    opacity:1;
    transform:scale(1.05);
}
.card-slider{
    position:relative;
    width:100%;
    height:380px;
    overflow:hidden;
}

.card-slider img{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:cover;

    opacity:0;
    transition:0.6s ease-in-out;
}

/* الصورة الأولى تظهر بشكل طبيعي */
.card-slider img:first-child{
    opacity:1;
}
.underline{
    position:relative;
    font-weight:bold;
   

}

.underline::after{
    content:"";
    position:absolute;
    right:0;
    bottom:-3px;
    width:100%;
    height:2px;
    background:#c49a7c;
}
.content h1{
     font-family:'Reem Kufi', sans-serif;
    font-size:50px;
    font-weight:700;
}

.content p{
    font-family:'Cairo', sans-serif;
    font-weight:400;
    color:#ccc;
}
.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 30px;
    background:#6b3f2a;
    color:white;
    text-decoration:none;
    border-radius:12px;
    transition:0.3s;
}

.btn:hover{
    transform:scale(1.05);
    background:#8a5136;
}
html{
    scroll-behavior:smooth;
}
    </style>
</head>

<body>

<!-- NAV -->
<nav>
    <div class="logo">عبايات ذوق</div>
    <ul>
        <li>الرئيسية</li>
        <li>المجموعة</li>
        <li>من نحن</li>
    </ul>
</nav>
<div class="hero">

    <!-- SLIDER -->
    <div class="slide active" style="background-image:url('/images/abaya1.jpg')"></div>
    <div class="slide" style="background-image:url('/images/abaya2.jpg')"></div>
    <div class="slide" style="background-image:url('/images/abaya3.jpg')"></div>

    <!-- TEXT -->
    <div class="content">
        <h1>الأناقة في كل تفصيلة</h1>
      <p>عبايات مختارة بعناية لكل <span class="underline">ذوق</span></p>

        <a href="#collection" class="btn">تسوقي الآن</a>
    </div>

</div>

<!-- COLLECTION -->
<div class="section" id="collection">

    <h2>المجموعة الجديدة</h2>

    <div class="cards">

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-slider">
                <img  src="/images/abaya1-1.jpg">
                <img src="/images/abaya1-2.jpg">
            </div>

            <h3>عباية ملكية سوداء</h3>
            <p>450 ريال</p>
        </div>

        <!-- CARD 2 -->
        <div class="card">
            <div class="card-slider">
                <img  src="/images/abaya2-1.jpg">
                <img src="/images/abaya2-2.jpg">
            </div>

            <h3>عباية بني فخمة</h3>
            <p>600 ريال</p>
        </div>

        <!-- CARD 3 -->
        <div class="card">
            <div class="card-slider">
                <img  src="/images/abaya3-1.jpg">
                <img src="/images/abaya3-2.jpg">
            </div>

            <h3>عباية عصرية ناعمة</h3>
            <p>750 ريال</p>
        </div>

    </div>

</div>
<script>

let slides = document.querySelectorAll('.slide');
let index = 0;

setInterval(() => {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}, 5000);

</script>
<script>
document.querySelectorAll(".card-slider").forEach((slider) => {

    const imgs = slider.querySelectorAll("img");
    let index = 0;

    if (imgs.length <= 1) return; // مهم جدًا

    setInterval(() => {

        imgs.forEach(img => img.classList.remove("active"));

        index = (index + 1) % imgs.length;

        imgs[index].classList.add("active");

    }, 4000);

});
</script>
</body>
</html>