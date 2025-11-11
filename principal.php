<?php
// Get the type from URL parameter (nursing, allied, or director)
$type = isset($_GET['type']) ? $_GET['type'] : 'nursing';

// Validate the type
$validTypes = ['nursing', 'allied', 'director'];
if (!in_array($type, $validTypes)) {
    $type = 'nursing';
}

// Load JSON data
$jsonData = file_get_contents('data/principal.json');
$data = json_decode($jsonData, true);
$content = $data[$type];

// Determine if this is a director page
$isDirector = ($type === 'director');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $content['pageTitle']; ?></title>
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

        /* Message Section */
        .message-section {
            padding: 80px 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .message-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: flex-start;
            gap: 60px;
            flex-wrap: wrap;
        }

        .image-section {
            flex: 0 0 350px;
            position: sticky;
            top: 120px;
            align-self: flex-start;
        }

        .image-frame {
            border: 8px solid var(--main-color);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 20px 20px 0 rgba(124, 18, 54, 0.2);
            background: #ffffff;
        }

        .image-frame img {
            width: 100%;
            height: auto;
            display: block;
        }

        .person-info {
            text-align: center;
            margin-top: 25px;
            padding: 20px;
            background: linear-gradient(135deg, var(--main-section) 0%, #ffffff 100%);
            border-radius: 10px;
            border: 2px solid var(--section);
        }

        .person-info h3 {
            color: var(--hover-color);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .person-info p {
            color: var(--main-color);
            font-size: 16px;
            font-weight: 600;
            margin: 0;
        }

        .message-content {
            flex: 1;
            min-width: 300px;
        }

        .message-content h2 {
            color: var(--main-color);
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .message-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .message-content p:first-of-type {
            font-size: 17px;
            font-weight: 500;
            color: #555;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
            }

            .message-container {
                flex-direction: column;
                gap: 40px;
            }

            .image-section {
                flex: 1;
                width: 100%;
                max-width: 350px;
                margin: 0 auto;
                position: static;
            }

            .message-content h2 {
                font-size: 28px;
            }

            .quote-box p {
                font-size: 18px;
                padding-left: 20px;
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
        <h1><?php echo $content['headerTitle']; ?></h1>
        <p><?php echo $content['headerSubtitle']; ?></p>
    </section>

    <!-- Message Section -->
    <section class="message-section">
        <div class="message-container">
            <!-- Image Section -->
            <div class="image-section">
                <div class="image-frame">
                    <img src="<?php echo $content['image']; ?>" alt="<?php echo $content['name']; ?>">
                </div>
                <div class="person-info">
                    <h3><?php echo $content['name']; ?></h3>
                    <?php if (!empty($content['qualification'])): ?>
                        <p><?php echo $content['qualification']; ?></p>
                    <?php endif; ?>
                    <p><?php echo $content['designation']; ?></p>
                    <?php if (isset($content['department'])): ?>
                        <p><?php echo $content['department']; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Content -->
            <div class="message-content">
                <h2><?php echo $content['contentTitle']; ?></h2>

                <?php foreach ($content['paragraphs'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/top.php'; ?>
</body>

</html>
