<?php

// 全局函数

function dominantIndex($nums) {
    $new_nums = $nums;
    rsort($new_nums);
    $big_num = $new_nums[0];
//    for($i = 1; $i < count($new_nums); $i++){
//        if($new_nums[$i] == 0){
//            return array_search($new_nums[0],$nums);
//        }elseif ($big_num/$new_nums[$i] >= 2 && $big_num % $new_nums[$i] == 0){
//            return array_search($new_nums[0],$nums);
//        }
//        return -1;
//    }
    $a = 0;
    foreach($new_nums as $v){
        if($v == $big_num){
            $a += 1;
        }elseif($v == 0){
            $a += 1;
        }elseif($big_num/$v >= 2){
            $a += 1;
        }else{
            return -1;
        }
        if($a == count($nums)-1){
            return array_search($new_nums[0],$nums);
        }
    }
}