<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - Niramaya Institute of Health Sciences</title>
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

        /* Facilities Section */
        .facilities-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .facilities-container {
            max-width: 1400px;
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

        /* Facilities Grid */
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .facility-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid var(--section);
        }

        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--main-color);
        }

        .facility-image {
            position: relative;
            overflow: hidden;
            height: 280px;
            background: var(--section);
        }

        .facility-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .facility-card:hover .facility-image img {
            transform: scale(1.1);
        }

        .facility-info {
            padding: 25px;
            text-align: center;
        }

        .facility-info h3 {
            color: var(--hover-color);
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .facility-info p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        .facility-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--btn-color) 0%, #b8864d 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -40px auto 20px;
            position: relative;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .facility-icon i {
            color: #ffffff;
            font-size: 28px;
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

            .facilities-grid {
                grid-template-columns: 1fr;
            }

            .facility-image {
                height: 250px;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Our Facilities</h1>
        <p>State-of-the-Art Infrastructure for Excellence in Healthcare Education</p>
    </section>

    <!-- Facilities Section -->
    <section class="facilities-section">
        <div class="facilities-container">
            <div class="facilities-grid">
                <!-- Library -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/auditorium.jpg" alt="Library">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Library & Internet</h3>
                        <p>Extensive collection of books, journals, and digital resources.</p>
                    </div>
                </div>

                <!-- Classroom -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/classroom.jpg" alt="Classroom">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <h3>Smart Classrooms</h3>
                        <p>Modern, well-equipped classrooms with audio-visual technology.</p>
                    </div>
                </div>

                <!-- Clinical Lab -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/Clinical_Lab.jpg" alt="Clinical Laboratory">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h3>Clinical Laboratory</h3>
                        <p>Advanced clinical lab with state-of-the-art diagnostic equipment.</p>
                    </div>
                </div>

                <!-- Computer Lab -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/Lib_n_internet.jpg" alt="Computer Lab">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h3>Computer Lab</h3>
                        <p>Modern computer lab with internet connectivity and latest software.</p>
                    </div>
                </div>

                <!-- Microbiology Lab -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/microbiology_lab.jpg" alt="Microbiology Laboratory">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3>Microbiology Laboratory</h3>
                        <p>Well-equipped microbiology lab for bacteriology and virology studies.</p>
                    </div>
                </div>

                <!-- Nursing Lab -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/nursing_lab.jpg" alt="Nursing Laboratory">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-user-nurse"></i>
                        </div>
                        <h3>Nursing Laboratory</h3>
                        <p>Comprehensive nursing lab for clinical skill development.</p>
                    </div>
                </div>

                <!-- Operation Theatre 1 -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/ott2.jpg" alt="Operation Theatre">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3>Operation Theatre</h3>
                        <p>Simulated OT environment for hands-on surgical training.</p>
                    </div>
                </div>

                <!-- Operation Theatre 2 -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/ott3.jpg" alt="Advanced Operation Theatre">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-hospital-alt"></i>
                        </div>
                        <h3>Advanced OT Facility</h3>
                        <p>Modern operation theatre with latest medical equipment.</p>
                    </div>
                </div>

                <!-- Pathology Lab -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/Pathology_lab.jpg" alt="Pathology Laboratory">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Pathology Laboratory</h3>
                        <p>Fully equipped pathology lab for diagnostic training.</p>
                    </div>
                </div>

                <!-- Skill Lab -->
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="assets/images/facilities/skill_lab.jpg" alt="Skill Laboratory">
                    </div>
                    <div class="facility-info">
                        <div class="facility-icon">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <h3>Skill Laboratory</h3>
                        <p>Dedicated skill lab for practical competency development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
