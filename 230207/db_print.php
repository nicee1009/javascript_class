  <!DOCTYPE html>
  <html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_drive 데이터 베이스 자료 출력하기</title>
    <style>
      table{
        margin:0px auto;
        padding-top:100px;
      }
    </style>
      </head>
      <body>
      <?php

      //데이터베이스 계정 연결하기
      $conn = mysqli_connect('localhost','je1009', 'kje2568!!','je1009');

      if(mysqli_connect_errno()) {
        printf("%s \n", mysqli_connect_error());
        exit;
      }
      //데이터베이스 noodle 테이블 데이터 모두 조회하여 변수에 대입
      $query = 'select * from test_drive';
      $result = mysqli_query($conn, $query); //변수에 결과값을 저장한다

      include('header.php');

      print "<table><tr>" . 
            "<th>예약번호</th>" .
            "<th>이름</th>" .
            "<th>핸드폰번호</th>" . 
            "<th>수신여부</th>" .
            "<th>이메일</th>" .
            "<th>지역</th>" .
            "<th>차종류</th>" .
            "<th>차소지여부</th>" .
            "<th>예약날짜</th></tr>";


            while($row = mysqli_fetch_row($result)) {
                print "<tr><td>" . $row[0] . "</td>" .
                "<td>" . $row[1] . "</td>" .
                "<td>" . $row[2] . "</td>" . 
                "<td>" . $row[3] . "</td>" . 
                "<td>" . $row[4] . "</td>" .
                "<td>" . $row[5] . "</td>" .
                "<td>" . $row[6] . "</td>" .
                "<td>" . $row[7] . "</td></tr>";
            }
            
            print"</table>";
            mysqli_free_result($result);
            mysqli_close($conn);
            ?>

              <fieldset class="search_box">
                <legend>예약조회하기</legend>
                <input type="text" id="search_txt" name="search_txt">
                <input type="submit" value="예약조회하기">
              </fieldset>
              </form>
            
            <a href="test_drive.html" title="데이터 입력하기">시승 신청하러 가기</a>
            <?php
            include('footer.php')
            ?>
    </body>
    </html>