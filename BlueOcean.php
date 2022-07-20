<?php 
function blueOcean($a, $b){
    return array_values(array_diff($a, $b));
}

print_r(blueOcean([1,2,3,4,6,10], [1]));
?>