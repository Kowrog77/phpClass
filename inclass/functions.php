<?php
    function todaysdate(){
        echo("Todays date is " . date('m/d/y'));
    }
    function yearsTogo($age){
        $remainingYears = 18 - $age;
        echo("You have $remainingYears years to go");
    }
    function diffInScore($score) {
        $minScore = 680;
        return $minScore - $score;
    }
?>
