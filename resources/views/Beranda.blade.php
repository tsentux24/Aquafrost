<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AquaFrost Vaname — Segar Tetap Terjaga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root{
      --aqua:#aee3ff; /* biru muda */
      --deep:#0b63a6; /* biru intens */
      --ice:#f2fbff; /* putih kebiruan */
      --muted:#bfc9d3; /* abu muda */
      --fresh:#FF8E00; /* orange fresh */
      --gradient: linear-gradient(135deg, #0b63a6 0%, #1679c8 100%);
    }

    body{
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      background: linear-gradient(180deg, #f8feff 0%, #ffffff 100%);
      line-height: 1.6;
    }

    /* Modern Navbar */
    .navbar {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(20px);
      box-shadow: 0 4px 30px rgba(11, 99, 166, 0.08);
      padding: 1rem 0;
      transition: all 0.3s ease;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 700;
      color: var(--deep) !important;
      font-size: 1.3rem;
    }

    .navbar-brand img {
      width: 45px;
      height: 45px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(11, 99, 166, 0.1);
    }

    .nav-link {
      color: var(--deep) !important;
      font-weight: 500;
      padding: 0.6rem 1.2rem !important;
      border-radius: 10px;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
      position: relative;
    }

    .nav-link:hover, .nav-link:focus {
      background: linear-gradient(135deg, rgba(174, 227, 255, 0.3), rgba(255, 142, 0, 0.1));
      color: var(--deep) !important;
      transform: translateY(-2px);
    }

    .nav-link.active {
      background: linear-gradient(135deg, rgba(174, 227, 255, 0.4), rgba(255, 142, 0, 0.15));
      color: var(--deep) !important;
      font-weight: 600;
    }

    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 20%;
      width: 60%;
      height: 2px;
      background: var(--fresh);
      border-radius: 2px;
    }

    .dropdown-menu {
      border: none;
      border-radius: 16px;
      box-shadow: 0 12px 40px rgba(11, 99, 166, 0.15);
      padding: 0.8rem;
      backdrop-filter: blur(20px);
      background: rgba(255, 255, 255, 0.95);
    }

    .dropdown-item {
      border-radius: 10px;
      padding: 0.8rem 1.2rem;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .dropdown-item:hover, .dropdown-item:focus {
      background: linear-gradient(135deg, rgba(174, 227, 255, 0.3), rgba(255, 142, 0, 0.1));
      transform: translateX(5px);
    }

    /* Modern Typing Animation */
    .typing-container {
      display: inline-block;
      position: relative;
    }

    .typing-animation {
      display: inline-block;
      overflow: hidden;
      white-space: nowrap;
      margin: 0;
      letter-spacing: 0.05em;
      animation:
        typing 3.5s steps(40, end) infinite,
        blink-caret 0.75s step-end infinite;
      color: var(--fresh);
      font-weight: 700;
      border-right: 3px solid var(--fresh);
      padding-right: 4px;
      text-shadow: 0 2px 4px rgba(255, 142, 0, 0.2);
    }

    @keyframes typing {
      0% { width: 0 }
      50% { width: 100% }
      80% { width: 100% }
      100% { width: 0 }
    }

    @keyframes blink-caret {
      from, to { border-color: transparent }
      50% { border-color: var(--fresh); }
    }

    /* Modern Hero Section */
    .hero {
      padding: 6rem 0 4rem;
      background:
        linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(242, 251, 255, 0.9) 100%),
        url('/asset/img/img.png') center/cover;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%230b63a6' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
      opacity: 0.5;
    }

    .logo-placeholder {
      width: 90px;
      height: 90px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: white;
      box-shadow: 0 8px 30px rgba(11, 99, 166, 0.12);
      border: 1px solid rgba(174, 227, 255, 0.5);
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 800;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      line-height: 1.1;
      margin-bottom: 1rem;
    }

    .hero-subtitle {
      font-size: 1.3rem;
      color: var(--deep);
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .feature-list {
      list-style: none;
      padding: 0;
      margin: 1.5rem 0;
    }

    .feature-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 0.8rem;
      font-weight: 500;
      color: var(--deep);
      background: rgba(255, 255, 255, 0.7);
      padding: 0.8rem 1.2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(11, 99, 166, 0.08);
      transition: all 0.3s ease;
    }

    .feature-list li:hover {
      transform: translateX(5px);
      box-shadow: 0 6px 20px rgba(11, 99, 166, 0.12);
    }

    .cta-btn {
      background: var(--gradient);
      color: #fff;
      border-radius: 14px;
      padding: 14px 28px;
      border: none;
      font-weight: 600;
      box-shadow: 0 8px 25px rgba(11, 99, 166, 0.3);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .cta-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.5s;
    }

    .cta-btn:hover::before {
      left: 100%;
    }

    .cta-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(11, 99, 166, 0.4);
    }

    .btn-outline-primary {
      border-radius: 14px;
      padding: 14px 28px;
      border: 2px solid var(--deep);
      color: var(--deep);
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
      background: var(--deep);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(11, 99, 166, 0.2);
    }

    /* Modern Wave */
    .wave {
      position: relative;
      height: 140px;
      overflow: hidden;
    }

    .wave svg {
      width: 100%;
      height: 100%;
      display: block;
    }

    /* Modern Product Cards */
    .section-title {
      font-size: 2.5rem;
      font-weight: 800;
      text-align: center;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 1rem;
    }

    .section-subtitle {
      text-align: center;
      color: var(--muted);
      font-size: 1.1rem;
      margin-bottom: 3rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .card-product {
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(11, 99, 166, 0.1);
      transition: all 0.4s ease;
      overflow: hidden;
      background: white;
      position: relative;
    }

    .card-product::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--gradient);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .card-product:hover::before {
      transform: scaleX(1);
    }

    .card-product:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px rgba(11, 99, 166, 0.15);
    }

    .badge-ice {
      background: linear-gradient(135deg, #fff, #e6f8ff);
      border-radius: 12px;
      padding: 8px 14px;
      color: var(--deep);
      font-weight: 700;
      box-shadow: 0 4px 12px rgba(11, 99, 166, 0.1);
    }

    .product-image {
      border-radius: 16px;
      transition: transform 0.4s ease;
    }

    .card-product:hover .product-image {
      transform: scale(1.05);
    }

    .product-price {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--deep);
    }

    /* Modern Features Section */
    .feature-icon {
      width: 80px;
      height: 80px;
      border-radius: 20px;
      background: linear-gradient(135deg, #e9f8ff, #ffffff);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 25px rgba(11, 99, 166, 0.1);
      margin: 0 auto 1.5rem;
      transition: all 0.3s ease;
    }

    .feature-icon:hover {
      transform: rotate(5deg) scale(1.1);
      box-shadow: 0 12px 30px rgba(11, 99, 166, 0.15);
    }

    .feature-title {
      color: var(--deep);
      font-weight: 700;
      margin-bottom: 1rem;
      text-align: center;
    }

    .feature-desc {
      color: var(--muted);
      text-align: center;
      font-size: 0.95rem;
    }

    /* Modern Footer */
    .footer {
      background: linear-gradient(135deg, #f7fbff 0%, #e6f7ff 100%);
      padding: 4rem 0 2rem;
      position: relative;
      overflow: hidden;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--gradient);
    }

    .social-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      background: white;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(11, 99, 166, 0.1);
      transition: all 0.3s ease;
      color: var(--deep) !important;
      text-decoration: none;
    }

    .social-icon:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(11, 99, 166, 0.15);
      background: var(--gradient);
      color: white !important;
    }

    /* WhatsApp Float Button */
    .whatsapp-float {
      position: fixed;
      width: 70px;
      height: 70px;
      bottom: 30px;
      right: 30px;
      background: linear-gradient(135deg, #25d366, #20ba5a);
      color: white;
      border-radius: 50%;
      text-align: center;
      font-size: 32px;
      box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
      z-index: 100;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
    }

    .whatsapp-float:hover {
      transform: scale(1.1) rotate(5deg);
      box-shadow: 0 12px 30px rgba(37, 211, 102, 0.6);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }

      .hero {
        padding: 4rem 0 2rem;
      }

      .section-title {
        font-size: 2rem;
      }

      .navbar-brand {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 576px) {
      .hero {
        padding: 3rem 0 1rem;
      }

      .hero-title {
        font-size: 2rem;
      }

      .cta-btn, .btn-outline-primary {
        padding: 12px 20px;
        font-size: 0.9rem;
      }
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/asset/img/logo.png" alt="AquaFrost">
        <div>
          <span>AquaFrost Vaname</span>
          <div class="typing-container">
            <span class="typing-animation">Segarnya Terjaga</span>
          </div>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="bi bi-house-door"></i>
              Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-newspaper"></i>
              Berita
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-gear"></i>
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="layananDropdown">
              <li><a class="dropdown-item" href="#">
                <i class="bi bi-building"></i>
                Hotel & Restoran
              </a></li>
              <li><a class="dropdown-item" href="#">
                <i class="bi bi-house-heart"></i>
                Rumah Tangga
              </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-building"></i>
              Perusahaan
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6">
          <ul class="feature-list">
            <li><i class="bi bi-box-seam text-primary"></i> Vacuum pack & es batu khusus</li>
            <li><i class="bi bi-snow text-primary"></i> Penyimpanan -18°C optimal</li>
            <li><i class="bi bi-truck text-primary"></i> Pengiriman cepat & aman</li>
          </ul>

          <div class="d-flex flex-wrap gap-3 mt-4">
            <button class="cta-btn me-2" data-bs-toggle="modal" data-bs-target="#orderModal">
              <i class="bi bi-cart3 me-2"></i>Pesan Sekarang
            </button>
            <a href="#products" class="btn btn-outline-primary">
              <i class="bi bi-grid me-2"></i>Lihat Produk
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="wave">
      <svg viewBox="0 0 1440 320">
        <path fill="#f2fbff" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,176C320,192,400,192,480,170.7C560,149,640,107,720,101.3C800,96,880,128,960,165.3C1040,203,1120,245,1200,250.7C1280,256,1360,224,1400,208L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
      </svg>
    </div>
  </header>

  <!-- PRODUCTS -->
  <section id="products" class="py-5">
    <div class="container">
      <h2 class="section-title">Produk Unggulan Kami</h2>
      <p class="section-subtitle">Pilih varian terbaik sesuai kebutuhan Anda, dari ukuran ritel hingga khusus restoran</p>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card card-product p-4 h-100">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="badge-ice">Best Seller</span>
              <div class="text-end">
                <div class="product-price">Rp 90.000</div>
                <div style="font-size:0.8rem;color:var(--muted)">/1 kg</div>
              </div>
            </div>
            <img src="https://images.unsplash.com/photo-1528825871115-3581a5387919?q=80&w=900&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" class="img-fluid product-image my-3" alt="udang vaname">
            <h5 class="mb-2 fw-bold">Udang Vaname Beku</h5>
            <p class="text-muted small mb-3">Vacuum pack, kualitas premium, siap masak dengan cita rasa terbaik.</p>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
              <button class="btn btn-sm cta-btn" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan</button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card card-product p-4 h-100">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="badge-ice">Popular</span>
              <div class="text-end">
                <div class="product-price">Rp 110.000</div>
                <div style="font-size:0.8rem;color:var(--muted)">/1 kg (Jumbo)</div>
              </div>
            </div>
            <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=900&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" class="img-fluid product-image my-3" alt="udang jumbo">
            <h5 class="mb-2 fw-bold">Udang Premium Jumbo</h5>
            <p class="text-muted small mb-3">Ukuran besar, cocok untuk restoran & acara spesial keluarga.</p>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
              <button class="btn btn-sm cta-btn" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan</button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card card-product p-4 h-100">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="badge-ice">Ready</span>
              <div class="text-end">
                <div class="product-price">Rp 55.000</div>
                <div style="font-size:0.8rem;color:var(--muted)">/500 gr</div>
              </div>
            </div>
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=900&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" class="img-fluid product-image my-3" alt="udang kupas">
            <h5 class="mb-2 fw-bold">Udang Kupas Beku</h5>
            <p class="text-muted small mb-3">Praktis & hemat waktu, siap olah tanpa repot.</p>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
              <button class="btn btn-sm cta-btn" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan</button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card card-product p-4 h-100">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="badge-ice">Promo</span>
              <div class="text-end">
                <div class="product-price">Rp 160.000</div>
                <div style="font-size:0.8rem;color:var(--muted)">/2 kg</div>
              </div>
            </div>
            <img src="https://images.unsplash.com/photo-1617191512410-8c5a5c60d6d1?q=80&w=900&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" class="img-fluid product-image my-3" alt="paket udang">
            <h5 class="mb-2 fw-bold">Paket Hemat Akhir Pekan</h5>
            <p class="text-muted small mb-3">Gabungan pilihan favorit keluarga dengan harga spesial.</p>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
              <button class="btn btn-sm cta-btn" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-icon">
            <i class="bi bi-shield-check fs-2 text-primary"></i>
          </div>
          <h5 class="feature-title">Segar & Terjaga</h5>
          <p class="feature-desc">Dikemas vacuum, penyimpanan -18°C untuk menjaga kerenyahan dan rasa alami udang.</p>
        </div>
        <div class="col-md-4">
          <div class="feature-icon">
            <i class="bi bi-lightning-charge fs-2 text-primary"></i>
          </div>
          <h5 class="feature-title">Pengiriman Cepat</h5>
          <p class="feature-desc">Layanan kurir dingin & pilihan ekspres untuk menjaga kesegaran sampai tujuan.</p>
        </div>
        <div class="col-md-4">
          <div class="feature-icon">
            <i class="bi bi-building fs-2 text-primary"></i>
          </div>
          <h5 class="feature-title">B2B & Retail</h5>
          <p class="feature-desc">Melayani pesanan restoran, katering, dan pelanggan rumahan dengan kualitas sama.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ORDER & CONTACT -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h2 class="section-title text-start">Pesan Sekarang</h2>
          <p class="text-muted mb-4">Isi form atau hubungi via WhatsApp untuk konfirmasi stok & pengiriman cepat.</p>
          <ul class="feature-list">
            <li>📦 Vacuum pack & es gel khusus</li>
            <li>🧊 Penyimpanan optimal -18°C</li>
            <li>🚚 Pilih antar instan atau ekspedisi dingin</li>
          </ul>
          <a href="https://wa.me/6281234567890?text=Saya%20ingin%20memesan%20AquaFrost%20Vaname" target="_blank" class="cta-btn mt-3">
            <i class="bi bi-whatsapp me-2"></i>Chat WhatsApp
          </a>
        </div>
        <div class="col-lg-6">
          <div class="card p-4" style="border-radius:20px;box-shadow:0 15px 40px rgba(11,99,166,0.1); border: none;">
            <h5 class="mb-3 text-center" style="color:var(--deep)">Form Pemesanan</h5>
            <form id="orderForm">
              <div class="mb-3">
                <label class="form-label small fw-semibold">Nama Lengkap</label>
                <input class="form-control" placeholder="Masukkan nama lengkap" required style="border-radius:12px; padding: 12px;">
              </div>
              <div class="mb-3 row">
                <div class="col-7">
                  <label class="form-label small fw-semibold">Produk</label>
                  <select class="form-select" style="border-radius:12px; padding: 12px;">
                    <option>Udang Vaname Beku - 1 kg</option>
                    <option>Udang Premium Jumbo - 1 kg</option>
                    <option>Udang Kupas Beku - 500 gr</option>
                    <option>Paket Hemat 2 kg</option>
                  </select>
                </div>
                <div class="col-5">
                  <label class="form-label small fw-semibold">Quantity</label>
                  <input type="number" class="form-control" value="1" min="1" style="border-radius:12px; padding: 12px;">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Alamat Pengiriman</label>
                <input class="form-control" placeholder="Alamat lengkap pengiriman" required style="border-radius:12px; padding: 12px;">
              </div>
              <div class="d-flex gap-2">
                <button type="submit" class="cta-btn flex-grow-1">Kirim Pesanan</button>
                <button type="button" class="btn btn-outline-secondary" id="clearBtn" style="border-radius:12px; padding: 12px 20px;">Clear</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0 text-lg-start">
          <h4 class="fw-bold mb-2" style="color:var(--deep)">AquaFrost Vaname</h4>
          <p class="text-muted mb-0">Segar Terjaga, Cita Rasa Optimal — Maluku Utara</p>
        </div>
        <div class="col-lg-6">
          <div class="d-flex justify-content-center justify-content-lg-end gap-3">
            <a href="https://instagram.com/AquaFrost" target="_blank" class="social-icon">
              <i class="bi bi-instagram fs-5"></i>
            </a>
            <a href="https://facebook.com/AquaFrost" target="_blank" class="social-icon">
              <i class="bi bi-facebook fs-5"></i>
            </a>
            <a href="https://tiktok.com/@AquaFrost" target="_blank" class="social-icon">
              <i class="bi bi-tiktok fs-5"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="mt-4 pt-3 border-top border-light">
        <small class="text-muted">© 2025 AquaFrost Vaname — Menjaga Kesegaran Setiap Saat</small>
      </div>
    </div>
  </footer>

  <!-- ORDER MODAL -->
  <div class="modal fade" id="orderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4" style="border-radius:20px;">
        <div class="modal-body text-center">
          <div class="feature-icon mx-auto mb-3">
            <i class="bi bi-cart-check fs-2 text-primary"></i>
          </div>
          <h5 class="mb-2">Pilih produk dan hubungi via WhatsApp</h5>
          <p class="text-muted small mb-4">Kami akan konfirmasi stok & biaya kirim secepatnya.</p>
          <a href="https://wa.me/6281234567890?text=Halo%20AquaFrost%2C%20saya%20ingin%20memesan" class="cta-btn">
            <i class="bi bi-whatsapp me-2"></i>Chat WhatsApp Sekarang
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Form handler
    document.getElementById('orderForm')?.addEventListener('submit', function(e){
      e.preventDefault();
      window.open('https://wa.me/6281234567890?text=Saya%20ingin%20memesan%20AquaFrost%20Vaname','_blank')
    })

    document.getElementById('clearBtn')?.addEventListener('click', function(){
      document.getElementById('orderForm').reset()
    })

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        navbar.style.boxShadow = '0 4px 30px rgba(11, 99, 166, 0.1)';
      } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        navbar.style.boxShadow = '0 2px 20px rgba(11, 99, 166, 0.08)';
      }
    });
  </script>

  <a href="https://wa.me/6282346345006?text=Halo%20AquaFrost%2C%20saya%20butuh%20informasi%20produk"
     class="whatsapp-float" target="_blank">
     <i class="bi bi-whatsapp"></i>
  </a>
</body>
</html>
