<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission - Niramaya Institute of Health Sciences</title>
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

        /* Admission Section */
        .admission-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .admission-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .admission-container h2 {
            color: var(--main-color);
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
            margin-top: 40px;
        }

        .admission-container h2:first-child {
            margin-top: 0;
        }

        .admission-container h3 {
            color: var(--hover-color);
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            margin-top: 30px;
        }

        .admission-container p,
        .admission-container li {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .admission-container ul {
            list-style: none;
            padding-left: 0;
        }

        .admission-container ul li {
            padding-left: 30px;
            position: relative;
            margin-bottom: 12px;
        }

        .admission-container ul li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--main-color);
        }

        /* Info Cards */
        .info-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .info-card {
            background: #ffffff;
            padding: 30px;
            border: 2px solid var(--section);
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .info-card:hover {
            border-color: var(--main-color);
            box-shadow: 0 10px 30px rgba(124, 18, 54, 0.15);
            transform: translateY(-5px);
        }

        .info-card h3 {
            color: var(--main-color);
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-card h3 i {
            font-size: 28px;
            color: var(--btn-color);
        }

        .info-card ul {
            margin-bottom: 0;
        }

        /* Payment Details Table */
        .payment-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .payment-table tr {
            border-bottom: 1px solid var(--section);
        }

        .payment-table tr:last-child {
            border-bottom: none;
        }

        .payment-table td {
            padding: 15px 20px;
            color: #666;
            font-size: 16px;
        }

        .payment-table td:first-child {
            font-weight: 600;
            color: var(--hover-color);
            width: 200px;
        }

        /* Highlight Box */
        .highlight-box {
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            padding: 30px;
            border-radius: 15px;
            border-left: 5px solid var(--main-color);
            margin: 30px 0;
        }

        .highlight-box p {
            margin-bottom: 10px;
        }

        .highlight-box strong {
            color: var(--main-color);
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
            margin-bottom: 50px;
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

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }

        .contact-item {
            text-align: center;
            padding: 35px 25px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .contact-item i {
            font-size: 50px;
            color: var(--btn-color);
            margin-bottom: 20px;
            display: block;
        }

        .contact-item h3 {
            color: #ffffff;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .contact-item p {
            color: #ffffff;
            font-size: 16px;
            line-height: 1.8;
            margin: 8px 0;
            opacity: 0.95;
        }

        .contact-item a {
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .contact-item a:hover {
            color: var(--btn-color);
            transform: translateX(5px);
        }

        /* YRC Section */
        .yrc-section {
            padding: 80px 20px;
        }

        .yrc-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .yrc-container h2 {
            color: var(--main-color);
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .yrc-container p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }

            .admission-container h2 {
                font-size: 28px;
            }

            .admission-container h3 {
                font-size: 20px;
            }

            .payment-table td {
                padding: 12px 15px;
                font-size: 14px;
            }

            .payment-table td:first-child {
                width: 150px;
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

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

        }
    </style>
</head>

<body>
    <?php
    include 'components/header.php';

    // Get the admission type from URL parameter
    $type = isset($_GET['type']) ? $_GET['type'] : 'all';
    $showNursing = ($type === 'all' || $type === 'nursing');
    $showAllied = ($type === 'all' || $type === 'allied');
    ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Admission Information<?php if ($type === 'nursing') echo ' - Nursing'; elseif ($type === 'allied') echo ' - Allied Health Sciences'; ?></h1>
        <p>Begin Your Journey in Healthcare Education</p>
    </section>

    <!-- BSc Nursing Admission Section -->
    <?php if ($showNursing): ?>
    <section class="admission-section" id="nursing-section">
        <div class="admission-container">
           

            <div class="info-cards-grid">
                <div class="info-card">
                    <h3><i class="fas fa-graduation-cap"></i> KCET (KEA) Admission</h3>
                    <p>Students seeking seats through the Government quota and private open quota must appear for the Common Entrance Test (CET) conducted by the Karnataka Examination Authority (KEA).</p>
                    <div class="highlight-box">
                        <p><strong>KEA Code:</strong> G539</p>
                    </div>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-user-check"></i> Management Quota</h3>
                    <p>Students seeking admission through the Management Quota should directly approach the college office. Selection will be done on a merit basis.</p>
                </div>
            </div>

            <h3>Eligibility Criteria</h3>
            <p>Candidate with Science who has passed the qualifying 12th Standard examination (10+2) and must have obtained a minimum of 45% marks in Physics, Chemistry, and Biology taken together and passed in English individually.</p>
            <p>The candidate must write the Karnataka Common Entrance Test (KCET) conducted by KEA.</p>

            <h3>Admission Procedure</h3>
            <p>Candidates should submit the prescribed application form, duly filled, along with the requisite documents.</p>

            <h3>Documents Required at the Time of Admission</h3>
            <ul>
                <li>Original S.S.L.C marks card</li>
                <li>PUC marks card</li>
                <li>Transfer Certificate or School Leaving Certificate</li>
                <li>Migration certificate original (non-Karnataka students only)</li>
                <li>Caste certificate issued by the competent authority, if admission is against the reserved category</li>
                <li>Character/Conduct Certificate</li>
                <li>Aadhar Card</li>
                <li>Passport size photos - 2</li>
            </ul>

            <h3>NEFT Payment Details - BSc Nursing</h3>
            <table class="payment-table">
                <tr>
                    <td>Account Name</td>
                    <td>niramaya institute of health sciences, Bantakal</td>
                </tr>
                <tr>
                    <td>Bank</td>
                    <td>Bank of Baroda</td>
                </tr>
                <tr>
                    <td>Branch</td>
                    <td>Shankarpura</td>
                </tr>
                <tr>
                    <td>Account No</td>
                    <td>16580200000232</td>
                </tr>
                <tr>
                    <td>IFSC Code</td>
                    <td>BARB0INNANJ</td>
                </tr>
            </table>
        </div>
    </section>
    <?php endif; ?>

    <!-- Allied Health Sciences Admission Section -->
    <?php if ($showAllied): ?>
    <section class="admission-section" id="allied-section" style="background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);">
        <div class="admission-container">
            
            <div class="info-cards-grid">
                <div class="info-card">
                    <h3><i class="fas fa-graduation-cap"></i> CET (KEA) Admission</h3>
                    <p>To secure seats under the government quota, students must take the Common Entrance Test (CET) administered by the Karnataka Examination Authority.</p>
                    <div class="highlight-box">
                        <p><strong>KEA Code:</strong> X-254</p>
                    </div>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-user-check"></i> Management Quota</h3>
                    <p>Students who wish to gain admission through the Management Quota should contact the college office directly and must take an entrance test conducted by the college.</p>
                </div>
            </div>

            <h3>Documents Required</h3>
            <ul>
                <li>Original SSLC and PUC/10+2 marks cards</li>
                <li>Transfer Certificate</li>
                <li>Migration Certificate</li>
                <li>Caste Certificate (if applicable)</li>
                <li>Conduct Certificate</li>
                <li>Aadhar Card</li>
                <li>Passport size photos</li>
            </ul>

            <h3>NEFT Payment Details - Allied Health Sciences</h3>
            <table class="payment-table">
                <tr>
                    <td>Account Name</td>
                    <td>niramaya institute of health sciences</td>
                </tr>
                <tr>
                    <td>Bank</td>
                    <td>Bank of Baroda</td>
                </tr>
                <tr>
                    <td>Branch</td>
                    <td>Innanje</td>
                </tr>
                <tr>
                    <td>Account No</td>
                    <td>16580200000233</td>
                </tr>
                <tr>
                    <td>IFSC Code</td>
                    <td>BARB0INNANJ (5th Character is Zero '0')</td>
                </tr>
            </table>
        </div>
    </section>
    <?php endif; ?>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-main-card">
                <div class="contact-header">
                    <h2>Contact Information</h2>
                    <p>Have questions? We're here to help you begin your healthcare education journey</p>
                </div>

                <div class="contact-grid">
                    <!-- Email Item -->
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <h3>Email Us</h3>
                        <p><a href="mailto:office.nihs@sode-edu.in">office.nihs@sode-edu.in</a></p>
                    </div>

                    <!-- Phone Item -->
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <h3>Call Us</h3>
                        <p><a href="tel:+918660612061">+91 8660612061</a></p>
                        <p><a href="tel:+916361952950">+91 6361952950</a></p>
                    </div>

                    <!-- Location Item -->
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Visit Us</h3>
                        <p>Vishwothama Nagar, Bantakal, Kapu Taluk Udupi District - 574115 Karnataka, India</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
