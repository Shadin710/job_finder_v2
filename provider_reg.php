<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Registration | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/provider_reg.css">

</head>
<body>

<div class="auth-wrapper">
    <div class="auth-side-info">
        <div class="info-content">
            <h2 class="logo-text">Job<span>Finder</span></h2>
            <h1>Scale Your Team.</h1>
            <p>Join hundreds of industry leaders. Post jobs, manage applications, and find the talent your company deserves.</p>
        </div>
    </div>

    <div class="auth-side-form">
        <div class="form-container">
            <a href="index.php" class="btn-back"><i class="fa-solid fa-chevron-left"></i> Back to Home</a>
            
            <div class="form-header">
                <h1>Employer Sign-up</h1>
                <p>Register your company and start hiring.</p>
            </div>

            <form action="provider_server.php" method="POST">
                <div class="mb-1">
                    <label class="form-label">Company/Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Acme Corp or Hiring Manager Name" required>
                </div>

                <div class="mb-1">
                    <label class="form-label">Work Email</label>
                    <input type="email" name="email" class="form-control" placeholder="hr@company.com" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="••••••••" required>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="pass2" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Create Provider Account</button>
            </form>

            <p class="auth-footer">
                Already have a provider account? <a href="provider_login.php">Sign In</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>