<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profile - Niramaya Institute of Health Sciences</title>
    <?php include 'components/favicon.php'; ?>
    <?php include 'components/meta.php'; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);
            padding: 100px 20px 60px;
            text-align: center;
            color: #ffffff;
        }

        .page-header h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .page-header p {
            font-size: 18px;
            opacity: 0.9;
        }

        /* Profile Section */
        .profile-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Profile Card */
        .profile-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            border: 2px solid var(--section);
            transition: all 0.3s ease;
        }

        .profile-card:hover {
            box-shadow: 0 15px 50px rgba(124, 18, 54, 0.2);
        }

        /* Profile Header */
        .profile-header {
            display: flex;
            gap: 30px;
            align-items: start;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid var(--section);
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 15px;
            border: 5px solid var(--main-color);
            overflow: hidden;
            flex-shrink: 0;
            box-shadow: 0 5px 20px rgba(124, 18, 54, 0.2);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-basic-info {
            flex: 1;
        }

        .profile-name {
            color: var(--hover-color);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .profile-designation {
            color: var(--main-color);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .profile-department {
            color: #666;
            font-size: 16px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .profile-department i {
            color: var(--btn-color);
        }

        /* Contact Info Grid */
        .contact-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            background: var(--main-section);
            border-radius: 8px;
            font-size: 14px;
            color: #666;
        }

        .contact-info-item i {
            color: var(--main-color);
            font-size: 16px;
        }

        /* Profile Sections */
        .profile-section-title {
            color: var(--main-color);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--btn-color);
            display: inline-block;
        }

        .profile-content {
            margin-bottom: 30px;
        }

        .profile-content h3 {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            margin-top: 25px;
        }

        .profile-content p,
        .profile-content li {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .profile-content ul {
            list-style: none;
            padding-left: 0;
        }

        .profile-content ul li {
            padding-left: 25px;
            position: relative;
            margin-bottom: 12px;
        }

        .profile-content ul li::before {
            content: '\f0da';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--main-color);
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-box {
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid var(--main-color);
        }

        .info-box h4 {
            color: var(--hover-color);
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .info-box p {
            color: #666;
            font-size: 15px;
            margin: 0;
        }

        /* Back Button */
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--main-color);
            color: #ffffff;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .back-button:hover {
            background: var(--hover-color);
            transform: translateX(-5px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .profile-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-image {
                width: 150px;
                height: 150px;
            }

            .profile-name {
                font-size: 24px;
            }

            .profile-designation {
                font-size: 18px;
            }

            .contact-info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <?php
    // Get staff ID from URL
    $staffId = isset($_GET['id']) ? $_GET['id'] : '';

    // Load faculty data from both JSON files
    $alliedJson = file_get_contents('data/faculty-allied.json');
    $nursingJson = file_get_contents('data/faculty-nursing.json');
    $alliedData = json_decode($alliedJson, true);
    $nursingData = json_decode($nursingJson, true);

    // Combine both arrays
    $staffData = array_merge($alliedData, $nursingData);

    // Find the faculty member by ID and determine their department
    $staff = null;
    $isAllied = false;
    $isNursing = false;

    foreach ($alliedData as $faculty) {
        if ($faculty['id'] === $staffId) {
            $staff = $faculty;
            $isAllied = true;
            break;
        }
    }

    if (!$staff) {
        foreach ($nursingData as $faculty) {
            if ($faculty['id'] === $staffId) {
                $staff = $faculty;
                $isNursing = true;
                break;
            }
        }
    }

    // Redirect if faculty not found
    if (!$staff) {
        // Redirect to staff page if invalid ID
        header('Location: staff.php');
        exit;
    }

    // Set back button URL based on department
    $backUrl = 'staff.php';
    $backText = 'Back to Staff';
    if ($isAllied) {
        $backUrl = 'allied-health-sciences-department.php';
        $backText = 'Back to Allied Health Sciences';
    } elseif ($isNursing) {
        $backUrl = 'nursing-department.php';
        $backText = 'Back to Nursing Department';
    }
    ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Faculty Profile</h1>
        <p><?php echo $staff['name']; ?></p>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-container">
            <a href="<?php echo $backUrl; ?>" class="back-button">
                <i class="fas fa-arrow-left"></i> <?php echo $backText; ?>
            </a>

            <div class="profile-card">
                <!-- Profile Header -->
                <div class="profile-header">
                    <div class="profile-image">
                        <img src="<?php echo $staff['image']; ?>" alt="<?php echo $staff['name']; ?>">
                    </div>
                    <div class="profile-basic-info">
                        <h1 class="profile-name"><?php echo $staff['name']; ?></h1>
                        <p class="profile-designation"><?php echo $staff['designation']; ?></p>
                        <p class="profile-department">
                            <i class="fas fa-building"></i>
                            <?php echo $staff['department']; ?>
                        </p>

                        <div class="contact-info-grid">
                            <div class="contact-info-item">
                                <i class="fas fa-id-card"></i>
                                <span><strong>Reg No:</strong> <?php echo $staff['registration']; ?></span>
                            </div>
                            <div class="contact-info-item">
                                <i class="fas fa-envelope"></i>
                                <span><?php echo $staff['email']; ?></span>
                            </div>
                            <div class="contact-info-item">
                                <i class="fas fa-phone"></i>
                                <span><?php echo $staff['mobile']; ?></span>
                            </div>
                            <div class="contact-info-item">
                                <i class="fab fa-linkedin"></i>
                                <span><?php echo $staff['linkedin']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Information -->
                <div class="info-grid">
                    <div class="info-box">
                        <h4><i class="fas fa-graduation-cap"></i> Educational Qualification</h4>
                        <p><?php echo $staff['qualification']; ?></p>
                    </div>
                    <div class="info-box">
                        <h4><i class="fas fa-star"></i> Area of Specialization</h4>
                        <p><?php echo $staff['specialization']; ?></p>
                    </div>
                    <div class="info-box">
                        <h4><i class="fas fa-briefcase"></i> Experience</h4>
                        <p><?php echo $staff['experience']; ?></p>
                    </div>
                    <div class="info-box">
                        <h4><i class="fas fa-calendar-alt"></i> Date of Joining</h4>
                        <p><?php echo $staff['joining_date']; ?></p>
                    </div>
                </div>

                <!-- Awards & Achievements -->
                <?php if (!empty($staff['awards'])): ?>
                <div class="profile-content">
                    <h2 class="profile-section-title"><i class="fas fa-trophy"></i> Academic Awards & Achievements</h2>
                    <ul>
                        <?php foreach ($staff['awards'] as $award): ?>
                            <li><?php echo $award; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- Publications -->
                <?php if (!empty($staff['publications'])): ?>
                <div class="profile-content">
                    <h2 class="profile-section-title"><i class="fas fa-file-alt"></i> Journal Publications</h2>
                    <ul>
                        <?php foreach ($staff['publications'] as $publication): ?>
                            <li><?php echo $publication; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- Areas of Interest -->
                <div class="profile-content">
                    <h2 class="profile-section-title"><i class="fas fa-heart"></i> Areas of Interest</h2>
                    <p><?php echo $staff['interests']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
