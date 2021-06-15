<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");

   $학원전화번호 = $_POST["학원전화번호"];
   $과목이름 = $_POST["과목이름"];
   $과목소개 = $_POST["과목소개"];
   $선생님연락처 = $_POST["선생님연락처"];
   $가격 = $_POST["가격"];
   $교재 = $_POST["교재"];
   $수업시간 = $_POST["수업시간"];
   $정원 = $_POST["정원"];

     $sql =" INSERT INTO 과목 VALUES(NULL,'".$학원전화번호."','".$과목이름;
    $sql = $sql."','".$과목소개."','".$선생님연락처."','".$가격."','".$교재."','".$수업시간."',".$정원.")";

   $ret = mysqli_query($con, $sql);

    echo "<h1> 신규 과목 입력 결과 </h1>";
   if($ret) {
           echo "데이터가 성공적으로 입력됨.";
   }
   else {
           echo "데이터 입력 실패!"."<br>";
           echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);

   echo "<br> <a href='../teacher.html'> <--뒤로 가기</a> ";
?>
