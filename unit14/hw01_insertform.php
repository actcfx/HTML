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
        <title>乙班06王瑋祥14-1</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header bg-info text-white text-center">
							<h2 class="text-center">新增學生資料作業</h2>
						</div>
						<div class="card-body">
							<form action="hw01_insert.php" method="post">
								座號：<input type="text" name="seatNo" required><br>
								姓名：<input type="text" name="studentName" required><br>
								國文：<input type="text" name="chinese" required><br>
								英文：<input type="text" name="english" required><br>
								數學：<input type="text" name="math" required><br>
								專一：<input type="text" name="pro1" required><br>
								專二：<input type="text" name="pro2" required><br>
								<button class="btn btn-info mt-2" type="submit">送出</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>