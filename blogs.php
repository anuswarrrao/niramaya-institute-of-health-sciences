<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Events - Niramaya Institute of Health Sciences</title>
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

        .blog-header p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
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
            cursor: pointer;
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
            padding: 25px;
        }

        .blog-title {
            color: var(--hover-color);
            font-size: 22px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 15px;
        }

        .blog-meta {
            display: flex;
            gap: 15px;
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .blog-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-meta i {
            color: var(--main-color);
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--main-color);
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            color: var(--hover-color);
            gap: 12px;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }

            .blog-header h2 {
                font-size: 32px;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>News & Events</h1>
        <p>Celebrating Excellence, Innovation & Community</p>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="blog-container">
            <div class="blog-grid">
            <?php
            $blogEvents = [
                ['folder' => 'world health day 2025', 'date' => 'April 7, 2025', 'description' => 'Celebrating health awareness and promoting wellness through various activities and exhibitions.'],
                ['folder' => 'Independence day 2025', 'date' => 'August 15, 2025', 'description' => 'Commemorating India\'s independence with flag hoisting and cultural programs.'],
                ['folder' => 'international yoga day', 'date' => 'June 21, 2025', 'description' => 'Promoting physical and mental well-being through yoga sessions and demonstrations.'],
                ['folder' => 'Nurses Day celebration', 'date' => 'May 12, 2025', 'description' => 'Honoring the dedication and service of nurses with special recognition programs.'],
                ['folder' => 'sports day', 'date' => 'March 2025', 'description' => 'Annual sports meet showcasing student talent in various athletic events.'],
                ['folder' => 'womens day celebration', 'date' => 'March 8, 2025', 'description' => 'Celebrating women\'s achievements and empowerment through various activities.'],
                ['folder' => 'RGUHS intercollegiate sports Meet', 'date' => 'February 2025', 'description' => 'Students representing Niramaya at the university-level sports competition.'],
                ['folder' => 'digital safety awareness', 'date' => 'February 2025', 'description' => 'Educating students about online security and digital literacy.'],
                ['folder' => 'diabetes day', 'date' => 'November 14, 2024', 'description' => 'Raising awareness about diabetes prevention and management.'],
                ['folder' => 'Nihop Workshop', 'date' => 'January 2025', 'description' => 'Professional development workshop enhancing nursing skills and knowledge.'],
                ['folder' => 'Niramaya institute of health sciences inauguration by swamiji', 'date' => 'October 2023', 'description' => 'Historic inauguration ceremony of Niramaya College by His Holiness Swamiji.']
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
                            <h3 class="blog-title"><?php echo $eventName; ?></h3>
                            <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                                <?php echo $event['description']; ?>
                            </p>
                            <a href="blog-detail.php?event=<?php echo urlencode($event['folder']); ?>" class="read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>
</html>

