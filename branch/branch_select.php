<?php
        $con=mysqli_connect("localhost", "root", "password", "학원관리시스템")or die("MySQL 접속 실패". mysqli_connect_error());

        $sql = "SELECT * FROM 학원";

        $ret = mysqli_query($con, $sql);
        if($ret) {
                $count = mysqli_num_rows($ret);
        }
        else {
                echo "학원관리시스템  데이터 조회 실패"."<br>";
                echo "실패 원인:".mysqli_error($con);
                exit();
        }
        echo "<h1> 학원 조회 결과 </h1>";
        echo "<TABLE border=1>";
        echo "<TR>";
        echo "<TH>지점</TH><TH>학원 전화번호</TH><TH>학원 위치</TH><TH>수정</TH><TH>삭제</TH>";
        echo "</TR>";

        while($row = mysqli_fetch_array($ret)){
                echo "<TR>";
                echo "<TD>", $row['이름'], "</TD>";
                echo "<TD>", $row['학원전화번호'], "</TD>";
                echo "<TD>", $row['위치'], "</TD>";
                echo "<TD>", "<a href='updatebranch.php?이름=", $row['이름'], "'>수정</a></TD>";
                echo "<TD>", "<a href='deletebranch.php?이름=", $row['이름'], "'>삭제</a></TD>";
                echo "</TR>";
        }
        mysqli_close($con);
        echo "</TABLE>";
        echo "<br><a href='../branch.html'><--뒤로 가기</a>";
?>
