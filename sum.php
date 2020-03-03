<?php
echo 'hello php!';
echo "\n";

//課題1
function a($max){
    return $max * 2;
}
echo a(2);
echo "\n";


//課題2
function f($a,$b){
    return $a+$b;
}
echo f(4,4);
echo "\n";

//課題3
function b($arr){
    $a = 1;
    foreach($arr as $c){
       $a *= $c;
    }
    return $a;
}
$arr = array(1,3,5,7,9);
echo b($arr);
echo "\n";

//課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($a>$max_number){
        echo "$max_number = $a";
    }
        
 }

    return $max_number;
 }
 $arr = array(10,8,6,4,2);
 echo max_array($arr);
 

 //課題5
 //strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p>');

 //array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

 //array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//time
$nextWeek = time() + (7 * 24 * 60 * 60);;
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";

//mktime
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo "\n";

//date
// 使用するデフォルトのタイムゾーンを指定します。PHP 5.1 以降で使用可能です。
date_default_timezone_set('UTC');
 // 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

