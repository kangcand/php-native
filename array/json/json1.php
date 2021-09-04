<?php
// Json String
$dataJson = "[1,2,3,4,5]";
$data = json_decode($dataJson);

echo implode("-", $data);
// echo $dataJson;
