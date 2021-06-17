<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");

   $이름= $_POST["이름"];

   $sql ="DELETE FROM 학원 WHERE 이름='".$이름."'";

   $ret = mysqli_query($con, $sql);

    echo "<h1> 지점 삭제 결과 </h1>";
   if($ret) {
           echo " 지점이 성공적으로 삭제됨..";
   }
   else {
           echo "데이터 삭제 실패!"."<br>";
           echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);

   echo "<br><br> <a href='../branch.html'> <--뒤로 가기</a> ";
?>
