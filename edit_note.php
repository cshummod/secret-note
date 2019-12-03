<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add Note</title>
    <link rel="stylesheet" href="resources/css/fontawesome/all.css" type="text/css">
    <link rel="stylesheet" href="resources/css/mynote.css" type="text/css">

    <style>
        input {
            width: 92%;
            padding: 10px;
            padding-left: 29px;
            border: none;
            background: #eee;

        }

        textarea {
            width: 92%;
            padding: 10px;
            padding-left: 29px;
            border: none;
            background: #eee;
            resize: none;
        }

        /*         ====================================== Response from the phone ==================================================== */


        @media screen and (min-width:320px) and (max-width:443px) {


            /* Box card */
            .box {
                width: 250px;
                margin-top: 20px;
                margin-bottom: 80PX;
                margin-left: 17px;
            }

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

        /*         ===================================== Response from the tab ==================================================== */
        @media screen and (min-width:768px) and (max-width:900px) {



            /* Box card */
            .box {
                width: 650px;
                margin-top: 20px;
                margin-bottom: 400PX;
                margin-left: 20px;
            }

            /* Note display */

            .note {

                width: 610px;
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



        @media screen and (min-width:901px) and (max-width:1024px) {

            /* Box card */
            .box {
                width: 780px;
                margin-top: 20px;
                margin-bottom: 500PX;
                margin-left: 75px;
            }

            /* Note display */

            .note {

                width: 740px;
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



        @media screen and (min-width:1025px) and (max-width:1436px) {

            /* Box card */
            .box {
                width: 850px;
                margin-top: 20px;
                margin-bottom: 400PX;
                margin-left: 90px;
            }

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

            button .add-btn {
                outline: none !important;
                border: none !important;
                color: red !important;
            }
        }
    </style>
</head>

<body>

    <!-- BOX All display -->
    <div class="box">
        <!-- Note display -->
        <?php
        $conn = new mysqli("localhost", "root", "root", "sn_db");
        $noteID = isset($_GET['id']) ? $_GET['id'] : '';


        $query = "SELECT title,content FROM notes where id = '$noteID'";
        $result = mysqli_query($conn, $query);
        $resultArray = mysqli_fetch_assoc($result);
        $noteTitle = $resultArray['title'];
        $noteContent = $resultArray['content'];
        echo "
        <div class='note'>
        <form  action='edit_note.php'>
            <input type='text' id='' value='" . $noteTitle . "' name='title'>
            <br>
            <br>
            <textarea name='content' rows='4' cols='50'>$noteContent</textarea>
            <lable>
            <input type='text' id='' value='" . $noteID . "' name='nID' hidden>
// TODO: Second note ID
        <input type='submit' name='save' value = 'Save 'class='add-btn'><i class='fas fa-plus'></i>

        </form>
    </div>";

        if (isset($_GET['save'])) {
            $noteTitle = $_GET['title'];
            $noteContent = $_GET['content'];
            $noteID = $_GET['nID'];
            echo '<h1>' . $noteTitle;
            echo '<h1>' . $noteContent;
            echo '<h1>' . $noteID;
            $query = "UPDATE notes SET title= '$noteTitle', content = '$noteContent' where id = '$noteID'";
            $results = mysqli_query($conn, $query);
            echo '<script type="text/javascript">
                window.location = "mynotes.php"
               </script>';
        }
        ?>



</body>

</html>