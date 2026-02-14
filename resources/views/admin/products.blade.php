<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Produk - Admin Kasisolusi</title>
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
        }
        
        .page-title {
            color: white;
            font-size: 32px;
            font-weight: 700;
            margin: 0 0 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .breadcrumb {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }
        
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.2s;
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
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
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
        
        /* Button */
        .btn { 
            padding:12px 20px; 
            border:none; 
            border-radius:10px; 
            cursor:pointer; 
            color:white; 
            display:inline-flex; 
            align-items:center; 
            gap:8px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 14px;
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
        
        .btn-danger { 
            background: linear-gradient(135deg, #ef4444, #dc2626);
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }
        
        .btn-danger:hover { 
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #6b7280, #4b5563);
            box-shadow: 0 4px 10px rgba(107, 114, 128, 0.3);
        }
        
        .btn-secondary:hover {
            background: linear-gradient(135deg, #4b5563, #374151);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(107, 114, 128, 0.4);
        }
        
        /* Search and Filter Section */
        .search-filter-section {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 24px;
            align-items: flex-end;
        }
        
        .search-container {
            flex: 1;
            min-width: 250px;
            position: relative;
        }
        
        .search-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        
        .search-input {
            width: 100%;
            padding: 12px 16px 12px 44px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            box-sizing: border-box;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }
        
        .search-input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            background: white;
        }
        
        .filter-container {
            display: flex;
            gap: 16px;
            align-items: flex-end;
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
        }
        
        .filter-select:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            background: white;
        }
        
        /* Table */
        .table-container {
            overflow-x: auto;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        table { 
            width:100%; 
            border-collapse: collapse; 
            background:rgba(255, 255, 255, 0.95); 
            border-radius:16px; 
            overflow:hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        th, td { 
            padding:16px; 
            border-bottom:1px solid rgba(229, 231, 235, 0.5); 
            text-align:left; 
            vertical-align:middle;
        }
        
        th { 
            background: linear-gradient(135deg, #1e293b, #334155);
            color:white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        th.sortable {
            cursor: pointer;
            user-select: none;
            position: relative;
            padding-right: 24px;
        }
        
        th.sortable::after {
            content: '\f0dc';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.5;
        }
        
        th.sort-asc::after {
            content: '\f0de';
            opacity: 1;
        }
        
        th.sort-desc::after {
            content: '\f0dd';
            opacity: 1;
        }
        
        td .text-ellipsis { 
            display:inline-block; 
            max-width: 220px; 
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis; 
        }
        
        tbody tr { 
            transition: all 0.2s ease;
        }
        
        tbody tr:hover { 
            background-color: rgba(99, 102, 241, 0.05);
        }
        
        /* Price column styles - PERUBAHAN UTAMA */
        .price-cell {
            min-width: 120px;
            max-width: 160px;
        }
        
        .price-container {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        
        .price-original {
            font-size: 12px;
            color: #9ca3af;
            text-decoration: line-through;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .price-discounted {
            font-size: 14px;
            font-weight: 700;
            color: #059669;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .price-regular {
            font-size: 14px;
            font-weight: 600;
            color: #1e293b;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* ensure buttons clickable */
        .action-buttons { 
            display: flex;
            gap: 8px;
        }
        
        .action-buttons button { 
            position:relative; 
            z-index:2;
            padding: 8px 12px;
            font-size: 12px;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 24px;
            gap: 8px;
        }
        
        .pagination-btn {
            padding: 8px 12px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.8);
            color: #4b5563;
            border: 1px solid #e5e7eb;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .pagination-btn:hover {
            background: white;
            color: #6366f1;
            border-color: #6366f1;
        }
        
        .pagination-btn.active {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            border-color: transparent;
        }
        
        .pagination-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .pagination-info {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            margin: 0 16px;
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
            padding:24px; 
            position:relative; 
            box-sizing:border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: modalFadeIn 0.3s ease;
        }
        
        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .modal-title {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .modal-title i {
            color: #6366f1;
        }
        
        .close-btn { 
            position:absolute; 
            right:16px; 
            top:16px; 
            font-size:20px; 
            cursor:pointer;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            color: #64748b;
        }
        
        .close-btn:hover {
            background: #f1f5f9;
            color: #1e293b;
        }
        
        /* small image */
        .thumb { 
            width:60px; 
            height:60px; 
            object-fit:cover; 
            border-radius:10px; 
            display:block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .thumb:hover {
            transform: scale(1.05);
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
        
        /* Discount section */
        .discount-section {
            margin-bottom: 16px;
        }
        
        .discount-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
        }
        
        /* No results message */
        .no-results {
            text-align: center;
            padding: 40px 20px;
            color: #6b7280;
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
            
            .search-filter-section {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-container {
                flex-wrap: wrap;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            /* Price cell responsive */
            .price-cell {
                min-width: 100px;
                max-width: 120px;
            }
            
            .price-original {
                font-size: 11px;
            }
            
            .price-discounted, .price-regular {
                font-size: 12px;
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
            <a href="{{ route('products') }}" class="menu-item active">
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

    <main class="main-content">
        <div class="page-header">
            <h1 class="page-title">Daftar Produk</h1>
            <div class="breadcrumb">
                <a href="{{ route('dashboard') }}">Dashboard</a> / <span>Produk</span>
            </div>
        </div>

        @if(session('success'))
            <div class="success-message">
                <i class="fas fa-check-circle text-xl"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="card">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Kelola Produk</h2>
                <button type="button" onclick="openAddModal()" class="btn btn-primary">
                    <i class="fas fa-plus"></i> 
                    <span>Tambah Produk</span>
                </button>
            </div>

            <!-- Search and Filter Section -->
            <div class="search-filter-section">
                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" id="searchInput" class="search-input" placeholder="Cari produk berdasarkan nama...">
                </div>
                
                <div class="filter-container">
                    <div class="filter-group">
                        <!-- <label class="filter-label">Filter Kategori</label> -->
                        <select id="categoryFilter" class="filter-select">
                            <option value="">Semua Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <!-- <label class="filter-label">Urutkan</label> -->
                        <select id="sortSelect" class="filter-select">
                            <option value="name-asc">Nama (A-Z)</option>
                            <option value="name-desc">Nama (Z-A)</option>
                            <option value="price-asc">Harga (Terendah)</option>
                            <option value="price-desc">Harga (Tertinggi)</option>
                            <option value="stock-desc">Stok (Terbanyak)</option>
                            <option value="stock-asc">Stok (Tersedikit)</option>
                        </select>
                    </div>
                    
                    <button type="button" onclick="resetFilters()" class="btn btn-secondary">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>
                </div>
            </div>

            <div class="table-container">
                <table id="productsTable">
                    <thead>
                        <tr>
                            <th><i class="fas fa-image mr-2"></i>Gambar</th>
                            <th class="sortable" data-sort="name"><i class="fas fa-tag mr-2"></i>Nama</th>
                            <th><i class="fas fa-align-left mr-2"></i>Deskripsi</th>
                            <th><i class="fas fa-folder mr-2"></i>Kategori</th>
                            <th class="sortable" data-sort="price"><i class="fas fa-money-bill-wave mr-2"></i>Harga</th>
                            <th class="sortable" data-sort="stock"><i class="fas fa-boxes mr-2"></i>Stok</th>
                            <th><i class="fas fa-percentage mr-2"></i>Diskon</th>
                            <th><i class="fas fa-link mr-2"></i>Link</th>
                            <th><i class="fab fa-whatsapp mr-2"></i>Link WhatsApp</th>
                            <th style="width:160px;"><i class="fas fa-cogs mr-2"></i>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="productsTableBody">
                        @foreach($products as $product)
                        <tr data-category-id="{{ $product->category_id }}" data-name="{{ strtolower($product->name) }}" data-price="{{ $product->price }}" data-stock="{{ $product->stock }}">
                            <td>
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="thumb">
                                @else
                                    <img src="https://via.placeholder.com/150?text=No+Image" class="thumb">
                                @endif
                            </td>
                            <td><span class="text-ellipsis" title="{{ $product->name }}">{{ $product->name }}</span></td>
                            <td><span class="text-ellipsis" title="{{ $product->description ?? '-' }}">{{ $product->description ?? '-' }}</span></td>
                            <td>{{ $product->category?->name ?? '-' }}</td>
                            <!-- PERUBAHAN UTAMA PADA KOLOM HARGA - TANPA BADGE -->
                            <td class="price-cell">
                                @if($product->discount_type && $product->discount_value > 0)
                                    @php
                                        $hargaAsli = $product->price;
                                        if($product->discount_type == 'percentage'){
                                            $hargaDiskon = $hargaAsli - ($hargaAsli * $product->discount_value / 100);
                                        } else {
                                            $hargaDiskon = $hargaAsli - $product->discount_value;
                                        }
                                    @endphp

                                    <div class="price-container">
                                        <span class="price-original">Rp {{ number_format($hargaAsli,0,",",".") }}</span>
                                        <span class="price-discounted">Rp {{ number_format(max($hargaDiskon,0),0,",",".") }}</span>
                                    </div>
                                @else
                                    <div class="price-container">
                                        <span class="price-regular">Rp {{ number_format($product->price,0,",",".") }}</span>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                @if($product->discount_type)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        {{ $product->discount_type == 'percentage' ? $product->discount_value.'%' : 'Rp '.number_format($product->discount_value,0,",",".") }}
                                    </span>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td>
                                @if($product->link)
                                    <a href="{{ $product->link }}" target="_blank" class="text-blue-600 hover:text-blue-800 hover:underline flex items-center">
                                        <i class="fas fa-external-link-alt mr-1"></i>
                                        <span class="truncate max-w-xs">{{ $product->link }}</span>
                                    </a>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td>
    @if($product->link_whatsapp)
        <a href="{{ $product->link_whatsapp }}" target="_blank" 
           class="text-green-600 hover:text-green-800 hover:underline flex items-center">
            <i class="fab fa-whatsapp mr-1"></i>
            <span class="truncate max-w-xs">{{ $product->link_whatsapp }}</span>
        </a>
    @else
        <span class="text-gray-400">-</span>
    @endif
</td>

                            <td class="action-buttons">
                                <!-- edit/delete buttons (type="button" to avoid accidental submits) -->
                                <button type="button" class="btn btn-primary edit-btn" data-id="{{ $product->id }}" title="Edit Produk">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <button type="button" class="btn btn-danger delete-btn" data-id="{{ $product->id }}" data-name="{{ htmlspecialchars($product->name, ENT_QUOTES) }}" title="Hapus Produk">
                                    <i class="fas fa-trash-alt"></i>
                                </button>

                                <!-- per-product JSON data in script tag (safe) -->
                                <script type="application/json" id="product-data-{{ $product->id }}">
                                    {!! json_encode($product) !!}
                                </script>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div id="noResults" class="no-results" style="display: none;">
                    <i class="fas fa-search"></i>
                    <h3>Tidak ada produk ditemukan</h3>
                    <p>Coba gunakan kata kunci pencarian lain atau reset filter</p>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="pagination">
                <button class="pagination-btn" id="prevPage" onclick="changePage(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div id="pageNumbers"></div>
                
                <button class="pagination-btn" id="nextPage" onclick="changePage(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
                <div class="pagination-info">
                    Menampilkan <span id="showingStart">1</span>-<span id="showingEnd">10</span> dari <span id="totalItems">{{ $products->count() }}</span> produk
                </div>
            </div>
        </div>
    </main>

    {{-- ADD Modal --}}
    <div id="addModal" class="modal-backdrop" aria-hidden="true">
        <div class="modal-card">
            <div class="modal-header">
                <h2 class="modal-title">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Produk
                </h2>
                <button class="close-btn" type="button" onclick="closeAddModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="input" name="name" placeholder="Nama Produk" required>
                <textarea class="input" name="description" placeholder="Deskripsi (opsional)" rows="3"></textarea>

                <div class="flex items-center gap-2">
                    <select class="input flex-1" name="category_id" required>
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                    <button type="button" onclick="openCategoryModal()" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>

                <input class="input" name="price" type="number" placeholder="Harga" required>
                <input class="input" name="stock" type="number" placeholder="Stok" required>

                <div class="discount-section">
                    <label class="block mb-2">Diskon Produk</label>
                    <select class="input" name="discount_type" id="add-discount-type" onchange="toggleAddDiscount()">
                        <option value="">Tanpa Diskon</option>
                        <option value="percentage">Persentase (%)</option>
                        <option value="nominal">Nominal (Rp)</option>
                    </select>
                    <input class="input" name="discount_value" id="add-discount-value" type="number" placeholder="Nilai diskon" style="display:none;">
                </div>

                <input class="input" name="link" type="text" placeholder="Link produk (opsional)">
                <input class="input" name="link_whatsapp" type="text" placeholder="Link WhatsApp (opsional)">
                <input class="input" name="image" type="file" accept="image/*">

                <div class="flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-save mr-2"></i>
                        <span>Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- EDIT Modal --}}
    <div id="editModal" class="modal-backdrop" aria-hidden="true">
        <div class="modal-card">
            <div class="modal-header">
                <h2 class="modal-title">
                    <i class="fas fa-edit"></i>
                    Edit Produk
                </h2>
                <button class="close-btn" type="button" onclick="closeEditModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input class="input" id="edit-name" name="name" required>
                <textarea class="input" id="edit-description" name="description" rows="3"></textarea>

                <select class="input" id="edit-category" name="category_id" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>

                <input class="input" id="edit-price" name="price" type="number" required>
                <input class="input" id="edit-stock" name="stock" type="number" required>

                <div class="discount-section">
                    <label class="block mb-2">Diskon Produk</label>
                    <select class="input" id="edit-discount-type" name="discount_type" onchange="toggleEditDiscount()">
                        <option value="">Tanpa Diskon</option>
                        <option value="percentage">Persentase (%)</option>
                        <option value="nominal">Nominal (Rp)</option>
                    </select>
                    <input class="input" id="edit-discount-value" name="discount_value" type="number" placeholder="Nilai diskon" style="display:none;">
                </div>

                <input class="input" id="edit-link" name="link" type="text" placeholder="Link produk (opsional)">
                <input class="input" id="edit-link-whatsapp" name="link_whatsapp" type="text" placeholder="Link WhatsApp (opsional)">
                <input class="input" name="image" type="file" accept="image/*">

                <div class="flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-save mr-2"></i>
                        <span>Update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- DELETE Modal --}}
    <div id="deleteModal" class="modal-backdrop" aria-hidden="true">
        <div class="modal-card">
            <div class="modal-header">
                <h2 class="modal-title">
                    <i class="fas fa-trash-alt"></i>
                    Hapus Produk
                </h2>
                <button class="close-btn" type="button" onclick="closeDeleteModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <p id="deleteText" class="mb-4 text-gray-700"></p>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-full">
                    <i class="fas fa-trash-alt mr-2"></i>
                    <span>Ya, Hapus</span>
                </button>
            </form>
        </div>
    </div>

    {{-- CATEGORY Modal --}}
    <div id="categoryModal" class="modal-backdrop" aria-hidden="true">
        <div class="modal-card">
            <div class="modal-header">
                <h2 class="modal-title">
                    <i class="fas fa-folder-plus"></i>
                    Tambah Kategori
                </h2>
                <button class="close-btn" type="button" onclick="closeCategoryModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <input class="input" name="name" placeholder="Nama Kategori" required>
                <textarea class="input" name="description" placeholder="Deskripsi (opsional)" rows="3"></textarea>
                
                <div class="flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-save mr-2"></i>
                        <span>Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

<script>
// Pagination variables
let currentPage = 1;
const itemsPerPage = 10;
let filteredProducts = [];
let sortDirection = {};

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Initialize filtered products with all products
    const allRows = document.querySelectorAll('#productsTableBody tr');
    allRows.forEach(row => {
        filteredProducts.push(row);
    });
    
    // Apply initial pagination
    applyPagination();
    
    // Setup event listeners
    setupEventListeners();
    
    // Setup modal event listeners
    setupModalListeners();
    
    // Add price cell animations
    setupPriceCellAnimations();
});

// Setup event listeners for search, filter, and sort
function setupEventListeners() {
    // Search input
    document.getElementById('searchInput').addEventListener('input', function() {
        filterProducts();
    });
    
    // Category filter
    document.getElementById('categoryFilter').addEventListener('change', function() {
        filterProducts();
    });
    
    // Sort select
    document.getElementById('sortSelect').addEventListener('change', function() {
        sortProducts();
    });
    
    // Sortable table headers
    document.querySelectorAll('th.sortable').forEach(th => {
        th.addEventListener('click', function() {
            const sortBy = this.dataset.sort;
            
            // Toggle sort direction
            sortDirection[sortBy] = sortDirection[sortBy] === 'asc' ? 'desc' : 'asc';
            
            // Update UI
            document.querySelectorAll('th.sortable').forEach(header => {
                header.classList.remove('sort-asc', 'sort-desc');
            });
            this.classList.add(sortDirection[sortBy] === 'asc' ? 'sort-asc' : 'sort-desc');
            
            // Update sort select to match
            const sortSelect = document.getElementById('sortSelect');
            sortSelect.value = sortBy + '-' + sortDirection[sortBy];
            
            // Apply sorting
            sortProducts();
        });
    });
}

// Setup price cell animations
function setupPriceCellAnimations() {
    // Add hover effect to price containers
    const priceContainers = document.querySelectorAll('.price-container');
    
    priceContainers.forEach(container => {
        container.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.2s ease';
        });
        
        container.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
}

// Filter products based on search and category
function filterProducts() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const categoryId = document.getElementById('categoryFilter').value;
    
    // Get all rows
    const allRows = Array.from(document.querySelectorAll('#productsTableBody tr'));
    
    // Reset filtered products
    filteredProducts = [];
    
    // Hide all rows first
    allRows.forEach(row => {
        row.style.display = 'none';
    });
    
    // Filter rows
    allRows.forEach(row => {
        const name = row.dataset.name;
        const rowCategoryId = row.dataset.categoryId;
        
        // Check if row matches search and category filter
        const matchesSearch = name.includes(searchTerm);
        const matchesCategory = !categoryId || rowCategoryId === categoryId;
        
        if (matchesSearch && matchesCategory) {
            filteredProducts.push(row);
        }
    });
    
    // Reset to first page
    currentPage = 1;
    
    // Apply pagination
    applyPagination();
    
    // Apply current sort
    const sortSelect = document.getElementById('sortSelect');
    if (sortSelect.value) {
        sortProducts();
    }
}

// Sort products
function sortProducts() {
    const sortValue = document.getElementById('sortSelect').value;
    if (!sortValue) return;
    
    const [sortBy, direction] = sortValue.split('-');
    
    // Sort filtered products
    filteredProducts.sort((a, b) => {
        let valueA = a.dataset[sortBy];
        let valueB = b.dataset[sortBy];
        
        // Convert to numbers if sorting by price or stock
        if (sortBy === 'price' || sortBy === 'stock') {
            valueA = parseFloat(valueA);
            valueB = parseFloat(valueB);
        }
        
        // Compare values
        if (valueA < valueB) return direction === 'asc' ? -1 : 1;
        if (valueA > valueB) return direction === 'asc' ? 1 : -1;
        return 0;
    });
    
    // Update sort direction for UI
    sortDirection[sortBy] = direction;
    
    // Update UI
    document.querySelectorAll('th.sortable').forEach(header => {
        header.classList.remove('sort-asc', 'sort-desc');
        if (header.dataset.sort === sortBy) {
            header.classList.add(direction === 'asc' ? 'sort-asc' : 'sort-desc');
        }
    });
    
    // Reset to first page
    currentPage = 1;
    
    // Apply pagination
    applyPagination();
}

// Apply pagination
function applyPagination() {
    const tableBody = document.getElementById('productsTableBody');
    const noResults = document.getElementById('noResults');
    
    // Check if there are any filtered products
    if (filteredProducts.length === 0) {
        // Hide all rows
        Array.from(tableBody.children).forEach(row => {
            row.style.display = 'none';
        });
        noResults.style.display = 'block';
        updatePaginationInfo(0, 0, 0);
        return;
    }
    
    noResults.style.display = 'none';
    
    // Hide all rows first
    Array.from(tableBody.children).forEach(row => {
        row.style.display = 'none';
    });
    
    // Calculate start and end indices
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, filteredProducts.length);
    
    // Show visible rows
    for (let i = startIndex; i < endIndex; i++) {
        if (filteredProducts[i]) {
            filteredProducts[i].style.display = '';
        }
    }
    
    // Update pagination controls
    updatePaginationControls();
    updatePaginationInfo(startIndex + 1, endIndex, filteredProducts.length);
}

// Update pagination controls
function updatePaginationControls() {
    const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
    const pageNumbers = document.getElementById('pageNumbers');
    const prevButton = document.getElementById('prevPage');
    const nextButton = document.getElementById('nextPage');
    
    // Clear page numbers
    pageNumbers.innerHTML = '';
    
    // Determine page range to display
    let startPage = Math.max(1, currentPage - 2);
    let endPage = Math.min(totalPages, startPage + 4);
    
    if (endPage - startPage < 4) {
        startPage = Math.max(1, endPage - 4);
    }
    
    // Add page numbers
    for (let i = startPage; i <= endPage; i++) {
        const pageButton = document.createElement('button');
        pageButton.className = 'pagination-btn' + (i === currentPage ? ' active' : '');
        pageButton.textContent = i;
        pageButton.onclick = function() {
            currentPage = i;
            applyPagination();
        };
        pageNumbers.appendChild(pageButton);
    }
    
    // Update prev/next buttons
    prevButton.disabled = currentPage === 1;
    nextButton.disabled = currentPage === totalPages || totalPages === 0;
}

// Update pagination info
function updatePaginationInfo(start, end, total) {
    document.getElementById('showingStart').textContent = total > 0 ? start : 0;
    document.getElementById('showingEnd').textContent = end;
    document.getElementById('totalItems').textContent = total;
}

// Change page
function changePage(direction) {
    const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
    const newPage = currentPage + direction;
    
    if (newPage >= 1 && newPage <= totalPages) {
        currentPage = newPage;
        applyPagination();
    }
}

// Reset filters
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('categoryFilter').value = '';
    document.getElementById('sortSelect').value = 'name-asc';
    
    // Reset sort direction
    sortDirection = {};
    
    // Reset UI
    document.querySelectorAll('th.sortable').forEach(header => {
        header.classList.remove('sort-asc', 'sort-desc');
    });
    
    // Reset filtered products
    const allRows = Array.from(document.querySelectorAll('#productsTableBody tr'));
    filteredProducts = allRows;
    
    // Show all rows first
    allRows.forEach(row => {
        row.style.display = '';
    });
    
    // Reset to first page
    currentPage = 1;
    
    // Apply pagination
    applyPagination();
}

// Modal functions
function openAddModal() {
    document.getElementById('addModal').classList.add('show');
}

function closeAddModal() {
    document.getElementById('addModal').classList.remove('show');
}

function openEditModalById(id) {
    // find JSON script and parse
    const script = document.getElementById('product-data-' + id);
    if(!script) return alert('Data produk tidak ditemukan');
    const data = JSON.parse(script.textContent);

    // populate form
    const form = document.getElementById('editForm');
    form.action = '{{ url("admin/products") }}/' + id;

    document.getElementById('edit-name').value = data.name ?? '';
    document.getElementById('edit-description').value = data.description ?? '';
    document.getElementById('edit-category').value = data.category_id ?? '';
    document.getElementById('edit-price').value = data.price ?? '';
    document.getElementById('edit-stock').value = data.stock ?? '';
    document.getElementById('edit-discount-type').value = data.discount_type ?? '';
    document.getElementById('edit-discount-value').value = data.discount_value ?? '';
    document.getElementById('edit-link').value = data.link ?? '';
    document.getElementById('edit-link-whatsapp').value = data.link_whatsapp ?? '';

    // show discount input if needed
    toggleEditDiscount();

    // show modal
    document.getElementById('editModal').classList.add('show');
}

function closeEditModal() {
    document.getElementById('editModal').classList.remove('show');
}

function openDeleteModalById(id, name) {
    const form = document.getElementById('deleteForm');
    form.action = '{{ url("admin/products") }}/' + id;
    document.getElementById('deleteText').textContent = "Apakah kamu yakin ingin menghapus produk '" + name + "'?";
    document.getElementById('deleteModal').classList.add('show');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.remove('show');
}

function openCategoryModal() {
    document.getElementById('categoryModal').classList.add('show');
}

function closeCategoryModal() {
    document.getElementById('categoryModal').classList.remove('show');
}

// Toggle discount inputs
function toggleAddDiscount() {
    const t = document.getElementById('add-discount-type').value;
    document.getElementById('add-discount-value').style.display = t ? 'block' : 'none';
}

function toggleEditDiscount() {
    const t = document.getElementById('edit-discount-type').value;
    document.getElementById('edit-discount-value').style.display = t ? 'block' : 'none';
}

// Setup modal event listeners
function setupModalListeners() {
    // Edit buttons
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            openEditModalById(id);
        });
    });

    // Delete buttons
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            const name = this.dataset.name || '';
            openDeleteModalById(id, name);
        });
    });

    // Close modals when clicking backdrop
    document.querySelectorAll('.modal-backdrop').forEach(back => {
        back.addEventListener('click', function(e) {
            if(e.target === back) {
                back.classList.remove('show');
            }
        });
    });
}
</script>
</body>
</html>