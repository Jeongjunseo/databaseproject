<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");

   $아이디 = $_POST["아이디"];
   $과목번호 = $_POST["과목번호"];

    $sql =" INSERT INTO 수강 VALUES('".$아이디."', '".$과목번호."')";
    $ret = mysqli_query($con, $sql);

    $sql2="SELECT 아이디 FROM 학생 where 아이디='$아이디'";
    $sql3="SELECT 과목번호 FROM 과목 where 과목번호='$과목번호'";

    echo "<h1> 수강신청 결과 </h1>";

    if($result=mysqli_fetch_array(mysqli_query($con,$sql2))) { // 아이디가 존재한다면
        if($result2=mysqli_fetch_array(mysqli_query($con,$sql3))) { // 과목이 존재한다면
            if($ret) { // 수강 테이블에 정보 입력 성공했다면
                echo "수강신청에 성공했습니다.";
                echo "<br> <a href='../student.html'> <-- 학생 페이지로 돌아가기</a> ";
            }
            else { // 아이디는 존재하지만 수강 테이블에 정보 입력 실패했다면
                echo "이미 수강하고 있는 과목입니다.";
                echo "<br> <a href='student_take_class.html'> <-- 다시 수강신청 하러 가기</a> ";
                echo "<br> <a href='../student.html'> <-- 학생 페이지로 돌아가기</a> ";
            }
        }
        else { // 과목이 존재하지 않는다면
            echo "과목 번호와 일치하는 과목이 존재하지 않습니다.<br>";
            echo "<a href='student_take_class.html'> <-- 다시 수강신청 하러 가기</a>";
            echo "<br> <a href='../student.html'> <-- 학생 페이지로 돌아가기</a> ";
        }
    }
    else{ // 아이디가 존재하지 않는다면
        echo "아이디가 존재하지 않습니다. <br>";
        echo "<a href='student_take_class.html'> <-- 다시 수강신청 하러 가기</a>";
        echo "<br> <a href='../student.html'> <-- 학생 페이지로 돌아가기</a> ";
    }
   mysqli_close($con);
?>
