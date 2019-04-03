<section>
<h4>Employees</h4>
<?php
$arrayEmp =getAllEmp();
foreach($arrayEmp as $employee){
    $str ="<a href ='?emp=$employee[empID]'> $employee[lastName] $employee[firstName]</a><br>";
  
   echo($str);
}

?>
<a href="addEmplyoee.php">Add Emloyee</a>
</section>