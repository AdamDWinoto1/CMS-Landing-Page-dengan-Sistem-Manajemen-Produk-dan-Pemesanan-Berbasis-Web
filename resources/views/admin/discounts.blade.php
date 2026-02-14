<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon - Admin Kasisolusi</title>
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
            color: #f59e0b;
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
        
        tbody tr { 
            transition: all 0.2s ease;
        }
        
        tbody tr:hover { 
            background-color: rgba(99, 102, 241, 0.05);
        }
        
        /* Discount badge */
        .discount-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .discount-badge.percentage {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }
        
        .discount-badge.nominal {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }
        
        /* Price */
        .original-price {
            text-decoration: line-through;
            color: #9ca3af;
            font-size: 14px;
        }
        
        .discount-price {
            color: #10b981;
            font-weight: 600;
            font-size: 16px;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #64748b;
        }
        
        .empty-state i {
            font-size: 48px;
            margin-bottom: 16px;
            color: #cbd5e1;
        }
        
        .empty-state h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #475569;
        }
        
        .empty-state p {
            font-size: 14px;
            color: #64748b;
        }
        
        /* No results message */
        .no-results {
            text-align: center;
            padding: 40px 20px;
            color: #6b7280;
            display: none;
        }
        
        .no-results i {
            font-size: 48px;
            margin-bottom: 16px;
            opacity: 0.5;
        }
        
        /* Link */
        .product-link {
            color: #3b82f6;
            text-decoration: none;
            display: flex;
            align-items: center;
            max-width: 200px;
        }
        
        .product-link:hover {
            color: #2563eb;
            text-decoration: underline;
        }
        
        .product-link i {
            margin-right: 4px;
            font-size: 12px;
        }
        
        .product-link .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* WhatsApp Link */
        .whatsapp-link {
            color: #25d366;
            text-decoration: none;
            display: flex;
            align-items: center;
            max-width: 200px;
        }
        
        .whatsapp-link:hover {
            color: #128c7e;
            text-decoration: underline;
        }
        
        .whatsapp-link i {
            margin-right: 4px;
            font-size: 12px;
        }
        
        .whatsapp-link .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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
            
            .card {
                padding: 16px;
            }
            
            th, td {
                padding: 12px 8px;
                font-size: 14px;
            }
            
            .search-filter-section {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-container {
                flex-wrap: wrap;
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
            <a href="{{ route('categories') }}" class="menu-item">
                <i class="fas fa-folder icon-menu"></i>
                <span>Kategori</span>
            </a>
            <a href="{{ route('discounts') }}" class="menu-item active">
                <i class="fas fa-tag icon-menu"></i>
                <span>Diskon</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-header">
            <h1 class="page-title">Daftar Produk Diskon</h1>
            <div class="breadcrumb">
                <a href="{{ route('dashboard') }}">Dashboard</a> / <span>Diskon</span>
            </div>
        </div>

        <div class="card">
            <h2 class="card-title">
                <i class="fas fa-percentage"></i>
                Produk dengan Diskon Aktif
            </h2>
            
            <!-- Search and Filter Section -->
            <div class="search-filter-section">
                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" id="searchInput" class="search-input" placeholder="Cari produk diskon...">
                </div>
                
                <div class="filter-container">
                    <div class="filter-group">
                        <label class="filter-label">Filter Kategori</label>
                        <select id="categoryFilter" class="filter-select">
                            <option value="">Semua Kategori</option>
                            @foreach($categories ?? [] as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label class="filter-label">Urutkan</label>
                        <select id="sortSelect" class="filter-select">
                            <option value="name-asc">Nama (A-Z)</option>
                            <option value="name-desc">Nama (Z-A)</option>
                            <option value="discount-asc">Diskon (Terkecil)</option>
                            <option value="discount-desc">Diskon (Terbesar)</option>
                            <option value="price-asc">Harga (Terendah)</option>
                            <option value="price-desc">Harga (Tertinggi)</option>
                        </select>
                    </div>
                    
                    <button type="button" onclick="resetFilters()" class="btn btn-secondary">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>
                </div>
            </div>
            
            <div class="table-container">
                <table id="discountsTable">
                    <thead>
                        <tr>
                            <th><i class="fas fa-tag mr-2"></i>Produk</th>
                            <th><i class="fas fa-folder mr-2"></i>Kategori</th>
                            <th class="sortable" data-sort="price"><i class="fas fa-money-bill-wave mr-2"></i>Harga Asli</th>
                            <th><i class="fas fa-money-check-alt mr-2"></i>Harga Diskon</th>
                            <th class="sortable" data-sort="discount"><i class="fas fa-percentage mr-2"></i>Diskon</th>
                            <th><i class="fas fa-link mr-2"></i>Link</th>
                            <th><i class="fab fa-whatsapp mr-2"></i>Link WhatsApp</th>
                        </tr>
                    </thead>
                    <tbody id="discountsTableBody">
                        @forelse($products as $p)
                            @php
                                $hargaAsli = $p->price;
                                if($p->discount_type == 'percentage'){
                                    $hargaDiskon = $hargaAsli - ($hargaAsli * $p->discount_value / 100);
                                    $diskonValue = $p->discount_value . '%';
                                } else {
                                    $hargaDiskon = $hargaAsli - $p->discount_value;
                                    $diskonValue = 'Rp ' . number_format($p->discount_value,0,",",".");
                                }
                                
                                // For sorting purposes
                                $discountSortValue = $p->discount_type == 'percentage' ? $p->discount_value : ($p->discount_value / $p->price * 100);
                            @endphp
                            <tr data-category-id="{{ $p->category_id }}" data-name="{{ strtolower($p->name) }}" data-price="{{ $p->price }}" data-discount="{{ $discountSortValue }}">
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->category?->name ?? '-' }}</td>
                                <td>
                                    <span class="original-price">Rp {{ number_format($hargaAsli,0,",",".") }}</span>
                                </td>
                                <td>
                                    <span class="discount-price">Rp {{ number_format(max($hargaDiskon,0),0,",",".") }}</span>
                                </td>
                                <td>
                                    @if($p->discount_type == 'percentage')
                                        <span class="discount-badge percentage">{{ $diskonValue }}</span>
                                    @else
                                        <span class="discount-badge nominal">{{ $diskonValue }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if($p->link)
                                        <a href="{{ $p->link }}" target="_blank" class="product-link">
                                            <i class="fas fa-external-link-alt"></i>
                                            <span class="truncate">{{ $p->link }}</span>
                                        </a>
                                    @else
                                        <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($p->link_whatsapp)
                                        <a href="{{ $p->link_whatsapp }}" target="_blank" class="whatsapp-link">
                                            <i class="fab fa-whatsapp"></i>
                                            <span class="truncate">{{ $p->link_whatsapp }}</span>
                                        </a>
                                    @else
                                        <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    <div class="empty-state">
                                        <i class="fas fa-tag"></i>
                                        <h3>Belum Ada Produk Diskon</h3>
                                        <p>Belum ada produk yang memiliki diskon aktif saat ini.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
                <div id="noResults" class="no-results">
                    <i class="fas fa-search"></i>
                    <h3>Tidak ada produk diskon ditemukan</h3>
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
                    Menampilkan <span id="showingStart">1</span>-<span id="showingEnd">10</span> dari <span id="totalItems">{{ $products->count() }}</span> produk diskon
                </div>
            </div>
        </div>
    </main>

<script>
// Pagination variables
let currentPage = 1;
const itemsPerPage = 10;
let filteredProducts = [];
let sortDirection = {};

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Initialize filtered products with all products
    const allRows = document.querySelectorAll('#discountsTableBody tr');
    allRows.forEach(row => {
        filteredProducts.push(row);
    });
    
    // Apply initial pagination
    applyPagination();
    
    // Setup event listeners
    setupEventListeners();
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

// Filter products based on search and category
function filterProducts() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const categoryId = document.getElementById('categoryFilter').value;
    
    // Get all rows
    const allRows = Array.from(document.querySelectorAll('#discountsTableBody tr'));
    
    // Reset filtered products
    filteredProducts = [];
    
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
        
        // Convert to numbers if sorting by price or discount
        if (sortBy === 'price' || sortBy === 'discount') {
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
    const tableBody = document.getElementById('discountsTableBody');
    const noResults = document.getElementById('noResults');
    const emptyState = tableBody.querySelector('.empty-state');
    
    // Clear table but preserve empty state if it exists
    while (tableBody.firstChild) {
        if (tableBody.firstChild.classList && tableBody.firstChild.classList.contains('empty-state')) {
            emptyState = tableBody.firstChild;
            break;
        }
        tableBody.removeChild(tableBody.firstChild);
    }
    
    // Check if there are any filtered products
    if (filteredProducts.length === 0) {
        // Show no results message instead of empty state
        if (emptyState) {
            emptyState.style.display = 'none';
        }
        noResults.style.display = 'block';
        updatePaginationInfo(0, 0, 0);
        return;
    }
    
    // Hide both empty state and no results
    if (emptyState) {
        emptyState.style.display = 'none';
    }
    noResults.style.display = 'none';
    
    // Calculate start and end indices
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, filteredProducts.length);
    
    // Add visible rows to table
    for (let i = startIndex; i < endIndex; i++) {
        tableBody.appendChild(filteredProducts[i]);
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
    const allRows = Array.from(document.querySelectorAll('#discountsTableBody tr'));
    filteredProducts = allRows;
    
    // Reset to first page
    currentPage = 1;
    
    // Apply pagination
    applyPagination();
}
</script>
</body>
</html>