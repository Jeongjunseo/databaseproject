<?php
        $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");

        $sql = "SELECT * FROM 관리";
        $ret = mysqli_query($con, $sql);
        if($ret) {
                $count = mysqli_num_rows($ret);
        }
        else {
                echo "상담 정보 조회 실패!"."<br>";
                echo "실패 원인: ".mysqli_error($con);
                exit();
        }
        echo "<h1> 상담 정보 조회 결과 </h1>";
        echo "<TABLE border = 1>";
        echo "<TR>";
        echo "<TH>학생 아이디</TH><TH>학원 이름</TH><TH>상담 날짜</TH><TH>상담 내용</TH>";
        echo "</TR>";

        while($row = mysqli_fetch_array($ret)) {
                echo "<TR>";
                echo "<TD>", $row['학생아이디'], "</TD>";
                echo "<TD>", $row['학원이름'], "</TD>";
                echo "<TD>", $row['상담날짜'], "</TD>";
                echo "<TD>", $row['상담내용'], "</TD>";
                echo "</TR>";
        }
        mysqli_close($con);
        echo "</TABLE>";
        echo "<br> <a href = '../branch.html'> <--뒤로 가기</a>";
?>
