<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNET - Wifi ne wong dewek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling Navbar Transparan ke Putih Semi-Transparan */
        #mainNavbar {
            transition: all 0.35s ease;
            background-color: transparent;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        #mainNavbar .nav-link {
            color: rgba(255, 255, 255, 0.92);
            font-weight: 500;
            transition: color 0.3s ease;
        }
        #mainNavbar .nav-link:hover {
            color: #ffffff;
        }
        #mainNavbar.scrolled {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding-top: 8px;
            padding-bottom: 8px;
        }
        #mainNavbar.scrolled .nav-link {
            color: #212529;
        }
        #mainNavbar.scrolled .nav-link:hover {
            color: #0d6efd;
        }

        /* Hero Section dengan Animasi Meteor dari Atas-Kiri ke Bawah-Kiri */
        .hero-animated {
            position: relative;
            background: linear-gradient(135deg, #0a58ca 0%, #0d6efd 50%, #084298 100%);
            overflow: hidden;
            padding-top: 120px;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .lines-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        .line {
            position: absolute;
            width: 2px;
            height: 120px;
            background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.75) 50%, rgba(255,255,255,0) 100%);
            border-radius: 50%;
            opacity: 0;
            transform: rotate(35deg);
            animation: meteorFall 4s linear infinite;
        }
        .line:nth-child(1) { top: -150px; left: 10%; animation-duration: 3.5s; animation-delay: 0s; height: 140px; }
        .line:nth-child(2) { top: -150px; left: 30%; animation-duration: 4.8s; animation-delay: 1.2s; height: 100px; }
        .line:nth-child(3) { top: -150px; left: 55%; animation-duration: 3.2s; animation-delay: 2.5s; height: 160px; }
        .line:nth-child(4) { top: -150px; left: 75%; animation-duration: 4.2s; animation-delay: 0.7s; height: 120px; }
        .line:nth-child(5) { top: -150px; left: 90%; animation-duration: 3.8s; animation-delay: 3.1s; height: 130px; }
        .line:nth-child(6) { top: -150px; left: 20%; animation-duration: 5.1s; animation-delay: 1.8s; height: 110px; }
        .line:nth-child(7) { top: -150px; left: 68%; animation-duration: 4.0s; animation-delay: 3.9s; height: 150px; }

        @keyframes meteorFall {
            0% {
                transform: translateY(0) translateX(0) rotate(35deg);
                opacity: 0;
            }
            15% {
                opacity: 0.85;
            }
            85% {
                opacity: 0.85;
            }
            100% {
                transform: translateY(110vh) translateX(-35vw) rotate(35deg);
                opacity: 0;
            }
        }

        /* Efek Hidden Awal & Animasi Muncul saat di-scroll (Scroll Reveal) */
        .reveal-section {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .reveal-section.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <!-- Navbar Transparan -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="logo.png" alt="VNET Logo" height="40">
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#beranda">Beranda</a>
                <a class="nav-link" href="#paket">Paket</a>
                <a class="nav-link" href="#speedtest">Cek Kecepatan</a>
                <a class="nav-link" href="#daftar">Mulai Berlangganan</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="beranda" class="hero-animated text-white text-center pb-5" style="min-height: 100vh; display: flex; align-items: center;">
        <div class="lines-bg">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <div class="container hero-content">
            <!-- Logo VNET Utama -->
            <div class="mb-3">
                <img src="logo.png" alt="Logo VNET" class="img-fluid" style="max-height: 180px; filter: drop-shadow(0 4px 10px rgba(0,0,0,0.4));">
            </div>

            <!-- Tagline Utama -->
            <h1 class="fw-bold mt-2 text-white" style="font-size: 2.2rem; text-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                Koneksi Cepat, Stabil & Terpercaya
            </h1>
            <p class="fs-4 fw-semibold text-white-50 mb-3">
                Bebas Device & Gratis Biaya Pemasangan!
            </p>
            
            <!-- Paragraf Pengantar -->
            <p class="text-white col-md-8 mx-auto mb-4" style="font-size: 1.15rem; line-height: 1.6; opacity: 0.9;">
                VNET hadir sebagai solusi koneksi internet andalan warga dengan performa stabil, tanpa batasan kuota, serta layanan responsif demi kenyamanan aktivitas digital harian Anda.
            </p>

            <!-- Tombol Aksi -->
            <a href="#paket" class="btn btn-light btn-lg text-primary fw-bold px-4 py-3 shadow-sm rounded-pill">Lihat Pilihan Paket →</a>
        </div>
    </header>

    <!-- Paket Internet Sesuai Brosur Asli -->
    <section id="paket" class="container py-5 reveal-section" style="min-height: 80vh; display: flex; flex-direction: column; justify-content: center;">
        <h2 class="text-center mb-5 fw-bold">Pilihan Paket Internet</h2>
        <div class="row justify-content-center">
            
            <!-- Paket 1: 10 Mbps -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-lg border-0 text-center p-4 h-100 rounded-4">
                    <h5 class="text-muted fw-bold">PAKET REGULER</h5>
                    <h2 class="fw-bold my-2">10 <small class="fs-6 text-muted">Mbps</small></h2>
                    <h4 class="text-primary fw-bold mb-4">Rp 125.000<small class="fs-6 text-muted">/bulan</small></h4>
                    <ul class="list-unstyled text-start small mb-4">
                        <li class="mb-2">✓ Internet Stabil</li>
                        <li class="mb-2">✓ Kecepatan Tinggi</li>
                        <li class="mb-2">✓ Bebas Device & Tanpa Batas</li>
                    </ul>
                    <a href="#daftar" class="btn btn-outline-primary mt-auto w-100 fw-bold">Pilih Paket →</a>
                </div>
            </div>

            <!-- Paket 2: 20 Mbps -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-lg border-0 text-center p-4 h-100 rounded-4">
                    <h5 class="text-muted fw-bold">PAKET FAMILY</h5>
                    <h2 class="fw-bold my-2">20 <small class="fs-6 text-muted">Mbps</small></h2>
                    <h4 class="text-primary fw-bold mb-4">Rp 150.000<small class="fs-6 text-muted">/bulan</small></h4>
                    <ul class="list-unstyled text-start small mb-4">
                        <li class="mb-2">✓ Internet Stabil</li>
                        <li class="mb-2">✓ Aman dan Terpercaya</li>
                        <li class="mb-2">✓ Bebas Device & Tanpa Batas</li>
                    </ul>
                    <a href="#daftar" class="btn btn-outline-primary mt-auto w-100 fw-bold">Pilih Paket →</a>
                </div>
            </div>

            <!-- Paket 3: 30 Mbps (Populer) -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-lg border border-primary border-2 text-center p-4 h-100 rounded-4 position-relative">
                    <span class="badge bg-primary position-absolute top-0 start-50 translate-middle px-3 py-2 rounded-pill shadow-sm">Populer</span>
                    <h5 class="text-muted fw-bold">PAKET PRO</h5>
                    <h2 class="fw-bold my-2">30 <small class="fs-6 text-muted">Mbps</small></h2>
                    <h4 class="text-primary fw-bold mb-4">Rp 200.000<small class="fs-6 text-muted">/bulan</small></h4>
                    <ul class="list-unstyled text-start small mb-4">
                        <li class="mb-2">✓ Internet Stabil</li>
                        <li class="mb-2">✓ Layanan Responsif</li>
                        <li class="mb-2">✓ Bebas Device & Tanpa Batas</li>
                    </ul>
                    <a href="#daftar" class="btn btn-primary mt-auto w-100 fw-bold">Pilih Paket →</a>
                </div>
            </div>

            <!-- Paket 4: 50 Mbps -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-lg border-0 text-center p-4 h-100 rounded-4">
                    <h5 class="text-muted fw-bold">PAKET BISNIS</h5>
                    <h2 class="fw-bold my-2">50 <small class="fs-6 text-muted">Mbps</small></h2>
                    <h4 class="text-primary fw-bold mb-4">Rp 250.000<small class="fs-6 text-muted">/bulan</small></h4>
                    <ul class="list-unstyled text-start small mb-4">
                        <li class="mb-2">✓ Kecepatan Tinggi</li>
                        <li class="mb-2">✓ Aman dan Terpercaya</li>
                        <li class="mb-2">✓ Bebas Device & Tanpa Batas</li>
                    </ul>
                    <a href="#daftar" class="btn btn-outline-primary mt-auto w-100 fw-bold">Pilih Paket →</a>
                </div>
            </div>

        </div>
        <div class="text-center mt-2">
            <p class="text-muted fw-bold">✨ Berapapun Paketnya Semua Bebas Device & Gratis Biaya Pemasangan! ✨</p>
        </div>
    </section>

<!-- Fitur OpenSpeedTest (Tampil Langsung di Website) -->
    <section id="speedtest" class="bg-light py-5 reveal-section">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Cek Kecepatan Internet Anda</h2>
            <p class="text-muted mb-4">Uji performa jaringan Anda secara langsung di bawah ini.</p>
            
            <div class="card shadow-sm p-3 bg-white rounded-4 border-0">
                <div class="ratio ratio-16x9" style="min-height: 450px;">
                    <iframe src="https://openspeedtest.com/plain/" class="rounded-3 border-0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Pendaftaran -->
    <section id="daftar" class="container py-5 reveal-section">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h3 class="text-center mb-2 fw-bold">Formulir Pendaftaran VNET</h3>
                    <p class="text-center text-muted small mb-4">Admin WA: 0895370719061</p>

                    <!-- Notifikasi Pesan Sukses (Mirip Contoh Gambar) -->
                    <div id="alertSuccess" class="alert alert-success d-none align-items-center mb-3 rounded-3 shadow-sm" role="alert">
                        <span class="me-2 fs-5">✔️</span>
                        <div class="small fw-semibold">Pesan berhasil dikirim! Tim kami akan menghubungi Anda segera.</div>
                    </div>

                    <form id="formPendaftaran">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor WhatsApp</label>
                            <input type="text" name="no_hp" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Lengkap Pemasangan</label>
                            <textarea name="alamat" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pilih Paket</label>
                            <select name="paket" class="form-control" required>
                                <option value="10 Mbps - Rp 125.000">10 Mbps - Rp 125.000 / bln</option>
                                <option value="20 Mbps - Rp 150.000">20 Mbps - Rp 150.000 / bln</option>
                                <option value="30 Mbps - Rp 200.000">30 Mbps - Rp 200.000 / bln</option>
                                <option value="50 Mbps - Rp 250.000">50 Mbps - Rp 250.000 / bln</option>
                            </select>
                        </div>
                        <button type="submit" id="btnKirim" class="btn btn-primary w-100 fw-bold">Kirim Pendaftaran</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2026 VNET .Proyek PKL RPL.</p>
    </footer>

    <!-- Script Navbar, Scroll Reveal, & AJAX Form -->
    <script>
        // Efek Navbar saat di-scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Efek Muncul (Reveal) saat elemen di-scroll ke bawah
        window.addEventListener('scroll', revealOnScroll);

        function revealOnScroll() {
            const reveals = document.querySelectorAll('.reveal-section');
            for (let i = 0; i < reveals.length; i++) {
                let windowHeight = window.innerHeight;
                let elementTop = reveals[i].getBoundingClientRect().top;
                let elementVisible = 150; 

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add('active');
                }
            }
        }
        revealOnScroll();

        // AJAX Form Submission (Tanpa Pop-up, Muncul Notifikasi di Form)
        const formPendaftaran = document.getElementById('formPendaftaran');
        const alertSuccess = document.getElementById('alertSuccess');
        const btnKirim = document.getElementById('btnKirim');

        formPendaftaran.addEventListener('submit', function(e) {
            e.preventDefault();

            btnKirim.disabled = true;
            btnKirim.innerText = "Mengirim...";

            const formData = new FormData(formPendaftaran);

            fetch('proses.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                btnKirim.disabled = false;
                btnKirim.innerText = "Kirim Pendaftaran";

                if (data.trim() === 'success') {
                    alertSuccess.classList.remove('d-none');
                    alertSuccess.classList.add('d-flex');
                    formPendaftaran.reset();

                    setTimeout(() => {
                        alertSuccess.classList.remove('d-flex');
                        alertSuccess.classList.add('d-none');
                    }, 5000);
                } else {
                    alert('Gagal menyimpan data dari server: ' + data);
                }
            })
            .catch(error => {
                btnKirim.disabled = false;
                btnKirim.innerText = "Kirim Pendaftaran";
                console.error('Error:', error);
                alert('Terjadi kesalahan jaringan/koneksi!');
            });
        });
    </script>

</body>
</html>