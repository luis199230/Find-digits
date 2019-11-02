<?php 
  function findDigits($n) {
    $data = [];
    $old = $n;
    while($old>0){
        $data[] = $old%10;
        if($old>=10){
            $old = $old/10;       
        }else{
            $old = 0;    
        } 
    }
    $count = 0;
    foreach($data as $item){
        if($item !=0 && $n%$item==0){
            $count++;
        }
    }
    return $count;
  }
?>
