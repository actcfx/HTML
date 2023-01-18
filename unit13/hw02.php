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
	<title>乙班06王瑋祥13-2</title>
</head>

	<?php
	// 建立資料庫連線 & 選擇資料庫
	$dbConnection = new mysqli('localhost', 'cbs06', '498924@Info', '111_cbs06');
	if ($dbConnection->connect_error)die("Connection failed: " . $dbConnection->connect_errno);

	// 設定資料庫轉換字元集
	$dbConnection->query("SET NAMES 'utf8'");
	$dbConnection->query("SET character_set_client = utf8;");
	$dbConnection->query("SET character_set_results = utf8;");

    $subjects = "seatNo";	//首次載入頁面無post時
	$sort = "ASC";	//首次載入頁面無post時
	if (isset($_POST["subjects"])) { $subjects = $_POST["subjects"]; }	//若有post則使用post值
	if (isset($_POST["sort"])) { $sort = $_POST["sort"]; }	//若有post則使用post值

	// 設定 SQL 指令
	$sql = "SELECT *, "
				."(chinese + english + math + pro1 + pro2) AS total, "
				."(chinese + english + math + pro1 + pro2) / 5 AS average, "
                ."(pro1 + pro2) AS prototal "
				."FROM scoreTable WHERE 1 ORDER BY " . $subjects . " " . $sort . ";" ;



	// 輸入 SQL 指令
	$statement = $dbConnection->prepare($sql);

	// 執行 SQL 指令
	$statement->execute();
	// 取出查詢結果
	$result = $statement->get_result();


	?>


	<body>
		<div class="container-fluid">
			<div class="row mt-1">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header bg-info text-white text-center">
							<h2>成績表</h2>
						</div>
						<form action="hw02.php" method="post" id="form">
						<div class="card-body">
                        <div class="form-group">
								<label for="sort">排序:</label>
								<select class="form-control" id="subjects" name="subjects">
									<option value="seatNo"<?php if($_POST["subjects"] == "searNo") { ?>  selected <?php } ?> >座號</option>
									<option value="chinese"<?php if($_POST["subjects"] == "chinese") { ?>  selected <?php } ?> >國文</option>
									<option value="english"<?php if($_POST["subjects"] == "english") { ?>  selected <?php } ?> >英文</option>
									<option value="math"<?php if($_POST["subjects"] == "math") { ?>  selected <?php } ?> >數學</option>
									<option value="pro1"<?php if($_POST["subjects"] == "pro1") { ?>  selected <?php } ?> >專一</option>
									<option value="pro2"<?php if($_POST["subjects"] == "pro2") { ?>  selected <?php } ?> >專二</option>
									<option value="total"<?php if($_POST["subjects"] == "total") { ?>  selected <?php } ?> >總分</option>
								</select>
								</div>
								<div class="form-check-inline">
                     			 	<input type="radio" class="form-check-input"  name="sort" value="DESC" <?php if($sort == "DESC") echo "checked";?>>大到小&nbsp;&nbsp;&nbsp;
                     			 	<input type="radio" class="form-check-input" name="sort" value="ASC" <?php if($sort == "ASC") echo "checked";?>>小到大&nbsp;&nbsp;&nbsp;
								</div>
								<button class="btn btn-info mt-2" type="submit">重新排序</button>
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
                                while ($student = $result->fetch_assoc()) {
                                    $total = 0;
                                ?>
                               	<tr>
								   	<td><?php echo $student['seatNo'];?></td>
									<td><?php echo $student['studentName'];?></td>
							   		<?php
										if($student['chinese'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['chinese']."</td>";
										else
											echo "<td>".$student['chinese']."</td>";

										if($student['english'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['english']."</td>";
										else
											echo "<td>".$student['english']."</td>";

										if($student['math'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['math']."</td>";
										else
											echo "<td>".$student['math']."</td>";

										if($student['pro1'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['pro1']."</td>";
										else
											echo "<td>".$student['pro1']."</td>";

										if($student['pro2'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['pro2']."</td>";
										else
											echo "<td>".$student['pro2']."</td>";

										if($student['total'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['total']."</td>";
										else
											echo "<td>".$student['total']."</td>";
										if($student['average'] < 60)
											echo "<td style = 'color:"."red".";'>".$student['average']."</td>";
										else
											echo "<td>".$student['average']."</td>";
                                	?>
								</tr>
                                <?php
                                }
                                ?>
								</tbody>
							</table>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>