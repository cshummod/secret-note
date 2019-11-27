<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>SN| My Notes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="resources/css/css/all.css" type="text/css">
	<link rel="stylesheet" href="resources/css/mynote.css" type="text/css">
	<style>
		/*         ====================================== Response from the phone ==================================================== */


		@media screen and (min-width:320px) and (max-width:443px) {


			/* Box card */
			.box {
				width: 250px;
				margin-top: 20px;
				margin-bottom: 80PX;
				margin-left: 17px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 210px;
				margin-right: 30px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}

		}



		@media screen and (min-width:444px) and (max-width:539px) {



			/* Box card */
			.box {
				width: 320px;
				margin-top: 20px;
				margin-bottom: 80PX;
				margin-left: 17px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 280px;
				margin-right: 120px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}
		}



		@media screen and (min-width:540px) and (max-width:680px) {



			/* Box card */
			.box {
				width: 400px;
				margin-top: 20px;
				margin-bottom: 80PX;
				margin-left: 33px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 360px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}
		}


		@media screen and (min-width:681px) and (max-width:767px) {



			/* Box card */
			.box {
				width: 550px;
				margin-top: 20px;
				margin-bottom: 80PX;
				margin-left: 23px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 500px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}
		}


		/*         ====================================== Response from the tab ==================================================== */


		@media screen and (min-width:768px) and (max-width:900px) {



			/* Box card */
			.box {
				width: 650px;
				margin-top: 20px;
				margin-bottom: 400PX;
				margin-left: 20px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 610px;
				margin-right: 120px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a,
			button {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}
		}



		@media screen and (min-width:901px) and (max-width:1024px) {



			/* Box card */
			.box {
				width: 780px;
				margin-top: 20px;
				margin-bottom: 500PX;
				margin-left: 75px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 740px;
				margin-right: 120px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a,
			button {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}
		}



		@media screen and (min-width:1025px) and (max-width:1436px) {



			/* Box card */
			.box {
				width: 850px;
				margin-top: 20px;
				margin-bottom: 400PX;
				margin-left: 90px;
			}

			/* ------------------- */


			/* Note display */

			.note {

				width: 780px;
				margin-right: 120px;
				margin-bottom: 30PX;
				padding: 10px;
			}


			h3,
			p,
			a {

				padding: 5px;
				margin: 4px;
				border-radius: 5px;
			}
		}


		/* -------------------- */
	</style>
</head>

<body>

	<div class="box">
		<nav>
			<ul>
				<li> <a id="mynote" href="mynotes.php"> <i class="far fa-file-alt"></i> My Notes </a> </li>
				<li> <a href="add_note.php"> <i class="far fa-sticky-note"></i>Add Note </a> </li>
				<li> <a href="edit_info.php"> <i class="far fa-edit"></i>Edit info </a> </li>
				<li> <a href="http//#"> <i class="fas fa-sign-out-alt"></i>Logout </a> </li>
				<ul>
		</nav>

		<?php
		$conn = new mysqli("localhost", "root", "root", "sn_db");

		$email = $_SESSION['email'];
		$query = "SELECT * FROM notes where userID = '$email' order by created desc";
		$result = mysqli_query($conn, $query);

		while ($notes = mysqli_fetch_assoc($result)) {
			$title = $notes["title"];
			$content = $notes["content"];
			$noteID = $notes["id"];
			echo '<div class="note">';
			echo '<h3> Titel: ' . $title . '</h3>';
			echo '<p>' . $content . '</p>';
			// TODO: style ID
			echo '<form action="mynotes.php" method="get">
            <i class="far fa-edit"><input type="submit" name="edit" value="edit" style=" padding:5px; outline:none; border:none; background-color: rgba(0,0,0,0.0);"></i>
            <i class="far fa-trash-alt"><input type="submit" name="delete" value="delete" style=" padding:5px; outline:none; border:none; background-color: rgba(0,0,0,0.0);"></i>
			</form>';
			echo '</div>';

			if (isset($_GET['edit'])) {
				header('location: edit_note.php');
			}
			if (isset($_GET['delete'])) {
				$query = "DELETE FROM notes where id = '$noteID'";
				if ($conn->query($query) === TRUE) {

					echo '<script type="text/javascript">
         				  window.location = "mynotes.php"
     					 </script>';
				} else {
					echo "Error deleting record: " . $conn->error;
				}
			}
		}
		?>





</body>

</html>