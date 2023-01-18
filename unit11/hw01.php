<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<title>乙班06王瑋祥11-1</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header bg-info text-white text-center">
							<h2>成績表</h2>
						</div>
						<?php   // 建立全班的成績陣列
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
						?>
						<div class="card-body">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>座號</th>
										<th>姓名</th>
										<th>國文</th>
										<th>英文</th>
										<th>數學</th>
										<th>專一</th>
										<th>專二</th>
										<th>總分</th>
										<th>平均</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                        foreach($scoreTable as $student) {      // 第一層 foreach，每一次取出一個學生的資料放在 $student 陣列中。
                                            $total = 0;
                                            echo "<tr>";
                                            foreach($student as $data) {    // 第二層 foreach，將每個學生的每一個欄位的資料依序取出，放在 $data 變數中。
                                                if(is_int($data)) $total += $data;
                                                if(is_int($data) && $data < 60)
                                                    echo "<td style = 'color:"."red".";'>".$data."</td>";
                                                else
                                                    echo "<td>$data</td>";
                                            }
                                            echo "<td>$total</td>";
                                            if($total / 5 < 60)
                                                echo "<td style = 'color:"."red".";'>".($total / 5)."</td>";
                                            else
                                                echo "<td>".($total / 5)."</td>";
                                            echo "</tr>";
                                        }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>