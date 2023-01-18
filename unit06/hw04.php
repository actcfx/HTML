<!--6-4-->
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
    <title>乙班06王瑋祥6-4</title>
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
                            身分證字號：<?php
                                $a = ['A'=>'10','B'=>'11','C'=>'12','D'=>'13','E'=>'14','F'=>'15','G'=>'16','H'=>'17','I'=>'34','J'=>'18','K'=>'19','L'=>'20','M'=>'21','N'=>'22',
									  'O'=>'35','P'=>'23','Q'=>'24','R'=>'25','S'=>'26','T'=>'27','U'=>'28','V'=>'29','W'=>'32','X'=>'30','Y'=>'31','Z'=>'33'];
								$nx = $a[substr($_POST['useric'],0,1)];
								$sum = $nx[0] + $nx[1] * 9;
								$j = 8;
								for($i = 1; $i < 9; $i++){
									$sum = $sum + substr($_POST['useric'],$i,1) * $j;
									$j--;
								}
								echo $_POST['useric']."<br>";
								echo $sum."<br>";
								echo substr($_POST['useric'],9,1)."<br>";
								if($sum % 10 != 0 && 10 - ($sum % 10) != substr($_POST['useric'],9,1)){
									echo "<span class='text-danger'>錯誤</span><br>";
									echo "<form action='http://cwds.taivs.tp.edu.tw/~cbs06/unit06/hw04.html'><input type='submit' class='btn-danger' value='重新填寫' /></form>";
								}
								else{
									echo "<span class='text-primary'>".$_POST['useric']."</span><br>";
									echo "<form action='http://cwds.taivs.tp.edu.tw/~cbs06/unit06/hw04.html'><input type='submit' class='btn-secondary' value='返回' /></form>";
								}
                            ?><br>
              				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>