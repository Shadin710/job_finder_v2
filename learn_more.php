<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/learn_more.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>

    <header class="learn-hero">
        <div class="container">
            <h1>Our Mission</h1>
            <p>We are bridging the gap between world-class talent and industry-leading companies through a seamless, transparent job market.</p>
        </div>
    </header>

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="icon-box icon-seeker">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3>For Job Seekers</h3>
                        <p>Finding a job shouldn't be a full-time job. Our platform uses smart filters to match your unique skills with roles that actually matter to you. Build your profile once and apply with a single click.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-success me-2"></i> Personalized Job Alerts</li>
                            <li><i class="fas fa-check text-success me-2"></i> Direct Messaging with HR</li>
                            <li><i class="fas fa-check text-success me-2"></i> Application Tracking</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="icon-box icon-provider">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3>For Employers</h3>
                        <p>Hiring is hard. We make it easy. Access a curated pool of qualified candidates, manage your pipeline, and reduce your time-to-hire significantly with our integrated management tools.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-success me-2"></i> Smart Candidate Screening</li>
                            <li><i class="fas fa-check text-success me-2"></i> Unlimited Job Postings</li>
                            <li><i class="fas fa-check text-success me-2"></i> Employer Branding Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="stats-bar">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="stat-number">50k+</span>
                    <span class="stat-label">Active Users</span>
                </div>
                <div class="col-md-3">
                    <span class="stat-number">12k+</span>
                    <span class="stat-label">Jobs Posted</span>
                </div>
                <div class="col-md-3">
                    <span class="stat-number">800+</span>
                    <span class="stat-label">Verified Companies</span>
                </div>
                <div class="col-md-3">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Success Rate</span>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-padding">
        <div class="cta-section">
            <h2 class="mb-4">Ready to take the next step?</h2>
            <p class="mb-5 opacity-75">Join thousands of others who found their path through JobFinder.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="seeker_reg.php" class="btn-white">Find a Job</a>
                <a href="provider_reg.php" class="btn-white" style="background:transparent; border: 1px solid white; color: white;">Hire Talent</a>
            </div>
        </div>
        <div class="text-center">
            <a href="index.php" style="color: var(--gray); text-decoration: none;"><i class="fas fa-arrow-left me-2"></i> Back to Home</a>
        </div>
    </section>
    <?php include("./includes/footer.php");?>

</body>
</html>