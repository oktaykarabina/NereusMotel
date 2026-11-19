<?php
$siteUrlOverride = 'https://www.nereusmotel.com';

if ($siteUrlOverride !== '') {
    $siteUrl = rtrim($siteUrlOverride, '/');
} else {
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    $siteUrl = ($isHttps ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
}

$siteName        = 'Nereus Butik Motel';
$pageTitle       = $pageTitle       ?? 'Nereus Butik Motel Assos | Deniz Manzaralı Odalar';
$pageDescription = $pageDescription ?? 'Assos Antik Kenti’ne yakın Nereus Butik Motel’de deniz manzaralı odalar ve huzurlu bir Ege kaçışı. Rezervasyon için hemen iletişime geçin.';
$pagePath        = $pagePath        ?? '/';
$pageImage       = $pageImage       ?? '/images/og-image.jpg';
$pageRobots      = $pageRobots      ?? 'index, follow, max-image-preview:large';

$canonicalUrl = $siteUrl . $pagePath;
$imageUrl     = $siteUrl . $pageImage;
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
?>
<head>
<meta charset="utf-8">
<title><?= $e($pageTitle) ?></title>

<!-- SEO -->
<meta name="description" content="<?= $e($pageDescription) ?>">
<meta name="robots" content="<?= $e($pageRobots) ?>">
<link rel="canonical" href="<?= $e($canonicalUrl) ?>">
<meta name="theme-color" content="#ffffff">

<!-- Open Graph (Facebook, WhatsApp, Instagram, LinkedIn) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $e($siteName) ?>">
<meta property="og:locale" content="tr_TR">
<meta property="og:title" content="<?= $e($pageTitle) ?>">
<meta property="og:description" content="<?= $e($pageDescription) ?>">
<meta property="og:url" content="<?= $e($canonicalUrl) ?>">
<meta property="og:image" content="<?= $e($imageUrl) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Nereus Butik Motel, Assos">

<!-- Twitter / X Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $e($pageTitle) ?>">
<meta name="twitter:description" content="<?= $e($pageDescription) ?>">
<meta name="twitter:image" content="<?= $e($imageUrl) ?>">

<meta name="google-site-verification" content="SAuHkUI5zsxP89GZYKZ9wUXVv36f8gb_oTl_9yO4lK8" />

<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/flatpickr.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">

<link rel="shortcut icon" href="images/logo/favicon.png" type="image/x-icon">
<link rel="icon" href="images/logo/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="images/logo/favicon.png">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>