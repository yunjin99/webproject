<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>아이디 찾기</title>
    <style>
      #item{
        align-items: center;
        width: 33%;
        text-align: left;
      }
    </style>
    <?php include("headbar.php") ?>
  </head>
  <body>
    <br><br><br>

<div class="container" align='center'>
  <form method="post" action="yj_findid_php.php">
  <div id="item">
    <h2 style="margin-top:40px; margin-bottom:20px">아이디 찾기</h2>
    <label for="mb_name"><b>이름</b></label>
    <br>
    <input type="text" placeholder="이름" name="mb_name" style="width:500px; height:35px; margin-bottom:15px;">
    <br>

    <label for="mb_email"><b>이메일주소</b></label>
    <br>
    <input type="text" placeholder="이메일주소"  name="mb_email" style="width:500px; height:35px; margin-bottom:15px;">

  </div>
    <button type="submit" name="findid" style="width:100px; height:30px; margin-bottom:10px;">확인</button>
  </form>
</div>
    <!-- <h2 style="margin-top:40px; margin-bottom:20px">아이디 찾기</h2>
    <label for="uname"><b>이름</b></label>
    <br>
    <input type="text" placeholder="이름" name="uname" required>
    <br>

    <label for="email"><b>이메일주소</b></label>
    <br>
    <input type="text" placeholder="이메일주소"  name="email" required>

    <button type="submit">인증번호받기</button>
    <br><br>

    <label for="certification"><b></b></label>
    <input type="text" placeholder="인증번호입력" name="certification" required>

    <button type="submit">Enter</button>
    <br>
    <hr>
    <p>아이디는 ****** 입니다.</p>
    <br> -->
    <!-- <button type="submit" style="width:100px; height:30px; margin-bottom:10px;" onclick="location.href='yunjin2.html'">로그인하기</button> -->

  </body>
</html>
