<!DOCTYPE html>
<style>
  body {
	margin: 0;
	padding: 0;
	font-family: 'Montserrat', sans-serif;
}

header {
	background-color: #fff;
	padding: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

nav {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.logo img {
	max-height: 50px;
}

.menu ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
}

.menu li {
	margin-right: 30px;
}

.menu a {
	text-decoration: none;
	color: #000;
	font-size: 18px;
}

.menu a:hover {
	color: #999;
}

.icons a {
	margin-left: 20px;
	color: #000;
	font-size: 20px;
}

.icons a:hover {
	color: #999;
}

</style>
<head>
	<meta charset="UTF-8">
	<title>Photography Navbar</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				<a href="/DIGI/index.php"><img src="/DIGI/icon.png" alt="Logo"></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="/DIGI/index.php">Home</a></li>
					<li><a href="DIGI/">Portfolio</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="/DIGI/Contact/contact.php">Contact</a></li>
				</ul>	
			</div>
			<div class="icons">
				<a href="#"><i class="fas fa-search"></i></a>
				<a href="#"><i class="fas fa-shopping-cart"></i></a>
			</div>
		</nav>
	</header>
</body>
</html>