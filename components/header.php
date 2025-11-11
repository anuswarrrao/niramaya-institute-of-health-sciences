<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
    }

    /* Top Header Styles */
    .top-header {
        background: var(--hover-color);
        color: white;
        padding: 8px 0;
        font-size: 13px;
    }

    .top-header .container {
        margin: 0 auto;
        padding: 0 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .top-header-left {
        display: flex;
        gap: 0;
        align-items: center;
        flex-wrap: wrap;
    }

    .top-header-left span,
    .top-header-left a {
        display: flex;
        align-items: center;
        gap: 8px;
        color: white;
        text-decoration: none;
        padding: 0 20px;
        border-right: 1px solid rgba(255, 255, 255, 0.3);
        transition: color 0.3s ease;
    }

    .top-header-left a:last-child {
        border-right: none;
    }

    .top-header-left a:hover {
        color: var(--btn-color);
        text-decoration: none;
    }

    .top-header-left i {
        font-size: 14px;
    }

    .top-header-right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .top-header-right a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .top-header-right a:hover {
        opacity: 0.9;
        text-decoration: none;
    }

    .top-header-links {
        display: flex;
        gap: 15px;
        font-size: 12px;
        text-transform: uppercase;
    }

    .top-header-links a {
        color: white;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .top-header-links a:hover {
        opacity: 0.8;
        text-decoration: none;
    }

    .social-media {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .social-media a {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 14px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-media a:hover {
        background-color: var(--btn-color);
        transform: translateY(-2px);
    }

    /* Main Header Styles */
    .main-header {
        background-color: var(--main-color);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .main-header .header-content {
        margin: 0 auto;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
    }

    .logo {
        flex-shrink: 0;
    }

    .logo img {
        height: 70px;
        width: auto;
    }

    /* Navigation Bar */
    .nav-bar {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .nav-bar .container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 0;
        margin: 0;
        padding: 0;
    }

    .nav-menu li {
        position: relative;
    }

    .nav-menu>li>a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        font-size: 15px;
        padding: 15px 25px;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: background-color 0.3s;
    }

    .nav-menu>li>a:hover,
    .nav-menu>li:hover>a {
        background-color: var(--hover-color);
    }

    .nav-menu i.fa-chevron-down {
        font-size: 10px;
        margin-left: 3px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: var(--hover-color);
        min-width: 220px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        padding: 0;
        top: 100%;
        left: 0;
        z-index: 100;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content > a {
        display: block;
        padding: 12px 20px;
        color: white;
        font-size: 14px;
        transition: background-color 0.2s;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .dropdown-content > a:last-child {
        border-bottom: none;
    }

    .dropdown-content .dropdown-item > a {
        display: block;
        padding: 12px 20px;
        color: white;
        font-size: 14px;
        transition: background-color 0.2s;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .dropdown-content .dropdown-item:last-child > a {
        border-bottom: none;
    }

    .dropdown-content a:hover {
        background-color: var(--main-color);
    }

    /* Nested dropdown */
    .dropdown-item {
        position: relative;
    }

    .nested-dropdown {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        background-color: var(--main-color);
        min-width: 320px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        padding: 0;
    }

    .dropdown-item:hover .nested-dropdown {
        display: block;
    }

    .nested-dropdown a {
        display: block;
        padding: 12px 20px;
        color: white;
        font-size: 14px;
        transition: background-color 0.2s;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nested-dropdown a:last-child {
        border-bottom: none;
    }

    .nested-dropdown a:hover {
        background-color: var(--hover-color);
    }

    .dropdown-item > a i.fa-chevron-right {
        float: right;
        font-size: 10px;
        margin-top: 3px;
    }

    .admission-btn {
        background-color: var(--btn-color);
        color: white;
        padding: 12px 28px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        transition: background-color 0.3s;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .admission-btn:hover {
        background-color: var(--hover-color);
    }

    .header-right {
        flex-shrink: 0;
    }

    /* Hamburger Menu */
    .hamburger {
        display: none;
        flex-direction: column;
        cursor: pointer;
        gap: 5px;
        flex-shrink: 0;
    }

    .hamburger span {
        width: 25px;
        height: 3px;
        background-color: white;
        transition: all 0.3s;
    }

    .hamburger.active span:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }

    /* Mobile Admission Button */
    .mobile-admission-btn {
        display: none;
    }

    /* Mobile-only contact items */
    .mobile-only-contact {
        display: none;
    }

    /* Responsive Styles */

    /* TV and Ultra-wide screens (1920px+) */
    @media (min-width: 1920px) {
        .top-header .container {
            padding: 0 60px;
        }

        .top-header {
            padding: 12px 0;
            font-size: 15px;
        }

        .top-header-right {
            gap: 30px;
        }

        .top-header-left i {
            font-size: 16px;
        }

        .social-media a {
            font-size: 18px;
        }

        .main-header .header-content {
            gap: 40px;
        }

        .nav-menu>li>a {
            padding: 18px 32px;
            font-size: 17px;
        }

        .nav-bar .container {
            gap: 35px;
        }

        .admission-btn {
            padding: 14px 32px;
            font-size: 16px;
        }

        .dropdown-content {
            min-width: 260px;
        }

        .dropdown-content a,
        .dropdown-content .dropdown-item > a {
            padding: 14px 24px;
            font-size: 15px;
        }

        .nested-dropdown {
            min-width: 360px;
        }

        .nested-dropdown a {
            padding: 14px 24px;
            font-size: 15px;
        }
    }

    /* Large Desktop screens (1600px - 1919px) */
    @media (min-width: 1600px) and (max-width: 1919px) {
        .top-header .container {
            padding: 0 50px;
        }

        .top-header {
            padding: 10px 0;
            font-size: 14px;
        }

        .top-header-left {
            gap: 30px;
        }

        .main-header .header-content {
            padding: 20px 50px;
            gap: 35px;
        }

        .logo img {
            height: 80px;
        }

        .nav-menu>li>a {
            padding: 16px 30px;
            font-size: 16px;
        }

        .nav-bar .container {
            gap: 32px;
        }

        .admission-btn {
            padding: 13px 30px;
            font-size: 15px;
        }
    }

    /* Standard Large screens (1200px - 1599px) */
    @media (min-width: 1200px) and (max-width: 1599px) {
        .top-header .container {
            padding: 0 40px;
        }

        .main-header .header-content {
            padding: 18px 40px;
        }

        .nav-menu>li>a {
            padding: 15px 28px;
            font-size: 16px;
        }

        .logo img {
            height: 75px;
        }
    }

    /* Medium screens (768px - 1199px) - Reduced spacing */
    @media (max-width: 1199px) and (min-width: 993px) {
        .top-header .container {
            padding: 0 20px;
        }

        .top-header-left {
            gap: 15px;
        }

        .main-header .header-content {
            padding: 12px 20px;
            gap: 20px;
        }

        .logo img {
            height: 60px;
        }

        .nav-menu>li>a {
            padding: 12px 18px;
            font-size: 14px;
        }

        .nav-bar .container {
            gap: 20px;
        }

        .admission-btn {
            padding: 10px 20px;
            font-size: 14px;
        }

        .top-header {
            padding: 6px 0;
            font-size: 12px;
        }

        .top-header-left span,
        .top-header-left a {
            gap: 6px;
        }

        .top-header-right {
            gap: 15px;
        }
    }

    /* Tablet screens (768px - 992px) */
    @media (max-width: 992px) and (min-width: 768px) {
        .top-header {
            padding: 5px 0;
            font-size: 11px;
        }

        .top-header .container {
            padding: 0 15px;
            gap: 10px;
        }

        .top-header-left {
            gap: 12px;
        }

        .top-header-right {
            gap: 12px;
        }

        .main-header .header-content {
            padding: 10px 15px;
        }

        .logo img {
            height: 55px;
        }

        .hamburger {
            display: flex;
        }

        .header-right .admission-btn {
            display: none;
        }

        .mobile-admission-btn {
            display: block;
        }

        .nav-bar {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100%;
            background-color: var(--main-color);
            z-index: 999;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 70vh;
            overflow-y: auto;
        }

        .nav-bar.active {
            display: block;
        }

        .nav-bar .container {
            padding: 0;
        }

        .main-header .header-content {
            position: relative;
        }

        .nav-menu {
            flex-direction: column;
            width: 100%;
        }

        .nav-menu>li>a {
            padding: 14px 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
        }

        .nav-menu>li>a:hover {
            background-color: var(--hover-color);
            color: white;
        }

        .dropdown-content {
            position: static;
            box-shadow: none;
            background-color: var(--hover-color);
            display: block;
            margin: 0;
        }

        .dropdown-content a {
            padding-left: 38px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }

        .dropdown-content a:hover {
            background-color: var(--main-color);
        }

        .nested-dropdown {
            position: static;
            box-shadow: none;
            display: block;
            margin: 0;
        }

        .nested-dropdown a {
            padding-left: 56px !important;
        }

        .nav-bar .container {
            flex-direction: column;
            gap: 0;
        }

        .mobile-only-contact {
            display: block;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .mobile-only-contact > a {
            padding: 12px 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mobile-only-contact > a i {
            color: var(--btn-color);
            width: 16px;
            text-align: center;
        }

        .mobile-only-contact > a:hover {
            background-color: var(--hover-color);
        }
    }

    /* Small screens (up to 767px) - Mobile */
    @media (max-width: 767px) {
        .top-header {
            display: none;
        }

        .main-header .header-content {
            padding: 8px 12px;
        }

        .logo img {
            height: 45px;
        }

        .hamburger {
            display: flex;
            gap: 4px;
        }

        .hamburger span {
            width: 22px;
            height: 2.5px;
        }

        .header-right .admission-btn {
            display: none;
        }

        .mobile-admission-btn {
            display: block;
            padding: 10px 20px;
            font-size: 13px;
        }

        .nav-bar {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100%;
            background-color: var(--main-color);
            z-index: 999;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 70vh;
            overflow-y: auto;
        }

        .nav-bar.active {
            display: block;
        }

        .nav-bar .container {
            padding: 0;
        }

        .main-header .header-content {
            position: relative;
        }

        .nav-menu {
            flex-direction: column;
            width: 100%;
        }

        .nav-menu>li>a {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 13px;
        }

        .nav-menu>li>a:hover {
            background-color: var(--hover-color);
            color: white;
        }

        .dropdown-content {
            position: static;
            box-shadow: none;
            background-color: var(--hover-color);
            display: block;
            margin: 0;
        }

        .dropdown-content a,
        .dropdown-content .dropdown-item > a {
            padding: 10px 15px;
            padding-left: 35px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 13px;
        }

        .dropdown-content a:hover {
            background-color: var(--main-color);
        }

        .nested-dropdown {
            position: static;
            box-shadow: none;
            display: block;
            margin: 0;
        }

        .nested-dropdown a {
            padding: 10px 15px;
            padding-left: 55px !important;
            font-size: 12px;
        }

        .nav-bar .container {
            flex-direction: column;
            gap: 0;
        }

        .mobile-only-contact {
            display: block;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .mobile-only-contact > a {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mobile-only-contact > a i {
            color: var(--btn-color);
            width: 16px;
            text-align: center;
        }

        .mobile-only-contact > a:hover {
            background-color: var(--hover-color);
        }
    }

    /* Extra small screens (up to 480px) - Very small mobile */
    @media (max-width: 480px) {
        .main-header .header-content {
            padding: 6px 10px;
        }

        .logo img {
            height: 40px;
        }

        .nav-bar {
            max-height: 65vh;
        }

        .nav-menu>li>a {
            padding: 10px 12px;
            font-size: 12px;
        }

        .dropdown-content a,
        .dropdown-content .dropdown-item > a {
            padding: 9px 12px;
            padding-left: 30px;
            font-size: 12px;
        }

        .nested-dropdown a {
            padding: 8px 12px;
            padding-left: 48px !important;
            font-size: 11px;
        }

        .mobile-admission-btn {
            padding: 8px 16px;
            font-size: 12px;
        }
    }
</style>

<script>
    function toggleMenu() {
        const nav = document.querySelector('.nav-bar');
        const hamburger = document.querySelector('.hamburger');
        nav.classList.toggle('active');
        hamburger.classList.toggle('active');
    }

    function toggleDropdown(event) {
        if (window.innerWidth > 992) {
            // On desktop, let default hover behavior work
            return;
        }
        // On mobile, prevent default but don't toggle (always show)
        event.preventDefault();
    }

    function toggleNestedDropdown(event) {
        if (window.innerWidth > 992) {
            // On desktop, let default hover behavior work
            return;
        }
        // On mobile, prevent default but don't toggle (always show)
        event.preventDefault();
        event.stopPropagation();
    }
</script>

<!-- Top Header -->
<header class="top-header">
    <div class="container">
        <div class="top-header-left">
            <a href="https://maps.app.goo.gl/QWxujk6gnkp2DhNc8" target="_blank">
                <i class="fas fa-map-marker-alt"></i> Vishwothama Nagar, Bantakal, Udupi - 574115
            </a>
            <a href="tel:+918660612061">
                <i class="fas fa-phone"></i> +91 86606 12061
            </a>
            <a href="mailto:office.nihs@sode-edu.in">
                <i class="fas fa-envelope"></i> office.nihs@sode-edu.in
            </a>
        </div>
        <div class="top-header-right">
            <div class="social-media">
                <a href="https://www.facebook.com/officialsmvitm" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/smvitm.sode/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/SMVITMBANTAKAL" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/shri-madhwa-vadiraja-institute-of-technology-and-management/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="https://x.com/smvitm" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</header>

<!-- Main Header -->
<header class="main-header">
    <div class="header-content">
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/NIRAMAYA-w.png" alt="Niramaya College Logo">
            </a>
        </div>

        <nav class="nav-bar">
            <div class="container">
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" onclick="toggleDropdown(event)">About us <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="about.php">About</a>
                            <a href="principal.php?type=directo">Director's Message</a>
                            <div class="dropdown-item">
                                <a href="#" onclick="toggleNestedDropdown(event)">Principal's Message <i class="fas fa-chevron-right"></i></a>
                                <div class="nested-dropdown">
                                    <a href="principal.php?type=nursing">Nursing</a>
                                    <a href="principal.php?type=allied">Allied Health Sciences</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" onclick="toggleDropdown(event)">Courses <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <a href="courses.php?type=nursing" onclick="toggleNestedDropdown(event)">Nursing <i class="fas fa-chevron-right"></i></a>
                                <div class="nested-dropdown">
                                    <a href="department.php?type=bsc-nursing">B.Sc Nursing</a>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <a href="courses.php?type=allied-health-sciences" onclick="toggleNestedDropdown(event)">Allied Health Sciences <i class="fas fa-chevron-right"></i></a>
                                <div class="nested-dropdown">
                                    <a href="department.php?type=medical-imaging">B.Sc. Medical Imaging Technology</a>
                                    <a href="department.php?type=medical-laboratory">B.Sc. Medical Laboratory Technology</a>
                                    <a href="department.php?type=anaesthesia">B.Sc. Anaesthesia and Operation Theatre Technology</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="facilities.php">Our facilities</a></li>
                    <li><a href="blogs.php">Events</a></li>
                    <li class="dropdown">
                        <a href="#" onclick="toggleDropdown(event)">Admission <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="admission.php?type=nursing">Nursing</a>
                            <a href="admission.php?type=allied">Allied Health Sciences</a>
                        </div>
                    </li>
                    <li class="mobile-only-contact">
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="header-right">
            <a href="contact.php" class="admission-btn mobile-admission-btn">Contact us</a>
            <a href="contact.php" class="admission-btn">Contact us</a>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>