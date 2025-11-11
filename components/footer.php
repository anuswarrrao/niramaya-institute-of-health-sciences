<style>
    .footer {
        background-color: var(--hover-color);
        background-image: url('assets/images/footer-bg.png');
        color: white;
        padding: 50px 0 0;
        position: relative;
        overflow: hidden;
        background-size: contain;
        background-position: top right;
        background-repeat: no-repeat;
    }

    @media (min-width: 1200px) {

        .footer {
            background-size: auto;
        }
    }

    .footer-top {
        padding: 50px 0;
        position: relative;
        z-index: 1;
    }

    .footer-top .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
    }

    .footer-card {
        background-color: rgba(0, 0, 0, 0.3);
        background-size: auto 100%;
        border-radius: 10px;
        padding: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 40px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
    }

    .footer-brand {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .footer-brand img {
        height: 60px;
    }

    .footer-contact {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        align-items: center;
    }

    .footer-contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .footer-contact-item i {
        font-size: 28px;
        color: var(--btn-color);
    }

    .footer-contact-text {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .footer-contact-text span {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }

    .footer-contact-text a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
    }

    .footer-contact-text a:hover {
        color: var(--btn-color);
    }

    .footer-divider {
        width: 2px;
        height: 60px;
        background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 0.3), transparent);
    }

    .footer-main {
        position: relative;
        z-index: 1;
        padding: 50px 0;
    }

    .footer-main .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 40px;
    }

    .footer-column h4 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
        color: white;
    }

    .footer-about p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .footer-address {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .footer-address i {
        font-size: 18px;
        color: var(--btn-color);
        margin-top: 3px;
    }

    .footer-address p {
        margin: 0;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s;
        display: inline-block;
    }

    .footer-links a:hover {
        color: var(--btn-color);
        padding-left: 5px;
    }

    .footer-social-column p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .footer-social-links {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .footer-social-links a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        text-decoration: none;
        transition: all 0.3s;
    }

    .footer-social-links a:hover {
        background-color: var(--btn-color);
        transform: translateY(-3px);
    }

    .footer-bottom {
        background-color: rgba(0, 0, 0, 0.3);
        padding: 20px 0;
        position: relative;
        z-index: 1;
    }

    .footer-bottom .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .footer-copyright {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-copyright .heart {
        color: #e74c3c;
        animation: heartbeat 1.5s ease-in-out infinite;
    }

    @keyframes heartbeat {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    /* Responsive */
    @media (max-width: 992px) {
        .footer-main .container {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .footer-card {
            background-image: none;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
            padding: 30px 20px;
            gap: 20px;
        }

        .footer-contact {
            gap: 20px;
            width: 100%;
        }

        .footer-contact-item {
            justify-content: flex-start;
        }

        .footer-divider {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .footer-main .container {
            grid-template-columns: 1fr;
        }

        .footer-copyright {
            font-size: 12px;
        }
    }
</style>

<!-- Footer -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="footer-card">
                <div class="footer-brand">
                    <a href="index.php">
                        <img src="assets/images/NIRAMAYA-w.png" alt="Niramaya College Logo">
                    </a>
                </div>
                <div class="footer-contact">
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <div class="footer-contact-text">
                            <span>Main Email:</span>
                            <a href="mailto:office.nihs@sode-edu.in">office.nihs@sode-edu.in</a>
                        </div>
                    </div>
                    <div class="footer-divider"></div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div class="footer-contact-text">
                            <span>Office Telephone:</span>
                            <a href="tel:+918660612061">+91 86606 12061</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Main -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-column footer-about">
                <h4>About Us</h4>
                <p>Niraamaya Institute of Health Sciences is committed to excellence in nursing education. We shape future healthcare leaders through quality education, practical training, and compassionate care.</p>
                <div class="footer-address">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>
                        Niraamaya Institute of Health Sciences<br>
                        Vishwothama Nagar, Bantakal<br>
                        Kapu Taluk, Udupi District<br>
                        Karnataka - 574115
                    </p>
                </div>
            </div>

            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="principal.php?type=director">Director's Message</a></li>
                    <li><a href="principal.php?type=nursing">Principal - Nursing</a></li>
                    <li><a href="principal.php?type=allied">Principal - Allied Health</a></li>
                    <li><a href="facilities.php">Our Facilities</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Courses & Admission</h4>
                <ul class="footer-links">
                    <li><a href="courses.php?type=nursing">Nursing Department</a></li>
                    <li><a href="courses.php?type=allied-health-sciences">Allied Health Sciences</a></li>
                    <li><a href="admission.php?type=nursing">Admission - Nursing</a></li>
                    <li><a href="admission.php?type=allied">Admission - Allied Health</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Departments</h4>
                <ul class="footer-links">
                    <li><a href="department.php?type=bsc-nursing">B.Sc Nursing</a></li>
                    <li><a href="department.php?type=medical-imaging">B.Sc Medical Imaging Technology</a></li>
                    <li><a href="department.php?type=medical-laboratory">B.Sc Medical Laboratory Technology</a></li>
                    <li><a href="department.php?type=anaesthesia">B.Sc Anaesthesia & OT Technology</a></li>
                    <li><a href="blogs.php">Events</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Follow Us</h4>
                <div class="footer-social-links">
                    <a href="https://www.facebook.com/officialsmvitm" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/smvitm" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/SMVITMBANTAKAL" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/shri-madhwa-vadiraja-institute-of-technology-and-management/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/smvitm.sode/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copyright">
                © 2025 Shri Madhwa Vadiraja Institute of Technology and Management (SMVITM). All Rights Reserved. | Designed with <span class="heart">❤️</span> by Qfox
            </div>
        </div>
    </div>
</footer>