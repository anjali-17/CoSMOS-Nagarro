<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CoSMOS</title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    
    <style>
        html {
            background: url('images/giphy3.gif') no-repeat center center fixed;
            -webkit-background-size: contain;
            -moz-background-size: contain;
            -o-background-size: contain;
            background-size: contain;
            background-color:black;
        }

    </style>
</head>
<body>
<?php

session_destroy();
$has_session = session_id() !== '';
echo $has_session;

?>
    <script type="text/javascript">
        var timer = 4; //seconds
        website = "index.html"
        function delayer() {
            window.location = website;
        }
        setTimeout('delayer()', 1000 * timer);
    </script>







</body>
</html>