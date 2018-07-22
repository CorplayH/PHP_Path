<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 19/07/18
 * Time: 21:08
 */
function math ($first_number,$math,$second_number){
    switch ($math){
        case '+':
            return $first_number + $second_number;
            break;
        case '-':
            return $first_number - $second_number;
            break;
        case '*':
            return $first_number * $second_number;
            break;
        case '/':
            if ($second_number == 0){
//                print_r('除数不能为0');
                break;
            }else{
                return $first_number / $second_number;
                break;
            }
    }
}
function checknum ($val,$message){
    return !is_numeric($_POST[$val])?$message : '';
}
function selected ($math,$value){
    if($math == $value){
        print_r('selected');
    }else{
        print_r('');
    }
}

define('IS_POST', !empty($_POST));
$error = '';
$first = 0;
$second = 0;
$math = '+';
$result = 0;
if(IS_POST){
//    $error = '';
    $first = $_POST['first_number'];
    $second = $_POST['second_number'];
    $math = $_POST['math'];
    $result = "";
    $error.=checknum('first_number','第一格请输入数字<br/>');
    $error.=checknum('second_number','第二格请输入数字<br/>');
//    is_numeric($first) && is_numeric($second)?$result = math($first,$math,$second) :  $first=$second=$result=0;
    if (is_numeric($first) && is_numeric($second) & $second !=0) {
        $result = math($first, $math, $second);
    }elseif (!is_numeric($first)){
        $first = '';
    }elseif (!is_numeric($second)){
        $second = '';
    }elseif (is_numeric($first) && $math == '/' && $second == 0){
        $error.='除数不能为0 <br/>';
    }else{
        $first=$second=0;
        $math='+';
        $result=0;
    }
}
?>