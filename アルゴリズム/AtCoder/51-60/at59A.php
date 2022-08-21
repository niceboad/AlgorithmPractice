<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
echo strtoupper($stdinArray[0][0] . $stdinArray[1][0] . $stdinArray[2][0]);
