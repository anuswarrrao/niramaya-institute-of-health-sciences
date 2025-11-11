<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Sc Nursing - Niramaya Institute of Health Sciences</title>
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

        /* Course Overview Section */
        .course-overview-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .course-overview-container {
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

        /* Course Details Grid */
        .course-details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .detail-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
        }

        .detail-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--main-color);
        }

        .detail-card i {
            font-size: 40px;
            color: var(--main-color);
            margin-bottom: 20px;
            display: block;
        }

        .detail-card h3 {
            color: var(--hover-color);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .detail-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        /* Eligibility Section */
        .eligibility-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .eligibility-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .eligibility-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--main-color);
        }

        .eligibility-box h3 {
            color: var(--hover-color);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .eligibility-box h3 i {
            color: var(--main-color);
            font-size: 30px;
        }

        .eligibility-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .eligibility-list li {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
        }

        .eligibility-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--main-color);
            font-size: 16px;
        }

        /* Highlights Section */
        .highlights-section {
            padding: 80px 20px;
        }

        .highlights-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .highlight-card {
            background: linear-gradient(135deg, var(--btn-color) 0%, #b8864d 100%);
            padding: 35px 30px;
            border-radius: 15px;
            color: #ffffff;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .highlight-card::before {
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

        .highlight-card:hover::before {
            opacity: 1;
        }

        .highlight-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .highlight-card i {
            font-size: 45px;
            color: var(--hover-color);
            margin-bottom: 20px;
            display: block;
            position: relative;
            z-index: 1;
        }

        .highlight-card h3 {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        .highlight-card p {
            color: var(--hover-color);
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        /* Faculty Section */
        .faculty-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
        }

        .faculty-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .faculty-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
            position: relative;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .faculty-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(135deg, var(--main-color) 0%, var(--hover-color) 100%);
        }

        .faculty-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(124, 18, 54, 0.2);
            border-color: var(--main-color);
        }

        .faculty-avatar {
            width: 150px;
            height: 150px;
            border-radius: 15px;
            margin: 0 auto 20px;
            border: 5px solid var(--main-color);
            transition: all 0.3s ease;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(124, 18, 54, 0.2);
        }

        .faculty-card:hover .faculty-avatar {
            transform: scale(1.05);
            border-color: var(--btn-color);
            box-shadow: 0 8px 25px rgba(124, 18, 54, 0.3);
        }

        .faculty-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .faculty-name {
            color: var(--hover-color);
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 8px;
        }

        .faculty-designation {
            color: var(--main-color);
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 8px;
        }

        .faculty-department {
            color: #666;
            font-size: 14px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid var(--section);
        }

        .faculty-department i {
            color: var(--btn-color);
            font-size: 14px;
        }

        /* Vice Principal Highlight */
        .faculty-card.vice-principal {
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            border: 2px solid var(--main-color);
        }

        .faculty-card.vice-principal .faculty-avatar {
            width: 170px;
            height: 170px;
            border: 6px solid var(--btn-color);
        }

        .faculty-card.vice-principal .faculty-name {
            font-size: 22px;
        }

        .faculty-card.vice-principal .faculty-designation {
            font-size: 17px;
        }

        /* Career Opportunities Section */
        .career-section {
            padding: 80px 20px;
        }

        .career-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .career-intro {
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            padding: 30px;
            border-radius: 15px;
            border-left: 5px solid var(--main-color);
            margin-bottom: 40px;
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
            gap: 25px;
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
            margin-bottom: 15px;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }

            .section-title h2 {
                font-size: 32px;
            }

            .course-details-grid {
                grid-template-columns: 1fr;
            }

            .highlights-grid {
                grid-template-columns: 1fr;
            }

            .eligibility-box {
                padding: 25px;
            }

            .faculty-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Bachelor of Science in Nursing</h1>
        <p>Build Your Career in Compassionate Healthcare</p>
    </section>

    <!-- Course Overview Section -->
    <section class="course-overview-section">
        <div class="course-overview-container">
            <div class="section-title">
                <h4>PROGRAM OVERVIEW</h4>
                <h2>B.Sc Nursing</h2>
                <p>A comprehensive 4-year undergraduate program designed to develop skilled, compassionate, and competent nursing professionals ready to serve in diverse healthcare settings.</p>
            </div>

            <!-- Course Details Grid -->
            <div class="course-details-grid">
                <!-- Duration -->
                <div class="detail-card">
                    <i class="fas fa-clock"></i>
                    <h3>Duration</h3>
                    <p>4 years (including internship)</p>
                </div>

                <!-- Affiliation -->
                <div class="detail-card">
                    <i class="fas fa-university"></i>
                    <h3>Affiliation</h3>
                    <p>Rajiv Gandhi University of Health Sciences (RGUHS), Bengaluru</p>
                </div>

                <!-- Recognition -->
                <div class="detail-card">
                    <i class="fas fa-certificate"></i>
                    <h3>Recognition</h3>
                    <p>Rajiv Gandhi University of Health sciences , Karnataka State Nursing Council and Government of Karnataka</p>
                </div>

                <!-- Medium -->
                <div class="detail-card">
                    <i class="fas fa-language"></i>
                    <h3>Medium of Instruction</h3>
                    <p>English</p>
                </div>

                <!-- Intake -->
                <div class="detail-card">
                    <i class="fas fa-users"></i>
                    <h3>Intake Capacity</h3>
                    <p>40 seats per academic year</p>
                </div>

                <!-- Eligibility -->
                <div class="detail-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Minimum Qualification</h3>
                    <p>10+2 (Science stream with Physics, Chemistry, and Biology)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section class="eligibility-section">
        <div class="eligibility-container">
            <div class="section-title">
                <h4>ADMISSION REQUIREMENTS</h4>
                <h2>Eligibility Criteria</h2>
            </div>

            <div class="eligibility-box">
                <h3>
                    <i class="fas fa-clipboard-check"></i>
                    Who Can Apply?
                </h3>
                <ul class="eligibility-list">
                    <li>Candidates must have completed 10+2 or equivalent examination in Science stream</li>
                    <li>Mandatory subjects: Physics, Chemistry, and Biology</li>
                    <li>Minimum aggregate marks: 45% (40% for reserved categories)</li>
                    <li>Age criteria as per KSNC and RGUHS norms</li>
                    <li>Medical fitness certificate required at the time of admission</li>
                    <li>Proficiency in English language (medium of instruction)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Course Highlights Section -->
    <section class="highlights-section">
        <div class="highlights-container">
            <div class="section-title">
                <h4>PROGRAM FEATURES</h4>
                <h2>Course Highlights</h2>
            </div>

            <div class="highlights-grid">
                <!-- Highlight 1 -->
                <div class="highlight-card">
                    <i class="fas fa-book-open"></i>
                    <h3>Comprehensive Curriculum</h3>
                    <p>Theory, practicals, and clinical exposure combining academic excellence with hands-on training.</p>
                </div>

                <!-- Highlight 2 -->
                <div class="highlight-card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Experienced Faculty</h3>
                    <p>Learn from qualified and dedicated nursing educators with extensive clinical experience.</p>
                </div>

                <!-- Highlight 3 -->
                <div class="highlight-card">
                    <i class="fas fa-flask"></i>
                    <h3>Well-Equipped Laboratories</h3>
                    <p>State-of-the-art nursing labs with modern equipment for practical skill development.</p>
                </div>

                <!-- Highlight 4 -->
                <div class="highlight-card">
                    <i class="fas fa-hospital"></i>
                    <h3>Hospital Postings</h3>
                    <p>Regular clinical rotations in affiliated multi-specialty hospitals for real-world exposure.</p>
                </div>

                <!-- Highlight 5 -->
                <div class="highlight-card">
                    <i class="fas fa-user-md"></i>
                    <h3>Patient Care Focus</h3>
                    <p>Strong emphasis on ethics, compassionate patient care, and professional conduct.</p>
                </div>

                <!-- Highlight 6 -->
                <div class="highlight-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Evidence-Based Practice</h3>
                    <p>Training in research, critical thinking, leadership, and evidence-based nursing practice.</p>
                </div>
            </div>
        </div>
    </section>



    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
