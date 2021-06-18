<?php
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");


    $아이디 = $_POST["아이디"];
    $비밀번호 = $_POST["비밀번호"];
    $이름 = $_POST["이름"];
    $나이 = $_POST["나이"];
    $학교 = $_POST["학교"];
    $연락처 = $_POST["연락처"];

      $sql =" INSERT INTO 학생 VALUES('".$아이디."','".$비밀번호."',".$이름;
     $sql = $sql.",'".$나이."','".$학교."','".$연락처."')";

    $ret = mysqli_query($con, $sql);

     echo "<h1> 회원가입이 완료되었습니다. </h1>";
    if($ret) {
           echo "데이터가 성공적으로 입력됨.";
    }
    else {
           echo "데이터 입력에 실패하였습니다"."<br>";
           echo" 다음과 같은 사항들을 점검해보십시요."."<br>";

           echo "실패 원인 :".mysqli_error($con);
    }
    mysqli_close($con);

    echo "<br> <a href='../student.html'> <--뒤로 가기</a> ";
?>
