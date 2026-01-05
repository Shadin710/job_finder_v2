<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeker Registration | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/seeker_reg.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-side-info">
        <div class="info-content">
            <h2 class="logo-text">Job<span>Finder</span></h2>
            <h1>Start Your Journey.</h1>
            <p>Create an account to join our network of professionals and get noticed by top companies worldwide.</p>
        </div>
    </div>

    <div class="auth-side-form">
        <div class="form-container">
            <a href="index.php" class="btn-back"><i class="fa-solid fa-chevron-left"></i> Back to Home</a>
            
            <div class="form-header">
                <h1>Create Account</h1>
                <p>Join the community and find your next role.</p>
            </div>

            <form action="seeker_reg_server.php" method="POST">
                <div class="registration-grid">
                    <div class="full-width">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                    </div>

                    <div class="full-width">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                    </div>

                    <div>
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" placeholder="25" required>
                    </div>

                    <div class="full-width">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="City, Country" required>
                    </div>

                    <div>
                        <label class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="••••••••" required>
                    </div>

                    <div>
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="pass2" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Register Now</button>
            </form>

            <p class="auth-footer">
                Already have an account? <a href="seeker_login.php">Sign In</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>