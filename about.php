<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Niramaya Institute of Health Sciences</title>
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

        /* About Section */
        .about-content-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .about-content-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-content-container h2 {
            color: var(--main-color);
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .about-content-container p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* Mission & Vision Section */
        .mission-vision-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .mission-vision-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .mission-card,
        .vision-card {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .mission-card:hover,
        .vision-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .mission-card h3,
        .vision-card h3 {
            color: var(--main-color);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mission-card h3 i,
        .vision-card h3 i {
            font-size: 40px;
            color: var(--btn-color);
        }

        .mission-card p,
        .vision-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
        }

        /* Salient Features Section */
        .salient-features-section {
            padding: 80px 20px;
        }

        .salient-features-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .salient-features-container h2 {
            color: var(--main-color);
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
        }

        .features-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .feature-item {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid var(--btn-color);
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .feature-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .feature-item i {
            color: var(--btn-color);
            font-size: 20px;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .feature-item p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }

            .about-content-container h2 {
                font-size: 28px;
            }

            .section-title h2 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>About Niramaya</h1>
        <p>Empowering Healthcare Education Since 2023</p>
    </section>

    <!-- About Content Section -->
    <section class="about-content-section">
        <div class="about-content-container">
            <h2>Our Story</h2>
            <p>Niraamaya Institute of Health Sciences, nestled in the vibrant SMVITM campus at Bantakal, Udupi, was established in 2023 under the esteemed Sode Group of Institutions, led by the pontiff Shri Vishwa Vallabha Theertha Swamiji. Strategically located in the coastal healthcare hub, the institute caters to the needs of students belonging to rural areas and opens doors for aspirants to access world-class Nursing and Allied Health SciencesEducationatan affordable cost.</p>

            <p>The institution was founded with the noble mission of making quality healthcare education accessible to underprivileged and aspiring students, empowering them to pursue meaningful careers in the medical field. By nurturing both nursing professionals and allied health specialists, Niramaya addresses the growing need for qualified healthcare providers who can contribute with skill, dedication, and compassion.</p>

            <p>Affiliated to Rajiv Gandhi University of Health Sciences (RGUHS), Karnataka, Bengaluru and approved by the Government of Karnataka, the college offers a strong academic foundation enriched with practical training and value-based learning.</p>

            <p>Through its programs, Niramaya strives to inspire young minds from local and neighboring regions to build careers that not only transform their lives but also strengthen the healthcare sector, creating a healthier and more caring society.</p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision-section">
        <div class="mission-vision-container">
            <!-- Vision Card -->
            <div class="vision-card">
                <h3>
                    <i class="fas fa-eye"></i>
                    Our Vision
                </h3>
                <p>To be a globally recognized institution in health sciences, leading in clinical excellence, research innovation and compassionate care that transforms lives.</p>
            </div>

            <!-- Mission Card -->
            <div class="mission-card">
                <h3>
                    <i class="fas fa-bullseye"></i>
                    Our Mission
                </h3>
                 <ol style="padding-left: 20px; color: #666; font-size: 16px; line-height: 1.8;">
                    <li style="margin-bottom: 10px;">To provide holistic education that integrates medical excellence, research, with value-based, quality education at an affordable fee</li>
                    <li style="margin-bottom: 10px;">To promote community-centered healthcare through outreach, public health initiatives, and rural engagement.</li>
                    <li>To foster a culture of ethical practice and lifelong learning.</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Salient Features Section -->
    <section class="salient-features-section">
        <div class="salient-features-container">
            <h2>Salient Features</h2>
            <div class="features-list">
                <div class="feature-item">
                    <i class="fas fa-building"></i>
                    <p>Part of the renowned Sode Group of Institutions.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Prime location in Udupi's coastal healthcare hub.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-graduation-cap"></i>
                    <p>Academic tie-ups with Universities: Nitte & MAHE Manipal</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-briefcase"></i>
                    <p>Strong focus on placements & global careers.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-language"></i>
                    <p>Language coaching & career mentoring.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-calendar-alt"></i>
                    <p>Regular CME, Conferences, & workshops.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-user-tie"></i>
                    <p>Expert guidance, mentoring & research.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-lightbulb"></i>
                    <p>Vision to create skilled, compassionate leaders.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-scholarship"></i>
                    <p>Supportive merit-cum-means scholarships</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
