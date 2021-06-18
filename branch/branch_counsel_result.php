<?php
        $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패 !!");

        $지점 = $_POST["지점선택"];
        $sql = "select 관리.학생아이디, 학생.이름, 관리.상담날짜, 관리.상담내용 from 관리 join 학생 on 학생.아이디 = 관리.학생아이디 where 학원이름 = '".$지점."'";

        $ret = mysqli_query($con, $sql);
        if($ret) {
                $count = mysqli_num_rows($ret);

                if($count==0){
                        echo $지점."에 상담 (신청)기록이 없습니다"."<br>";
                        echo "<br> <a href = '../branch.html'> <--뒤로 가기</a>";
                        exit();
                }
        }
        else{
                echo "상담(신청)기록  검색에 실패하였습니다"."<br>";
                echo "올바른 지점을 검색하십시오"."<br>";
                echo "실패 원인: ".mysqli_error($con);
                echo "<br> <a href='../branch.html'> <--뒤로 가기</a>";
                exit();
        }

        echo "<h1>".$지점."의 상담(신청)기록"."</h1>";
        echo "<table border = 1>";
        echo "<tr>";
        echo "<th>학생 아이디</th><th>학생 이름</th><th>상담 날짜</th><th>상담 내용</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($ret)){
                echo "<tr>";
                echo "<td>", $row['학생아이디'], "</td>";
                echo "<td>", $row['이름'], "</td>";
                echo "<td>", $row['상담날짜'], "</td>";
                echo "<td>", $row['상담내용'], "</td>";
                echo "</tr>";
        }
        mysqli_close($con);
        echo "</table>";
        echo "<br> <a href='branch_counsel.php'> <--뒤로 가기</a>";
?>
