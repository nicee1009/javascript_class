<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_drive 데이터 베이스 자료 출력하기</title>
    <style>
      main{
        padding:5000px 0px;
        text-align:center;
      }
      .r_ok{
        color:#ccc;
        font-size:20px;
      }
      .r_fail{
        color:#ccc;
        font-size:20px;
      }
    </style>
</head>
<body>
        <?php
          include('header.php');

          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $sms = $_POST['sms'];
          $email = $_POST['email'];
          $region = $_POST['region'];
          $s_car = $_POST['s_car'];
          $my_car = $_POST['my_car'];
          $s_date = $_POST['s_date'];

          // 절차지향 스타일
          $mysql_host = 'localhost';
          $mysql_user = 'je1009';
          $mysql_password = 'kje2568!!';
          $mysql_db='je1009';

          //절차지향 스타일
          $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

          if(!$conn) {
            die('연결실패 : ' .mysqli_connet_error());
          }

          $query = "INSERT INTO test_drive(name, phone, sms, email, region, s_car, my_car, s_date)".
          "VALUES('$name', '$phone', '$sms', '$email', '$region', '$s_car', '$my_car', '$s_date')";

          $result = mysqli_query($conn, $query);
          
          if($result)
          print '<main><p class="r_ok">예약이 완료되었습니다.</p>
                <a>조회하러가기</a></main>';
          else
          print '<p class="r_fail">입력이 안되었습니다. 다시 확인하시고 입력하세요</p>';
          include('footer.php')
        ?>
  </body>
</html>
