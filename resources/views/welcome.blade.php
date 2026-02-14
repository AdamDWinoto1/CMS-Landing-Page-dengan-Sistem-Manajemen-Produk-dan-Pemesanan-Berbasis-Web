<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * { 
            font-family: 'Poppins', sans-serif; 
            box-sizing: border-box; 
        }
        
        :root {
            --primary-color: #4f46e5;
            --secondary-color: #6366f1;
            --accent-color: #f59e0b;
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --text-color: #374151;
            --border-color: #e5e7eb;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        /* Animated background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .bg-animation span {
            position: absolute;
            display: block;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.1);
            animation: move 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
        
        .bg-animation span:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
            animation-duration: 20s;
        }
        
        .bg-animation span:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }
        
        .bg-animation span:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
            animation-duration: 16s;
        }
        
        .bg-animation span:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }
        
        .bg-animation span:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
            animation-duration: 10s;
        }
        
        .bg-animation span:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
            animation-duration: 22s;
        }
        
        @keyframes move {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
            }
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(10px);
            color: #fff;
            padding: 14px 24px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo {
            font-weight: 700;
            font-size: 20px;
            background: linear-gradient(45deg, #4f46e5, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
        }

        .logo img {
            height: 40px;
            display: block;
        }

        /* Hamburger */
        .hamburger {
            width: 30px;
            height: 24px;
            position: relative;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1100;
            transition: all 0.3s ease;
        }
        
        .hamburger span {
            display: block;
            height: 3px;
            width: 100%;
            background: #fff;
            border-radius: 3px;
            transition: all 0.3s ease;
            position: absolute;
            left: 0;
        }
        
        .hamburger span:nth-child(1) {
            top: 0;
        }
        
        .hamburger span:nth-child(2) {
            top: 10px;
        }
        
        .hamburger span:nth-child(3) {
            top: 20px;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
            transform: translateX(20px);
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Login Button */
        .login-btn {
            background: linear-gradient(45deg, #5b29c7ff, #2e8dfaff);
            color: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            background: linear-gradient(45deg, #f97316, #ea580c);
        }

        /* Sidebar Menu */
        .nav-links {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100%;
            background: linear-gradient(180deg, #111827 0%, #1f2937 100%);
            list-style: none;
            padding: 90px 0 20px;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            z-index: 999;
            box-shadow: var(--shadow-lg);
            overflow-y: auto;
        }
        
        .nav-links.show {
            left: 0;
        }
        
        .nav-links::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: linear-gradient(180deg, rgba(31, 41, 55, 0.9) 0%, rgba(17, 24, 39, 0) 100%);
            z-index: -1;
        }
        
        .nav-links li {
            margin: 0;
        }
        
        .nav-links a {
            color: #e5e7eb;
            text-decoration: none;
            font-size: 15px;
            display: flex;
            align-items: center;
            padding: 14px 24px;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-links a::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--accent-color);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.05);
            padding-left: 28px;
        }
        
        .nav-links a:hover::before {
            transform: translateX(0);
        }
        
        .nav-links a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        /* Ad Slider - Enhanced */
        .ad-slider {
            position: relative;
            width: 100%;
            height: 450px;
            overflow: hidden;
            margin: 20px auto;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            max-width: 1200px;
        }
        
        .ad-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.2s ease-in-out;
            cursor: pointer;
            overflow: hidden;
        }
        
        .ad-slide.active {
            opacity: 1;
        }
        
        .ad-slide-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            /* filter: brightness(0.7); */
            transform: scale(1.1);
            transition: transform 8s ease;
        }
        
        .ad-slide.active .ad-slide-bg {
            transform: scale(1);
        }
        
        .ad-slide-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 40px;
            color: white;
        }
        
        .ad-slide-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .ad-slide.active .ad-slide-title {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.3s;
        }
        
        .ad-slide-description {
            font-size: 1.3rem;
            max-width: 800px;
            margin-bottom: 30px;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .ad-slide.active .ad-slide-description {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.5s;
        }
        
        .ad-slide-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .ad-slide.active .ad-slide-cta {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.7s;
        }
        
        .ad-slide-cta:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .ad-slide-cta i {
            font-size: 1.2rem;
        }
        
        .slider-nav {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }
        
        .slider-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .slider-dot.active {
            background: white;
            transform: scale(1.2);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 22px;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .slider-arrow:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.1);
        }
        
        .slider-prev {
            left: 30px;
        }
        
        .slider-next {
            right: 30px;
        }

        /* Category Pills - Non-sticky */
        .categories {
            display: flex;
            gap: 12px;
            overflow-x: auto;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            border-radius: 16px;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #f1f1f1;
            box-shadow: var(--shadow);
        }
        
        .categories::-webkit-scrollbar {
            height: 6px;
        }
        
        .categories::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .categories::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }
        
        .categories button {
            padding: 10px 18px;
            border-radius: 50px;
            border: none;
            background: #f3f4f6;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--text-color);
            box-shadow: var(--shadow-sm);
        }
        
        .categories button.active {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            box-shadow: var(--shadow);
        }
        
        .categories button:hover:not(.active) {
            background: #e5e7eb;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        /* Products */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 24px;
            padding: 30px 20px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .product-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            transform: translateY(0);
            cursor: pointer;
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }
        
        .product-card:nth-child(1) { animation-delay: 0.1s; }
        .product-card:nth-child(2) { animation-delay: 0.2s; }
        .product-card:nth-child(3) { animation-delay: 0.3s; }
        .product-card:nth-child(4) { animation-delay: 0.4s; }
        .product-card:nth-child(5) { animation-delay: 0.5s; }
        .product-card:nth-child(6) { animation-delay: 0.6s; }
        .product-card:nth-child(7) { animation-delay: 0.7s; }
        .product-card:nth-child(8) { animation-delay: 0.8s; }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .discount-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: linear-gradient(45deg, var(--danger-color), #dc2626);
            color: #fff;
            padding: 6px 12px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 20px;
            z-index: 1;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .discount-badge::after {
            content: '\f295';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
        }
        
        .product-image {
            overflow: hidden;
            height: 200px;
            position: relative;
            background: #f9fafb;
        }
        
        .product-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: linear-gradient(to top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
            pointer-events: none;
        }
        
        .product-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .product-card:hover img {
            transform: scale(1.08);
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-card h3 {
            font-size: 16px;
            margin: 0 0 12px;
            color: var(--dark-color);
            font-weight: 600;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.4;
            height: 44px;
        }
        
        .price-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 8px;
        }
        
        .price-wrapper {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .price-original {
            color: #9ca3af;
            font-size: 13px;
            text-decoration: line-through;
            margin-bottom: 2px;
        }
        
        .price-final {
            color: var(--success-color);
            font-weight: 700;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        
        .price-final::before {
            content: 'Rp';
            font-size: 14px;
            margin-right: 2px;
            font-weight: 500;
        }
        
        /* Modal */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 2000; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto;
            background-color: rgba(0,0,0,0.7); 
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            background-color: rgba(255, 255, 255, 0.98);
            margin: 5% auto;
            padding: 0;
            border-radius: 16px;
            width: 90%;
            max-width: 500px;
            box-shadow: var(--shadow-lg);
            animation: slideUp 0.4s ease;
            overflow: hidden;
        }

        .modal-header {
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
            color: var(--dark-color);
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            padding: 20px;
        }
        
        .modal-body img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .modal-body p {
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .close {
            color: white;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .close:hover {
            color: rgba(255, 255, 255, 0.7);
        }

        .buy-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background: linear-gradient(45deg, var(--success-color), #059669);
            color: white;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
        }

        .buy-btn:hover {
            background: linear-gradient(45deg, #059669, #047857);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        
        .modal-discount {
            display: inline-block;
            background: linear-gradient(45deg, var(--danger-color), #dc2626);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes slideUp {
            from {transform: translateY(50px); opacity:0;}
            to {transform: translateY(0); opacity:1;}
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .ad-slider {
                height: 350px;
                margin: 15px auto;
            }
            
            .ad-slide-title {
                font-size: 2.5rem;
            }
            
            .ad-slide-description {
                font-size: 1.1rem;
                padding: 0 20px;
            }
            
            .slider-arrow {
                width: 50px;
                height: 50px;
                font-size: 18px;
            }
            
            .slider-prev {
                left: 15px;
            }
            
            .slider-next {
                right: 15px;
            }
            
            .categories {
                padding: 12px 15px;
                margin-bottom: 15px;
            }
            
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                gap: 16px;
                padding: 20px 15px;
            }
            
            .product-card h3 {
                font-size: 14px;
                height: 40px;
            }
            
            .product-image {
                height: 150px;
            }
            
            .price-final {
                font-size: 16px;
            }
            
            .categories button {
                padding: 8px 14px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated background -->
    <div class="bg-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="nav-left">
            <button class="hamburger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="{{ url('/') }}" class="logo" id="logo-link">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
        </div>
        <!-- <a href="{{ route('login') }}" class="login-btn">
            <i class="fas fa-sign-in-alt"></i>
            Login
        </a> -->
    </div>

    <!-- Sidebar Menu -->
    <ul class="nav-links" id="menu">
        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
        @foreach($categories as $cat)
            <li><a href="#!" onclick="filterCategory({{ $cat->id }})"><i class="fas fa-tag"></i> {{ $cat->name }}</a></li>
        @endforeach
    </ul>

    <!-- Ad Slider -->
    <div class="ad-slider" id="adSlider">
        <!-- Slides will be dynamically added here -->
        <div class="slider-nav">
            <!-- Dots will be dynamically added here -->
        </div>
        <div class="slider-arrow slider-prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slider-arrow slider-next">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>

    <!-- Category Pills - Non-sticky -->
    <div class="categories">
        <button class="active" onclick="filterCategory('all')">
            <i class="fas fa-th-large"></i> Semua
        </button>
        @foreach($categories as $cat)
            <button onclick="filterCategory({{ $cat->id }})">
                <i class="fas fa-tag"></i> {{ $cat->name }}
            </button>
        @endforeach
    </div>

    <!-- Products Grid -->
    <div class="product-grid" id="productGrid">
        @foreach($categories as $category)
            @foreach($category->products as $product)
                @php
                    $price = $product->price;
                    $finalPrice = $price;
                    $discountText = null;

                    if ($product->discount_type === 'percentage' && $product->discount_value > 0) {
                        $finalPrice = $price - ($price * $product->discount_value / 100);
                        $discountText = $product->discount_value . '%';
                    } elseif ($product->discount_type === 'nominal' && $product->discount_value > 0) {
                        $finalPrice = $price - $product->discount_value;
                        $discountText = 'Rp ' . number_format($product->discount_value, 0, ',', '.');
                    }
                @endphp

                <div class="product-card"
                    data-category="{{ $category->id }}"
                    data-name="{{ $product->name }}"
                    data-image="{{ asset($product->image) }}"
                    data-desc="{{ $product->description ?? 'Tidak ada deskripsi.' }}"
                    data-price="{{ number_format($price, 0, ',', '.') }}"
                    data-finalprice="{{ number_format($finalPrice, 0, ',', '.') }}"
                    data-discount="{{ $discountText ?? '' }}"
                    data-link="{{ $product->link ?? '#' }}">

                    <div class="product-image">
                        {{-- Badge Diskon --}}
                        @if($discountText)
                            <div class="discount-badge">{{ $discountText }}</div>
                        @endif
                        
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                        @else
                            <img src="https://via.placeholder.com/100?text=No+Image" alt="No Image">
                        @endif
                    </div>
                    
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <div class="price-container">
                            <div class="price-wrapper">
                                @if($finalPrice < $price)
                                    <span class="price-original">Rp {{ number_format($price, 0, ',', '.') }}</span>
                                @endif
                                <span class="price-final">Rp {{ number_format($finalPrice, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>

    <!-- Modal Detail Produk -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <div id="modalTitle"></div>
                <span class="close" id="modalClose">&times;</span>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="Produk">
                <div id="modalDiscountContainer"></div>
                <p><strong>Harga Asli:</strong> <span id="modalPrice"></span></p>
                <p><strong>Harga Akhir:</strong> <span id="modalFinalPrice"></span></p>
                <p id="modalDesc"></p>
                <a href="#" target="_blank" id="modalBuyLink" class="buy-btn">
                    <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                </a>
            </div>
        </div>
    </div>

    <script>
        // Enhanced ad slider data with more details
        const adSlides = [
            {
                image: "{{ asset('images/banner_kasipangan_4x1.png') }}",
                link: 'https://www.instagram.com/kasipangan',
                color: '#4CAF50'
            },
            {
                image: "{{ asset('images/banner_angkattinggi_4x1.png') }}",
                link: 'https://www.instagram.com/angkattinggimedia',
                color: '#2196F3'
            },
            {
                image: "{{ asset('images/banner_kasiumrah_4x1.png') }}",
                link: 'https://www.instagram.com/kasiumrah',
                color: '#9C27B0'
            },
        ];

        // Event klik produk
        document.querySelectorAll('.product-card').forEach(card => {
            card.addEventListener('click', function () {
                const name = this.dataset.name;
                const img = this.dataset.image;
                const price = this.dataset.price;
                const finalPrice = this.dataset.finalprice;
                const discount = this.dataset.discount;
                const desc = this.dataset.desc;
                const link = this.dataset.link;

                document.getElementById('modalTitle').innerText = name;
                document.getElementById('modalImage').src = img;
                document.getElementById('modalPrice').innerText = "Rp " + price;
                document.getElementById('modalFinalPrice').innerText = "Rp " + finalPrice;
                document.getElementById('modalDesc').innerText = desc;

                const discountContainer = document.getElementById('modalDiscountContainer');
                if (discount) {
                    discountContainer.innerHTML = `<div class="modal-discount">Diskon: ${discount}</div>`;
                } else {
                    discountContainer.innerHTML = '';
                }

                document.getElementById('modalBuyLink').href = link;

                document.getElementById('productModal').style.display = "block";
            });
        });

        // Tombol close
        document.getElementById('modalClose').addEventListener('click', function () {
            document.getElementById('productModal').style.display = "none";
        });

        // Klik di luar modal
        window.addEventListener('click', function (event) {
            const modal = document.getElementById('productModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });

        // Initialize ad slider
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('adSlider');
            const sliderNav = slider.querySelector('.slider-nav');
            const prevBtn = slider.querySelector('.slider-prev');
            const nextBtn = slider.querySelector('.slider-next');
            
            let currentSlide = 0;
            
            // Create slides
            adSlides.forEach((slide, index) => {
                const slideElement = document.createElement('div');
                slideElement.className = 'ad-slide';
                if (index === 0) slideElement.classList.add('active');
                
                // Create background div with image
                const bgElement = document.createElement('div');
                bgElement.className = 'ad-slide-bg';
                bgElement.style.backgroundImage = `url(${slide.image})`;
                
                // Create content div
                const contentElement = document.createElement('div');
                contentElement.className = 'ad-slide-content';
                
                // Create title
                const titleElement = document.createElement('h2');
                titleElement.className = 'ad-slide-title';
                titleElement.textContent = slide.title;
                
                // Create description
                const descElement = document.createElement('p');
                descElement.className = 'ad-slide-description';
                descElement.textContent = slide.description;
                
                // Create CTA button
                const ctaElement = document.createElement('a');
                // ctaElement.className = 'ad-slide-cta';
                ctaElement.href = slide.link;
                ctaElement.target = '_blank';
                // ctaElement.innerHTML = '<i class="fas fa-external-link-alt"></i> Kunjungi';
                
                // Assemble elements
                contentElement.appendChild(titleElement);
                contentElement.appendChild(descElement);
                contentElement.appendChild(ctaElement);
                
                slideElement.appendChild(bgElement);
                slideElement.appendChild(contentElement);
                
                // Add click event to redirect to link
                slideElement.addEventListener('click', function() {
                    window.open(slide.link, '_blank');
                });
                
                slider.appendChild(slideElement);
                
                // Create dot
                const dot = document.createElement('div');
                dot.className = 'slider-dot';
                if (index === 0) dot.classList.add('active');
                sliderNav.appendChild(dot);
            });
            
            // Function to show slide
            function showSlide(index) {
                const slides = slider.querySelectorAll('.ad-slide');
                const dots = sliderNav.querySelectorAll('.slider-dot');
                
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                slides[index].classList.add('active');
                dots[index].classList.add('active');
                
                currentSlide = index;
            }
            
            // Auto slide every 6 seconds
            setInterval(() => {
                currentSlide = (currentSlide + 1) % adSlides.length;
                showSlide(currentSlide);
            }, 6000);
            
            // Previous button click
            prevBtn.addEventListener('click', function() {
                currentSlide = (currentSlide - 1 + adSlides.length) % adSlides.length;
                showSlide(currentSlide);
            });
            
            // Next button click
            nextBtn.addEventListener('click', function() {
                currentSlide = (currentSlide + 1) % adSlides.length;
                showSlide(currentSlide);
            });
            
            // Dot click
            sliderNav.addEventListener('click', function(e) {
                if (e.target.classList.contains('slider-dot')) {
                    const dots = Array.from(sliderNav.querySelectorAll('.slider-dot'));
                    const index = dots.indexOf(e.target);
                    showSlide(index);
                }
            });
        });

        // Hamburger
        const burger = document.getElementById('burger');
        const menu = document.getElementById('menu');
        burger.addEventListener('click', () => {
            burger.classList.toggle('active');
            menu.classList.toggle('show');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !burger.contains(e.target)) {
                burger.classList.remove('active');
                menu.classList.remove('show');
            }
        });

        // Filter kategori
        function filterCategory(catId) {
            const products = document.querySelectorAll('.product-card');
            const buttons = document.querySelectorAll('.categories button');

            // Reset tombol aktif
            buttons.forEach(btn => btn.classList.remove('active'));

            if (catId === 'all') {
                buttons[0].classList.add('active');
                products.forEach(p => {
                    p.style.display = 'block';
                });
            } else {
                // Cari tombol yang diklik
                const activeBtn = Array.from(buttons).find(btn => btn.getAttribute('onclick') === `filterCategory(${catId})`);
                if (activeBtn) activeBtn.classList.add('active');

                products.forEach(p => {
                    if (p.dataset.category == catId) {
                        p.style.display = 'block';
                    } else {
                        p.style.display = 'none';
                    }
                });
            }
        }
    </script>
</body>
</html>