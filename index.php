<!DOCTYPE html>
<html>

<head>
	<title>Welcome to Lotto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta charset="UTF-8">
  	<meta name="description" content="Web pages and Image searching">
  	<meta name="keywords" content="Web Pages, Images">
  	<meta name="author" content="Soyeb Ahmed">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class = "wrapper indexPage">

		<div class ="mainSection">

			<div class="logoContainer">

				<img src="assets/images/logo.png" title="Logo of Lotto" alt="Logo is Unavailable">

			</div>

			<div class="searchContainer">
				<form action="search.php" method="GET">	

					<input class="searchBox " type="text" name="term" required>
					<input class="searchButton " type="submit" value="Search">

				</form>
			</div>

		</div>

	</div>
</body>
</html>