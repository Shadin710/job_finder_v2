<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/help.css">
    <link rel="stylesheet" href="css/header.css">

</head>
<body>

    <?php include("includes/header.php"); ?>

    <section class="help-hero">
        <div class="container">
            <h1>How can we help you?</h1>
            <p>Search our knowledge base or browse frequently asked questions.</p>
            <div class="search-container">
                <input type="text" id="helpSearch" placeholder="Type your problem (e.g. 'forgot password')..." onkeyup="filterFAQ()">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </section>

    <div class="container faq-section">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="mb-4 fw-bold">Frequently Asked Questions</h3>
                
                <div class="faq-list">
                    <div class="faq-card" data-keywords="account login password">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            How do I reset my password? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            Go to the login page and click "Forgot Password". Enter your registered email address, and we will send you a secure link to create a new password.
                        </div>
                    </div>

                    <div class="faq-card" data-keywords="post job provider employer">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            How can I post a job listing? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            You must log in as a Job Provider. Once logged in, navigate to your dashboard and click the "Post a Job" button to fill out the job details.
                        </div>
                    </div>

                    <div class="faq-card" data-keywords="apply resume seeker">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            Can I edit my application after submission? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            Once an application is submitted, you cannot edit it directly. However, you can withdraw your application and re-apply with the updated information.
                        </div>
                    </div>
                </div>

                <div class="contact-support mt-5">
                    <i class="fas fa-envelope-open-text fa-3x mb-3" style="color: #6366f1;"></i>
                    <h4>Still need help?</h4>
                    <p>If you couldn't find an answer to your problem, our support team is ready to assist you.</p>
                    <a href="mailto:support@jobfinder.com?subject=Help Request" class="btn-email">Email Support</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
    <script src="./js/help.js"></script>
</body>
</html>