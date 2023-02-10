<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>현대자동차 캐스퍼 - 시승신청 예약하기</title>
  <!-- 초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 기본서식, 공통서식 -->
  <link href="./css/base.css" rel="stylesheet" type="text/css">
  <!-- 레이아웃서식 -->
  <link href="./css/layout.css" rel="stylesheet" type="text/css">
  <!-- 메인서식 -->
  <link href="./css/main.css" rel="stylesheet" type="text/css">
  <style>
    header{ background: #333; }
    main{padding:140px 0px 50px 0px;}
    fieldset{
      width:480px;
      margin:0px auto;
    }
    fieldset > legend{
      font-weight:bold;
      text-align:center;
      font-size:28px;padding-bottom:60px;
    }
    input[type="text"], input[type='email'], input[type='date']{
      width:300px;height:30px;
    }
    label[for=s01], label[for=s02]{display:inline;}
    select,option{width:308px;height:40px;transform:translateX(-3px);}
    fieldset p{
      line-height:50px;
      font-size:18px;font-weight:500;
    }
    fieldset label{
      font-size:18px;
      display:inline-block;
      width:110px;
    }
    input[type=submit], input[type=reset]{
      width:206px;padding:10px 0px;margin-top:50px;
      background:var(--t-color01);color:#fff;
      border:none;
    }
    input[type="submit"]{background:var(--t-color03)};
    footer{height:100px;}
  </style>
  <!-- 아이콘폰트 주소 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- css3추가속성시 접두사 자동으로 붙여주는 스크립트 -->
  <script src="./script/prefixfree.min.js"></script>
  <header>
    <h1>
      <a href="index.html" title="메인페이지 바로가기">
        <img src="./images/logo-casper-white.028f418.png" alt="상단로고">
      </a>
    </h1>

    <!-- 상단 스크롤시 고정 내비게이션 -->
    <nav>
      <ul class="gnb">
        <li><a href="#none" title="소개">소개</a></li>
        <li><a href="#none" title="체험">체험</a></li>
        <li><a href="#none" title="이벤트">이벤트</a></li>
        <li><a href="#none" title="구매안내">구매</a></li>
        <li><a href="#none" title="고객지원">고객지원</a></li>
      </ul>
    </nav>

    <i class="fas fa-user"></i>
    <i class="fas fa-bell"></i> <!--알림 아이콘-->
  </header>
