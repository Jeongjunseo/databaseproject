<?php
        $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");
        $sql = "SELECT * FROM 학원 where 이름='".$_GET['이름']."'";

        $ret = mysqli_query($con, $sql);
        if($ret) {
                $count = mysqli_num_rows($ret);
                if ($count == 0) {
                        echo $_GET['이름']." 지점 없음!!!"."<br>";
                        echo "<br> <a href='../branch.html'> <-- 뒤로 가기</a>";
                        exit();
                }
        }
        else {
                echo "데이터 조회 실패!!!"."<br>";
                echo "실패 원인 :".mysqli_error($con);
                echo "<br> <a href='../branch.html'> <--뒤로 가기 </a>";
        }

        $row = mysqli_fetch_array($ret);
        $이름 = $row['이름'];
        $학원전화번호 = $row['학원전화번호'];
        $위치 = $row['위치'];
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html"; charset=utf-8">
</head>
<body>

<h1> 지점 정보 수정 </h1>
<fieldset>
<legend>입력사항</legend>
<form method = "post" action="branch_update_result.php">
        <table>
                <tr>
                        <td>학원 이름</td>
                        <td><input type="text" name="이름" value=<?php echo $이름 ?>> <br> </td>
                </tr>
                <tr>
                        <td>학원 전화번호</td>
                        <td><input type="text" name="학원전화번호" value=<?php echo $학원전화번호 ?>> <br></td>
                </tr>
                <tr>
                        <td>학원 위치</td>
                        <td><input type="text" name="위치" value=<?php echo $위치 ?>> <br></td>
                </tr>
                <tr><td><input type="submit" value="수정"></td></tr>
        </table>
</fieldset>
        <br><a href='../branch.html'> <--뒤로 가기</a>
</form>
</body>
</html>
