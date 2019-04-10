<?php 
$gamburger = 4.95;
$coctail = 1.95;
$cocacola = 0.85;
$gamburger = $gamburger * 2;
$sum = $gamburger + $coctail + $cocacola;
$sum_itog = $sum + (($sum / 100 * 7.5) + ($sum / 100 * 16));
print $sum_itog;