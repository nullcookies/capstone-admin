<?php 
    if (isset($_SESSION["title"])) {
        $title = $_SESSION["title"];
    } else {
        $title = "Admin Interactive Digital Experience";
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <script src="https://kit.fontawesome.com/fc5bc90864.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $helper->cssPath("shared.css") ?>"/>
    <link rel="stylesheet" href="<?php echo $helper->cssPath("login.css") ?>"/>
    <link rel="stylesheet" href="<?php echo $helper->cssPath("appointment.css") ?>"/>
</head>
<body>