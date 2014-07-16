<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My Website</title>
		<style>
			body {
				background: #fafafa;
				color: #444;
				margin: 0;
				padding: 0;			
			}

			.page-wrap {
				width: 960px;
				margin: 0 auto;
			}

			header, footer {
				width: 100%;
				float: left;
				background: #ccc;
				height: 200px;
			}

			section {
				width: 100%;
				float: left;
				background: #eee;
				height: 500px;
			}

		</style>
	</head>
	<body>

		<div class="page-wrap">
			
			<header>
				<?php include("includes/nav.php"); ?>
			</header>

			<section>
				<?php 
				$filename = 'includes/content/'; // . page . '.php'
				$fourohfour = $filename . '404.php';
				$home_page = $filename . 'home.php';

				if (isset($_GET['page'])) {
					$filename = $filename . $_GET['page'] . '.php';

					if (file_exists($filename)) {
						$page = $filename;
					} else {
						$page = $fourohfour;
					}

					// $page = $_GET['page'];
				} else {
					$page = $home_page;
				}

				include($page); ?>
			</section>


			<footer>
				<?php include("includes/footer.php"); ?>
			</footer>
		</div>
		
	</body>
	</html>	