<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      @import url(yunjinbar.css);
      @import url(background.css);
    </style>

    <title>main3</title>

  </head>
  <body>
    <nav>
      <h1 align='center' style="font-size:40px; font-weight: bold">INYRO ABOUT</h1>
    </nav>
  <div align='center'>
    <iframe id="frame" src="main3_1.php" width="830" height="490" frameborder="0"></iframe>
  </div>
    <div id="menuX" align='center' margin-top='0'>
  <ul id="menu-list"/>
      <li> <a id="li1" onclick="change1()">활동소개</a></li>
      <li> <a>|</a></li>
  	  <li> <a id="li2" onclick="change2()">게시판</a></li>
      <!-- <li> <a>|</a></li>
  	  <li> <a id="li3" onclick="change3()">갤러리</a></li> -->
   </ul>
   <div id="menu-line"></div>
  <script>
    function change1() {
      document.getElementById("frame").src = "main3_1.php";
    }
    function change2() {
      document.getElementById("frame").src = "main3_2.php";
    }
    // function change3() {
    //   document.getElementById("frame").src = "main3_3.html";
    // }

  </script>
</div>
  </body>
</html>
