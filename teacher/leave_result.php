
<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!");

   $선생님연락처 = $_POST["선생님연락처"];

   $sql ="DELETE FROM 선생님 WHERE 선생님연락처='".$선생님연락처."'";

   $ret = mysqli_query($con, $sql);

    echo "<h1> 선생님 삭제 결과 </h1>";
   if($ret) {
           echo " 선생님이 성공적으로 삭제됨..";
   }
   else {
           echo "데이터 삭제 실패!"."<br>";
           echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);

   echo "<br><br> <a href='../teacher.html'> <--뒤로 가기</a> ";
?>
