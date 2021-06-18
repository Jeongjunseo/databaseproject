<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패!" . $mysqli->connect_error);

   $sql ="SELECT 과목.과목번호, 과목.학원이름, 과목.과목이름, 과목.과목소개, 선생님.선생님연락처, 과목.가격, 과목.교재, 과목.수업시간, 과목.정원 FROM 과목 join 선생님 on 과목.선생님아이디 = 선생님.아이디";

   $ret = mysqli_query($con, $sql);
   if($ret) {
           $count = mysqli_num_rows($ret);
   }
   else {
           echo "과목 데이터 조회 실패!"."<br>";
           echo "실패 원인 :".mysqli_error($con);
           exit();
   }

   echo "<h1> 과목 조회 결과 </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>과목 번호</TH><TH>학원 이름</TH><TH>과목 이름</TH><TH>과목 소개</TH><TH>선생님 연락처</TH>";
   echo "<TH>가격</TH><TH>교재</TH><TH>수업 시간</TH><TH>정원</TH>";
   echo "</TR>";

   while($row = mysqli_fetch_array($ret)) {
          echo "<TR>";
          echo "<TD>", $row['과목번호'], "</TD>";
          $subject = $row['과목번호'];
          echo "<TD>", $row['학원이름'], "</TD>";
          echo "<TD>", $row['과목이름'], "</TD>";
          echo "<TD>", $row['과목소개'], "</TD>";
          echo "<TD>", $row['선생님연락처'], "</TD>";
          echo "<TD>", $row['가격'], "</TD>";
          echo "<TD>", $row['교재'], "</TD>";
          echo "<TD>", $row['수업시간'], "</TD>";
          echo "<TD>", $row['정원'], "</TD>";
          echo "</TR>";
   }
   mysqli_close($con);
   echo "</TABLE>";
   echo "<br> <a href='../student.html'> <--뒤로 가기</a> ";
?>
