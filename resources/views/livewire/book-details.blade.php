<div class="book-details-wrapper">
    <div class="header-container">
        <h1 class="leftys">PUSTAKA LELUASA</h1>
        <div class="search-container">
            <input class="search" id="search" type="text" placeholder="Search"/>
        </div>
    </div>

    <div class="detail-container">
        <div class="book-image-section">
            <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" class="main-book-image">
        </div>
        
        <div class="book-info-section">
            <h2 class="detail-title">{{ $book->bookname }}</h2>
            
            <div class="detail-stats">
                <span class="stat-badge">
                   <x-heroicon-s-eye style="width: 20px; height: 20px;" />
                    {{ number_format($book->views) }} views
                </span>
            </div>

            <div class="detail-price">
                <span class="price-label">Harga:</span>
                <span class="price-value">Rp {{ number_format($book->price) }}</span>
            </div>

            <div class="detail-description">
                <h3>Tentang Buku Ini</h3>
                <p>{{ $book->description }}</p>
            </div>

            <div class="detail-actions">
                <button class="btn btn-primary">Beli Sekarang</button>
                <button class="btn btn-secondary">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <style>
        .book-details-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .detail-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            margin-top: 2rem;
        }

        @media (min-width: 768px) {
            .detail-container {
                grid-template-columns: 400px 1fr;
            }
        }

        .main-book-image {
            width: 100%;
            height: auto;
            border-radius: 0.75rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .main-book-image:hover {
            transform: scale(1.02);
        }

        .detail-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1a202c;
        }

        .stat-badge {
            background: #f7fafc;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.875rem;
            color: #4a5568;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .detail-price {
            margin: 2rem 0;
            padding: 1.5rem;
            background: #fff5f5;
            border-radius: 0.5rem;
            border-left: 4px solid #e53e3e;
        }

        .price-label {
            font-weight: 600;
            color: #718096;
            margin-right: 1rem;
        }

        .price-value {
            font-size: 1.75rem;
            font-weight: 800;
            color: #e53e3e;
        }

        .detail-description {
            margin-bottom: 3rem;
        }

        .detail-description h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2d3748;
        }

        .detail-description p {
            line-height: 1.8;
            color: #4a5568;
            font-size: 1.1rem;
        }

        .detail-actions {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            flex: 1;
        }

        .btn-primary {
            background: #e53e3e;
            color: white;
        }

        .btn-primary:hover {
            background: #c53030;
            box-shadow: 0 4px 14px rgba(229, 62, 62, 0.4);
        }

        .btn-secondary {
            background: #edf2f7;
            color: #2d3748;
        }

        .btn-secondary:hover {
            background: #e2e8f0;
        }
    </style>
</div>
