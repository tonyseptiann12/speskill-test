<?php 
function findNeedle($needle, $haystack)
{
    return array_search($haystack, $needle);
}

print_r(findNeedle(["red", "blue", "yellow", "black", "grey"], "blue"));
?>