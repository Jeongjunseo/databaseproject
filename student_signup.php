<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");

   $아이디 = $_POST["아이디"];
   $비밀번호 = $_POST["비밀번호"];
   $이름 = $_POST["이름"];
   $나이 = $_POST["나이"];
   $학교 = $_POST["학교"];
   $연락처 = $_POST["연락처"];

    $sql =" INSERT INTO 학생 VALUES('".$아이디."', '".$비밀번호."','".$이름."','".$나이."','".$학교."','".$>연락처."')";
    $sqlexist = "SELECT * FROM 학생 WHERE 아이디 = '".$아이디."'";

   $ret = mysqli_query($con, $sql);
   $retexist = mysqli_query($con, $sqlexist);

    echo "<h1> 학생 회원가입 결과 </h1>";
   if($ret) {
           echo "데이터가 성공적으로 입력됨.";
   }
   else {
           if($retexist){
                echo "이미 존재하는 아이디입니다. "."<br>";
                echo "<br> <a href='student_signup.html'> <-- 다시 회원가입 하러 가기 </a> ";
                echo "<br> <a href='stuodent_login.html'> <-- 로그인 하러 가기<a> ";
                exit();
           }
           echo "올바른 정보를 입력하십시오. "."<br>";
           echo "<br> <a href='student_signup.html'> <-- 다시 회원가입 하러 가기</a> ";
   }
   mysqli_close($con);

   echo "<br> <a href='student_login.html'> <-- 로그인 하러 가기</a> ";
?>
