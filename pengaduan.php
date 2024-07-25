<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- initialize tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Pengaduan</title>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Pemerintah Desa Dawuan Barat</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/logo1.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
      
        <!-- =======================================================
        * Template Name: Mentor
        * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        * Updated: Jun 29 2024 with Bootstrap v5.3.3
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>
      
      <body class="index-page">
      
        <header id="header" class="header d-flex align-items-center sticky-top">
          <div class="container-fluid container-xl position-relative d-flex align-items-center">
      
            <a href="index.html" class="logo d-flex align-items-center me-auto">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h5 class="sitename">Pemerintah Desa Dawuan Barat</h5>
            </a>
      
            <nav id="navmenu" class="navmenu">
              <ul>
                <li><a href="index.html" class="active">Beranda<br></a></li>
                <li><a href="about.html">Tentang Desa</a></li>
                <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                        <li><a href="struktur_pemerintah.html">Struktur Pemerintah Desa</a></li>
                        <li><a href="profile_kepala.html">Profile Kepala Desa</a></li>
                        <li><a href="anggota_pemerintah.html">Anggota Pemerintah</a></li>
                        <li><a href="peraturan_desa.html">Peraturan Desa</a></li>
                      </ul>
                    </li>
                    <li><a href="infrastruktur.html">Infrastruktur</a></li>
                    <li><a href="geografis.html">Kondisi Geografis</a></li>
                    <li><a href="demografi.html">Demografi</a></li>
                    <li><a href="ekonomi_lokal.html">Ekonomi Lokal</a></li>
                  </ul>
                </li>
                <li><a href="berita.html">Berita</a></li>
                <li><a href="galeri.html">Galeri</a></li>
                <li><a href="potensi_desa.html">Potensi Desa</a></li>
                <li><a href="pengaduan.html">Form Pengaduan</a></li>
                <li><a href="kontak.html">Kontak</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
          </div>
        </header>
</head>

<body>


    <main class=" mx-32 my-16">
        <div class="bg-white py-16 px-32 rounded-lg shadow-lg w-full ">
            <h1 class="mx-auto block text-center text-4xl uppercase font-bold my-6 text-[#215968]">Form Pengaduan Masyarakat</h1>
            <form id="complaintForm" method="POST" action="submit_pengaduan.php">
                <div class="mb-4">
                    <label class="block text-gray-700">Jenis Pengaduan</label>
                    <select name="jenis_pengaduan" class="mt-1 block w-full border-gray-300 rounded-md py-2 px-3" required>
                        <option value="">Pilih jenis pengaduan</option>
                        <option value="kepala_desa">Kepala Desa</option>
                        <option value="sekretaris_desa">Sekretaris Desa</option>
                        <option value="kaur_pemerintah">Kaur Pemerintahan</option>
                        <option value="kaur_pembangunan">Kaur Pembangunan</option>
                        <option value="kaur_keuangan">Kaur Keuangan</option>
                        <option value="kaur_umum">Kaur Umum</option>
                        <option value="kasie_pelayanan">Kasie Pelayanan</option>
                        <option value="kasie_kesejahteraan">Kasie Kesejahteraan</option>
                        <option value="bpd">Badan Permusyawaratan Desa(BPD)</option>
                        <option value="lpmd">lPMD(Lembaga Pemberdayaan Masyarakat Desa)</option>
                        <option value="rw">RW</option>
                        <option value="rt">RT</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor HP</label>
                    <input type="text" name="nomor" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Alamat</label>
                    <textarea class="mt-1 block w-full border-gray-300 rounded-md" name="alamat" required></textarea>
                </div>
                <div class="mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700">Kabupaten</label>
                    <input type="text" name="kabupaten" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kelurahan/Desa</label>
                    <input type="text" name="kelurahan" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Deskripsikan Pengaduan</label>
                    <textarea class="mt-1 block w-full border-gray-300 rounded-md" name="deskripsi" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" onclick="submitForm()" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
                </div>
            </form>
        </div>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">Pemerintah Desa Dawuan Barat</span>
              </a>
              <div class="footer-contact pt-3">
                <p>Jl. Babakan Bogor, Dawuan Barat, 41373</p>
                <p>Cikampek,Karawang 41373</p>
                <p class="mt-3"><strong>Phone:</strong> <span>0878-8402-4966</span></p>
                <p><strong>Email:</strong> <span>divarizkyazzami7@gmail.com</span></p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
    
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
    
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li>
              </ul>
            </div>
    
            <div class="col-lg-4 col-md-12 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
              </form>
            </div>
    
          </div>
        </div>
    
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">KKN Dawuan Barat</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">Diva Rizky Azzami</a>
          </div>
        </div>
    
      </footer>
    
      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Preloader -->
      <div id="preloader"></div>
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    
      <!-- Main JS File -->
      <script src="assets/js/main.js"></script>
</body>

</html>