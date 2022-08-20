<?php
$stdin  = trim(fgets(STDIN));
$stdinArray = explode(" ", $stdin);
$stdinArray = explode(",", $stdin);
echo "${stdinArray[0]} ${stdinArray[1]} ${stdinArray[2]}";
