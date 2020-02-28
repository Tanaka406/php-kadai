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
echo f(4);
echo "\n";

//課題3
function b($arr){
$a = 1;
foreach($arr as $c){
     $a　*= $c;
}
 return $arr;
}
  $arr = array[1,3,5,7,9];
echo b($arr);
echo "\n";

//課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 $array = [10,8,6,4,2];
 echo max_array(10)
 echo "\n";
 //課題5
 strip_tags(文字列,許可するタグ);
 $string = `<a href="http://google.com">Google</a>`;
$result = strip_tags($string);
echo $result;

array_push($配列, "追加文字列");
array_push($配列, $追加変数);
$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);

$配列 = array_merge($元の配列,$追加配列);
$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);

$変数 = time();
$now = time();
print $now;

$変数 = date(フォーマット, UNIXタイムスタンプ);
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
 
