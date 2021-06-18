<?php
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");


    $아이디 = $_POST["아이디"];
    $과목번호= $_POST["과목번호"];

     $sql =" INSERT INTO 수강 VALUES('".$아이디."','".$과목번호."')";


    $ret = mysqli_query($con, $sql);

     echo "<h1> 수강신청 </h1>";
    if($ret) {
           echo "수강신청이 성공적으로 완료되었습니다..";
    }
    else {
           echo "수강신청에 실패하였습니다"."<br>";
           echo" 다음과 같은 사항들을 점검해보십시요."."<br>";

           echo "실패 원인 :".mysqli_error($con);
    }
    mysqli_close($con);

    echo "<br> <a href='../student.html'> <--뒤로 가기</a> ";
?>
