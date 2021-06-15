
<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패 !!");
   $sql ="SELECT * FROM 선생님 WHERE 선생님연락처='".$_GET['선생님연락처']."'";

   $ret = mysqli_query($con, $sql);
   if($ret) {
           $count = mysqli_num_rows($ret);
           if ($count==0) {
                   echo $_GET['선생님연락처']." 번호의 선생님 없음!!!"."<br>";
                   echo "<br> <a href='teacher.html'> <--초기 화면</a> ";
                   exit();
           }
   }
   else {
           echo "데이터 조회 실패!"."<br>";
           echo "실패 원인 :".mysqli_error($con);
           echo "<br> <a href='teacher.html'> <--초기 화면</a> ";
           exit();
   }
   $row = mysqli_fetch_array($ret);
   $선생님연락처 = $row['선생님연락처'];
   $이름 = $row["이름"];

?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 회원 삭제 </h1>
<FORM METHOD="post"  ACTION="leave_result.php">
        이름 : <INPUT TYPE ="text" NAME="이름" VALUE=<?php echo $이름 ?> READONLY> <br>
        선생님연락처 : <INPUT TYPE ="text" NAME="선생님연락처" VALUE=<?php echo $선생님연락처 ?> READONLY> <br>
        <BR><BR>
        위 회원을 삭제하겠습니까?
        <INPUT TYPE="submit"  VALUE="회원 삭제">
</FORM>

</BODY>
</HTML>
