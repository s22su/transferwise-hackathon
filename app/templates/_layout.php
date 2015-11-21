<!DOCTYPE html>
<!--[if lte IE 8]> <html class="no-js lte-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<!--
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<link rel="shortcut icon" href="<?= baseUrl() ?>favicon.ico" />
	<link rel="icon" type="image/x-icon" href="<?= baseUrl() ?>favicon.ico" />
	<link rel="icon" type="image/png" href="<?= baseUrl() ?>favicon.png" />
	-->

	<title><?= isset($title) && $title ? SITE_NAME . ' | ' . $title : (isset($defaultTitle) ? $defaultTitle : SITE_NAME) ?></title>

	<meta name="author" content="Michel Roca" />

	<meta name="description" content="<?= isset($description) && $description ? $description : (isset($defaultDescription) ? $defaultDescription : '') ?>" />
	<meta name="keywords" content="<?= isset($keywords) ? $keywords : '' ?>" />

	<link id="baseUrl" rel="canonical" href="<?= baseUrl() ?>" />
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="<?= baseUrl() ?>assets/js/vendor/html5shiv-printshiv-3.7.1.min.js"></script>
	<script src="<?= baseUrl() ?>assets/js/vendor/respond-1.4.2.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="container">
		<?= $output ?>
	</div>
		
	<hr>
	<!-- Footer -->
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">⋅</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">⋅</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">⋅</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright © Your Company 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
