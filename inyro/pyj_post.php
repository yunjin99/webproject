<!DOCTYPE html>
<?php
include("./dbconn_pyj.php");

$mode = "insert";
$title = "글 작성하기";
$modify_mb_info = '';

?>
<html>
  <head>
<meta charset="utf-8">
<style>
@import url(background.css);
</style>

  </head>
  <body align="center">

    <?php
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = " SELECT * FROM member WHERE mb_id = TRIM('$mb_id') ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);

    mysqli_close($conn); // 데이터베이스 접속 종료
    ?>

<h2>글 작성하기</h2><br>
<form action="./pyj_post_update.php" align='middle' onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data">
  <pre>
      <input rows="70" type="text" placeholder="제목을 입력하세요." name="post_title" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $post['post_title'] ?>" >
      <select name="post_category_id" style="position:absolute; top:170px; left:411px; width:175px; height:30px; ">
        <option text-align:center; value="1" <?php echo ($post['post_category_id'] == "자유") ? "selected" : "";?> >자유 </option>
        <option text-align:center; value="2" <?php echo ($post['post_category_id'] == "과제") ? "selected" : "";?> >과제 </option>
        <option text-align:center; value="3" <?php echo ($post['post_category_id'] == "QNA") ? "selected" : "";?> >QNA </option>
        <option text-align:center; value="4" <?php echo ($post['post_category_id'] == "갤러리") ? "selected" : "";?> >갤러리 </option>
      </select>
      <input  class="yjbt" style="position:absolute; top:172px; left:600px;   border:1px solid black;" type="file" name="post_file" value="<?php echo $post['post_file'] ?>" >
      <input  cols="1000" rows="1500" placeholder="내용을 입력하세요." name="post_text" value="<?php echo $post['post_text'] ?>" >   <br>
      <button class="yjbtn" onclick="parent.location.href='pyj_post_update.php'" style="width:100px; height:30px; margin-right:10px">등록하기</button>
  </pre>
  </body>
</html>
