<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
    <label for="male">male</label>
    <input type="radio" id='male' name='gender' value='male'>
    <label for="female">female</label>
    <input type="radio" id='female' name='gender' value='female'>
    <input type="submit" name="submit" value="Greet me now">
</form>
    <?php
        $hello = ($_GET['gender'] == 'female') ?  "Hello F" : "Hello M";
        echo $hello;
    ?>
    
</body>
</html>