<?php
// Get department type from URL parameter
$type = isset($_GET['type']) ? $_GET['type'] : 'allied-health-sciences';

// Load courses data from JSON
$jsonData = file_get_contents('data/courses.json');
$courses = json_decode($jsonData, true);

// Check if department exists
if (!isset($courses[$type])) {
    header('Location: index.php');
    exit;
}

$course = $courses[$type];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course['title']; ?> - Niramaya Institute of Health Sciences</title>
    <?php include 'components/favicon.php'; ?>
    <?php include 'components/meta.php'; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Hero Banner Section */
        .hero-banner-section {
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(124, 18, 54, 0.95) 0%, rgba(93, 14, 40, 0.95) 100%), url('assets/images/hero-bg.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ffffff;
            padding: 120px 20px 80px;
        }

        .hero-banner-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-banner-container h4 {
            color: var(--btn-color);
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .hero-banner-container h4::before,
        .hero-banner-container h4::after {
            content: '';
            width: 50px;
            height: 2px;
            background: var(--btn-color);
        }

        .hero-banner-container h1 {
            font-size: 56px;
            font-weight: 700;
            margin-bottom: 25px;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-banner-container p {
            font-size: 20px;
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto 35px;
            opacity: 0.95;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .hero-stat-item {
            text-align: center;
        }

        .hero-stat-item i {
            font-size: 40px;
            color: var(--btn-color);
            margin-bottom: 10px;
            display: block;
        }

        .hero-stat-item h3 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .hero-stat-item p {
            font-size: 14px;
            opacity: 0.9;
            margin: 0;
        }

        /* Department Overview Section */
        .department-overview-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .department-overview-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 60px;
            align-items: center;
            flex-wrap: wrap;
        }

        .overview-image {
            flex: 1;
            min-width: 300px;
        }

        .overview-image-frame {
            border: 8px solid var(--main-color);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 20px 20px 0 rgba(124, 18, 54, 0.2);
            transform: rotate(-2deg);
            transition: transform 0.3s ease;
        }

        .overview-image-frame:hover {
            transform: rotate(0deg);
        }

        .overview-image-frame img {
            width: 100%;
            height: auto;
            display: block;
            transform: rotate(2deg) scale(1.1);
        }

        .overview-content {
            flex: 1;
            min-width: 300px;
        }

        .overview-content h4 {
            color: var(--main-color);
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .overview-content h2 {
            color: var(--hover-color);
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .overview-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* Programs Section */
        .programs-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .programs-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h4 {
            color: var(--main-color);
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .section-title h2 {
            color: var(--hover-color);
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-title p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        .program-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
            cursor: pointer;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--main-color);
        }

        .program-header {
            background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);
            padding: 40px 30px;
            text-align: center;
            color: #ffffff;
        }

        .program-header i {
            font-size: 60px;
            margin-bottom: 20px;
            display: block;
            color: var(--btn-color);
        }

        .program-header h3 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
        }

        .program-body {
            padding: 30px;
        }

        .program-body p {
            color: #666;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 25px;
            text-align: justify;
        }

        .program-features {
            list-style: none;
            padding: 0;
            margin: 0 0 25px 0;
        }

        .program-features li {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
        }

        .program-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--main-color);
            font-size: 14px;
        }

        .btn-learn-more {
            display: inline-block;
            background: var(--main-color);
            color: #ffffff;
            padding: 12px 30px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-learn-more:hover {
            background: var(--hover-color);
            transform: translateX(5px);
        }

        /* Program Details Section (for nursing) */
        .program-details-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .program-details-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .program-details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .detail-card {
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
            text-align: center;
        }

        .detail-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--main-color);
        }

        .detail-card i {
            font-size: 50px;
            color: var(--main-color);
            margin-bottom: 20px;
            display: block;
        }

        .detail-card h3 {
            color: var(--hover-color);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .detail-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        /* Career Section */
        .career-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .career-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .career-intro {
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            border-left: 5px solid var(--main-color);
            margin-bottom: 50px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .career-intro p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
        }

        .career-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .career-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
            position: relative;
            overflow: hidden;
        }

        .career-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);
        }

        .career-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(124, 18, 54, 0.15);
            border-color: var(--main-color);
        }

        .career-card h3 {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .career-card h3 i {
            color: var(--main-color);
            font-size: 24px;
            flex-shrink: 0;
        }

        .career-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .career-list li {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }

        .career-list li::before {
            content: '\f105';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--btn-color);
            font-size: 14px;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 20px;
            background: transparent;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-main-card {
            background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);
            padding: 60px 50px;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(124, 18, 54, 0.3);
            text-align: center;
            transition: all 0.3s ease;
        }

        .contact-main-card:hover {
            box-shadow: 0 20px 60px rgba(124, 18, 54, 0.4);
            transform: translateY(-5px);
        }

        .contact-header {
            margin-bottom: 30px;
        }

        .contact-header h2 {
            color: #ffffff;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .contact-header p {
            color: #ffffff;
            font-size: 18px;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto;
        }

        .btn-apply {
            display: inline-block;
            background: #ffffff;
            color: var(--main-color);
            padding: 18px 45px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-apply:hover {
            background: var(--btn-color);
            color: var(--hover-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-banner-container h1 {
                font-size: 36px;
            }

            .hero-banner-container p {
                font-size: 16px;
            }

            .hero-stats {
                gap: 30px;
            }

            .hero-stat-item h3 {
                font-size: 28px;
            }

            .overview-content h2,
            .section-title h2 {
                font-size: 32px;
            }

            .department-overview-container {
                flex-direction: column-reverse;
            }

            .programs-grid {
                grid-template-columns: 1fr;
            }

            .contact-main-card {
                padding: 40px 25px;
            }

            .contact-header h2 {
                font-size: 32px;
            }

            .contact-header p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Hero Banner Section -->
    <section class="hero-banner-section">
        <div class="hero-banner-container">
            <h4><?php echo $course['subtitle']; ?></h4>
            <h1><?php echo $course['title']; ?></h1>
            <p><?php echo $course['description']; ?></p>

            <div class="hero-stats">
                <?php foreach ($course['stats'] as $stat): ?>
                    <div class="hero-stat-item">
                        <i class="<?php echo $stat['icon']; ?>"></i>
                        <h3><?php echo $stat['value']; ?></h3>
                        <p><?php echo $stat['label']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Department Overview Section -->
    <section class="department-overview-section">
        <div class="department-overview-container">
            <!-- Image Section -->
            <div class="overview-image">
                <div class="overview-image-frame">
                    <img src="<?php echo $course['overview']['image']; ?>" alt="<?php echo $course['title']; ?>">
                </div>
            </div>

            <!-- Content Section -->
            <div class="overview-content">
                <h4><?php echo $course['overview']['sectionTitle']; ?></h4>
                <h2><?php echo $course['overview']['title']; ?></h2>
                <?php foreach ($course['overview']['paragraphs'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Programs Section (for Allied Health Sciences) -->
    <?php if (isset($course['programs'])): ?>
        <section class="programs-section">
            <div class="programs-container">
                <div class="section-title">
                    <h4><?php echo $course['programs']['sectionTitle']; ?></h4>
                    <h2><?php echo $course['programs']['title']; ?></h2>
                    <p><?php echo $course['programs']['description']; ?></p>
                </div>

                <div class="programs-grid">
                    <?php foreach ($course['programs']['items'] as $program): ?>
                        <div class="program-card" onclick="window.location.href='<?php echo $program['link']; ?>'">
                            <div class="program-header">
                                <i class="<?php echo $program['icon']; ?>"></i>
                                <h3><?php echo $program['title']; ?></h3>
                            </div>
                            <div class="program-body">
                                <p><?php echo $program['description']; ?></p>
                                <ul class="program-features">
                                    <?php foreach ($program['features'] as $feature): ?>
                                        <li><?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="<?php echo $program['link']; ?>" class="btn-learn-more">Learn More ’</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Program Details Section (for Nursing) -->
    <?php if (isset($course['programDetails'])): ?>
        <section class="program-details-section">
            <div class="program-details-container">
                <div class="section-title">
                    <h4><?php echo $course['programDetails']['sectionTitle']; ?></h4>
                    <h2><?php echo $course['programDetails']['title']; ?></h2>
                    <p><?php echo $course['programDetails']['description']; ?></p>
                </div>

                <div class="program-details-grid">
                    <?php foreach ($course['programDetails']['details'] as $detail): ?>
                        <div class="detail-card">
                            <i class="<?php echo $detail['icon']; ?>"></i>
                            <h3><?php echo $detail['title']; ?></h3>
                            <p><?php echo $detail['value']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Staff Section -->
    <section class="staff-section" style="padding: 80px 20px; font-family: 'Open Sans', sans-serif; <?php echo isset($course['programDetails']) ? 'background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);' : ''; ?>">
        <div class="staff-container" style="max-width: 1200px; margin: 0 auto;">
            <div class="section-title">
                <h4><?php echo $course['faculty']['sectionTitle']; ?></h4>
                <h2><?php echo $course['faculty']['title']; ?></h2>
                <p><?php echo $course['faculty']['description']; ?></p>
            </div>

            <div class="staff-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 40px;">
                <?php
                // Load faculty data from JSON
                $facultyJson = file_get_contents($course['faculty']['dataFile']);
                $facultyData = json_decode($facultyJson, true);

                foreach ($facultyData as $faculty):
                    $isPrincipal = ($faculty['type'] === 'principal');
                    $cardClass = $isPrincipal ? 'staff-card principal' : 'staff-card';
                    $cardBg = $isPrincipal ? 'background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);' : 'background: #ffffff;';
                    $cardBorder = $isPrincipal ? 'border: 2px solid var(--main-color);' : 'border: 2px solid var(--section);';
                    $avatarSize = $isPrincipal ? '180px' : '150px';
                    $avatarBorder = $isPrincipal ? 'border: 6px solid var(--btn-color);' : 'border: 5px solid var(--main-color);';
                    $nameSize = $isPrincipal ? '24px' : '22px';
                    $designationSize = $isPrincipal ? '18px' : '16px';
                ?>
                    <a href="profile.php?id=<?php echo $faculty['id']; ?>" class="<?php echo $cardClass; ?>" style="text-decoration: none; color: inherit; display: block; <?php echo $cardBg; ?> border-radius: 15px; padding: 30px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; <?php echo $cardBorder; ?> position: relative; overflow: hidden;">
                        <div style="content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);"></div>
                        <div class="staff-avatar" style="width: <?php echo $avatarSize; ?>; height: <?php echo $avatarSize; ?>; border-radius: 15px; margin: 0 auto 20px; <?php echo $avatarBorder; ?> transition: all 0.3s ease; overflow: hidden; box-shadow: 0 5px 15px rgba(124, 18, 54, 0.2);">
                            <img src="<?php echo $faculty['image']; ?>" alt="<?php echo $faculty['name']; ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        </div>
                        <h3 style="color: var(--hover-color); font-size: <?php echo $nameSize; ?>; font-weight: 700; text-align: center; margin-bottom: 10px;"><?php echo $faculty['name']; ?></h3>
                        <p style="color: var(--main-color); font-size: <?php echo $designationSize; ?>; font-weight: 600; text-align: center; margin-bottom: 8px;"><?php echo $faculty['designation']; ?></p>
                        <div style="color: #666; font-size: 15px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 15px; padding-top: 15px; border-top: 1px solid var(--section);">
                            <i class="fas fa-building" style="color: var(--btn-color); font-size: 16px;"></i>
                            <span><?php echo $faculty['department']; ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Career Opportunities Section (for Nursing) -->
    <?php if (isset($course['careers'])): ?>
        <section class="career-section">
            <div class="career-container">
                <div class="section-title">
                    <h4><?php echo $course['careers']['sectionTitle']; ?></h4>
                    <h2><?php echo $course['careers']['title']; ?></h2>
                </div>

                <div class="career-intro">
                    <p><?php echo $course['careers']['intro']; ?></p>
                </div>

                <div class="career-grid">
                    <?php foreach ($course['careers']['categories'] as $category): ?>
                        <div class="career-card">
                            <h3><i class="<?php echo $category['icon']; ?>"></i> <?php echo $category['title']; ?></h3>
                            <ul class="career-list">
                                <?php foreach ($category['opportunities'] as $opportunity): ?>
                                    <li><?php echo $opportunity; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-main-card">
                <div class="contact-header">
                    <h2><?php echo $course['cta']['title']; ?></h2>
                    <p><?php echo $course['cta']['description']; ?></p>
                </div>
                <a href="<?php echo $course['cta']['buttonLink']; ?>" class="btn-apply"><?php echo $course['cta']['buttonText']; ?></a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
