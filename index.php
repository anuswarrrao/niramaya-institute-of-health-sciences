<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niramaya Institute of Health Sciences</title>
    <?php include 'components/favicon.php'; ?>
    <?php include 'components/meta.php'; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 800px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: var(--hover-color);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 80px 40px;
            display: flex;
            align-items: center;
            gap: 60px;
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            flex: 1;
            min-width: 300px;
        }

        .hero-content h4 {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .hero-content h4::before {
            content: '';
            width: 50px;
            height: 2px;
            background: var(--main-color);
        }

        .hero-content h1 {
            color: #ffffff;
            font-size: 52px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero-content p {
            color: #ffffff;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 35px;
            max-width: 600px;
        }

        .hero-search-box {
            background: #ffffff;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            gap: 10px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            max-width: 550px;
        }

        .hero-search-input {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            border-right: 2px solid var(--section);
        }

        .hero-search-input i {
            color: var(--main-color);
            font-size: 18px;
        }

        .hero-search-input input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 14px;
            color: var(--text-color);
        }

        .hero-search-input input::placeholder {
            color: #999;
        }

        .hero-search-location {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
        }

        .hero-search-location i {
            color: var(--main-color);
            font-size: 18px;
        }

        .hero-search-location input {
            width: 120px;
            border: none;
            outline: none;
            font-size: 14px;
            color: var(--text-color);
        }

        .hero-search-location input::placeholder {
            color: #999;
        }

        .hero-search-btn {
            background: var(--main-color);
            color: #ffffff;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .hero-search-btn:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 18, 54, 0.3);
        }

        .hero-image {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .hero-image-wrapper {
            position: relative;
            perspective: 1000px;
        }

        .hero-image-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 20px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transform: rotate(3deg);
            transition: transform 0.3s ease;
        }

        .hero-image-card:hover {
            transform: rotate(0deg);
        }

        .hero-image-card img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            display: block;
        }

        .hero-decorative-dots {
            position: absolute;
            bottom: 50px;
            right: -30px;
            width: 150px;
            height: 150px;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.3) 2px, transparent 2px);
            background-size: 20px 20px;
        }

        .hero-decorative-circle {
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: var(--main-color);
            border-radius: 50%;
            opacity: 0.2;
        }

        /* About Section */
        .about-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .about-image-frame {
            border: 8px solid var(--main-color);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 20px 20px 0 rgba(124, 18, 54, 0.2);
            transform: rotate(-2deg);
            transition: transform 0.3s ease;
        }

        .about-image-frame img {
            width: 100%;
            height: auto;
            display: block;
            transform: rotate(2deg) scale(1.1);
        }

        .about-content {
            flex: 1;
            min-width: 300px;
        }

        .about-content h4 {
            color: var(--main-color);
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .about-content h2 {
            color: var(--hover-color);
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .about-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-content .btn-read-more {
            display: inline-block;
            background: var(--main-color);
            color: #ffffff;
            padding: 15px 35px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(124, 18, 54, 0.3);
        }

        .about-content .btn-read-more:hover {
            background: var(--hover-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(124, 18, 54, 0.4);
        }

        /* Services Section */
        .services-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            font-family: 'Open Sans', sans-serif;
        }

        .services-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .services-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .services-header h4 {
            color: var(--main-color);
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .services-header h2 {
            color: var(--hover-color);
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            align-items: start;
        }

        .services-grid>div {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .service-card {
            background: #ffffff;
            padding: 30px;
            border: 2px solid var(--section);
            border-radius: 10px;
            transition: all 0.3s ease;
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .service-card:hover {
            border-color: var(--main-color);
            box-shadow: 0 10px 30px rgba(124, 18, 54, 0.15);
            transform: translateY(-5px);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: var(--main-section);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .service-icon i {
            color: var(--main-color);
            font-size: 28px;
        }

        .service-card h3 {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        .services-center-image {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .services-center-image img {
            width: 100%;
            max-width: 350px;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.1));
        }

        /* Blog Section */
        .blog-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            font-family: 'Open Sans', sans-serif;
        }

        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .blog-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .blog-header h4 {
            color: var(--main-color);
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .blog-header h2 {
            color: var(--hover-color);
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .blog-card {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .blog-image {
            position: relative;
            overflow: hidden;
            height: 250px;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.1);
        }

        .blog-date-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: var(--main-color);
            color: #ffffff;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-content h3 {
            color: var(--hover-color);
            font-size: 22px;
            font-weight: 700;
            line-height: 1.4;
            margin: 0;
        }

        /* Appointment Banner Section */
        .appointment-banner-section {
            padding: 0;
            background: var(--btn-color);
            font-family: 'Open Sans', sans-serif;
            overflow: visible;
            margin-top: 100px;
        }

        .appointment-banner-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: flex-end;
            min-height: 300px;
            position: relative;
        }

        .appointment-banner-image {
            flex: 0 0 400px;
            position: relative;
            overflow: visible;
            height: 450px;
            margin-top: -180px;
        }

        .appointment-banner-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .appointment-banner-image img.active {
            opacity: 1;
            z-index: 1;
        }

        .appointment-banner-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            z-index: 2;
            white-space: nowrap;
        }

        .appointment-banner-caption.active {
            opacity: 1;
        }

        .appointment-banner-content {
            flex: 1;
            padding: 60px 80px;
        }

        .appointment-banner-label {
            color: var(--hover-color);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .appointment-banner-content h2 {
            color: #ffffff;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 30px;
        }

        .btn-book-appointment {
            display: inline-block;
            background: var(--btn-color);
            color: #ffffff;
            padding: 16px 40px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(198, 146, 73, 0.4);
        }

        .btn-book-appointment:hover {
            background: var(--main-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(124, 18, 54, 0.5);
        }

        .associations-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        .association-card {
            background: #ffffff;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            text-align: left;
        }

        .association-card:hover {
            border-color: var(--main-color);
            box-shadow: 0 10px 30px rgba(124, 18, 54, 0.15);
            transform: translateY(-5px);
        }

        .association-card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .association-card-icon i {
            color: #ffffff;
            font-size: 32px;
        }

        .association-card-content h3 {
            color: var(--main-color);
            font-size: 20px;
            font-weight: 700;
        }

        .association-card-content p {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .appointment-banner-section {
                margin-top: 0;
            }

            .appointment-banner-container {
                flex-direction: column;
            }

            .appointment-banner-image {
                flex: 0 0 250px;
                width: 100%;
                height: 250px;
                margin-top: 0;
            }

            .appointment-banner-content {
                padding: 40px 20px;
                text-align: center;
            }

            .appointment-banner-content h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .appointment-banner-label {
                font-size: 12px;
                margin-bottom: 12px;
            }

            .associations-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .association-card {
                flex-direction: column;
                text-align: center;
                padding: 25px;
            }

            .btn-book-appointment {
                padding: 14px 30px;
                font-size: 13px;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .hero-container {
                flex-direction: column;
                padding: 60px 20px;
            }

            .hero-search-box {
                flex-direction: column;
                max-width: 100%;
            }

            .hero-search-input {
                border-right: none;
                border-bottom: 2px solid var(--section);
            }

            .hero-search-location input {
                width: 100%;
            }

            .about-content h2,
            .services-header h2,
            .blog-header h2 {
                font-size: 32px;
            }

            .appointment-content h2 {
                font-size: 34px;
            }

            .specialists-header h2 {
                font-size: 26px;
            }

            .appointment-specialists-container {
                flex-direction: column;
            }

            .specialists-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('assets/images/hero-bg.png');">
        <div class="hero-container">
            <!-- Hero Content -->
            <div class="hero-content">
                <h4>Welcome To Niramaya</h4>
                <h1>Empowering Healthcare Education</h1>
                <p>Established in 2023, Niramaya provides quality healthcare education, nurturing skilled and compassionate professionals.</p>
            </div>

            <!-- Hero Image -->
            <div class="hero-image">
                <img src="assets/images/hero-banner.png" alt="Niramaya College Nursing Students">
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="about-container">
            <!-- Image Section -->
            <div class="about-image">
                <div class="about-image-frame">
                    <img src="assets/images/home.webp" alt="Dental Care">
                </div>
            </div>

            <!-- Content Section -->
            <div class="about-content">
                <h4>ABOUT US</h4>
                <h2>Nursing & Allied Health Sciences</h2>
                <p>Founded in 2023 at the SMVITM campus, Bantakal, Udupi, Niramaya institute of health sciences operates under the Shri Vishnu Moorthy Hayavadana Swami Educational Society®, guided by His Holiness Shri Vishwa Vallabha Theertha Swamiji. The institution was established to provide quality, affordable healthcare education to aspiring students.</p>
                <p>Affiliated to RGUHS, Bengaluru and approved by the Government of Karnataka, Niramaya trains students in Nursing and Allied Health Sciences, preparing them to serve society as skilled and compassionate healthcare professionals.</p>
                <a href="about.php" class="btn-read-more">READ MORE</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="services-container">
            <!-- Section Header -->
            <div class="services-header">
                <h4>OUR FACILITIES</h4>
                <h2>What We Provide</h2>
            </div>

            <!-- Services Grid -->
            <div class="services-grid">
                <!-- Left Column Services -->
                <div>
                    <!-- Classrooms -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div>
                            <h3>Classrooms</h3>
                            <p>Smart, spacious, and tech-enabled learning spaces.</p>
                        </div>
                    </div>

                    <!-- Library -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div>
                            <h3>Library</h3>
                            <p>5,000+ books and resources for academic excellence.</p>
                        </div>
                    </div>

                    <!-- Laboratories -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div>
                            <h3>Laboratories</h3>
                            <p>Specialized labs for practical and clinical training.</p>
                        </div>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="services-center-image">
                    <img src="assets/images/service-banner.png" alt="College Facilities">
                </div>

                <!-- Right Column Services -->
                <div>
                    <!-- Transportation -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div>
                            <h3>Transportation</h3>
                            <p>Safe and reliable college bus facilities.</p>
                        </div>
                    </div>

                    <!-- Clinical Facilities -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <div>
                            <h3>Clinical Facilities</h3>
                            <p>Hospital tie-ups for real-world clinical exposure.</p>
                        </div>
                    </div>

                    <!-- Hostel Facilities -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h3>Hostel Facilities</h3>
                            <p>Secure and comfortable on-campus living.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Banner Section -->
    <section class="appointment-banner-section">
        <div class="appointment-banner-container">
            <!-- Left Side - Image -->
            <div class="appointment-banner-image">
                <img src="assets/images/11.png" alt="Doctor" data-caption="Ms. Varsha – 1st in World Health Day poster">
                <img src="assets/images/12.png" alt="Doctor" data-caption="Niramaya – 1st in March Past">
                <div class="appointment-banner-caption"></div>
            </div>

            <!-- Right Side - Content -->
            <div class="appointment-banner-content">
                <p class="appointment-banner-label">Associations and clubs in the Institute</p>
                <h2>Niramaya promotes holistic growth through student clubs and associations.</h2>

                <!-- Association Cards -->
                <div class="associations-cards">
                    <!-- SNA Card -->
                    <div class="association-card">
                        <div class="association-card-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="association-card-content">
                            <h3>Student Nurses Association</h3>
                            <p>Leadership, learning & service</p>
                        </div>
                    </div>

                    <!-- YRC Card -->
                    <div class="association-card">
                        <div class="association-card-icon">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <div class="association-card-content">
                            <h3>Youth Red Cross</h3>
                            <p>Health, service & humanity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="blog-container">
            <!-- Section Header -->
            <div class="blog-header">
                <h4>OUR BLOG</h4>
                <h2>Latest Blog & News</h2>
            </div>

            <!-- Blog Grid -->
            <div class="blog-grid">
                <?php
                $blogEvents = [
                    ['folder' => 'world health day 2025', 'date' => 'April 7, 2025', 'description' => 'Celebrating health awareness and promoting wellness through various activities and exhibitions.'],
                    ['folder' => 'Independence day 2025', 'date' => 'August 15, 2025', 'description' => 'Commemorating India\'s independence with flag hoisting and cultural programs.'],
                    ['folder' => 'international yoga day', 'date' => 'June 21, 2025', 'description' => 'Promoting physical and mental well-being through yoga sessions and demonstrations.'],
                    ['folder' => 'Nurses Day celebration', 'date' => 'May 12, 2025', 'description' => 'Honoring the dedication and service of nurses with special recognition programs.'],
                    ['folder' => 'sports day', 'date' => 'March 2025', 'description' => 'Annual sports meet showcasing student talent in various athletic events.'],
                    ['folder' => 'womens day celebration', 'date' => 'March 8, 2025', 'description' => 'Celebrating women\'s achievements and empowerment through various activities.']
                ];

                foreach ($blogEvents as $event) {
                    $folderPath = "upload/blog/" . $event['folder'];
                    $images = glob($folderPath . "/*.{jpg,jpeg,png,webp}", GLOB_BRACE);

                    if (!empty($images)) {
                        $firstImage = $images[0];
                        $eventName = ucwords($event['folder']);
                        ?>
                        <div class="blog-card" onclick="window.location.href='blog-detail.php?event=<?php echo urlencode($event['folder']); ?>'">
                            <div class="blog-image">
                                <img src="<?php echo $firstImage; ?>" alt="<?php echo $eventName; ?>">
                                <div class="blog-date-badge">
                                    <i class="fas fa-calendar-alt"></i>
                                    <?php echo $event['date']; ?>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3><?php echo $eventName; ?></h3>
                                <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                                    <?php echo $event['description']; ?>
                                </p>
                                <a href="blog-detail.php?event=<?php echo urlencode($event['folder']); ?>" class="read-more" style="display: inline-flex; align-items: center; gap: 8px; color: var(--main-color); font-weight: 600; font-size: 14px; text-decoration: none; transition: all 0.3s ease;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>

    <script>
        // Slideshow for Appointment Banner Images
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.appointment-banner-image img');
            const caption = document.querySelector('.appointment-banner-caption');
            let currentIndex = 0;

            console.log('Slideshow initialized with', images.length, 'images');

            // Show first image and caption initially
            if (images.length > 0) {
                images[0].classList.add('active');
                if (caption && images[0].dataset.caption) {
                    caption.textContent = images[0].dataset.caption;
                    caption.classList.add('active');
                }
                console.log('First image activated');
            }

            // Function to show next image
            function showNextImage() {
                // Remove active class from current image and caption
                images[currentIndex].classList.remove('active');
                if (caption) {
                    caption.classList.remove('active');
                }

                // Move to next image
                currentIndex = (currentIndex + 1) % images.length;

                // Add active class to next image and update caption
                images[currentIndex].classList.add('active');
                if (caption && images[currentIndex].dataset.caption) {
                    // Small delay to sync caption transition with image
                    setTimeout(() => {
                        caption.textContent = images[currentIndex].dataset.caption;
                        caption.classList.add('active');
                    }, 100);
                }
                console.log('Switched to image', currentIndex + 1);
            }

            // Change image every 3 seconds
            if (images.length > 1) {
                setInterval(showNextImage, 3000);
                console.log('Slideshow interval started');
            }
        });
    </script>
</body>

</html>