<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Kopi Hagi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <linkB
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Warkop<span>Hagi</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, expedita?</p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/tentang-kami.jpg" alt="Tentang Kami">
            </div>

            <div class="content">
                <h3>Kenapa memilih kopi kami?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero tenetur ut commodi laboriosam, quos
                    suscipit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tempora rerum cumque minima aliquid
                    vitae dolorum rem consequuntur quisquam cupiditate.</p>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque voluptatum cumque ipsam pariatur. Laudantium,
            eius.</p>

        <div class="row">
            <div class="menu-card">
                <img src="img/produk/kopi-1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Indocafe Cappucino -</h3>
                <p class="menu-card-price">Rp. 15.000</p>
            </div>
            <div class="menu-card">
                <img src="img/produk/kopi-1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Indocafe Cappucino -</h3>
                <p class="menu-card-price">Rp. 15.000</p>
            </div>
            <div class="menu-card">
                <img src="img/produk/kopi-1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Indocafe Cappucino -</h3>
                <p class="menu-card-price">Rp. 15.000</p>
            </div>
            <div class="menu-card">
                <img src="img/produk/kopi-1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Indocafe Cappucino -</h3>
                <p class="menu-card-price">Rp. 15.000</p>
            </div>
            <div class="menu-card">
                <img src="img/produk/kopi-1.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Indocafe Cappucino -</h3>
                <p class="menu-card-price">Rp. 15.000</p>
            </div>

        </div>
    </section>
    <!-- Menu Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, fugiat?</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1736843103801!5m2!1sid!2sid!6m8!1m7!1sK8dUKf9Y5oKMaqLONs-nEg!2m2!1d-6.258387745541863!2d106.8288671962374!3f155.97736!4f0!5f0.7820865974627469"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no handphone">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="mail"></i></a>
            <a href="#"><i data-feather="linkedin"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Rivaldi Rahman</a>. | &copy; 2025.</p>
        </div>

    </footer>
    <!-- Footer end -->

    <!-- Feather Icons JS -->
    <script>
    feather.replace();
    </script>

    <!-- Javascript -->
    <script src="js/script.js"></script>

</body>

</html>