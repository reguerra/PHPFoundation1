<?php

require_once "header.php";

$file = getPageFile();
getRoute();
getContent();
showContent();

require_once "footer.php";

