<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Star Solutions</title>
    <!-- Personal Instagram of web developer: scoott.hurtado -->
    <!-- Professional Instagram of web developer: edwartt7  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            /* Color Palette */
            --blue-dark: #002147;
            --blue-medium: #003366;
            --blue-light: #004c99;
            --yellow: #FFD700;
            --yellow-light: #ffe44d;
            --black: #1a1a1a;
            --white: #ffffff;
            
            /* Functional Colors */
            --text-primary: var(--black);
            --text-light: #666666;
            --background: var(--white);
            
            /* Spacing */
            --spacing-xs: 0.5rem;
            --spacing-sm: 1rem;
            --spacing-md: 1.5rem;
            --spacing-lg: 2rem;
            --spacing-xl: 3rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--background);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-sm);
        }

        /* Header */
        .header {
            background: transparent;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            
        }

        .header.scrolled {
            background: var(--blue-dark);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo {
            color: var(--white);
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: var(--spacing-xs);
        }

        .logo span {
            color: var(--yellow);
        }

        .nav-menu {
            display: flex;
            gap: var(--spacing-lg);
            list-style: none;
        }

        .nav-link {
            color: var(--white);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
            padding: var(--spacing-xs) 0;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--yellow);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section with Video */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            overflow: hidden;
            margin-top: -80px;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .video-background video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,33,71,0.75);
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            margin: 80px auto 0;
            padding: var(--spacing-lg);
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: var(--spacing-md);
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: var(--spacing-lg);
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: var(--yellow);
            color: var(--blue-dark);
            border: 2px solid var(--yellow);
        }

        .btn-primary:hover {
            background: var(--yellow-light);
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid var(--white);
            color: var(--white);
            margin-left: var(--spacing-sm);
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--blue-dark);
        }

        /* Services Section */
        .services {
            padding: var(--spacing-xl) 0;
            background: var(--white);
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--blue-dark);
            margin-bottom: var(--spacing-xl);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--yellow);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-lg);
            padding: var(--spacing-md);
        }

        .service-card {
            background: var(--white);
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-content {
            padding: var(--spacing-md);
        }

        .service-title {
            color: var(--blue-dark);
            font-size: 1.5rem;
            margin-bottom: var(--spacing-sm);
        }

        /* Features Section */
        .features {
            padding: var(--spacing-xl) 0;
            background: var(--blue-dark);
            color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-lg);
        }

        .feature-item {
            text-align: center;
            padding: var(--spacing-md);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--yellow);
            margin-bottom: var(--spacing-sm);
        }

        /* Contact Form */
        .contact {
            padding: var(--spacing-xl) 0;
            background: var(--white);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-xl);
        }

        .contact-info h3 {
            color: var(--blue-dark);
            margin-bottom: var(--spacing-md);
        }

        .contact-form {
            background: var(--white);
            padding: var(--spacing-lg);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: var(--spacing-md);
        }

        .form-input {
            width: 100%;
            padding: var(--spacing-sm);
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--yellow);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .btn {
                display: block;
                margin: 10px auto;
                width: 100%;
                max-width: 300px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Fade In Animation */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.8s ease-out;
    will-change: opacity, transform;
}

.fade-in.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Footer */
.footer {
    background-color: #000000;
    color: #ffffff;
    padding: 60px 0 20px;
    font-family: Arial, sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.footer-column {
    display: flex;
    flex-direction: column;
}

.footer-logo {
    width: 150px;
    margin-bottom: 20px;
}

.footer-description {
    color: #cccccc;
    line-height: 1.6;
    margin-bottom: 20px;
}

.footer-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #ffffff;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #ffffff;
}

.footer-copyright {
    text-align: center;
    padding-top: 40px;
    margin-top: 40px;
    border-top: 1px solid #333;
    color: #cccccc;
}

@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        gap: 30px;
    }
}

/*estilo para ciudad select*/
select.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
    background-color: white;
    cursor: pointer;
    color: #333;
    box-shadow: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23002147' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    padding-right: 2.5rem;
}

select.form-control:focus {
    outline: none;
    border-color: var(--blue-medium);
}

select.form-control:hover {
    border-color: var(--blue-medium);
}

/*estilos para seleccionar servicios de interes*/
select.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    cursor: pointer;
    color: #666666;
    box-shadow: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23002147' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    padding-right: 2.5rem;
}

/* Hamburger Menu Styles */
.hamburger {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
    cursor: pointer;
    z-index: 1001;
    margin-right: var(--spacing-md);
}

.hamburger span {
    display: block;
    width: 100%;
    height: 3px;
    background-color: var(--white);
    transition: all 0.3s ease;
}

/* Mobile Menu Styles */
@media (max-width: 768px) {
    .hamburger {
        display: flex;
        order: -1;
    }

    .nav-container {
        padding: 0 var(--spacing-sm);
    }

    .nav-menu {
        position: fixed;
        left: -100%;
        top: 0;
        width: 70%;
        height: 100vh;
        background: var(--blue-dark);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: 0.3s ease;
        padding: 2rem;
        z-index: 1000;
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-menu li {
        margin: 1.5rem 0;
    }

    /* Hamburger Animation */
    .hamburger.active span:nth-child(1) {
        transform: translateY(9px) rotate(45deg);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
        transform: translateY(-9px) rotate(-45deg);
    }

    /* Mobile Layout Adjustments */
    .logo {
        margin-left: 0;
        margin-right: auto;
    }
}

/* Overlay for Mobile Menu */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.overlay.active {
    display: block;
}

/* Desktop styles y estilos hamburger*/
.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
}

.logo {
    order: 1; /* Control del orden en flexbox */
}

nav {
    order: 2;
}

.hamburger {
    display: none;
    order: 1;
}

/* Mobile styles */
@media (max-width: 768px) {
    .nav-container {
        justify-content: space-between;
    }

    .hamburger {
        display: flex;
        order: 1; /* Hamburger a la izquierda */
        margin-right: auto;
    }

    .logo {
        order: 2; /* Logo a la derecha */
        margin-left: auto;
    }

    nav {
        order: 3;
    }

    .nav-menu {
        position: fixed;
        left: -100%;
        top: 0;
        width: 70%;
        height: 100vh;
        background: var(--blue-dark);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: 0.3s ease;
        padding: 2rem;
        z-index: 1000;
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-menu li {
        margin: 1.5rem 0;
    }
}

/*estilos sidebar desktop mobile y tablet definitivo*/
/* Estilos base para desktop */
.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
}

.logo {
    order: 1;
}

.nav-menu {
    display: flex;
    gap: var(--spacing-lg);
    list-style: none;
    order: 2;
}

.nav-link {
    color: var(--white);
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
}

/* Ocultar hamburger y overlay en desktop */
.hamburger, .overlay {
    display: none;
}

/* Estilos para móvil y tablet */
@media (max-width: 768px) {
    /* Mostrar hamburger */
    .hamburger {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
        cursor: pointer;
        z-index: 1001;
        order: 1;
    }

    .hamburger span {
        display: block;
        width: 100%;
        height: 3px;
        background-color: var(--white);
        transition: all 0.3s ease;
    }

    /* Ajustes de layout para móvil */
    .logo {
        order: 2;
        margin-left: auto;
    }

    /* Estilos del sidebar */
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 0;
        width: 70%;
        height: 100vh;
        background: var(--white);
        flex-direction: column;
        padding: 4rem 2rem;
        transition: 0.3s ease;
        z-index: 1000;
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-menu li {
        margin: 1.5rem 0;
    }

    .nav-menu .nav-link {
        color: var(--blue-dark);
        font-size: 1.1rem;
        font-weight: 500;
    }

    /* Separador después de "Iniciar Sesión" */
    .nav-menu li:first-child {
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    /* Overlay */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .overlay.active {
        display: block;
    }

    /* Animación del hamburger */
    .hamburger.active span:nth-child(1) {
        transform: translateY(9px) rotate(45deg);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
        transform: translateY(-9px) rotate(-45deg);
    }
}

/* Our Work Section */
.our-work {
    padding: var(--spacing-xl) 0;
    background: var(--white);
}

.work-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
}

.work-card {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.work-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.work-card:hover .work-img {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .work-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
    </style>
</head>
<body>
    <div class="overlay"></div>
<header class="header">
    <div class="container nav-container">
        <!-- Botón hamburguesa solo visible en móvil/tablet -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Logo -->
<div class="logo">
    <img src="./blue-star-logo-full-colors-rgb.png" alt="Blue Star Solutions" style="height: 50px;">
</div>

        <!-- Menú de navegación -->
        <nav>
            <ul class="nav-menu">
                <li><a href="./index.php" class="nav-link">Home</a></li>
                <li><a href="./services.php" class="nav-link">Services</a></li>
                <li><a href="./about.php" class="nav-link">About</a></li>
                <li><a href="./contact.php" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

 <!-- Video -->
    <section class="hero" id="home">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="https://videos.pexels.com/video-files/2675565/2675565-uhd_2732_1440_24fps.mp4" type="video/mp4">
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Expert Roofing Solutions</h1>
            <p class="hero-subtitle">Quality and professionalism in every project</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary">Request Quote</a>
                <a href="./services.html" class="btn btn-outline">Our Services</a>
            </div>
        </div>
    </section>

     <!-- Servicios -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">Professional Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <img src="./imagenes/tile_roof_11zon.jpg" alt="Tile roof" class="service-img">
                    <div class="service-content">
                        <h3 class="service-title">Tile Roof</h3>
                        <p>Professional roof installation with the highest quality standards and premium materials.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="./imagenes/all_repairs_11zon.jpg" alt="Repair" class="service-img">
                    <div class="service-content">
                        <h3 class="service-title">All Repairs</h3>
                        <p>Quick and effective solutions for all types of residential and commercial roof damage.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="./imagenes/shingles_11zon.jpg" alt="Shingles" class="service-img">
                    <div class="service-content">
                        <h3 class="service-title">Shingles</h3>
                        <p>High-quality asphalt shingles for long-lasting durability and superior weather protection.</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="services.html" class="btn btn-primary">All Services</a>
        </div>
    </section>

     <!-- Porque elejirnos -->
    <section class="features" id="benefits">
        <div class="container">
            <h2 class="section-title" style="color: var(--white)">Why Choose Us</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h3>Extended Warranty</h3>
                    <p>We back our work with the best warranties in the industry.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-clock feature-icon"></i>
                    <h3>Punctuality</h3>
                    <p>We meet established deadlines for every project.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-star feature-icon"></i>
                    <h3>Premium Quality</h3>
                    <p>We use top-quality materials and industry best practices.</p>
                </div>

                <div class="feature-item">
                    <i class="fas fa-file-contract feature-icon"></i>
                    <h3>Insurance Claims</h3>
                    <p>We work directly with insurance companies to make your claim process smooth and hassle-free.</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Nuestro trabajo -->
    <section class="our-work" id="work">
    <div class="container">
        <h2 class="section-title">Our Work</h2>
        <div class="work-grid">
            <div class="work-card">
                <img src="" alt="Roofing project 1" class="work-img">
            </div>
            <div class="work-card">
                <img src="./imagenes/trabajo2.jpg" alt="Roofing project 2" class="work-img">
            </div>
            <div class="work-card">
                <img src="./imagenes/trabajo3.jpg" alt="Roofing project 3" class="work-img">
            </div>
            <div class="work-card">
                <img src="./imagenes/trabajo4.jpg" alt="Roofing project 4" class="work-img">
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="gallery.html" class="btn btn-primary">View All Our Work</a>
        </div>
    </div>
</section>

 <!-- Contactanos -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Have a Project in Mind?</h3>
                    <p>Our team is ready to help make your project a reality.</p>
                </div>

                <form class="contact-form" action="./orders.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Full name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" placeholder="Email" name="Email">
                    </div>

                    <div class="form-group">
                        <select id="city" name="city" class="form-control" required>
                            <option value="" disabled selected>Select City</option>
                            <option value="Scottsdale">Scottsdale</option>
                            <option value="Tempe">Tempe</option>
                            <option value="Avondale">Avondale</option>
                            <option value="Tolleson">Tolleson</option>
                            <option value="Peoria">Peoria</option>
                            <option value="Chandler">Chandler</option>
                            <option value="Mesa">Mesa</option>
                            <option value="Goodyear">Goodyear</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select id="services" name="services" class="form-control" required>
                            <option value="" disabled selected>Service Interested in</option>
                            <option value="tileroof">Tile Roof</option>
                            <option value="shingles">Shingles</option>
                            <option value="flatroof">Flat Roof</option>
                            <option value="patios">Patios</option>
                            <option value="allrepairs">All Repairs</option>
                            <option value="leaks">Leaks</option>
                            <option value="inspections">Inspections</option>
                            <option value="foamroof">Foam Roof</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-input" placeholder="Phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-input" rows="4" placeholder="Message" name="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Fade in effect
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in class to elements we want to animate
            const elementsToAnimate = [
                ...document.querySelectorAll('.service-card'),
                ...document.querySelectorAll('.feature-item'),
                ...document.querySelectorAll('.contact-grid > *')
            ];
        
            elementsToAnimate.forEach(element => {
                element.classList.add('fade-in');
            });
        
            // Function to check if element is in viewport
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85
                );
            }
        
            // Function to handle scroll animation
            function handleScrollAnimation() {
                elementsToAnimate.forEach(element => {
                    if (isElementInViewport(element)) {
                        element.classList.add('visible');
                    }
                });
            }
        
            // Initial check
            handleScrollAnimation();
        
            // Add scroll event listener
            window.addEventListener('scroll', handleScrollAnimation);
        });

        //menu hamburguesa
        // Hamburger Menu
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    const overlay = document.querySelector('.overlay');
    const body = document.querySelector('body');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
        overlay.classList.toggle('active');
        body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : 'auto';
    });

    // Close menu when clicking overlay
    overlay.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        body.style.overflow = 'auto';
    });

    // Close menu when clicking a link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            overlay.classList.remove('active');
            body.style.overflow = 'auto';
        });
    });

    //forms
    document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('orders.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Thank you! Your message has been sent successfully.');
            this.reset();
        } else {
            alert('There was an error submitting your message. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error submitting your message. Please try again.');
    });
});
        </script>

 <!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Column 1: Logo and Description -->
        <div class="footer-column">
            <img src="./blue-star-logo-full-color-rgb.png" alt="Blue star solutions" class="footer-logo">
            <p class="footer-description">
                Blue Star Solutions is your trusted partner for all roofing needs. With years of experience and dedication to quality, we ensure your property is protected with the best roofing solutions available.
            </p>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-column">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about.html">About Us</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="footer-column">
            <h3 class="footer-title">Services</h3>
            <ul class="footer-links">
                <li><a href="./services.html">Tile Roof</a></li>
                <li><a href="./services.html">All Repairs</a></li>
                <li><a href="./services.html">Shingles</a></li>
                <li><a href="./services.html">All Services</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright">
        <p>&copy; 2025 Blue Star Solutions. All rights reserved.</p>
    </div>
</footer>
</body>
</html>