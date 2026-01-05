<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/admin_login.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-side-info">
        <div class="info-content">
            <div class="admin-badge">Secure Access</div>
            <h2 class="logo-text">Job<span>Finder</span></h2>
            <h1>Control Tower.</h1>
            <p>Authorized access only. Monitor system health, manage user reports, and maintain the integrity of the JobFinder marketplace.</p>
        </div>
    </div>

    <div class="auth-side-form">
        <div class="form-container">
            <a href="index.php" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Return to Site</a>
            
            <div class="form-header">
                <h1>Admin Login</h1>
                <p>Verify your identity to continue.</p>
            </div>

            <form action="admin_process.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Administrator Username</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-user-shield"></i>
                        <input type="text" name="name" class="form-control" placeholder="Admin ID" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Security Password</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="pass" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Authenticate Session</button>
            </form>

            <div class="footer-note">
                <i class="fa-solid fa-lock"></i> End-to-end encrypted management portal.
            </div>
        </div>
    </div>
</div>

</body>
</html>