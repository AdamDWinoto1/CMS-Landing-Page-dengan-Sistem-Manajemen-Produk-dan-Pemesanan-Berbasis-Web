<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori - Admin Kasisolusi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * { 
            font-family: 'Poppins', sans-serif; 
            box-sizing: border-box; 
        }
        
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            margin:0;
            min-height: 100vh;
            overflow-x: hidden;
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
        
        /* Sidebar */
        .sidebar { 
            background: rgba(30, 41, 59, 0.95); 
            width:260px; 
            height:100vh; 
            position:fixed; 
            left:0; 
            top:0; 
            color:white; 
            padding:0; 
            box-sizing:border-box;
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 100;
            transition: all 0.3s ease;
        }
        
        .sidebar-header {
            padding: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .sidebar-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(99, 102, 241, 0.2), rgba(139, 92, 246, 0.2));
            z-index: -1;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.3);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .logo-text h1 {
            color: white;
            font-size: 22px;
            font-weight: 700;
            margin: 0;
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .logo-text p {
            color: #9ca3af;
            font-size: 12px;
            margin: 0;
        }
        
        .menu-item { 
            display:flex; 
            align-items:center; 
            padding:14px 24px; 
            color:white; 
            text-decoration:none; 
            margin:0;
            border-radius: 0;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .menu-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #6366f1, #8b5cf6);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .menu-item:hover { 
            background: rgba(99, 102, 241, 0.15);
            padding-left: 32px;
        }
        
        .menu-item:hover::before {
            transform: translateX(0);
        }
        
        .menu-item.active { 
            background: rgba(99, 102, 241, 0.2);
            padding-left: 32px;
        }
        
        .menu-item.active::before {
            transform: translateX(0);
        }
        
        .icon-menu {
            width: 24px;
            margin-right: 16px;
            text-align: center;
            font-size: 18px;
            transition: transform 0.3s ease;
        }
        
        .menu-item:hover .icon-menu {
            transform: scale(1.2);
        }
        
        /* Main Content */
        .main-content { 
            margin-left: 260px; 
            padding:30px; 
            box-sizing:border-box;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .page-header {
            margin-bottom: 30px;
            animation: slideDown 0.6s ease;
        }
        
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .page-title {
            color: white;
            font-size: 32px;
            font-weight: 700;
            margin: 0 0 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        
        .page-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            border-radius: 2px;
        }
        
        .breadcrumb {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            animation: fadeIn 0.8s ease;
        }
        
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.2s;
            position: relative;
        }
        
        .breadcrumb a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }
        
        .breadcrumb a:hover::after {
            width: 100%;
        }
        
        .breadcrumb a:hover {
            color: white;
        }
        
        /* Card */
        .card { 
            background: rgba(255, 255, 255, 0.95); 
            border-radius:16px; 
            padding:24px; 
            margin-bottom:24px; 
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 0.6s ease;
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        /* Search and filter bar */
        .filter-bar {
            display: flex;
            gap: 16px;
            margin-bottom: 24px;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .search-box {
            position: relative;
            flex-grow: 1;
            max-width: 350px;
        }
        
        .search-box input {
            width: 100%;
            padding: 12px 16px 12px 45px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            box-sizing: border-box;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }
        
        .search-box input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            background: white;
        }
        
        .search-box i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            transition: color 0.3s ease;
        }
        
        .search-box input:focus + i {
            color: #6366f1;
        }
        
        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        
        .filter-label {
            font-size: 12px;
            font-weight: 600;
            color: #4b5563;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .filter-select {
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
            min-width: 180px;
        }
        
        .filter-select:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            background: white;
        }
        
        /* Category Grid */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }
        
        .category-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: scaleIn 0.5s ease forwards;
            opacity: 0;
            transform: scale(0.9);
        }
        
        .category-card:nth-child(1) { animation-delay: 0.1s; }
        .category-card:nth-child(2) { animation-delay: 0.2s; }
        .category-card:nth-child(3) { animation-delay: 0.3s; }
        .category-card:nth-child(4) { animation-delay: 0.4s; }
        .category-card:nth-child(5) { animation-delay: 0.5s; }
        .category-card:nth-child(6) { animation-delay: 0.6s; }
        
        @keyframes scaleIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }
        
        .category-card:hover::before {
            transform: translateX(0);
        }
        
        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .category-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .category-icon::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .category-card:hover .category-icon::after {
            width: 100px;
            height: 100px;
        }
        
        .category-card:hover .category-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.4);
        }
        
        .category-icon i {
            font-size: 36px;
            color: white;
            z-index: 1;
        }
        
        .category-title {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 8px;
            position: relative;
        }
        
        .category-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            border-radius: 1px;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }
        
        .category-card:hover .category-title::after {
            width: 50px;
        }
        
        .category-description {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 20px;
            min-height: 40px;
            line-height: 1.4;
        }
        
        .category-stats {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .category-stat {
            text-align: center;
        }
        
        .category-stat-number {
            font-size: 24px;
            font-weight: 700;
            color: #6366f1;
        }
        
        .category-stat-label {
            font-size: 12px;
            color: #64748b;
            text-transform: uppercase;
        }
        
        .category-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        
        /* Product count badge */
        .product-count-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            font-size: 14px;
            font-weight: 600;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            position: absolute;
            top: -10px;
            right: -10px;
            box-shadow: 0 4px 8px rgba(99, 102, 241, 0.3);
            animation: pulse 2s infinite;
        }
        
        /* Button */
        .btn { 
            padding:10px 16px; 
            border:none; 
            border-radius:8px; 
            cursor:pointer; 
            color:white; 
            display:inline-flex; 
            align-items:center; 
            gap:8px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 14px;
            position: relative;
            overflow: hidden;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .btn-primary { 
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
        }
        
        .btn-primary:hover { 
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(59, 130, 246, 0.4);
        }
        
        .btn-warning { 
            background: linear-gradient(135deg, #f59e0b, #d97706);
            box-shadow: 0 4px 10px rgba(245, 158, 11, 0.3);
        }
        
        .btn-warning:hover { 
            background: linear-gradient(135deg, #d97706, #b45309);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(245, 158, 11, 0.4);
        }
        
        .btn-danger { 
            background: linear-gradient(135deg, #ef4444, #dc2626);
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }
        
        .btn-danger:hover { 
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        }
        
        /* Modal */
        .modal-backdrop { 
            display:none; 
            position:fixed; 
            inset:0; 
            background:rgba(0,0,0,0.6); 
            z-index:50; 
            align-items:center; 
            justify-content:center; 
            padding:20px;
            backdrop-filter: blur(5px);
        }
        
        .modal-backdrop.show { 
            display:flex; 
        }
        
        .modal-card { 
            background:rgba(255, 255, 255, 0.98);
            width:100%; 
            max-width:500px; 
            border-radius:16px; 
            padding:0;
            position:relative; 
            box-sizing:border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: modalFadeIn 0.3s ease;
            overflow: hidden;
        }
        
        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .modal-header {
            padding: 20px 24px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .modal-header.blue {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            border-bottom: none;
        }
        
        .modal-header.yellow {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
            border-bottom: none;
        }
        
        .modal-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .close-btn { 
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .close-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .modal-body {
            padding: 24px;
        }
        
        /* Input */
        .input { 
            width:100%; 
            padding:12px 16px; 
            margin-bottom:16px; 
            border:2px solid #e5e7eb; 
            border-radius:10px; 
            box-sizing:border-box;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }
        
        .input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            background: white;
        }
        
        textarea.input {
            resize: vertical;
            min-height: 100px;
        }
        
        /* Success message */
        .success-message {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 16px 24px;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideDown 0.5s ease;
        }
        
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            grid-column: 1/-1;
        }
        
        .empty-icon {
            font-size: 48px;
            color: #cbd5e1;
            margin-bottom: 16px;
        }
        
        .empty-title {
            font-size: 20px;
            font-weight: 600;
            color: #64748b;
            margin-bottom: 8px;
        }
        
        .empty-description {
            color: #94a3b8;
            margin-bottom: 24px;
        }
        
        /* No results message */
        .no-results {
            text-align: center;
            padding: 40px 20px;
            color: #6b7280;
            display: none;
            grid-column: 1/-1;
        }
        
        .no-results i {
            font-size: 48px;
            margin-bottom: 16px;
            opacity: 0.5;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
            }
            
            .sidebar-header {
                padding: 24px 10px;
                text-align: center;
            }
            
            .logo-text {
                display: none;
            }
            
            .menu-item {
                padding: 14px;
                justify-content: center;
            }
            
            .menu-item span {
                display: none;
            }
            
            .main-content {
                margin-left: 80px;
                padding: 20px;
            }
            
            .page-title {
                font-size: 24px;
            }
            
            .category-grid {
                grid-template-columns: 1fr;
            }
            
            .category-actions {
                flex-direction: column;
            }
            
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-box {
                max-width: 100%;
            }
            
            .filter-select {
                min-width: auto;
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

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="logo-text">
                    <h1>Kasisolusi</h1>
                    <p>Admin Dashboard</p>
                </div>
            </div>
        </div>
        <nav>
            <a href="{{ route('dashboard') }}" class="menu-item">
                <i class="fas fa-home icon-menu"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('products') }}" class="menu-item">
                <i class="fas fa-box icon-menu"></i>
                <span>Produk</span>
            </a>
            <a href="{{ route('categories') }}" class="menu-item active">
                <i class="fas fa-folder icon-menu"></i>
                <span>Kategori</span>
            </a>
            <a href="{{ route('discounts') }}" class="menu-item">
                <i class="fas fa-tag icon-menu"></i>
                <span>Diskon</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-header">
            <h1 class="page-title">Kategori</h1>
            <div class="breadcrumb">
                <a href="{{ route('dashboard') }}">Dashboard</a> / <span>Kategori</span>
            </div>
        </div>

        @if(session('success'))
            <div class="success-message">
                <i class="fas fa-check-circle text-xl"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="card">
            <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
                <h2 class="text-xl font-bold text-gray-800">Kelola Kategori</h2>
                <button onclick="document.getElementById('addCategoryModal').classList.add('show')" class="btn btn-primary">
                    <i class="fas fa-plus"></i> 
                    <span>Tambah Kategori</span>
                </button>
            </div>

            <!-- Search and Filter Bar -->
            <div class="filter-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari kategori..." id="search-input">
                </div>
                
                <div class="filter-group">
                    <!-- <label class="filter-label">Urutkan</label> -->
                    <select class="filter-select" id="sort-filter">
                        <option value="name">Nama (A-Z)</option>
                        <option value="name-desc">Nama (Z-A)</option>
                        <option value="products">Produk Terbanyak</option>
                        <option value="products-desc">Produk Tersedikit</option>
                    </select>
                </div>
            </div>

            <!-- Grid Categories -->
            <div class="category-grid" id="categoriesContainer">
                @if($categories->count() > 0)
                    @foreach($categories as $c)
                    <div class="category-card" data-name="{{ strtolower($c->name) }}" data-products="{{ $c->products_count }}">
                        <div class="category-icon">
                            <i class="fas fa-folder"></i>
                            <!-- Badge untuk jumlah produk -->
                            @if($c->products_count > 0)
                                <div class="product-count-badge">{{ $c->products_count }}</div>
                            @endif
                        </div>
                        <h3 class="category-title">{{ $c->name }}</h3>
                        <p class="category-description">{{ $c->description ?? ' ' }}</p>
                        <!-- <p class="category-description">{{ $c->description ?? 'Tidak ada deskripsi' }}</p> -->
                        
                        <div class="category-stats">
                            <div class="category-stat">
                                <div class="category-stat-number">{{ $c->products_count }}</div>
                                <div class="category-stat-label">Produk</div>
                            </div>
                        </div>
                        
                        <div class="category-actions">
                            <!-- Tombol Lihat Produk -->
                            @if($c->products_count > 0)
                                <a href="{{ route('products') }}?category={{ $c->id }}" 
                                    class="btn btn-primary" title="Lihat Produk">
                                    <i class="fas fa-eye"></i>
                                </a>
                            @endif
                            
                            <!-- Tombol Edit -->
                            <button onclick="openEditModal({{ $c->id }}, '{{ $c->name }}', '{{ $c->description ?? '' }}')" 
                                class="btn btn-warning" title="Edit Kategori">
                                <i class="fas fa-edit"></i>
                            </button>

                            <!-- Tombol Hapus -->
                            <button onclick="openDeleteModal({{ $c->id }}, '{{ $c->name }}')" 
                                class="btn btn-danger" title="Hapus Kategori">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h3 class="empty-title">Belum Ada Kategori</h3>
                        <p class="empty-description">Silakan tambahkan kategori baru untuk mengelola produk Anda.</p>
                        <button onclick="document.getElementById('addCategoryModal').classList.add('show')" class="btn btn-primary">
                            <i class="fas fa-plus mr-2"></i>
                            <span>Tambah Kategori</span>
                        </button>
                    </div>
                @endif
            </div>
            
            <!-- No Results Message -->
            <div id="noResults" class="no-results">
                <i class="fas fa-search"></i>
                <h3>Tidak ada kategori ditemukan</h3>
                <p>Coba gunakan kata kunci pencarian lain</p>
            </div>
        </div>
    </main>

    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="modal-backdrop">
        <div class="modal-card">
            <div class="modal-header blue">
                <h2 class="modal-title">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Kategori
                </h2>
                <button class="close-btn" onclick="document.getElementById('addCategoryModal').classList.remove('show')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Nama Kategori" class="input" required>
                    <textarea name="description" placeholder="Deskripsi (opsional)" class="input" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-save mr-2"></i>
                        <span>Simpan</span>
                    </button>
                </form>
                <button onclick="document.getElementById('addCategoryModal').classList.remove('show')" class="btn" style="background: #f1f5f9; color: #64748b; width: 100%; margin-top: 12px;">
                    <i class="fas fa-times mr-2"></i>
                    <span>Batal</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Edit Category Modal -->
    <div id="editCategoryModal" class="modal-backdrop">
        <div class="modal-card">
            <div class="modal-header yellow">
                <h2 class="modal-title">
                    <i class="fas fa-edit"></i>
                    Edit Kategori
                </h2>
                <button class="close-btn" onclick="document.getElementById('editCategoryModal').classList.remove('show')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCategoryForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" id="edit-name" name="name" class="input" required>
                    <textarea id="edit-description" name="description" class="input" rows="3"></textarea>
                    <button type="submit" class="btn btn-warning w-full">
                        <i class="fas fa-save mr-2"></i>
                        <span>Update</span>
                    </button>
                </form>
                <button onclick="document.getElementById('editCategoryModal').classList.remove('show')" class="btn" style="background: #f1f5f9; color: #64748b; width: 100%; margin-top: 12px;">
                    <i class="fas fa-times mr-2"></i>
                    <span>Batal</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Delete Category Modal -->
    <div id="deleteCategoryModal" class="modal-backdrop">
        <div class="modal-card">
            <div class="modal-header" style="background: linear-gradient(135deg, #ef4444, #dc2626); color: white; border-bottom: none;">
                <h2 class="modal-title">
                    <i class="fas fa-trash-alt"></i>
                    Hapus Kategori
                </h2>
                <button class="close-btn" onclick="document.getElementById('deleteCategoryModal').classList.remove('show')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p id="deleteText" class="mb-4 text-gray-700"></p>
                <form id="deleteCategoryForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-full">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Ya, Hapus</span>
                    </button>
                </form>
                <button onclick="document.getElementById('deleteCategoryModal').classList.remove('show')" class="btn" style="background: #f1f5f9; color: #64748b; width: 100%; margin-top: 12px;">
                    <i class="fas fa-times mr-2"></i>
                    <span>Batal</span>
                </button>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(id, name, description){
            document.getElementById('editCategoryModal').classList.add('show');
            document.getElementById('editCategoryForm').action = '{{ url("admin/categories") }}/' + id;
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-description').value = description;
        }
        
        function openDeleteModal(id, name){
            document.getElementById('deleteCategoryModal').classList.add('show');
            document.getElementById('deleteCategoryForm').action = '{{ url("admin/categories") }}/' + id;
            document.getElementById('deleteText').textContent = "Apakah Anda yakin ingin menghapus kategori '" + name + "'? Semua produk dalam kategori ini juga akan terpengaruh.";
        }

        document.addEventListener('DOMContentLoaded', function(){
            const searchInput = document.getElementById('search-input');
            const sortFilter = document.getElementById('sort-filter');
            const categoriesContainer = document.getElementById('categoriesContainer');
            const noResults = document.getElementById('noResults');
            const emptyState = categoriesContainer.querySelector('.empty-state');
            let categoryCards = Array.from(categoriesContainer.querySelectorAll('.category-card'));
            
            // Search functionality
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    let visibleCount = 0;
                    
                    categoryCards.forEach(card => {
                        const categoryName = card.getAttribute('data-name');
                        
                        if (categoryName.includes(searchTerm)) {
                            card.style.display = '';
                            visibleCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });
                    
                    // Show/hide empty state and no results message
                    if (emptyState) {
                        emptyState.style.display = searchTerm ? 'none' : 'grid';
                    }
                    
                    if (visibleCount === 0 && searchTerm) {
                        noResults.style.display = 'block';
                    } else {
                        noResults.style.display = 'none';
                    }
                });
            }

            // Sort functionality
            if (sortFilter) {
                sortFilter.addEventListener('change', function() {
                    const sortValue = this.value;
                    
                    categoryCards.sort((a, b) => {
                        let aValue, bValue;
                        
                        switch(sortValue) {
                            case 'name':
                                aValue = a.getAttribute('data-name');
                                bValue = b.getAttribute('data-name');
                                return aValue.localeCompare(bValue);
                            case 'name-desc':
                                aValue = a.getAttribute('data-name');
                                bValue = b.getAttribute('data-name');
                                return bValue.localeCompare(aValue);
                            case 'products':
                                aValue = parseInt(a.getAttribute('data-products')) || 0;
                                bValue = parseInt(b.getAttribute('data-products')) || 0;
                                return bValue - aValue;
                            case 'products-desc':
                                aValue = parseInt(a.getAttribute('data-products')) || 0;
                                bValue = parseInt(b.getAttribute('data-products')) || 0;
                                return aValue - bValue;
                            default:
                                return 0;
                        }
                    });
                    
                    // Clear container and re-append sorted cards
                    while (categoriesContainer.firstChild) {
                        if (categoriesContainer.firstChild.classList && categoriesContainer.firstChild.classList.contains('empty-state')) {
                            break;
                        }
                        categoriesContainer.removeChild(categoriesContainer.firstChild);
                    }
                    
                    categoryCards.forEach(card => categoriesContainer.appendChild(card));
                });
            }

            // Close modals when clicking backdrop
            document.querySelectorAll('.modal-backdrop').forEach(back => {
                back.addEventListener('click', function(e){
                    if(e.target === back){
                        back.classList.remove('show');
                    }
                });
            });
        });
    </script>
</body>
</html>