<!--6-3-->
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
    <title>乙班06王瑋祥6-3</title>
	</head>

	<body>
    <div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
					<div class="card">
						<div class="card-header bg-info text-white text-center">
            			<h4>基本資料</h4>
							</div>
							<div class="card-body">
							帳號：<span class='text-primary'><?php echo $_POST['userid']; ?></span><br>
							密碼：<span class='text-primary'><?php echo $_POST['userpw']; ?></span><br>
							性別：<span class='text-primary'><?php
								if ($_POST['usergender'] == 'male') echo "男";
								else if (['usergender'] == 'female') echo "女";
								else echo "不公開";
							?></span><br>
							喜歡的科目：<span class='text-primary'><?php
								if (empty($_POST['favorite']))
									echo '無';
								else
									foreach ($_POST['favorite'] as $i => $favorite) {
										if($i != 0) echo '，';
										switch ($favorite) {
											case 'chinese': echo '國文'; break;
											case 'english': echo '英文'; break;
											case 'math': echo '數學'; break;
											case 'electronics': echo '電子學'; break;
											case 'programming': echo '程式設計'; break;
										}
									}
							?></span><br>
							不喜歡的科目：<span class='text-primary'><?php
								if ($_POST['dislike'] == 'chinese') echo '國文';
								else if ($_POST['dislike'] == 'english') echo '英文';
								else if ($_POST['dislike'] == 'math') echo '數學';
								else if ($_POST['dislike'] == 'electronics') echo '電子學';
								else echo '程式設計';
							?></span><br>
              				<div class="alert alert-info">
              				<?php
              	  			$today = strtotime("today");
              	  			$date1 = strtotime($_POST['date1']);
							$days = ($today - $date1)/60/60/24;
							echo "你從出生到現在一共活了 $days 天了";
              				?>
              				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>