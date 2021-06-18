<?php
   $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속 실패 !!");
   $sql ="SELECT * FROM 학원";

   $ret = mysqli_query($con, $sql);
   if($ret) {
           $count = mysqli_num_rows($ret);
           if ($count==0) {
                   echo "지점이 없습니다!!"."<br>";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> 지점별 수업 조회 </h1>
  <p> 지점을 고르십시오 </p>

  <form method="post" action="class_select_by_branch_result.php">
  <select name="지점선택">
    <?php
        $ret = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($ret)){
            echo "<option value=", $row['이름'], ">", $row['이름'], "</option>";
      }
    ?>
  </select>
  <input type="submit" value="확인">
  </form>

  <br><br> <a href='../branch.html'> <--뒤로 가기</a>
</body>
</html>
