<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/user.php'); 

    if ($logged == false) {
        header("Location:../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <style>
        html, body, #wrapper {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #wrapper {
            display: flex;
            flex-direction: column;
        }

        iframe {
            flex-grow: 1;
            width: 100%;
            border: none;
        }

        .panel-bolt {
            border-color: #464646;
        }

        .panel-bolt .panel-heading {
            border-color: #464646;
            color: #fff;
            background-color: #464646;
        }
    </style>
</head>
<body>

    <div id="wrapper">
        <?php 
            require_once("nav.php");
            require_once("sidebar.php");
        ?>
        <iframe src="https://app.arduino.cc/dashboards/f7e419de-15b7-4f86-8129-8ad36138aff1" allowfullscreen></iframe>
    </div>

    <?php 
        require_once("footer.php");
        require_once("js.php");
    ?>
</body>
</html>
