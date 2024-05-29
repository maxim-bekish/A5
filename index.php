<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <title>A 5</title>
   <link rel="stylesheet" href="src/styles/reset.css">
   <link rel="stylesheet" href="src/styles/buttons.css">
   <link rel="stylesheet" href="src/styles/commonStyle.css">
   <link rel="stylesheet" href="src/styles/root.css">
</head>

<body>

   <?php
   require_once $_SERVER['DOCUMENT_ROOT'] . '/src/config/path.php';
   include 'src/components/header/header.php';
   include 'src/components/page/home/main/main.php';
   include 'src/components/footer/footer.php';
   ?>

</body>

</html>