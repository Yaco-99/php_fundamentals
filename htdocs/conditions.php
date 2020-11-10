<?php
/* // 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness ){
    echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $possible_states[1] ){
	echo "Yuk, Room is 1";
} else if( $possible_states[2] ){
	echo "Yuk, Room is 2";
}else if( $possible_states[3] ){
	echo "Yuk, Room is 3";
} else {
	echo "<br>Nothing to do, room is neat.";
}

date_default_timezone_set("Europe/Paris");
$now=date('H:i');

if(strtotime($now)>=strtotime('05:00') AND strtotime($now)<=strtotime('09:00')){
    echo 'good morning';
}elseif(strtotime($now)>=strtotime('09:01') AND strtotime($now)<=strtotime('12:00')){
    echo 'good day';
}elseif(strtotime($now)>=strtotime('12:01') AND strtotime($now)<=strtotime('16:00')){
    echo 'good afternoon';
}elseif(strtotime($now)>=strtotime('16:01') AND strtotime($now)<=strtotime('21:00')){
    echo 'good evening';
}else{
    echo 'good night';
} */
?>
<!-- <form method="get" action="">
	<label for="age">Your age</label>
	<input type="number" name="age">
    <label for="male">male</label>
    <input type="radio" id='male' name='gender' value='male'>
    <label for="female">female</label>
    <input type="radio" id='female' name='gender' value='female'>
    <p>Do you speek english ?</p>
    <label for="yes">yes</label>
    <input type="radio" id='yes' name='langue' value='yes'>
    <label for="no">no</label>
    <input type="radio" id='no' name='langue' value='no'>
    <input type="submit" name="submit" value="Greet me now">
</form>
<?php
// 4. "Different greetings according to age" Exercise

/* function checkGender($rank){
    if($_GET['gender']=="female"){
        checkEnglish($rank, "female");
    }else{
        checkEnglish($rank, "female");
     }
}

function checkEnglish($rank, $gender){
    if($_GET['langue']=='yes'){
        echo "Hello $rank $gender";
    }else{
        echo "Ola $rank $gender";
    }
}

if (isset($_GET['age'])){
    if($_GET['age']<12){
        checkGender("kidoo");
    }elseif($_GET['age']>12 AND $_GET['age']<18){
        checkGender('hello teenager');
    }elseif($_GET['age']<115){
        checkGender('hello anbioqbv');
   }
   } */

   ?> -->
<!-- 
<form method="get" action="">
	<label for="age">Your age</label>
	<input type="number" name="age">
    <label for="name">Name</label>
    <input type="text" name='name'>
    <label for="male">male</label>
    <input type="radio" id='male' name='gender' value='male'>
    <label for="female">female</label>
    <input type="radio" id='female' name='gender' value='female'>
    <input type="submit" name="submit" value="Greet me now">
</form> -->

<?php
/* // 5. "Different greetings according to age" Exercise
$greet = "Sorry you don't...";

if (isset($_GET['age'])){
    if($_GET['age']>=21 AND $_GET['age']<=40 AND $_GET['gender']=="female"){
        $name=$_GET['name'];
        $greet = "Welcome to the team $name";
    }
    echo $greet;
   }
    */
   ?>

<form method="get" action="">
	<label for="note">Your note</label>
	<input type="number" name="note">
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
    switch (true){
        case ($_GET['note']<=4):
            echo "haha";
            break;
        case ($_GET['note']>=5 AND $_GET['note']<10):
            echo "xlq";
            break;
        case ($_GET['note']==10):
            echo "gg";
            break;
        case ($_GET['note']>=11 AND $_GET['note']<15):
            echo "not bad";
            break;
        case ($_GET['note']>=15 AND $_GET['note']<19):
            echo "brav";
            break;
        case ($_GET['note']>=19):
            echo "cheater";
            break;
    }
?>