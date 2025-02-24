<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Blue Star Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --blue-dark: #002147;
            --blue-medium: #003366;
            --yellow: #FFD700;
            --white: #ffffff;
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
            font-family: Arial, sans-serif;
        }

        /* Header styles (same as main site) */
        .header {
            background: var(--blue-dark);
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-sm);
        }

        .logo {
            color: var(--white);
            font-size: 1.8rem;
            font-weight: 700;
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
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--yellow);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* About Section */
        .about-section {
            padding: 120px 0 60px;
            background: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-sm);
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-xl);
        }

        .about-image {
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .about-text {
            flex: 1;
        }

        .about-title {
            color: var(--blue-dark);
            font-size: 2.5rem;
            margin-bottom: var(--spacing-md);
        }

        .about-description {
            line-height: 1.8;
            color: #666;
            margin-bottom: var(--spacing-md);
        }

        /* Gallery Section */
        .gallery-section {
            padding: 60px 0;
            background: #f5f5f5;
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

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .gallery-item {
            position: relative;
            aspect-ratio: 1;
            overflow: hidden;
            border-radius: 8px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        @media (max-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
            }
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
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

/*estilos sidebar desktop tablet mobile*/
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

/* Estilos base para desktop */
@media (min-width: 769px) {
    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 80px;
    }

    .logo {
        order: 0; /* Cambia de 1 a 0 para ponerlo a la izquierda */
    }

    nav {
        margin-left: auto; /* Empuja la navegación hacia la derecha */
    }

    .nav-menu {
        display: flex;
        gap: var(--spacing-lg);
        list-style: none;
        margin-left: auto; /* Asegura que los links estén a la derecha */
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
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="services.php" class="nav-link">Services</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="./contact.php" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="https://placehold.co/600x400" alt="About Blue Star Solutions">
                </div>
                <div class="about-text">
                    <h1 class="about-title">About Blue Star Solutions</h1>
                    <p class="about-description">
                        Since 2010, Blue Star Solutions has been the leading provider of premium roofing solutions in the region. Our commitment to quality, integrity, and customer satisfaction has made us the trusted choice for both residential and commercial roofing projects.
                    </p>
                    <p class="about-description">
                        With a team of highly skilled professionals and decades of combined experience, we deliver exceptional results that stand the test of time. Our dedication to using premium materials and following industry best practices ensures that every project meets our high standards of excellence.
                    </p>
                    <p class="about-description">
                        We take pride in our work and stand behind every project with comprehensive warranties and ongoing support, giving our clients peace of mind and confidence in their investment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
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
        
    </script>

    <footer class="footer">
        <div class="footer-container">
            <!-- Column 1: Logo and Description -->
            <div class="footer-column">
            <img src="./blue-star-logo-full-color-rgb.png" alt="blue star solutions" class="footer-logo">
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