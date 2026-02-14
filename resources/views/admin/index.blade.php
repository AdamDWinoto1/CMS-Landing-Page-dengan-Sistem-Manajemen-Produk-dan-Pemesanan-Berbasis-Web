<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin TokoKu</title>
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
            min-height: 100vh;
            margin: 0;
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
            width: 260px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            color: white;
            padding: 0;
            box-sizing: border-box;
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
            display: flex;
            align-items: center;
            padding: 14px 24px;
            color: white;
            text-decoration: none;
            margin: 0;
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
            padding: 30px; 
            box-sizing: border-box;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Header with logout button */
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            margin: 0;
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
        
        .logout-btn {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
            text-decoration: none;
            font-size: 14px;
            position: relative;
            overflow: hidden;
        }
        
        .logout-btn::before {
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
        
        .logout-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .logout-btn:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        }
        
        .breadcrumb {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            margin-bottom: 20px;
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
        
        /* Enhanced Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(15px);
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            animation: scaleIn 0.5s ease forwards;
            opacity: 0;
            transform: scale(0.9);
            text-align: center;
        }
        
        .stat-card:nth-child(1) { animation-delay: 0.1s; }
        .stat-card:nth-child(2) { animation-delay: 0.2s; }
        .stat-card:nth-child(3) { animation-delay: 0.3s; }
        
        @keyframes scaleIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
            transform: translate(30px, -30px);
        }
        
        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            margin: 0 auto 20px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-icon::after {
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
        
        .stat-card:hover .stat-icon::after {
            width: 100px;
            height: 100px;
        }
        
        .stat-card:hover .stat-icon {
            transform: rotate(10deg) scale(1.1);
        }
        
        .stat-icon.blue {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.4);
        }
        
        .stat-icon.green {
            background: linear-gradient(135deg, #10b981, #059669);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.4);
        }
        
        .stat-icon.red {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            box-shadow: 0 8px 20px rgba(239, 68, 68, 0.4);
        }
        
        .stat-number {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #1e293b, #334155);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            display: inline-block;
        }
        
        .stat-number::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            border-radius: 2px;
            transition: width 0.6s ease;
        }
        
        .stat-card:hover .stat-number::after {
            width: 100%;
        }
        
        .stat-label {
            color: #64748b;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Card */
        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
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
        
        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin: 0 0 20px;
            display: flex;
            align-items: center;
        }
        
        .card-title i {
            margin-right: 10px;
            color: #6366f1;
            font-size: 20px;
        }
        
        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }
        
        .action-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }
        
        .action-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, rgba(99, 102, 241, 0) 70%);
            border-radius: 50%;
            transform: translate(30px, -30px);
        }
        
        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .action-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(99, 102, 241, 0.3);
        }
        
        .action-card:hover .action-icon {
            transform: rotate(10deg) scale(1.1);
        }
        
        .action-title {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 16px;
            color: #1e293b;
        }
        
        .action-desc {
            color: #64748b;
            font-size: 14px;
        }
        
        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 16px 24px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            display: none;
            align-items: center;
            gap: 12px;
            z-index: 1000;
            animation: slideUp 0.4s ease;
        }
        
        @keyframes slideUp {
            from { transform: translateY(100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        /* Logout Modal */
        .logout-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .logout-modal.show {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-content {
            background: white;
            border-radius: 16px;
            padding: 30px;
            max-width: 450px;
            width: 90%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.7);
            transition: transform 0.3s ease;
        }
        
        .logout-modal.show .modal-content {
            transform: scale(1);
        }
        
        .modal-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .modal-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            box-shadow: 0 8px 16px rgba(239, 68, 68, 0.3);
            animation: pulse 2s infinite;
        }
        
        .modal-icon i {
            font-size: 28px;
            color: white;
        }
        
        .modal-title {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }
        
        .modal-body {
            color: #64748b;
            margin-bottom: 25px;
            line-height: 1.6;
        }
        
        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-cancel {
            background: #f1f5f9;
            color: #64748b;
        }
        
        .btn-cancel:hover {
            background: #e2e8f0;
        }
        
        .btn-logout {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }
        
        .btn-logout:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
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
            
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-actions {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                padding: 20px;
            }
            
            .modal-header {
                flex-direction: column;
                text-align: center;
            }
            
            .modal-icon {
                margin-right: 0;
                margin-bottom: 15px;
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
            <a href="{{ route('dashboard') }}" class="menu-item active">
                <i class="fas fa-home icon-menu"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('products') }}" class="menu-item">
                <i class="fas fa-box icon-menu"></i>
                <span>Produk</span>
            </a>
            <a href="{{ route('categories') }}" class="menu-item">
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
        <div class="dashboard-header">
            <h1 class="page-title">Dashboard</h1>
            <button type="button" class="logout-btn" id="logoutBtn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </button>
        </div>
        
        <div class="breadcrumb">
            <a href="#">Home</a> / <span>Dashboard</span>
        </div>
        
        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fas fa-box"></i>
                </div>
                <div class="stat-number" data-target="{{ $totalProducts }}">0</div>
                <div class="stat-label">Total Produk</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fas fa-folder"></i>
                </div>
                <div class="stat-number" data-target="{{ $totalCategories }}">0</div>
                <div class="stat-label">Kategori</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fas fa-tag"></i>
                </div>
                <div class="stat-number" data-target="{{ $totalDiscounts }}">0</div>
                <div class="stat-label">Diskon Aktif</div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card">
            <h2 class="card-title">
                <i class="fas fa-bolt"></i>
                Aksi Cepat
            </h2>
            <div class="quick-actions">
                <a href="{{ route('products') }}" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="action-title">Tambah Produk</div>
                    <div class="action-desc">Tambah produk baru ke katalog</div>
                </a>
                <a href="{{ route('categories') }}" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="action-title">Tambah Kategori</div>
                    <div class="action-desc">Buat kategori produk baru</div>
                </a>
            </div>
        </div>
    </main>

    <!-- Logout Modal -->
    <div class="logout-modal" id="logoutModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <h3 class="modal-title">Konfirmasi Logout</h3>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin keluar dari dashboard? Anda perlu login kembali untuk mengakses sistem.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" id="cancelLogout">
                    <i class="fas fa-times"></i>
                    Batal
                </button>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    @csrf
                    <button type="submit" class="btn btn-logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Ya, Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="successToast" class="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toastMessage">Operasi berhasil!</span>
    </div>

    <script>
        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            // Animate stat numbers
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(statNumber => {
                const target = parseInt(statNumber.getAttribute('data-target'));
                const increment = target / 50;
                let current = 0;
                
                const updateNumber = () => {
                    current += increment;
                    if (current < target) {
                        statNumber.textContent = Math.ceil(current);
                        requestAnimationFrame(updateNumber);
                    } else {
                        statNumber.textContent = target;
                    }
                };
                
                updateNumber();
            });
            
            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('.btn, .logout-btn, .action-card');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.pointerEvents = 'none';
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Utility function to show toast notification
        function showToast(message) {
            const toast = document.getElementById('successToast');
            document.getElementById('toastMessage').textContent = message;
            toast.style.display = 'flex';
            
            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => {
                    toast.style.display = 'none';
                    toast.style.opacity = '1';
                }, 400);
            }, 3000);
        }
        
        // Logout Modal
        const logoutBtn = document.getElementById('logoutBtn');
        const logoutModal = document.getElementById('logoutModal');
        const cancelLogout = document.getElementById('cancelLogout');
        
        // Show modal when logout button is clicked
        logoutBtn.addEventListener('click', () => {
            logoutModal.classList.add('show');
        });
        
        // Hide modal when cancel button is clicked
        cancelLogout.addEventListener('click', () => {
            logoutModal.classList.remove('show');
        });
        
        // Hide modal when clicking outside the modal content
        logoutModal.addEventListener('click', (e) => {
            if (e.target === logoutModal) {
                logoutModal.classList.remove('show');
            }
        });
    </script>
</body>
</html>