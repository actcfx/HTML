<?php

$scoreTable = array(
    array("01", "綾華", 94, 52, 68, 95, 70),
    array("02", "琴", 20, 92, 3, 30, 63),
    array("03", "空", 44, 65, 71, 54, 75),
    array("04", "麗莎", 70, 43, 98, 14, 76),
    array("05", "熒", 89, 84, 62, 68, 82),
    array("06", "芭芭拉", 89, 32, 53, 50, 20),
    array("07", "凱亞", 83, 7, 37, 89, 86),
    array("08", "迪盧克", 93, 23, 85, 55, 65),
    array("09", "雷澤", 1, 84, 42, 54, 94),
    array("10", "安伯", 18, 28, 83, 95, 10),
    array("11", "溫迪", 7, 19, 60, 88, 89),
    array("12", "香菱", 48, 44, 60, 49, 62),
    array("13", "北斗", 77, 88, 6, 50, 33),
    array("14", "行秋", 11, 54, 24, 94, 45),
    array("15", "魈", 80, 88, 53, 23, 50),
    array("16", "凝光", 67, 64, 65, 55, 52),
    array("17", "可莉", 46, 73, 1, 5, 35),
    array("18", "鐘離", 3, 80, 87, 16, 50),
    array("19", "菲謝爾", 58, 34, 11, 6, 65),
    array("20", "班尼特", 49, 22, 87, 71, 90),
    array("21", "達達利亞", 100, 100, 100, 100, 100),
    array("22", "諾艾爾", 100, 2, 20, 100, 28),
    array("23", "七七", 47, 83, 4, 84, 90),
    array("24", "重雲", 98, 39, 95, 16, 35),
    array("25", "甘雨", 84, 9, 23, 80, 38),
    array("26", "阿貝多", 18, 19, 88, 85, 70),
    array("27", "迪奧娜", 8, 22, 91, 47, 28),
    array("28", "莫娜", 90, 83, 9, 60, 44),
    array("29", "刻晴", 55, 91, 16, 45, 98),
    array("30", "砂糖", 76, 87, 32, 15, 53)
    );

// 建立資料庫連線 & 選擇資料庫
$dbConnection = new mysqli('localhost', 'cbs06', '498924@Info', '111_cbs06');
if ($dbConnection->connect_error) die("Connection failed: " . $dbConnection -> connect_errno);

// 設定資料庫轉換字元集
$dbConnection -> query("SET NAMES 'utf8'");
$dbConnection -> query("SET character_set_client = utf8;");
$dbConnection -> query("SET character_set_results = utf8;");

foreach($scoreTable as $student) {
    //清空資料
    $sql = "DELETE FROM scoreTable WHERE seatNo = $student[0];";
    $statement = $dbConnection -> prepare($sql);
    $statement -> execute();

    //放回資料
    $sql = "INSERT INTO scoreTable (seatNo, studentName, chinese, english, math, pro1, pro2)"
			." VALUES('$student[0]', '$student[1]', $student[2], $student[3], $student[4], $student[5], $student[6]);";
    $statement = $dbConnection -> prepare($sql);
    $statement -> execute();
}

// 網頁轉向
header("Location: https://$_SERVER[HTTP_HOST]".dirname($_SERVER['PHP_SELF'])."/hw01.php");
?>