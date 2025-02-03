<?php 
function summation($num1,$num2,...$numbers){
    $sum=0;
    foreach($numbers as $number){
        $sum+=$number;
    }
    return $num1+$num2+$sum;
}
function getLength(String $randoms){
    return strlen($randoms);
}
$taxes=0.1;
$calculateTaxes=function($price)use($taxes){
    return $price+$price*$taxes;
};
echo summation(1,2,3,4).PHP_EOL;
$names=["mazen","ali","mohamed","omar"];
$mapArray=array_map('getLength',$names);
var_export($mapArray);
$Prices=[500,399,589,273];
$mapPrice=array_map($calculateTaxes,$Prices);
var_export($mapPrice);
?>