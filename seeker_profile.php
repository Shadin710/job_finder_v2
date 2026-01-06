<?php
    session_start();
    if (empty($_SESSION['email'])) {
        header("Location:seeker_login.php");
        exit();
    }

    include_once 'connection/db_connection.php';
    $email = $_SESSION['email'];

    function fetchRow($conn, $query) {
        $result = mysqli_query($conn, $query);
        return ($result) ? mysqli_fetch_assoc($result) : null;
    }

    $seeker_info = fetchRow($conn, "SELECT * FROM seeker_info WHERE email='$email'");
    $seeker_bio  = fetchRow($conn, "SELECT * FROM seeker_bio WHERE email = '$email'");
    $seeker_edu  = fetchRow($conn, "SELECT * FROM seeker_education WHERE email = '$email'");
    $seeker_work = fetchRow($conn, "SELECT * FROM seeker_work WHERE email = '$email'");
    $seeker_hobby= fetchRow($conn, "SELECT * FROM seeker_hobby WHERE email = '$email'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | <?php echo $seeker_info['username'] ?? 'User'; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/seeker_profile.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="profile-header-bg"></div>

    <div class="container main-content">
        <div class="row">
            <div class="col-lg-4">

                <div class="card card-modern text-center p-4">
                    <div class="profile-img-wrapper" onclick="document.getElementById('imageUpload').click();">
                        <img src="https://i.pravatar.cc/300?u=<?php echo $email; ?>" class="profile-img"
                            id="profileDisplay">

                        <div class="upload-overlay">
                            <i class="fas fa-camera mb-1"></i>
                            <span>Upload Photo</span>
                        </div>

                        <form id="imageForm" action="upload_process.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="profile_image" id="imageUpload" style="display: none;"
                                onchange="this.form.submit();">
                        </form>
                    </div>
                    <div class="mt-3">
                        <h4 class="username mb-1"><?php echo $seeker_info['username']; ?></h4>
                        <p class="job-title mb-3"><?php echo $seeker_work['work'] ?? 'Strategy Explorer'; ?></p>
                        <a href="seeker_info.php" class="btn btn-primary btn-edit btn-block shadow-sm">
                            <i class="fas fa-pen mr-2"></i> Edit Profile
                        </a>
                    </div>
                    <hr class="my-4" style="opacity: 0.1;">
                    <div class="text-left px-2">
                        <p class="small text-muted font-weight-bold text-uppercase mb-2">Details</p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="mr-3 text-primary"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="text-muted small">
                                <?php echo $seeker_info['seeker_address'] ?? 'Remote / Globally'; ?></div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="mr-3 text-primary"><i class="fas fa-envelope"></i></div>
                            <div class="text-muted small"><?php echo $email; ?></div>
                        </div>
                    </div>
                </div>

                <div class="card card-modern p-4">
                    <h6 class="font-weight-bold mb-3"><i class="fas fa-bolt text-warning mr-2"></i> Skills</h6>
                    <div class="d-flex flex-wrap">
                        <?php if($seeker_bio): ?>
                        <span class="skill-badge"><?php echo $seeker_bio['skill1']; ?></span>
                        <span class="skill-badge"><?php echo $seeker_bio['skill2']; ?></span>
                        <span class="skill-badge"><?php echo $seeker_bio['skill3']; ?></span>
                        <?php else: ?>
                        <p class="text-muted small">No skills added yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card card-modern">
                    <div class="card-header bg-white px-4 pt-3 pb-0 border-0">
                        <ul class="nav nav-tabs-modern" id="profileTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#experience">Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#education">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#hobbies">Hobbies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="experience">
                                <?php if ($seeker_work): ?>
                                <div class="entry-item">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-bold text-dark mb-1"><?php echo $seeker_work['work']; ?>
                                        </h6>
                                        <span class="badge badge-light border">Past Role</span>
                                    </div>
                                    <p class="text-muted small mt-2"><?php echo $seeker_work['descrp']; ?></p>
                                </div>
                                <?php else: ?>
                                <div class="text-center py-5">
                                    <i class="fas fa-briefcase fa-2x text-light mb-3"></i>
                                    <p class="text-muted">Highlight your career journey here.</p>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="tab-pane fade" id="education">
                                <?php if ($seeker_edu): ?>
                                <div class="entry-item">
                                    <h6 class="font-weight-bold text-dark mb-1"><?php echo $seeker_edu['edu1']; ?></h6>
                                    <p class="text-muted small mb-0"><?php echo $seeker_edu['edu_des1']; ?></p>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="tab-pane fade" id="hobbies">
                                <p class="text-muted small">Share your passions outside of work.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>