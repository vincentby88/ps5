<?php
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <img src="imgs/logo.png" alt="logo" />
                <h1>Shop Till You Drop</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="javascript:void(0)">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="javascript:void(0)">
						<i class="fas fa-shopping-cart"></i>
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, PayPal Shop Till You Drop Demo</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>