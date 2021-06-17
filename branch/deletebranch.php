<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패 !!");
   $sql ="SELECT * FROM 학원 WHERE 이름='".$_GET['이름']."'";

   $ret = mysqli_query($con, $sql);
   if($ret) {
           $count = mysqli_num_rows($ret);
           if ($count==0) {
                   echo $_GET['이름']." 지점 없음!!!"."<br>";
                   echo "<br> <a href='../branch.html'> <--뒤로 가기</a> ";
                   exit();
           }
   }
   else {
           echo "데이터 조회 실패!"."<br>";
           echo "실패 원인 :".mysqli_error($con);
           echo "<br> <a href='../branch.html'> <--뒤로 가기</a> ";
           exit();
   }
   $row = mysqli_fetch_array($ret);
   $이름 = $row['이름'];
   $학원전화번호= $row["학원전화번호"];
   $위치 = $row["위치"];

?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 지점 삭제 </h1>
<FORM METHOD="post"  ACTION="branchdelete_result.php">
        학원 이름 : <INPUT TYPE ="text" NAME="이름" VALUE=<?php echo $이름 ?> READONLY> <br>
        학원 전화번호 : <INPUT TYPE ="text" NAME="학원전화번호" VALUE=<?php echo $학원전화번호  ?> READONLY> <br>
        학원 위치 : <INPUT TYPE ="text" NAME="위치" VALUE=<?php echo $위치 ?> READONLY> <br>
        <BR><BR>
        위 지점을 삭제하겠습니까?
        <INPUT TYPE="submit"  VALUE="지점 삭제">
</FORM>

</BODY>
</HTML>
