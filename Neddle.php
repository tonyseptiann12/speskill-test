<?php 
function findNeedle($needle, $haystack)
{
        $results = array();
        $index = array();
        $hays = explode(" ",$haystack);
        foreach($needle as $i => $n)
        {
                $p = array_search($n, $hays);
                if($p)
                    $index[] = $i;
        }
        return ($index)?$index:false;
}

echo findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");
?>