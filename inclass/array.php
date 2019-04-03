<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        $frogs = array("Froggy", "Toady","Jumpy","Charles");

       // print_r($frogs);// use for arrays because echo doesnt work
        //echo($frogs[1]);
       // var_dump($frogs);//more details
       //creata a blank array
    //    $frogClub = array();
    //    $frogClub[]="Fred";//add elements 
    //    $frogClub[]="Spike";
    //    print_r($frogClub);
    //    $frogClub[1]="Godzilla";
    //    print_r($frogClub);
        
        for ($i=0;$i<101;$i++){
            $array[] = random_int(0,100);
        }
        // for($i=0;$i<101;$i++){
        //     echo("<br>$array[$i]");
        // }
        // foreach($array as $value ){
        //     echo"Value: $value<br>";
        // }
        $tax_rates = array("Hawaii" => 4.25, "Cal"=> 8.25);
    //     print_r($tax_rates);
    //     echo($tax_rates['Hawaii']);//single and double quotes
    //     echo($tax_rates[0]);// loses numeric calling 
        // foreach($tax_rates as $key=>$value){
        //     echo("<br> $key: $value");
        // }
        $arrayLetter = array("a", "b", "c", "d");
        foreach($arrayLetter as $letters){
            echo($letters);
        }
        unset($arrayLetter[1]);//removes index and value of index
        print_r($arrayLetter);
        $arrayLetter = array_values($tax_rates);
        print_r($arrayLetter);


     ?>
</body>
</html>