<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="resources/css/css/all.css" type="text/css">
	<link rel="stylesheet" href="resources/css/home.css" type="text/css">
	<style>
		/*         ====================================== Response from the phone ==================================================== */

		@media screen and (min-width:320px) and (max-width:443px) {

			/* body */

			body {
				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/background1.jpg);
				height: 1700px;
			}

			/* ------------------------ */

			/* Nav head */
			ul {
				margin-top: 30px;
				margin-bottom: 10px;
				margin-right: 12px;
				margin-left: 30px;
			}

			ul li {
				display: inline-block;
				padding: 10px;

			}

			/* --------------------- */

			/* Welcome message */
			section {
				font-size: 20px;
			}

			/* ------------------------- */

			/* Nav About */
			footer {
				top: 170%;
			}


			footer a {
				display: block;
				margin: 8px;
				text-align: center;

			}

		}

		@media screen and (min-width:444px) and (max-width:539px) {

			/* body */

			body {
				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/background2.jpg);
				height: 1700px;
			}

			/* ------------------------ */

			/* Nav head */
			ul {
				margin-top: 30px;
				margin-bottom: 20px;
				margin-right: 15px;
				margin-left: 30px;
			}

			ul li {
				display: inline-block;
				padding: 10px;

			}

			/* --------------------- */

			/* Welcome message */
			section {

				font-size: 20px;
			}

			/* ------------------------- */

			/* Nav About */
			footer {
				top: 170%;

			}


			footer a {
				display: block;
				margin: 8px;
				text-align: center;

			}

		}

		@media screen and (min-width:540px) and (max-width:680px) {

			/* body */

			body {
				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/background3.jpg);
				height: 1700px;
			}

			/* ------------------------ */

			/* Nav head */
			ul {
				margin-top: 30px;
				margin-bottom: 20px;
				margin-right: 15px;
				margin-left: 30px;
			}

			ul li {
				display: inline-block;
				padding: 10px;

			}

			/* --------------------- */

			/* Welcome message */
			section {

				font-size: 20px;
			}

			/* ------------------------- */

			/* Nav About */
			footer {
				top: 170%;

			}


			footer a {
				text-align: center;
				display: block;
				margin: 8px;

			}
		}


		@media screen and (min-width:681px) and (max-width:767px) {

			/* body */

			body {
				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/background4.jpg);
				height: 1700px;
			}

			/* ------------------------ */

			/* Nav head */
			ul {
				margin-top: 30px;
				margin-bottom: 20px;
				margin-right: 15px;
				margin-left: 30px;
			}

			ul li {
				display: inline-block;
				padding: 10px;

			}

			/* --------------------- */

			/* Welcome message */
			section {

				font-size: 20px;
			}

			/* ------------------------- */

			/* Nav About */
			footer {
				top: 170%;

			}


			footer a {
				text-align: center;
				display: block;
				margin: 8px;

			}
		}

		@media screen and (min-width:768px) and (max-width:900px) {

			/* body */

			body {
				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/background4.jpg);
				height: 1900px;
			}

			/* ------------------------ */

			/* Nav head */
			ul {
				margin-top: 30px;
				margin-bottom: 20px;
				margin-right: 15px;
				margin-left: 30px;
			}

			ul li {
				display: inline-block;
				padding: 10px;

			}


			/* --------------------- */

			/* Welcome message */
			section {

				font-size: 20px;
			}

			/* ------------------------- */

			/* Nav About */
			footer {
				top: 120%;

			}


			footer a {
				text-align: center;
				display: block;
				margin: 8px;

			}
		}


		@media screen and (min-width:901px) and (max-width:1024px) {

			/* body */

			body {
				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/background5.jpg);
				height: 2200px;
			}

			/* ------------------------ */

			/* Nav head */
			ul {
				margin-top: 30px;
				margin-bottom: 20px;
				margin-right: 15px;
				margin-left: 30px;
			}

			ul li {
				display: inline-block;
				padding: 10px;

			}


			/* --------------------- */

			/* Welcome message */
			section {

				top: 30%;
				font-size: 20px;
			}

			/* ------------------------- */

			/* Nav About */
			footer {
				top: 75%;

			}


			footer a {
				text-align: center;
				display: block;
				margin: 8px;

			}
		}
	</style>
</head>

<body>

	<!-- Nav header  -->
	<header>
		<nav>
			<ul>
				<li> <a id="home" href="#"> <i class="fas fa-home"></i> Home</a> </li>
				<li> <a href="login.php"> <i class="fas fa-sign-in-alt"></i> Login</a> </li>
				<li> <a href="register.php"> <i class="fas fa-user-plus"></i> Register</a> </li>
				<li> <a href="#footer"> <i class="fas fa-info"></i> About</a> </li>
			</ul>
		</nav>
	</header>


	<!-- Welcome message -->
	<section>
		<h2> Welcome Where The Secret </h2>
		<P id="p">Notes are often important and need confidentiality and preservation , We provide protection and
			preservation.</P>
	</section>


	<!-- About footer -->
	<footer id="footer">
		<h1>Welcome Where The Secret</h1>
		<p> Notes are often important and need confidentiality and preservation , We provide protection and preservation
		</p>
		<h3>Only you will register from a note writer and save it</h3>
		<a href="index.html"> <i class="fas fa-user-plus"></i> sign Up</a>
		<a href="logInPage.html"> <i class="fas fa-sign-in-alt"></i> sign In</a>
	</footer>



</body>

</html>