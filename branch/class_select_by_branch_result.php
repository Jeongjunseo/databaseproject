<?php
        $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패 !!");

        $지점 = $_POST["지점선택"];
        $sql = "select 과목.과목번호, 과목.과목이름, 과목.과목소개, 선생님.선생님연락처, 과목.가격, 과목.교재, 과목.수업시간 from 과목 join 학원 on 과목.학원이름 = 학원.이름 join 선생님 on 과목.선생님아이디 = 선
생님.아이디 where 과목.학원이름 = '".$지점."'";

        $ret = mysqli_query($con, $sql);
        if($ret) {
                $count = mysqli_num_rows($ret);

                if($count==0){
                        echo $지점."에 개설된 강의가 없습니다"."<br>";
                        echo "<br> <a href = '../branch.html'> <--뒤로 가기</a>";
                        exit();
                }
        }
         else{
                echo "지점 검색에 실패하였습니다"."<br>";
                echo "올바른 지점을 검색하십시오"."<br>";
                echo "실패 원인: ".mysqli_error($con);
                echo "<br> <a href='../branch.html'> <--뒤로 가기</a>";
                exit();
        }

        echo "<h1>".$지점."의 강의"."</h1>";
        echo "<table border = 1>";
        echo "<tr>";
        echo "<th>과목 번호</th><th>과목 이름</th><th>과목 소개</th><th>선생님 연락처</th><th>가격</th><th>교재</th><th>수업 시간</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($ret)){
                echo "<tr>";
                echo "<td>", $row['과목번호'], "</td>";
                echo "<td>", $row['과목이름'], "</td>";
                echo "<td>", $row['과목소개'], "</td>";
                echo "<td>", $row['선생님연락처'], "</td>";
                echo "<td>", $row['가격'], "</td>";
                echo "<td>", $row['교재'], "</td>";
                echo "<td>", $row['수업시간'], "</td>";
                echo "</tr>";
        }
        mysqli_close($con);
        echo "</table>";
        echo "<br> <a href='class_select_by_branch.php'> <--뒤로 가기</a>";

?>
