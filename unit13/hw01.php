<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>乙班06王瑋祥13-1</title>
    </head>

<?php
    // 建立資料庫連線 & 選擇資料庫
    $dbConnection = new mysqli('localhost', 'cbs06', '498924@Info', '111_cbs06');
    if ($dbConnection -> connect_error)die("Connection failed: " . $dbConnection -> connect_errno);

    // 設定資料庫轉換字元集
    $dbConnection -> query("SET NAMES 'utf8'");
    $dbConnection -> query("SET character_set_client = utf8;");
    $dbConnection -> query("SET character_set_results = utf8;");

    // 設定 SQL 指令
    $sql = "SELECT *, "
                    ."(chinese + english + math + pro1 + pro2) AS total, "
                    ."round((chinese + english + math + pro1 + pro2) / 5, 1) AS average, "
                    ."(pro1 + pro2) AS prototal "
                    ."FROM scoreTable WHERE 1 ORDER BY total DESC , pro2 DESC , pro1 DESC , math DESC , english DESC , chinese DESC; " ;
    #echo $sql;

    // 輸入 SQL 指令
    $statement = $dbConnection -> prepare($sql);
    // 執行 SQL 指令
    $statement -> execute();
    // 取出查詢結果
    $result = $statement -> get_result();
?>

    <body>
        <div class="container-fluid">
            <div class="row mt-1">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header bg-info text-white text-center">
                            <h2>成績表</h2>
                        </div>
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
                                        while ($student = $result -> fetch_assoc()) {
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>