<?php
function orderDeleter($orderDelete){
    for( $i = 0;$i<=count($_SESSION['product_order']);$i++){
        if ($_SESSION['product_order'][$i][1]== $orderDelete){
            unset($_SESSION['product_order'][$i],);
            $ary= array_values($_SESSION['product_order']);
            $_SESSION['prouct_order'] = $ary;
        }
    }
}