<?php
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속에 실패하셨습니다");


    $아이디 = $_POST["아이디"];
    $sql ="DELETE FROM 학생 WHERE 아이디='".$아이디."'";

    $ret = mysqli_query($con, $sql);
    echo "<h1> 탈퇴하기 </h1>";

    if($ret) {
        echo $아이디. " 회원의 탈퇴가 완료되었습니다.";
    }
    else {
           echo "잘못된 정보를 입력했습니다"."<br>";
           exit();
    }

    mysqli_close($close);

    echo "<br><br> <a href='../student.html'>  <---뒤로 가기</a>";

?>
