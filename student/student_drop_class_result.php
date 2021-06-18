<?php
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속에 실패하셨습니다");
    $아이디 = $_POST["아이디"];
    $과목번호 = $_POST["과목번호"];
    $sql ="DELETE FROM 수강 WHERE 학생아이디='".$아이디."' AND 과목번호='".$과목번호."'";


    $ret = mysqli_query($con, $sql);
    echo "<h1> 수강 취소하기 </h1>";
    if($ret) {
        echo $아이디. " 회원님의 수강취소가 완료되었습니다.";
    }

    else {
           echo "수강취소에 실패하였습니다"."<br>";
           echo "실패 원인 :".mysqli_error($con);
           exit();
    }
    mysqli_close($con);

    echo "<br><br> <a href = '../student.html'>  <---뒤로 가기</a>";

?>
