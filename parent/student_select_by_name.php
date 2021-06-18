<?php
        $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!" . $mysqli->connect_error);

        $아이디 = $_POST["학생아이디"];
        $연락처 = $_POST["학생연락처"];

        $sql = "SELECT * FROM 학생 WHERE 아이디 = '".$아이디."' AND 연락처 = '".$연락처."'";

        $ret = mysqli_query($con, $sql);
        if ($ret) {
                $count = mysqli_num_rows($ret);
                if ($count==0){
                        echo "올바른 아이디와 연락처를 입력하십시오.<br><br>";
                        echo "<a href='../parent.html'> <-- 뒤로 가기 </a>";
                        exit();
                }
        }
        else {
                echo "학생 정보 조회 실패!"."<br>";
                echo "올바른 정보를 입력하십시오";
                exit();
        }
        echo "<h1> 학생 정보 조회 결과 </h1>";
        echo "<TABLE border=1>";
        echo "<TR>";
        echo "<th>아이디</th><th>이름</th><th>나이</th><th>학교</th><th>연락처</th>";
        echo "</TR>";
        while($row = mysqli_fetch_array($ret)){
                echo "<tr>";
                echo "<td>", $row['아이디'], "</td>";
                echo "<td>", $row['이름'], "</td>";
                echo "<td>", $row['나이'], "</td>";
                echo "<Td>", $row['학교'], "</td>";
                echo "<td>", $row['연락처'], "</td>";
                echo "</tr>";
        }
        mysqli_close($con);
        echo"</table>";
        echo "<br> <a href='../parent.html'> <--뒤로 가기</a>";
?>
