<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>A 5</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="src/styles/reset.css">
   <link rel="stylesheet" href="src/styles/root.css">
   <link rel="stylesheet" href="src/styles/commonStyle.css">
   <link rel="stylesheet" href="src/styles/buttons.css">
   <link rel="stylesheet" href="src/styles/forms.css">
   <link rel="stylesheet" href="src/styles/underline.css">
   <link rel="stylesheet" href="src/styles/bread-crumbs.css">
   <script src="index.js"></script>
</head>

<body>
   <div class="app">
      <div class="contentpop">

         <?php
         include 'src/components/header/header.php';
         ?>
         <main class="js-main" >
            <?php
            // Подключение хлебных крошек на всех страницах, кроме главной
            if ($_SERVER['REQUEST_URI'] !== '/') {
               include 'src/components/ui/breadcrumbs/breadcrumbs.php';
            }
            //основной контент 

            if (isset($content)) {
               include $content;
            }
            ?>
         </main>
         <?php
         include 'src/components/footer/footer.php';
         ?>

      </div>

      <?php
      include 'src/components/ui/popUpContacts/popUpContacts.php';
      include 'src/components/ui/popUpAsk/popUpAsk.php';
      include 'src\components\cookie\index.php';
      ?>
   </div>
</body>

</html>