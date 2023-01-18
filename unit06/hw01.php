<!--6-1-->
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
    <title>乙班06王瑋祥6-1</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
					<div class="card">
						<div class="card-header bg-info text-white text-center">
							<h4>字數計算</h4>
						</div>
						<div class="card-body">
							<p>
							<?php
								echo '字串:' . $_GET['inputText'] . '<br>';
								echo '字串長度:' . strlen($_GET['inputText']);
							?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>