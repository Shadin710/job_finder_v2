<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeker Login | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/seeker_login.css">

</head>
<body>

<div class="auth-wrapper">
    <div class="auth-side-info">
        <div>
            <h2 class="logo-text">Job<span>Finder</span></h2>
            <p>Access thousands of personalized job listings tailored to your skills.</p>
        </div>
    </div>

    <div class="auth-side-form">
        <div class="form-container">
            <a href="index.php" class="btn-back"><i class="fa-solid fa-chevron-left"></i> Back</a>
            <div class="form-header">
                <h1>Welcome Back</h1>
                <p>Sign in to continue your search.</p>
            </div>

            <form action="seeker_login_server.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="abcd@example.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-submit">Sign In</button>
            </form>
            <p class="mt-4 text-center">New here? <a href="seeker_reg.php" style="color:var(--primary); text-decoration:none; font-weight:600;">Create account</a></p>
        </div>
    </div>
</div>

</body>
</html>