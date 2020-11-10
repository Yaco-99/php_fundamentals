<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
        foreach($pronouns as $value){
            $code=($value=="He/She") ? "codes" : "code";
            echo "$value $code <br>";
        }
        $number=1;
        while($number<=120){
            echo "$number, ";
            $number++;
        }
        
        for($number=1;$number<=120;$number++){
            echo "$number, ";
        }

        $nom=["nom1","nom2","nom3","nom4","nom5","nom6","nom7","nom8","nom9"];
        for($i=0;$i<=120;$i++){
            echo $nom[$i];
        }
    ?>
    <br>
    <select name="country">
    <?php
    $country=["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Antarctica","Belgique","France", "Allemagne"];
    define('MAX_OPTIONS',10);
    foreach($country as $key=> $value){
        $key= substr($value,0,2);
        echo "<option value='$key'>$value</option>";

    }
    ?>
    </select>
    <br>
</body>
</html>