<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>과목 개설</h1>
    <fieldset>
    <legend>입력사항</legend>

    <FORM METHOD="post" ACTION="subject_opening_result.php">
        <table>
                <tr>
                        <td>학원 이름</td>
                        <td> <INPUT TYPE="text" NAME="학원이름"><br></td>
                </tr>
                <tr>
                        <td> 과목 이름</td>
                        <td> <INPUT TYPE="text" NAME="과목이름"><br></td>
                </tr>
                <tr>
                        <td>과목 소개</td>
                        <td> <INPUT TYPE="text" NAME="과목소개"><br></td>
                </tr>
                <tr>
                        <td>선생님 아이디</td>
                        <td> <INPUT TYPE="text" NAME="선생님아이디"><br></td>
                </tr>
                <tr>
                        <td>가격</td>
                        <td> <INPUT TYPE="text" NAME="가격"><br></td>
                </tr>
                <tr>
                        <td>교재</td>
                        <td> <INPUT TYPE="text" NAME="교재"><br></td>
                <tr>
                        <td>수업시간</td>
                        <td> <INPUT TYPE="text" NAME="수업시간"><br></td>
                </tr>
                <tr>
                        <td>정원</td>
                        <td> <INPUT TYPE="text" NAME="정원"><br></td>
                </tr>
        </table>
        <br><br>
        <INPUT TYPE="submit" value="과목 개설">
    </FORM>
    </fieldset>
    <br> <a href='../teacher.html'> <--뒤로 가기</a>
</body>
</html>
