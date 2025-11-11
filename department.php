<?php
// Get department type from URL parameter
$type = isset($_GET['type']) ? $_GET['type'] : 'medical-imaging';

// Load department data from JSON
$jsonData = file_get_contents('data/department.json');
$departments = json_decode($jsonData, true);

// Check if department exists
if (!isset($departments[$type])) {
    header('Location: index.php');
    exit;
}

$dept = $departments[$type];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dept['title']; ?> - Niramaya Institute of Health Sciences</title>
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

        /* Overview Section */
        .overview-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .overview-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
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

        .overview-content {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--main-color);
            margin-bottom: 40px;
        }

        .overview-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .overview-content p:last-child {
            margin-bottom: 0;
        }

        /* Scope Section */
        .scope-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .scope-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .scope-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .scope-card {
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
            text-align: center;
        }

        .scope-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--main-color);
        }

        .scope-card i {
            font-size: 45px;
            color: var(--main-color);
            margin-bottom: 20px;
            display: block;
        }

        .scope-card h3 {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .scope-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        .scope-content {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--main-color);
        }

        .scope-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
        }

        /* Career Section */
        .career-section {
            padding: 80px 20px;
        }

        .career-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .career-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .career-card {
            background: linear-gradient(135deg, var(--btn-color) 0%, #b8864d 100%);
            padding: 35px 30px;
            border-radius: 15px;
            color: #ffffff;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .career-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(124, 18, 54, 0.2) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .career-card:hover::before {
            opacity: 1;
        }

        .career-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .career-card i {
            font-size: 50px;
            color: var(--hover-color);
            margin-bottom: 20px;
            display: block;
            position: relative;
            z-index: 1;
        }

        .career-card h3 {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        .career-card p {
            color: var(--hover-color);
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        /* Facilities/Training Section */
        .facilities-section,
        .training-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .facilities-container,
        .training-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .facilities-content,
        .training-content {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--main-color);
            margin-bottom: 40px;
        }

        .facilities-content h3,
        .training-content h3 {
            color: var(--hover-color);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .facilities-content p,
        .training-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .facilities-list,
        .training-list {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .facilities-list li,
        .training-list li {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
        }

        .facilities-list li::before,
        .training-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--main-color);
            font-size: 16px;
        }

        .training-list li strong {
            color: var(--hover-color);
            font-weight: 700;
        }

        /* Info Section */
        .info-section {
            padding: 80px 20px;
        }

        .info-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .info-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--main-color);
        }

        .info-box h3 {
            color: var(--hover-color);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .info-box h3 i {
            color: var(--main-color);
            font-size: 30px;
        }

        .info-box p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 28px;
            }

            .page-header p {
                font-size: 16px;
            }

            .section-title h2 {
                font-size: 32px;
            }

            .overview-content,
            .scope-content,
            .facilities-content,
            .training-content {
                padding: 25px;
            }

            .scope-grid,
            .career-grid {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-box {
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1><?php echo $dept['title']; ?></h1>
        <p><?php echo $dept['subtitle']; ?></p>
    </section>

    <!-- Overview Section -->
    <section class="overview-section">
        <div class="overview-container">
            <div class="section-title">
                <h4>PROGRAM OVERVIEW</h4>
                <h2><?php echo $dept['overview']['title']; ?></h2>
            </div>

            <div class="overview-content">
                <?php foreach ($dept['overview']['content'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Scope Section -->
    <section class="scope-section">
        <div class="scope-container">
            <div class="section-title">
                <h4>OPPORTUNITIES</h4>
                <h2><?php echo $dept['scope']['title']; ?></h2>
            </div>

            <?php if (isset($dept['scope']['items'])): ?>
                <div class="scope-grid">
                    <?php foreach ($dept['scope']['items'] as $item): ?>
                        <div class="scope-card">
                            <i class="<?php echo $item['icon']; ?>"></i>
                            <h3><?php echo $item['title']; ?></h3>
                            <?php if (isset($item['description'])): ?>
                                <p><?php echo $item['description']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php elseif (isset($dept['scope']['content'])): ?>
                <div class="scope-content">
                    <p><?php echo $dept['scope']['content']; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Career Paths Section -->
    <section class="career-section">
        <div class="career-container">
            <div class="section-title">
                <h4>CAREER OPPORTUNITIES</h4>
                <h2><?php echo $dept['careers']['title']; ?></h2>
                <?php if (isset($dept['careers']['description'])): ?>
                    <p><?php echo $dept['careers']['description']; ?></p>
                <?php endif; ?>
            </div>

            <div class="career-grid">
                <?php foreach ($dept['careers']['items'] as $career): ?>
                    <div class="career-card">
                        <i class="<?php echo $career['icon']; ?>"></i>
                        <h3><?php echo $career['title']; ?></h3>
                        <?php if (isset($career['description'])): ?>
                            <p><?php echo $career['description']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Facilities Section (for medical-laboratory) -->
    <?php if (isset($dept['facilities'])): ?>
        <section class="facilities-section">
            <div class="facilities-container">
                <div class="section-title">
                    <h4>TRAINING & FACILITIES</h4>
                    <h2><?php echo $dept['facilities']['title']; ?></h2>
                </div>

                <div class="facilities-content">
                    <?php foreach ($dept['facilities']['sections'] as $section): ?>
                        <h3><?php echo $section['title']; ?></h3>
                        <?php if (isset($section['description'])): ?>
                            <p><?php echo $section['description']; ?></p>
                        <?php endif; ?>
                        <?php if (isset($section['list'])): ?>
                            <ul class="facilities-list">
                                <?php foreach ($section['list'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Training Section (for anaesthesia) -->
    <?php if (isset($dept['training'])): ?>
        <section class="training-section">
            <div class="training-container">
                <div class="section-title">
                    <h4>TRAINING & FACILITIES</h4>
                    <h2><?php echo $dept['training']['title']; ?></h2>
                </div>

                <div class="training-content">
                    <?php foreach ($dept['training']['sections'] as $section): ?>
                        <h3><?php echo $section['title']; ?></h3>
                        <?php if (isset($section['description'])): ?>
                            <p><?php echo $section['description']; ?></p>
                        <?php endif; ?>
                        <?php if (isset($section['list'])): ?>
                            <ul class="training-list">
                                <?php foreach ($section['list'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Info Section -->
    <section class="info-section">
        <div class="info-container">
            <div class="info-grid">
                <?php foreach ($dept['info'] as $info): ?>
                    <div class="info-box">
                        <h3>
                            <i class="<?php echo $info['icon']; ?>"></i>
                            <?php echo $info['title']; ?>
                        </h3>
                        <p><?php echo $info['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
