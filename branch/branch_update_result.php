<?php
        $con = mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패 !!!");
        $이름 = $_POST["이름"];
        $학원전화번호 = $_POST["학원전화번호"];
        $위치 = $_POST["위치"];

        $sql = "UPDATE 학원 SET 이름='".$이름."', 학원전화번호='".$학원전화번호."', 위치='".$위치."' where 이름='".$이름."'";

        $ret = mysqli_query($con, $sql);
        echo "<h1> 지점 정보 수정 결과 </h1>";
        if ($ret) {
                echo "데이터가 성공적으로 수정됨";
        }
        else {
                echo "데이터 수정 실패"."<br>";
                echo "실패 원인 :".mysqli_error($con);
        }
        mysqli_close($con);
        echo "<br> <a href='../branch.html'> <--뒤로 가기</a>";
?>
