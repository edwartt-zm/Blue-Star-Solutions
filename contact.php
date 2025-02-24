<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Blue Star Solutions</title>
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
    --white: #ffff;
    
    /* Functional Colors */
    --text-primary: var(--black);
    --text-light: #6666;
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
    background: var(--blue-dark);
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

    /* Contact Form */
    .contact {
    padding: var(--spacing-xl) 0;
    background: var(--white);
    margin-top: 80px;
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

    /* Footer */
    .footer {
    background-color: black;
    color: var(--white);
    padding: 60px 0 20px;
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
    color: #cccc;
    line-height: 1.6;
    margin-bottom: 20px;
    }

    .footer-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
    color: var(--white);
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
    color: #cccc;
    text-decoration: none;
    transition: color 0.3s ease;
    }

    .footer-links a:hover {
    color: var(--white);
    }

    .footer-copyright {
    text-align: center;
    padding-top: 40px;
    margin-top: 40px;
    border-top: 1px solid #333;
    color: #cccc;
    }

    /* Select Styles */
    select.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    cursor: pointer;
    color: #6666;
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .nav-menu {
            display: none;
        }

        .footer-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .btn {
            display: block;
            margin: 10px auto;
            width: 100%;
            max-width: 300px;
        }
    }

    /*estilos sidebar desktop tablet mobile definitvos*/
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

    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Have a Project in Mind?</h3>
                    <p>Our team is ready to help make your project a reality.</p>
                </div>

                <form class="contact-form" action="https://formspree.io/f/xeoelqal" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Full name" name="Full name" required>
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

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
            <img src="./blue-star-logo-full-color-rgb.png" alt="blue star solutions" class="footer-logo">
                <p class="footer-description">
                    Blue Star Solutions is your trusted partner for all roofing needs. With years of experience and dedication to quality, we ensure your property is protected with the best roofing solutions available.
                </p>
            </div>

            <div class="footer-column">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./services.html">Services</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </div>

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

        <div class="footer-copyright">
            <p>&copy; 2025 Blue Star Solutions. All rights reserved.</p>
        </div>
    </footer>

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
    </script>
</body>
</html>