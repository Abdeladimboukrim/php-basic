<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Typing animation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php


        if(isset($_GET['name'])) {
          $name = $_GET['name'];

           echo   $name ;

        }

          ?>




        <form action="index.php" method="get">
          <input type="text" name="name" placeholder="Name">
          <input type="submit">
        </form>

</body>
</html>
