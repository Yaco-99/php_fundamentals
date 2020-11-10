<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $family=["papa", "maman", "frère", "soeur"];
        print_r($family);
        $recipe=["1", "2", "3", "4"];
        print_r($recipe);
        $films=["jsp", "du", "tout", "frère"];
        echo $films[0];
    ?>
    <p>2.</p>
    <?php
        /* echo "<pre>";
        print_r($family);
        echo "<pre>"; */
        var_dump($family);
    ?>
    <p>3.</p>
    <?php
        array_push($family, "test");
        print_r($family);
    ?>
    <p>asso array</p>
    <?php
    $me= array(
        'name' => "Yannick",
        'age' => 21,
        'season' => "summer",
        'soccer' => false
    );
    $me["hobbies"]=["code", "code", "code", "dev"];
    
    $Bilou= array(
        'name' => "Bilou",
        'age' => 24,
        'season' => "summer",
        'soccer' => true,
        "hobbies"=> array("code", "code", "code", "dev")
    );

    $me["bilou"]=$Bilou;

    $bilouHobbies = sizeof($Bilou["hobbies"]);
    $meHobbies = sizeof($me["hobbies"]);
    echo $bilouHobbies+$meHobbies;

    $me["hobbies"][]="new";
    $me["name"]="Duran";

    // perform array operation
    $possible_hobbies_via_intersection = array_intersect($me["hobbies"], $Bilou["hobbies"]);
    $possible_hobbies_via_merge = array_merge($me["hobbies"], $Bilou["hobbies"]);

    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
    ?>
    <h2>More array</h2>
    <?php
    $web_development=array(
        "frontend"=>[],
        "backend"=>[]);

    array_push($web_development["frontend"],"xhtml");
    array_push($web_development["backend"],"Ruby", "Rails");
    array_push($web_development["frontend"],"CSS");
    array_push($web_development["backend"],"flash");
    array_push($web_development["frontend"],"JavaScript");
    $index=array_search("xhtml",$web_development["frontend"]);
    $web_development["frontend"][$index]="html";
    $index=array_search("flash",$web_development["backend"]);
    array_splice($web_development["backend"], $index, 1);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

    ?>
</body>
</html>