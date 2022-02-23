<?php

$name_1 = $_FILES['img_1']["name"];
$tmp_1 = $_FILES['img_1']["tmp_name"];
$name_2 = $_FILES['img_2']["name"];
$tmp_2 = $_FILES['img_2']["tmp_name"];

// 특정 조건에 맞지 않은 유저가 이 페이지 접근했을때
// ex 파일 정보가 없을 때 (업로드 안 했을 때)

if(!$name_1) {

    header( 'Location: /upload_file.php' );
    exit;

}

move_uploaded_file($tmp_id, "../../data/file/exchange/".$name_1);
move_uploaded_file($tmp_bank, "../../data/file/exchange/".$name_2);

// mysql
// INSERT INTO `[table]` (`[column1]`, `[column2]`, `[...]`) VALUES ('{$name_1}', '{$name_2}', '[...]')

// 저장 완료되면 이전 페이지 이동
header( 'Location: /upload_file.php' );
