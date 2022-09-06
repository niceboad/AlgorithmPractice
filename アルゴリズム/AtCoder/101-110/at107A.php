<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$ans = ($stdinArray[0] - $stdinArray[1]) + 1; //後ろからの順番を求める。
echo $ans;
