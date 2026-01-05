<?php
    session_start();
    $_SESSION['check']=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFinder | Future of Work</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
    
   <header id="header">
    <div class="wrapper">
        <div class="logo">Job<span>Finder</span></div>
        
        <nav>
            <ul class="menu-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="admin.php" class="admin-link">Admin Portal</a></li>
            </ul>
        </nav>

        <button id="submenu" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<main>
    <section id="intro">
        <div class="wrapper hero-flex">
            <div class="intro-left">
                <span class="badge">Direct Hiring Platform</span>
                <h1>Insights which will help you <span>grow</span>.</h1>
                <p>Open an account today and connect with thousands of employers looking for your specific skill set.</p>
                <div class="btn-group">
                    <a href="seeker_login.php" class="btn-primary">Find a Job</a>
                    <a href="learn_more.php" class="btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="intro-right">
                <img src="img/undraw_growth_analytics_8btt.png" alt="Growth Analytics">
            </div>
        </div>
    </section>

    <section id="about">
        <div class="wrapper about-flex">
            <div class="about-left">
                <img src="img/undraw_report_mx0a.svg" alt="Recruitment">
            </div>
            <div class="about-right">
                <h2>Hire Top Talent <span>Easily</span>.</h2>
                <p>Post high-quality job opportunities and manage applications through our intuitive dashboard. Helping others starts with a single post.</p>
                <br>
                <a href="provider_login.php" class="btn-primary">Become a Provider</a>
            </div>
        </div>
    </section>
    <footer id="main-footer">
        <div class="wrapper footer-grid">
            <div class="footer-brand">
                <div class="logo">Job<span>Finder</span></div>
                <p>Empowering the next generation of professionals to find their dream careers through data-driven insights.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="seeker_login.php">Find Jobs</a></li>
                    <li><a href="provider_login.php">Post a Job</a></li>
                    <li><a href="admin.php">Admin Login</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-newsletter">
                <h4>Stay Updated</h4>
                <p>Subscribe to get the latest job alerts.</p>
                <form action="#" class="newsletter-form">
                    <input type="email" placeholder="Email address" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 JobFinder. All Rights Reserved.</p>
        </div>
    </footer>
</main>

<script>
    function toggleMenu() {
        document.getElementById('header').classList.toggle('active');
    }
    
    // Header Scroll Effect
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        header.classList.toggle('scrolled', window.scrollY > 50);
    });
</script>

</body>
</html>