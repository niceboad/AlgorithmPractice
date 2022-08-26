<?php
$R = trim(fgets(STDIN));
$G = trim(fgets(STDIN));
$x = 0; //求める値
$avg = (($R + $x) / 2) * 2; /*左辺。平均を求めて、それを*2することで分母をはらう*/
$temp = $G * 2; //右辺。左辺で*2にしたことにより、右辺も*2する。
$x = $temp - $avg; //$X=の形にするために、移項する。
echo $x;
