<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
    <label for="gender">Are you a human, a cat or a unicorn ?</label>
    <input type="text" name='gender'>
    <input type="submit" name="submit" value="Greet me now">
</form>
    <?php
         $hello = ($_GET['gender'] == 'human' OR $_GET['gender'] == 'cat' OR $_GET['gender'] == 'unicorn') ?
         (($_GET['gender'] == 'human') ?  "Hello human" : (($_GET['gender'] == 'unicorn') ?
          "Hello unicorn" : "Hello cat" )) : "There is only 3 genders";
        echo $hello;
    ?>
</body>
</html>