<?php
$arrayProducts = getAllproducts();
$delId= filter_input(INPUT_GET,'delID');
$editID= filter_input(INPUT_GET,'editID');
$add= filter_input(INPUT_GET,'yes');
$updateID= filter_input(INPUT_POST,'updateID');
$updatename= filter_input(INPUT_POST,'updateName');
$updateprice= filter_input(INPUT_POST,'updatePrice');
$updateqty= filter_input(INPUT_POST,'updateqty');

$addname= filter_input(INPUT_POST,'addname');
$addprice= filter_input(INPUT_POST,'addprice');
$addqty= filter_input(INPUT_POST,'addqty');