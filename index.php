<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semernin`s L02</title>
    <style>
        table, th, td {
          border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    echo "1) ";
    for($i = 0; $i<=20; $i++){
        if($i %2 != 0) echo " $i";
    }
    echo "<br>";
    echo "2) ";
    for($i = 1; $i<=20; $i++){
        if($i %3 == 0) echo " $i";
    }
    echo "<br>";

    echo "3) ";
    $res = 0;
    for($i = 1; $i<=10; $i++){
        $odno = $i ** $i;
        $res += $odno;
    }
    echo "$res";
    echo "<br>";

    echo "4) ";
    $D1 = 5**2-4*2*3;
    $D2 = 7**2-4*10*25;

    echo "$D1, $D2";
    if($D1 >=0 ){
        $res1 = (5 + sqrt((float) $D1))/(2*2);
        $res2 = (5 - sqrt((float) $D1))/(2*2);

        echo "<br>1. <table> <tr><th>$res1</th> <th>$res2</th></tr></table>";
    }
    else echo "1. Корней нету; ";

    if($D2 >= 0 ){
        $res1 = (-7 + sqrt((float) D2))/(2*10);
        $res2 = (-7 - sqrt((float) D2))/(2*10);

        echo "<br>2. <table> <tr><th>$res1</th> <th>$res2</th></tr></table>";
    }
    else echo "2. Корней нету; ";
    echo "<br>";

    echo "5) ";
    $arr = [0,1];
    for($i = 2; $i<20; $i++){
        $arr[$i] = $arr[$i-1] + $arr[$i-2];
    }
    foreach($arr as $key => $el){
        echo " [$key] => $el;";
    }
    echo "<br>";

    echo "6) ";
    $arr;
    for($i = 0; $i<10; $i++){
        $arr[$i] = (int)rand(-50, 50);
    }
    
    foreach($arr as $key => $el){
        echo " [$key] => $el;";
    }
    echo "<br>";
    shuffle($arr);
    foreach($arr as $key => $el){
        echo " [$key] => $el;";
    }
    echo "<br>";
    rsort($arr);
    foreach($arr as $key => $el){
        echo " [$key] => $el;";
    }
    echo "<br>";

    echo "7) ";
    $arrStudent = [
        "Paladin" => "Lea",
        "Skywalker" => "Enekin",
        "Dart" => "Vaider",
        "Zolotar" => "Denis",
        "Mihalkov" => "Andrey",
    ];

    echo "<table>";

    foreach($arrStudent as $fname => $name){
        echo "<tr> <th>$fname</th> <th>$name</th></tr>";
    }
    echo "</table>";

    $arrNames;
    $j = 0;
    foreach($arrStudent as $name){
        $arrNames[$j] = $name;
        $j++;
    }
    sort($arrNames);
    foreach($arrNames as $key => $el){
        echo " [$key] => $el;";
    }

    echo "<br>";
    for($i = 0; $i<3; $i++){
        $rand = array_rand($arrNames);
        echo " $arrNames[$rand];";
    }
    echo "<br>";

    echo "8) ";
    $arrSUsers = [
        "user1" => "Lea Paladin",
        "user2" => "Enekin Skywalker",
        "user3" => "Dart Vaider",
        "user4" => "Zolotar Denis",
        "user5" => "Mihalkov Andrey",
    ];
    extract($arrSUsers);
    echo "$user1, $user2, $user3, $user4, $user5;";
    echo "<br>";

    echo "9) ";

    $city  = "San Francisco";
    $state = "CA";
    $event = "SIGGRAPH";

    $location_vars = array("city", "state");

    $result = compact("event", $location_vars);

    foreach($result as $key => $el){
        echo " [$key] => $el;";
    }
    echo "<br>";

    echo "10) ";
    $arrStud = ["1" => [
        "name" => "Денис Золотарь Иванович",
        "age" => "21",
        "group" => "36Пр31",
        "like_skills" => array("PHP", "C#", "C++", "C++ ООП", "MS Sql")
    ],
        "2" => [
        "name" => "Антон Нечитайло Иванович",
        "age" => "16",
        "group" => "38Пр32",
        "like_skills" => array("HTML", "JS")
        ],
    ];

    echo "ALL:";
    foreach($arrStud as $key => $val){
            $str = "";
            $str .= "<br><br>$key: <br>";
           foreach($val as $key2 => $val2){
            if(!is_array($val2)) $str .= "$key2: $val2;<br>";
            else{
                $str .= "Skills: (";
                foreach($val2 as $val3){
                    $str .= "$val3, ";
                }
                $str .= ");<br>";
            }
           } 
          echo $str;
        }

        echo "<br>PHP skill:";
    foreach($arrStud as $key => $val){
        $chechPHP = false;
            $str = "";
            $str .= "<br><br>$key: <br>";
           foreach($val as $key2 => $val2){
            if(!is_array($val2)) $str .= "$key2: $val2;<br>";
            else{
                $str .= "Skills: (";
                foreach($val2 as $val3){
                    if($val3 == "PHP") $chechPHP = true;
                    $str .= "$val3, ";
                }
                $str .= ");<br>";
            }
           } 
           if($chechPHP) echo $str;
        }



    ?>
</body>
</html>