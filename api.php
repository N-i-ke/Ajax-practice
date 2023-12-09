<?php
// $data = array("name" => "tanaka");
$file = file_get_contents("./member.json");

header("Content-type: application/json; charaset=UTF-8");
echo $file;
exit;