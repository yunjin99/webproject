<!DOCTYPE html>
<?php
include "./dbconn_yj.php";
if($_POST["mb_id"] == "" || $_POST["mb_email"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back();</script>';
	}else{
    $mb_id = trim($_POST['mb_id']);
    $mb_email = trim($_POST['mb_email']);

    $_SESSION['ss_mb_id_check'] = $mb_id;


    $sql = "SELECT * FROM member where mb_id = '$mb_id' AND mb_email = '$mb_email' ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);
    mysqli_close($conn);


    if($mb["mb_id"] == $mb_id){
			// if ($mb['mb_mail_certify_code'] == '0000-00-00 00:00:00') { // 메일 인증 확인
			// 	include_once('./function.php'); // 메일 전송을 위한 파일을 인클루드합니다.
			//
			// 	$mb_md5 = md5(pack('V*', rand(), rand(), rand(), rand())); // 어떠한 회원정보도 포함되지 않은 일회용 난수를 생성하여 인증에 사용
			//
			// 	$sql = " UPDATE member SET mb_email_certify2 = '$mb_md5' WHERE mb_id = '$mb_id' "; // 로그인을 시도하는 아이디가 메일 인증을 해야한다면 일회용 난수를 업데이트
			// 	$result = mysqli_query($conn, $sql);
			// 	mysqli_close($conn); // 데이터베이스 접속 종료
			//
			// 	$certify_href = 'http://localhost/myapp/ch15/email_certify.php?&amp;mb_id='.$mb_id.'&amp;mb_md5='.$mb_md5; // 메일 인증 주소
			//
			// 	$subject = '인증확인 메일입니다.'; // 메일 제목
			//
			// 	ob_start();
			// 	include_once ('./register_update_mail.php');
			// 	$content = ob_get_contents(); // 메일 내용
			// 	ob_end_clean();
			//
			// 	$mail_from = "gnuwiz@naver.com"; // 보내는 메일 주소
			// 	$mail_to = $mb['mb_email']; // 받을 메일 주소
			//
			// 	mailer('관리자', $mail_from, $mail_to, $subject, $content); // 메일 전송
			//
			// 	echo "<script>alert('".$mb['mb_email']." 메일로 인증메일을 전송하였습니다.\\n".$mb['mb_email']." 메일로 메일인증을 받으셔야 로그인 가능합니다.');</script>";
			// 	echo "<script>location.replace('./yj_pwupdate.html');</script>";
			// 	exit;
			// }
			echo "<script>location.replace('./yj_pwupdate.php');</script>";

    }else{
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
    }

}
?>
