<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Niramaya Institute of Health Sciences</title>
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

        /* Contact Page Styles */
        .contact-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            font-family: 'Open Sans', sans-serif;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
            margin-bottom: 40px;
        }

        /* Left Side - Contact Info */
        .contact-info {
            padding: 40px;
        }

        .contact-info-header {
            margin-bottom: 35px;
        }

        .contact-info-header h4 {
            color: var(--main-color);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .contact-info-header h2 {
            color: var(--hover-color);
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
        }

        .contact-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background: var(--main-section);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-icon i {
            color: var(--main-color);
            font-size: 18px;
        }

        .contact-text h3 {
            color: var(--hover-color);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .contact-text p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        .contact-text a {
            color: var(--main-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-text a:hover {
            color: var(--hover-color);
        }

        /* Right Side - Contact Form */
        .contact-form-wrapper {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .contact-form-header {
            margin-bottom: 30px;
        }

        .contact-form-header h2 {
            color: var(--hover-color);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            color: var(--hover-color);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--main-color);
            box-shadow: 0 0 0 3px rgba(124, 18, 54, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: var(--main-color);
            color: #ffffff;
            padding: 15px 40px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(124, 18, 54, 0.3);
        }

        /* Map Section */
        .map-section {
            margin-top: 60px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .map-section iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .contact-info,
            .contact-form-wrapper {
                padding: 25px;
            }

            .contact-info-header h2 {
                font-size: 28px;
            }

            .contact-form-header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Contact Us</h1>
        <p>We'd Love to Hear From You</p>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-grid">
                <!-- Left Side - Contact Information -->
                <div class="contact-info">
                <div class="contact-info-header">
                    <h4>STAY IN TOUCH</h4>
                    <h2>Don't Hesitate To Contact Us</h2>
                </div>

                <div class="contact-details">
                    <!-- Location -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Location</h3>
                            <p>Niraamaya Institute of Health Sciences, Vishwothama Nagar, Bantakal, Kapu Taluk, Udupi District - 574115</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Mail Us</h3>
                            <p><a href="mailto:office.nihs@sode-edu.in">office.nihs@sode-edu.in</a></p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call Us</h3>
                            <p>
                                <a href="tel:+918660612061">+91 86606 12061</a><br>
                                <a href="tel:+919113673901">+91 91136 73901</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="contact-form-wrapper">
                <div class="contact-form-header">
                    <h2>Send Us a Message</h2>
                </div>

                <form class="contact-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" autocomplete="name" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" autocomplete="tel" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" autocomplete="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" autocomplete="off" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send My Message</button>
                </form>
            </div>
            </div>

            <!-- Map Section -->
            <div class="map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.543486890115!2d74.78282357484915!3d13.253941108625805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcaf469672e6bf%3A0x5176545d279df7ef!2sniramaya%20institute%20of%20health%20sciences!5e0!3m2!1sen!2sin!4v1759291332878!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
