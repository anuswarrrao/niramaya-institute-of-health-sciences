<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $eventName = isset($_GET['event']) ? ucwords($_GET['event']) : 'Event Details';
        echo $eventName . ' - Niramaya Institute of Health Sciences';
        ?>
    </title>
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

        .page-header .breadcrumb {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            font-size: 14px;
        }

        .page-header .breadcrumb a {
            color: #ffffff;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .page-header .breadcrumb a:hover {
            opacity: 1;
        }

        .page-header .breadcrumb span {
            opacity: 0.6;
        }

        /* Blog Detail Section */
        .blog-detail-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            font-family: 'Open Sans', sans-serif;
        }

        .blog-detail-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .event-info {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }

        .event-info h2 {
            color: var(--hover-color);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .event-meta {
            display: flex;
            gap: 30px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .event-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 16px;
        }

        .event-meta i {
            color: var(--main-color);
            font-size: 18px;
        }

        .event-description {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--main-color);
            color: #ffffff;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 18, 54, 0.3);
        }

        .gallery-section {
            margin-top: 40px;
        }

        .gallery-header {
            margin-bottom: 30px;
        }

        .gallery-header h3 {
            color: var(--hover-color);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            background: #ffffff;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .gallery-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .gallery-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-image img {
            transform: scale(1.1);
        }

        /* Lightbox Modal */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 10px;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #ffffff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 10000;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            color: var(--main-color);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #ffffff;
            font-size: 50px;
            cursor: pointer;
            padding: 20px;
            transition: all 0.3s ease;
            z-index: 10000;
        }

        .lightbox-nav:hover {
            color: var(--main-color);
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        .lightbox-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            max-width: 90%;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }

            .event-info h2 {
                font-size: 24px;
            }

            .event-meta {
                gap: 15px;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 15px;
            }

            .lightbox-nav {
                font-size: 30px;
                padding: 10px;
            }

            .lightbox-close {
                font-size: 30px;
                top: 10px;
                right: 15px;
            }
        }
    </style>
</head>
<body>
    <?php include 'components/header.php'; ?>

    <?php
    // Event data with descriptions
    $eventData = [
        'world health day 2025' => [
            'date' => 'April 7, 2025',
            'description' => 'World Health Day 2025 was celebrated with great enthusiasm at Niramaya College. The event featured health awareness programs, poster exhibitions, and interactive sessions highlighting the importance of healthcare. Students participated actively in various competitions and awareness campaigns, demonstrating their commitment to promoting public health and wellness.'
        ],
        'Independence day 2025' => [
            'date' => 'August 15, 2025',
            'description' => 'Independence Day celebrations at Niramaya College showcased the spirit of patriotism and national pride. The day commenced with flag hoisting followed by cultural programs, patriotic songs, and dance performances. Students and faculty came together to honor the freedom fighters and celebrate India\'s rich heritage and democratic values.'
        ],
        'international yoga day' => [
            'date' => 'June 21, 2025',
            'description' => 'International Yoga Day was observed with great fervor at our college campus. Students and faculty participated in yoga sessions, demonstrating various asanas and breathing techniques. The event emphasized the importance of physical and mental well-being through yoga practice, promoting a healthy lifestyle among the healthcare professionals of tomorrow.'
        ],
        'Nurses Day celebration' => [
            'date' => 'May 12, 2025',
            'description' => 'International Nurses Day was celebrated to honor the dedication and service of nurses worldwide. The event featured special recognition programs for outstanding nursing students, interactive sessions, and discussions on the evolving role of nurses in healthcare. This celebration reinforced the noble values of compassion, care, and commitment in the nursing profession.'
        ],
        'sports day' => [
            'date' => 'March 2025',
            'description' => 'The annual sports day at Niramaya College was a spectacular display of athletic talent and sportsmanship. Students participated in various track and field events, team sports, and competitive games. The event promoted physical fitness, teamwork, and healthy competition, creating an atmosphere of enthusiasm and camaraderie among students.'
        ],
        'womens day celebration' => [
            'date' => 'March 8, 2025',
            'description' => 'International Women\'s Day celebration at Niramaya College honored the achievements and contributions of women in healthcare and society. The event featured inspiring talks, cultural performances, and recognition of outstanding female students and faculty members. The celebration emphasized women\'s empowerment, equality, and leadership in the nursing profession.'
        ],
        'RGUHS intercollegiate sports Meet' => [
            'date' => 'February 2025',
            'description' => 'Niramaya College students proudly represented the institution at the RGUHS Intercollegiate Sports Meet. Our talented athletes competed with peers from various colleges across Karnataka, showcasing their skills in multiple sporting events. The participation reflected our commitment to holistic education and the development of well-rounded healthcare professionals.'
        ],
        'digital safety awareness' => [
            'date' => 'February 2025',
            'description' => 'A comprehensive Digital Safety Awareness program was organized to educate students about online security, cyber threats, and digital literacy. Expert speakers conducted interactive sessions on safe internet practices, data protection, and responsible use of social media. This initiative aimed to prepare students for the digital challenges in modern healthcare settings.'
        ],
        'diabetes day' => [
            'date' => 'November 14, 2024',
            'description' => 'World Diabetes Day was observed with awareness campaigns and health screening programs. Students organized educational sessions about diabetes prevention, management, and the importance of lifestyle modifications. The event included free blood sugar testing, dietary counseling, and distribution of informational materials to promote diabetes awareness in the community.'
        ],
        'Nihop Workshop' => [
            'date' => 'January 2025',
            'description' => 'The NIHOP Workshop provided valuable professional development opportunities for nursing students. The comprehensive training program covered advanced nursing techniques, patient care protocols, and contemporary healthcare practices. Expert facilitators shared their knowledge and experience, enhancing the clinical skills and competencies of our future nursing professionals.'
        ],
        'Niramaya College inauguration by swamiji' => [
            'date' => 'October 2023',
            'description' => 'The historic inauguration of niramaya institute of health sciences was graced by His Holiness Shri Vishwa Vallabha Theertha Swamiji of Shri Sode Vadiraj Mutt. This momentous occasion marked the beginning of our institution\'s journey in providing quality healthcare education. The ceremony was attended by distinguished guests, faculty, students, and well-wishers who witnessed the establishment of this center of excellence in nursing and allied health sciences.'
        ]
    ];

    $event = isset($_GET['event']) ? $_GET['event'] : '';
    $folderPath = "upload/blog/" . $event;
    $images = glob($folderPath . "/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
    $eventName = ucwords($event);
    $eventInfo = isset($eventData[$event]) ? $eventData[$event] : ['date' => '', 'description' => ''];
    ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1><?php echo $eventName; ?></h1>
        <p><?php echo $eventInfo['date']; ?></p>
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <span>/</span>
            <a href="news.php">News & Events</a>
            <span>/</span>
            <span><?php echo $eventName; ?></span>
        </div>
    </section>

    <!-- Blog Detail Section -->
    <section class="blog-detail-section">
        <div class="blog-detail-container">
            <div class="event-info">
                <h2>Event Details</h2>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-alt"></i> <?php echo $eventInfo['date']; ?></span>
                    <span><i class="fas fa-images"></i> <?php echo count($images); ?> Photos</span>
                </div>
                <p class="event-description"><?php echo $eventInfo['description']; ?></p>
                <a href="blogs.php" class="back-button">
                    <i class="fas fa-arrow-left"></i> Back to News & Events
                </a>
            </div>

            <!-- Gallery Section -->
            <div class="gallery-section">
                <div class="gallery-header">
                    <h3>Event Gallery</h3>
                </div>
                <div class="gallery-grid">
                    <?php foreach ($images as $index => $image): ?>
                        <div class="gallery-item" onclick="openLightbox('<?php echo addslashes($image); ?>', '<?php echo addslashes($eventName); ?>', <?php echo $index; ?>)">
                            <div class="gallery-image">
                                <img src="<?php echo $image; ?>" alt="<?php echo $eventName; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
        <span class="lightbox-close" onclick="closeLightbox(event)">&times;</span>
        <span class="lightbox-nav lightbox-prev" onclick="changeImage(-1, event)">&#10094;</span>
        <div class="lightbox-content">
            <img id="lightbox-image" src="" alt="">
            <div class="lightbox-caption" id="lightbox-caption"></div>
        </div>
        <span class="lightbox-nav lightbox-next" onclick="changeImage(1, event)">&#10095;</span>
    </div>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>

    <script>
        let currentImageIndex = 0;
        let currentImages = <?php echo json_encode(array_values($images)); ?>;

        function openLightbox(imageSrc, eventName, index) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxCaption = document.getElementById('lightbox-caption');

            currentImageIndex = index;

            lightboxImage.src = imageSrc;
            lightboxCaption.textContent = eventName + ' - Photo ' + (index + 1) + ' of ' + currentImages.length;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox(event) {
            if (event.target.id === 'lightbox' || event.target.classList.contains('lightbox-close')) {
                const lightbox = document.getElementById('lightbox');
                lightbox.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }

        function changeImage(direction, event) {
            event.stopPropagation();
            currentImageIndex += direction;

            if (currentImageIndex >= currentImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = currentImages.length - 1;
            }

            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxCaption = document.getElementById('lightbox-caption');
            lightboxImage.src = currentImages[currentImageIndex];
            lightboxCaption.textContent = '<?php echo $eventName; ?>' + ' - Photo ' + (currentImageIndex + 1) + ' of ' + currentImages.length;
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(event) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.classList.contains('active')) {
                if (event.key === 'ArrowLeft') {
                    changeImage(-1, event);
                } else if (event.key === 'ArrowRight') {
                    changeImage(1, event);
                } else if (event.key === 'Escape') {
                    closeLightbox(event);
                }
            }
        });
    </script>
</body>
</html>
