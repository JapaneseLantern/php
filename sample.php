<?php
for ($i = 1; $i < 15; $i++){
    if($i % 2 === 0){
        continue;
    }
    if($i % 14 === 0){
        break;
    }
    echo $i."\n";
}
?>