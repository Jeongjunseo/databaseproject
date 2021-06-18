<?php
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패에 실패하였습니다");


    $학생아이디 = $_POST["학생아이디"];
    $학원이름= $_POST["학원이름"];
    $상담날짜 = $_POST["상담날짜"];
    $상담내용 = $_POST["상담내용"];


    $sql =" INSERT INTO 관리 VALUES('".$학생아이디."','".$학원이름."','".$상담날짜."','".$상담내용."')";


    $ret = mysqli_query($con, $sql);

     echo "<h1> 상담신청 </h1>";
    if($ret) {
           echo "상담신청이 성공적으로 완료되었습니다..";
    }
    else {
           echo "상담신청에 실패하였습니다"."<br>";
           echo" 다음과 같은 사항들을 점검해보십시요."."<br>";

           echo "실패 원인 :".mysqli_error($con);
    }
    mysqli_close($con);

    echo "<br> <a href='../student.html'> <--뒤로 가기</a> ";
?>
