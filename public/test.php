<?php

 function binary_search($list, $item)
{
$low = 0;
$high = count($list) - 1;
$mid =ceil(($low + $high)/2);
while ($low <= $high) {
    $guess = $list[$mid];    
   
    if($guess == $item){
        return $mid;
    }
    if($guess > $item){        
        $low = $mid;
    }else{
    $high = $mid;    
    }
}
return "X";
}
    

$my_list = [1,3,5,7,9];


echo binary_search($my_list, 3);

echo binary_search($my_list, -1);
?>