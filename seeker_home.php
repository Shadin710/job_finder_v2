<?php
        session_start();

        if(empty($_SESSION['email']))
        {
            header('Location:seeker_login.php');
        }


		
        include_once 'connection/db_connection.php';

       
    $sql_post_job  = "SELECT * FROM jobs";    
    $sql_jobs_q = mysqli_query($conn,$sql_post_job) Or die("Failed to query " . mysqli_error($conn));
    $count_jobs = mysqli_num_rows($sql_jobs_q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Dream Job | JobFinder</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/seeker_home.css">
</head>

<body>
    <?php include("./includes/header.php");?>

    <header class="seeker-hero">
        <div class="container">
            <h1 class="display-5 fw-bold mb-3">Welcome back, Explorer</h1>
            <p class="opacity-75">There are <?php echo $count_jobs; ?> new opportunities waiting for you today.</p>
        </div>
    </header>

    <section class="job-grid-section">
        <div class="container">
            <div class="row g-4">
                <?php
                if($count_jobs > 0) {
                    while($row_jobs = mysqli_fetch_assoc($sql_jobs_q)) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="job-card">
                        <div class="company-badge">
                            <?php echo substr($row_jobs['comName'], 0, 1); ?>
                        </div>

                        <a href="apply_job_seeker.php?id=<?php echo $row_jobs['id']; ?>" class="job-title">
                            <?php echo $row_jobs['position']; ?>
                        </a>
                        <span class="company-name"><?php echo $row_jobs['comName']; ?></span>

                        <div class="job-tags">
                            <span class="tag tag-full"><?php echo $row_jobs['type_time']; ?></span>
                            <span class="tag tag-remote"><i class="fas fa-map-marker-alt me-1"></i>
                                <?php echo $row_jobs['comAddress']; ?></span>
                            <span class="tag tag-salary"><i class="fas fa-wallet me-1"></i>
                                <?php echo $row_jobs['salay']; ?></span>
                        </div>

                        <p class="text-muted small mb-4">
                            Required Experience: <?php echo $row_jobs['exper']; ?>
                        </p>

                        <div class="job-footer">
                            <span class="text-muted small"><i class="far fa-clock me-1"></i> Posted recently</span>
                            <a href="apply_job_seeker.php?id=<?php echo $row_jobs['id']; ?>" class="btn-apply">View
                                Details</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo '<div class="col-12 text-center py-5"><h3>No jobs found matching your profile.</h3></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>
</body>


<!-- Banner END -->


<!-- FOOTER START -->


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
function showMenu(event) {

    event.preventDefault();

    let element = document.getElementById('header');

    if (element.classList.contains('active')) {
        element.className = "";
    } else {
        element.className = "active";
    }


}
</script>

</html>