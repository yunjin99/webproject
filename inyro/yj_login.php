<?php
include("./dbconn_yj.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.
?>

<html>
<head>
  <meta charset="utf-8">
  <title>로그인</title>
  <style>
    @import url(inyrobar.css);
    @import url(menubar.css);
    @import url(background.css);

    #item{
      align-items: center;
      width: 33%;
      text-align: left;
    }
  </style>
  <header>
    <h1 onclick="location.href='Main.html'">INYRO</h1>
    <nav>
      <span onclick="location.href='yunjin2.html'">로그인</span>
      <span onclick="location.href='yj_register.html'">회원가입</span>
      <span onclick="location.href='myongyeon7.html'">프로필</span>
    </nav>
  </header>
</head>
<body>
  <?php if(!isset($_SESSION['ss_mb_id'])) { // 로그인 세션이 있을 경우 로그인 화면 ?>
  <br><br><br>
<!-- <h2 align='center' style="margin-top:20px; margin-bottom:20px">로그인</h2> -->
<div class="container" align='center'>
<div id="item">
  <h2 style="margin-top:40px; margin-bottom:20px">로그인</h2>

  <form action="./yj_login_check.php" method="post">

  <label for="id"><b>아이디</b></label>
  <br>
  <input type="text" placeholder="아이디" name="mb_id" style="width:500px; height:35px; margin-bottom:15px;" >
  <br>

  <label for="psw"><b>비밀번호</b></label>
  <br>
  <input type="password" placeholder="비밀번호" name="mb_password" style="width:500px; height:35px; margin-bottom:15px;" >

</div>
  <!-- <label for="id"><b>아이디</b></label>
  <br>
  <input type="text" placeholder="아이디" name="id" required>
  <br>

  <label for="psw"><b>비밀번호</b></label>
  <br>
  <input type="password" placeholder="비밀번호" name="psw" required>

  <button type="submit" onclick="location.href='Main.html'">로그인</button>
  <br><br> -->

  <button type="submit" style="width:100px; height:30px; margin-bottom:10px;" onclick="location.href='Main.html'">로그인</button>
  <br><br>

  <button type="button" style="width:100px; height:30px; margin-bottom:10px;" onclick="location.href='yunjin3.html'">ID 찾기</button>
  <span><b>|</b></span>
  <button type="button" style="width:110px; height:30px; margin-bottom:10px;" onclick="location.href='yunjin4.html'">비밀번호 찾기</button>
  <span><b>|</b></span>
  <button type="button" style="width:100px; height:30px; margin-bottom:10px;" onclick="location.href='yj_register.php'">회원가입</button>
  </form>

<?php } else { // 로그인 세션이 없을 경우 로그인 완료 화면 ?>
<br><br><br><br>
<h1>로그인을 환영합니다.</h1>

  <?php
  $mb_id = $_SESSION['ss_mb_id'];

  $sql = " SELECT * FROM member WHERE mb_id = TRIM('$mb_id') ";
  $result = mysqli_query($conn, $sql);
  $mb = mysqli_fetch_assoc($result);

  mysqli_close($conn); // 데이터베이스 접속 종료
  ?>
  <table>
    <tr>
      <th>아이디</th>
      <td><?php echo $mb['mb_id'] ?></td>
    </tr>
    <tr>
      <th>이름</th>
      <td><?php echo $mb['mb_name'] ?></td>
    </tr>
    <tr>
      <th>이메일</th>
      <td><?php echo $mb['mb_email'] ?></td>
    </tr>
      <th>회원가입일</th>
      <td><?php echo $mb['mb_datetime'] ?></td>
    </tr>
    <tr>
      <th>회원정보 수정일</th>
      <td><?php echo $mb['mb_modify_datetime'] ?></td>
    </tr>
    <tr>
      <td colspan="2" class="td_center">
        <a href="./register.php?mode=modify">회원정보수정</a>
        <a href="./yj_logout.php">로그아웃</a>
      </td>
    </tr>
  </table>

<?php } ?>
</body>
<!--

<body>

<?php if(!isset($_SESSION['ss_mb_id'])) { // 로그인 세션이 있을 경우 로그인 화면 ?>

<h1>로그인</h1>

	<form action="./login_check.php" method="post">
		<table>
			<tr>
				<th>아이디</th>
				<td><input type="text" name="mb_id"></td>
			</tr>
			<tr>
				<th>비밀번호</th>
				<td><input type="password" name="mb_password"></td>
			</tr>
			<tr>
				<td colspan="2" class="td_center">
					<input type="submit" value="로그인">
					<a href="./register.php">회원가입</a>
				</td>
			</tr>
		</table>
	</form>

<?php } else { // 로그인 세션이 없을 경우 로그인 완료 화면 ?>

<h1>로그인을 환영합니다.</h1>

	<?php
	$mb_id = $_SESSION['ss_mb_id'];

	$sql = " select * from member where mb_id = TRIM('$mb_id') ";
	$result = mysqli_query($conn, $sql);
	$mb = mysqli_fetch_assoc($result);

	mysqli_close($conn); // 데이터베이스 접속 종료
	?>
	<table>
		<tr>
			<th>아이디</th>
			<td><?php echo $mb['mb_id'] ?></td>
		</tr>
		<tr>
			<th>이름</th>
			<td><?php echo $mb['mb_name'] ?></td>
		</tr>
		<tr>
			<th>이메일</th>
			<td><?php echo $mb['mb_email'] ?></td>
		</tr>
		<tr>
			<th>성별</th>
			<td><?php echo $mb['mb_gender'] ?></td>
		</tr>
		<tr>
			<th>직업</th>
			<td><?php echo $mb['mb_job'] ?></td>
		</tr>
		<tr>
			<th>관심언어</th>
			<td><?php echo $mb['mb_language'] ?></td>
		</tr>
		<tr>
			<th>이메일인증일</th>
			<td><?php echo $mb['mb_email_certify'] ?></td>
		</tr>
		<tr>
			<th>회원가입일</th>
			<td><?php echo $mb['mb_datetime'] ?></td>
		</tr>
		<tr>
			<th>회원정보 수정일</th>
			<td><?php echo $mb['mb_modify_datetime'] ?></td>
		</tr>
		<tr>
			<td colspan="2" class="td_center">
				<a href="./register.php?mode=modify">회원정보수정</a>
				<a href="./logout.php">로그아웃</a>
			</td>
		</tr>
	</table>

<?php } ?>

</body> -->
</html>
