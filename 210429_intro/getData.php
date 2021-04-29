<?php
//修改
$json_string = file_get_contents("data.json"); // 從檔案中讀取資料到PHP變數
// var_dump($json_string);

$data = json_decode($json_string, true); // 把JSON字串轉成PHP陣列
$data["url"] = $_POST['url'];
$json_strings = json_encode($data);
file_put_contents("data.json", $json_strings); //寫入