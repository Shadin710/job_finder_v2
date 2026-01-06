<nav class="main-nav">
    <div class="nav-wrapper">
        <a href="index.php" class="nav-logo">Job<span>Finder</span></a>
        
        <ul class="nav-links">
            <?php if(isset($_SESSION['seeker_email'])): ?>
                <li><a href="seeker_home.php">Home</a></li>
                <li><a href="dasboard.php">Dashboard</a></li>
                <li><a href="seeker_profile.php">My Profile</a></li>
                <li><a href="seeker_search_job.php">Find Jobs</a></li>
                <li><a href="seeker_logout.php" class="nav-btn logout">Logout</a></li>

            <?php elseif(isset($_SESSION['provider_email'])): ?>
                <li><a href="provider_dashboard.php">Dashboard</a></li>
                <li><a href="post_job.php">Post a Job</a></li>
                <li><a href="provider_logout.php" class="nav-btn logout">Logout</a></li>

            <?php else: ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="seeker_login.php">Find a Job</a></li>
                <li><a href="provider_login.php">For Employers</a></li>
                <li><a href="seeker_login.php" class="nav-btn login">Sign In</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>