<?php
    $conn= mysqli_connect('localhost', 'root', 'password', '학원관리시스템') or die("MySQL 접속 실패!");

    $아이디=$_POST["아이디"];
    $비밀번호=$_POST["비밀번호"];

    $sql="SELECT * FROM 학생 where 아이디='$아이디'&&비밀번호='$비밀번호'";

    echo "<h2>로그인 결과</h2>";

    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
        echo "</br>로그인에 성공했습니다.<br>";
        echo "<a href='student.html'> 학생 정보 조회하러 가기 --></a>";
    }
    else{
        echo "로그인에 실패했습니다.<br>";
        echo "<a href='student_login.html'> <-- 다시 로그인하러 가기</a>";
    }
?>
