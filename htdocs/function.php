<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str="According to a researcher (sic) at Cambridge University, it doesn't matter in what
     order the letters in a word are, the only important thing is that the first and last 
     letter be at the right place. The rest can be a total mess and you can still read it without
      problem. This is because the human mind does not read every letter by itself but the word
       as a whole.";

    $arr=explode(" ",$str);
    foreach($arr as $el){
        str_shuffle($el);
    }

    function capitalizes($name){
        return ucfirst($name);
    }
    function year(){
        return date("Y");
    }
    function timeEu(){
        date_default_timezone_set("Europe/Paris");
        return date("H:i:s");
    } 
    function sum($a, $b){
        return (is_int($a) AND is_int($b)) ? $a+$b : "Error not a NaN";
    }
    function acronym($str){
        $arr= explode(" ",strtoupper($str));
        foreach($arr as $el){
            $acronym .= $el[0];
        }
        return $acronym;
    }
    function replaceAE($str){
        return preg_replace("/ae/i", "æ", $str);
    }
    function reverseReplaceAE($str){
        return preg_replace("/æ/i", "ae", $str);
    }
    function notice($message, $class="info"){
        return "<div class='$class'>$message</div>";
    }
    ?>
    <h1>Generated words
    <?php 
    function randomWord($minL, $maxL){
        $length=rand($minL, $maxL);
        return substr(str_shuffle(implode(array_merge(range("a","z")))),0,$length);
    }
    if(array_key_exists('generate',$_POST)){
        echo randomWord(1,5) ." ". randomWord(7,15); 
    }
   
    ?>
    </h1>
    <form method="post">
    <input type="submit" name="generate" value="generate">
    </form>

    <?php
    function deCapitalize($str){
        return strtolower($str);
    }

    function volume($r, $h){
        return pow($r,2)*3.14*$h*(1/3);
    }
 
    echo 'The volume of a cone which ray is 5 and height is 2 = ' . volume(5,2) . ' cm<sup>3</sup><br />';  
    echo 'The volume of a cone which ray is 3 and height is 4 = ' . volume(3,4) . ' cm<sup>3</sup><br />'; 


    ?>

</body>
</html>