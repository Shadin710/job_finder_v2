<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Login | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/provider_login.css">

</head>
<body>

<div class="auth-wrapper">
    <div class="auth-side-info">
        <div class="info-content">
            <h2 class="logo-text">Job<span>Finder</span></h2>
            <h1>For Employers.</h1>
            <p>Find the perfect candidates for your team. Manage your job postings and track applicants in one powerful workspace.</p>
        </div>
    </div>

    <div class="auth-side-form">
        <div class="form-container">
            <a href="index.php" class="btn-back"><i class="fa-solid fa-chevron-left"></i> Back to Home</a>
            
            <div class="form-header">
                <h1>Provider Login</h1>
                <p>Manage your job listings and applicants.</p>
            </div>

            <form action="provider_login_server.php" method="POST">
                <div class="mb-2">
                    <label class="form-label">Work Email</label>
                    <div class="input-with-icon">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" class="form-control" placeholder="hr@company.com" required>
                    </div>
                </div>

                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pass" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Login to Dashboard</button>
            </form>

            <p class="auth-footer">
                Need to hire talent? <a href="provider_reg.php">Register your company</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>